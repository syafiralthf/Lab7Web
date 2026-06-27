<?= $this->include('template/header'); ?>

<div class="form-container">

    <div class="form-box">

        <h2>Edit Artikel</h2>

        <form method="post" action="/admin/update" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?= $artikel->id; ?>">

            <label>Judul</label>
            <input 
                type="text" 
                name="judul" 
                value="<?= $artikel->judul; ?>" 
                required
            >

            <label>Isi</label>
            <textarea name="isi" required><?= $artikel->isi; ?></textarea>

            <label>Link</label>
            <input 
                type="text" 
                name="link" 
                value="<?= $artikel->link; ?>"
            >

            <label>Status</label>
            <select name="status">

                <option value="1"
                    <?= $artikel->status == 1 ? 'selected' : ''; ?>>
                    Publish
                </option>

                <option value="0"
                    <?= $artikel->status == 0 ? 'selected' : ''; ?>>
                    Draft
                </option>

            </select>

            <label>Upload Gambar Baru</label>
            <input type="file" name="gambar">

            <br><br>

            <button type="submit">
                Update Artikel
            </button>

        </form>

    </div>

</div>

<?= $this->include('template/footer'); ?>