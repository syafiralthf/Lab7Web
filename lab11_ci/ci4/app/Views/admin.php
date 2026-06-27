<?= $this->include('template/header'); ?>

<h2>Dashboard Admin</h2>

<p>Selamat datang admin 🎉</p>

<a href="/admin/tambah">+ Tambah Artikel</a> |
<a href="/admin/pesan">📩 Pesan Masuk</a> |

<hr>

<?php if(!empty($artikel)): ?>
    <?php foreach($artikel as $a): ?>
        <div style="margin-bottom:20px; padding:15px; border:1px solid #ddd; border-radius:10px;">
            
            <h3><?= $a->judul; ?></h3>

            <p><?= substr($a->isi, 0, 100); ?>...</p>

            <p>
                Status: 
                <strong style="color: <?= $a->status == 1 ? 'green' : 'red'; ?>">
                    <?= $a->status == 1 ? 'Publish' : 'Draft'; ?>
                </strong>
            </p>

            <?php if(!empty($a->link)): ?>
                <p>
                    <a href="<?= $a->link; ?>" target="_blank">🔗 Lihat Sumber</a>
                </p>
            <?php endif; ?>

            <!-- AKSI -->
            <a href="/admin/edit/<?= $a->id; ?>">Edit</a> |
            
            <a href="/admin/hapus/<?= $a->id; ?>" 
               onclick="return confirm('Yakin hapus?')">
               Hapus
            </a>

        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>Belum ada artikel</p>
<?php endif; ?>

<?= $this->include('template/footer'); ?>