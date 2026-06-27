<?= $this->include('template/header'); ?>

<div class="form-container">

    <div class="form-box">

        <h2>Tambah Artikel</h2>

        <form method="post" action="/admin/simpan" enctype="multipart/form-data">

            <label>Judul</label>
            <input type="text" name="judul" required>

            <label>Isi Artikel</label>
            <textarea name="isi" required></textarea>

            <label>Link Sumber</label>
            <input type="text" name="link">

            <label>Kategori</label>

            <select name="kategori_id" required>

                <option value="">-- Pilih Kategori --</option>

                <?php foreach($kategori as $k): ?>

                    <option value="<?= $k->id; ?>">
                        <?= $k->nama_kategori; ?>
                    </option>

                <?php endforeach; ?>

            </select>

            <label>Status</label>

            <select name="status">
                <option value="0">Draft</option>
                <option value="1">Publish</option>
            </select>

            <label>Upload Gambar</label>
            <input type="file" name="gambar">

            <button type="submit">
                Simpan Artikel
            </button>

        </form>

        <br>

        <a href="/admin" class="back-link">
            ← Kembali ke Dashboard
        </a>

    </div>

</div>

<?= $this->include('template/footer'); ?>