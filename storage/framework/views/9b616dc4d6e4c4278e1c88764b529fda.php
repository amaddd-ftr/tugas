<?php \Sakuci\View::extend('layouts.app'); ?>

<?php \Sakuci\View::startSection('title', config('app.name') . ' -- Pengaduan'); ?>

<?php \Sakuci\View::startSection('content'); ?>

<div class="container">

    <h1>Daftar Pengaduan</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Nama Sarpras</th>
                <th>Nama Lokasi</th>
                <th>Judul</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            <?php
                $no = 1;
            ?>

            <?php foreach($pengaduan as $x): ?>

                <?php
                    $namaSiswa = '-';
                    $namaSarpras = '-';
                    $namaLokasi = '-';
                    $namaStatus = '-';

                    foreach ($siswa as $item) {
                        if ($item->id_siswa == $x->id_siswa) {
                            $namaSiswa = $item->nama;
                            break;
                        }
                    }

                    foreach ($sarpras as $item) {
                        if ($item->id_sarpras == $x->id_sarpras) {
                            $namaSarpras = $item->nama_sarpras;
                            break;
                        }
                    }

                    foreach ($lokasi as $item) {
                        if ($item->id_lokasi == $x->id_lokasi) {
                            $namaLokasi = $item->nama_lokasi;
                            break;
                        }
                    }

                    foreach ($status as $item) {
                        if ($item->id_status == $x->id_status) {
                            $namaStatus = $item->nama_status;
                            break;
                        }
                    }
                ?>

                <tr>
                    <td><?= e($no++) ?></td>

                    <td><?= e($namaSiswa) ?></td>

                    <td><?= e($namaSarpras) ?></td>

                    <td><?= e($namaLokasi) ?></td>

                    <td><?= e($x->judul) ?></td>

                    <td><?= e($namaStatus) ?></td>

                    <td>
                        <a href="<?= e(route('admin.pengaduan.show', [
                            'id_pengaduan' => $x->id_pengaduan
                        ])) ?>"
                           class="btn btn-sm btn-primary">
                            Lihat
                        </a>
                    </td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>

    <?= $pengaduan->links() ?>

</div>

<?php \Sakuci\View::stopSection(); ?>