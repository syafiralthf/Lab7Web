<?= $this->include('template/header'); ?>

<h2><?= $artikel->judul; ?></h2>

<?php if(!empty($artikel->gambar)): ?>
    <img src="<?= base_url('uploads/' . $artikel->gambar); ?>" width="300"><br><br>
<?php endif; ?>

<p><?= $artikel->isi; ?></p>

<?php if(!empty($artikel->link)): ?>
    <br>
    <a href="<?= $artikel->link; ?>" target="_blank">
        🔗 Sumber Artikel
    </a>
<?php endif; ?>

<br><br>
<a href="<?= base_url('/page/artikel'); ?>">← Kembali</a>

<?= $this->include('template/footer'); ?>