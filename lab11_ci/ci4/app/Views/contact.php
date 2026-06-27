<?= $this->include('template/header'); ?>

<h2>Mari Berkolaborasi & Berbagi Ide 🚀</h2>

<p>
Punya ide menarik, ingin berkolaborasi, atau sekadar berbagi inspirasi?
Kami terbuka untuk berbagai peluang kerja sama dan diskusi kreatif.
Jangan ragu untuk menghubungi kami melalui kontak di bawah ini!
</p>

<ul>
    <li>Email: syafira@email.com</li>
    <li>Instagram: @syafira123</li>
    <li>WhatsApp: 0812345678910</li>
</ul>

<hr>

<h3>Kirim Pesan</h3>

<?php if(session()->getFlashdata('success')): ?>
    <p style="color: green;">
        <?= session()->getFlashdata('success'); ?>
    </p>
<?php endif; ?>

<form method="post" action="/kirim-pesan">

    <input type="text" name="nama" placeholder="Nama Lengkap" required><br><br>

    <input type="email" name="email" placeholder="Alamat Email" required><br><br>

    <textarea name="pesan" placeholder="Ceritakan ide, pertanyaan, atau hal yang ingin kamu sampaikan..." required></textarea><br><br>

    <button type="submit">Kirim</button>

</form>

<?= $this->include('template/footer'); ?>