<?php \Sakuci\View::extend('layouts.app'); ?>

<?php \Sakuci\View::startSection('title', 'Pengaduan Saya'); ?>

<?php \Sakuci\View::startSection('content'); ?>

<div class="container-fluid py-4">

<div class="dashboard-header pengaduan-header">

    <div class="dashboard-header-content">

        <span class="badge rounded-pill badge-brand px-3 py-2 mb-3">
            Pengaduan Saya
        </span>

        <h1>
            Pengaduan Saya
        </h1>

        <p>
            Lihat daftar pengaduan yang telah kamu kirim.
        </p>

    </div>

    <div class="bg-circle bg-circle-1"></div>
    <div class="bg-circle bg-circle-2"></div>
    <div class="bg-circle bg-circle-3"></div>

</div>



<div class="card border-0 shadow-sm">

    <div class="card-body p-4">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <div>
                <h5 class="fw-bold mb-1">
                    Riwayat Pengaduan
                </h5>

                <p class="text-secondary small mb-0">
                    Daftar pengaduan yang kamu buat.
                </p>
            </div>

            <a href="<?= e(route('pengaduan.create')) ?>"
               class="btn btn-brand">
                + Buat Pengaduan
            </a>

        </div>


        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Sarana / Prasarana</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                        $no = 1;
                    ?>

                    <?php $__empty_1 = true; foreach($pengaduan as $item): $__empty_1 = false; ?>

                        <tr>

                            <td>
                                <?= e($no++) ?>
                            </td>

                            <td>
                                <div class="fw-semibold">
                                    <?= e($item->judul) ?>
                                </div>
                            </td>

                            <td>
                                <?php foreach($sarpras as $itemSarpras): ?>

                                    <?php if($itemSarpras->id_sarpras == $item->id_sarpras): ?>
                                        <?= e($itemSarpras->nama_sarpras) ?>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                            </td>

                            <td>
                                <?php foreach($lokasi as $itemLokasi): ?>

                                    <?php if($itemLokasi->id_lokasi == $item->id_lokasi): ?>
                                        <?= e($itemLokasi->nama_lokasi) ?>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                            </td>

                            <td>
                                <?php foreach($status as $itemStatus): ?>

                                    <?php if($itemStatus->id_status == $item->id_status): ?>

                                        <span class="badge rounded-pill
                                            <?php if($itemStatus->nama_status == 'Menunggu'): ?>
                                                text-bg-warning
                                            <?php elseif($itemStatus->nama_status == 'Diproses'): ?>
                                                text-bg-primary
                                            <?php elseif($itemStatus->nama_status == 'Selesai'): ?>
                                                text-bg-success
                                            <?php else: ?>
                                                text-bg-secondary
                                            <?php endif; ?>
                                        ">
                                            <?= e($itemStatus->nama_status) ?>
                                        </span>

                                    <?php endif; ?>

                                <?php endforeach; ?>
                            </td>

                            <td>
                                <a href="<?= e(route('pengaduan.show', [
                                    'id_pengaduan' => $item->id_pengaduan
                                ])) ?>"
                                   class="btn btn-outline-brand btn-sm">
                                    Detail
                                </a>
                            </td>

                        </tr>

                    <?php endforeach; if($__empty_1): ?>

                        <tr>
                            <td colspan="6"
                                class="text-center text-secondary py-5">

                                <div class="mb-2">
                                    Belum ada pengaduan.
                                </div>

                                <a href="<?= e(route('pengaduan.create')) ?>"
                                   class="btn btn-brand btn-sm">
                                    Buat Pengaduan
                                </a>

                            </td>
                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>


        
        <?php if($pengaduan->hasPages()): ?>

            <div class="mt-4">
                <?= e($pengaduan->links()) ?>
            </div>

        <?php endif; ?>

    </div>

</div>

</div>

<?php \Sakuci\View::stopSection(); ?>