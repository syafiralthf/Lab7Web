```php
<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>

<div class="row mb-3">
    <div class="col-md-6">

        <form id="search-form" class="form-inline">

            <input type="text"
                   name="q"
                   id="search-box"
                   value="<?= $q; ?>"
                   placeholder="Cari judul artikel"
                   class="form-control mr-2">

            <select name="kategori_id"
                    id="category-filter"
                    class="form-control mr-2">

                <option value="">Semua Kategori</option>

                <?php foreach ($kategori as $k): ?>
                    <option value="<?= $k['id_kategori']; ?>"
                        <?= ($kategori_id == $k['id_kategori']) ? 'selected' : ''; ?>>
                        <?= $k['nama_kategori']; ?>
                    </option>
                <?php endforeach; ?>

            </select>

            <input type="submit"
                   value="Cari"
                   class="btn btn-primary">

        </form>

    </div>
</div>

<div id="article-container"></div>

<div id="pagination-container"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {

    const articleContainer = $('#article-container');
    const paginationContainer = $('#pagination-container');
    const searchForm = $('#search-form');
    const searchBox = $('#search-box');
    const categoryFilter = $('#category-filter');

    const fetchData = (url) => {

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },

            success: function(data) {
                renderArticles(data.artikel);
            }
        });
    };

    const renderArticles = (articles) => {

        let html = '<table class="table table-bordered">';
        html += '<thead>';
        html += '<tr>';
        html += '<th>ID</th>';
        html += '<th>Judul</th>';
        html += '<th>Kategori</th>';
        html += '<th>Aksi</th>';
        html += '</tr>';
        html += '</thead><tbody>';

        if (articles.length > 0) {

            articles.forEach(article => {

                html += `
                <tr>
                    <td>${article.id}</td>

                    <td>
                        <b>${article.judul}</b>
                        <p>
                            <small>
                                ${article.isi.substring(0,50)}
                            </small>
                        </p>
                    </td>

                    <td>${article.nama_kategori}</td>

                    <td>
                        <a href="/admin/artikel/edit/${article.id}"
                           class="btn btn-sm btn-info">
                           Ubah
                        </a>

                        <a href="/admin/artikel/delete/${article.id}"
                           onclick="return confirm('Yakin menghapus data?');"
                           class="btn btn-sm btn-danger">
                           Hapus
                        </a>
                    </td>
                </tr>
                `;
            });

        } else {

            html += `
            <tr>
                <td colspan="4">
                    Tidak ada data.
                </td>
            </tr>
            `;
        }

        html += '</tbody></table>';

        articleContainer.html(html);
    };

    searchForm.on('submit', function(e) {

        e.preventDefault();

        const q = searchBox.val();
        const kategori_id = categoryFilter.val();

        fetchData(
            `/admin/artikel?q=${q}&kategori_id=${kategori_id}`
        );
    });

    categoryFilter.on('change', function() {
        searchForm.trigger('submit');
    });

    fetchData('/admin/artikel');

});
</script>

<?= $this->include('template/admin_footer'); ?>
```
