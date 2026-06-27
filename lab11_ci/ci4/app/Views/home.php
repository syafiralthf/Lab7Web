<?= $this->include('template/header'); ?>

<section class="hero">

    <div class="hero-content">

        <h1>Portal Berita Syafira</h1>

        <p>
            Menyajikan informasi teknologi, pendidikan,
            coding, dan dunia digital dengan tampilan modern.
        </p>

        <a href="/page/artikel" class="hero-btn">
            Jelajahi Artikel →
        </a>

    </div>

</section>

<section class="fitur-section">

    <div class="fitur-card">
        <div class="icon">💻</div>

        <h3>Tech Update</h3>

        <p>
            Informasi terbaru seputar teknologi,
            AI, dan perkembangan digital modern.
        </p>
    </div>

    <div class="fitur-card">
        <div class="icon">📚</div>

        <h3>IT Education</h3>

        <p>
            Tips belajar coding, dunia kampus,
            dan edukasi informatika.
        </p>
    </div>

    <div class="fitur-card">
        <div class="icon">📰</div>

        <h3>News Daily</h3>

        <p>
            Berita harian pilihan dengan
            informasi cepat dan akurat.
        </p>
    </div>

</section>

<section class="info-box">

    <h2>Evolusi Digital</h2>

    <p>
        Selamat datang di <strong>Portal Berita Syafira</strong>.
        Website ini dibuat untuk memberikan wawasan seputar
        teknologi, pemrograman, AI, pendidikan IT,
        dan perkembangan dunia digital modern.
    </p>

</section>

<section>

    <h2 class="judul-artikel">
        Artikel Terbaru
    </h2>

    <?php if(!empty($artikel)): ?>

        <div class="artikel-grid">

            <?php foreach ($artikel as $row): ?>

                <div class="card artikel-card">

                    <h3><?= esc($row->judul); ?></h3>

                    <?php if(!empty($row->gambar)): ?>

                        <img 
                            src="<?= base_url('uploads/' . $row->gambar); ?>" 
                            class="gambar-artikel"
                        >

                    <?php endif; ?>

                    <p>
                        <?= substr(esc($row->isi), 0, 100); ?>...
                    </p>

                    <a href="<?= base_url('/page/artikel/' . $row->slug); ?>" class="btn-baca">
                        Baca Selengkapnya
                    </a>

                </div>

            <?php endforeach; ?>

        </div>

    <?php else: ?>

        <p>Belum ada artikel.</p>

    <?php endif; ?>

</section>

<?= $this->include('template/footer'); ?>