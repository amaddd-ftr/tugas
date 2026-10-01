<?php \Sakuci\View::extend('layouts.app'); ?>
<?php \Sakuci\View::startSection('title', config('app.name') . ' -- Kerangka PHP Ringan'); ?>
<?php \Sakuci\View::startSection('content'); ?>
<div class="container">
    <h1>Daftar Siswa</h1>
    <a href="<?= e(route('admin.siswa.create')) ?>" class="btn btn-primary mb-3 btn-sm">Tambah Siswa</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            ?>
            <?php foreach($siswa as $x): ?>
            <tr>
                <td><?= e($no++) ?></td>
                <td><?= e($x->nama) ?></td>
                <td><?= e($x->nis) ?></td>
                <td><?= e($x->kelas) ?></td>
                <td>
                  <a href="<?= e(route('admin.siswa.edit', ['id_siswa' => $x->id_siswa])) ?>" class="btn btn-sm btn-success">Edit</a>
                   <form action="<?= e(route('admin.siswa.delete', ['id' => $x->id_siswa])) ?>" method="POST" style="display: inline-block;">
                            <?= \Sakuci\View::csrfField() ?>
                            <?= \Sakuci\View::methodField('DELETE') ?>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                        </form>
                    </td>
</tr>
</tr>
<?php endforeach; ?>
        </tbody>
    </table>
</div>
    <?= $siswa->links() ?>
<?php \Sakuci\View::stopSection(); ?>
