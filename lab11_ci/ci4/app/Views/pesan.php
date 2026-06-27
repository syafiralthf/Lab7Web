<?= $this->include('template/header'); ?>

<div class="container">

    <h2>Pesan Masuk</h2>

    <a href="/admin" class="btn-back">← Kembali</a>

    <hr>

    <?php if(!empty($pesan)): ?>
        <?php foreach($pesan as $p): ?>
            
            <div class="card pesan-card">

                <h4><?= $p->nama; ?></h4>

                <p class="email"><?= $p->email; ?></p>

                <p class="isi-pesan"><?= $p->pesan; ?></p>

                <small class="tanggal"><?= $p->created_at; ?></small>

            </div>

        <?php endforeach; ?>
    <?php else: ?>
        <p>Belum ada pesan</p>
    <?php endif; ?>

</div>

<?= $this->include('template/footer'); ?>