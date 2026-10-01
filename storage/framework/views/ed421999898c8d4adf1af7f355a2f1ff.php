<?php \Sakuci\View::extend('layouts.app'); ?>

<?php \Sakuci\View::startSection('title', 'Buat Pengaduan'); ?>

<?php \Sakuci\View::startSection('content'); ?>

<div class="container-fluid py-4">

    
    <div class="dashboard-header pengaduan-header">

        <div class="dashboard-header-content">

            <span class="badge rounded-pill badge-brand px-3 py-2 mb-3">
                Pengaduan
            </span>

            <h1>
                Buat Pengaduan
            </h1>

            <p>
                Laporkan kerusakan atau permasalahan sarana dan prasarana sekolah.
            </p>

        </div>

        <div class="bg-circle bg-circle-1"></div>
        <div class="bg-circle bg-circle-2"></div>
        <div class="bg-circle bg-circle-3"></div>

    </div>

    
    <div class="row">
        <div class="col-lg-8 mx-auto">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <h5 class="fw-bold mb-1">
                        Form Pengaduan
                    </h5>

                    <p class="text-secondary small mb-4">
                        Isi data pengaduan dengan lengkap dan jelas.
                    </p>

                    <form method="POST"
                          action="<?= e(route('pengaduan.store')) ?>">

                        <?= \Sakuci\View::csrfField() ?>

                        
                        <div class="mb-3">

                            <label class="form-label" for="id_sarpras">
                                Sarana / Prasarana
                            </label>

                            <select
                                id="id_sarpras"
                                name="id_sarpras"
                                class="form-select <?= e(errors()->has('id_sarpras') ? 'is-invalid' : '') ?>"
                            >

                                <option value="">
                                    -- Pilih Sarana / Prasarana --
                                </option>

                                <?php foreach($sarpras as $item): ?>

                                    <option
                                        value="<?= e($item->id_sarpras) ?>"
                                        <?= e(old('id_sarpras') == $item->id_sarpras ? 'selected' : '') ?>
                                    >
                                        <?= e($item->nama_sarpras) ?>
                                    </option>

                                <?php endforeach; ?>

                            </select>

                            <?php if($message = errors()->first('id_sarpras')): ?>
                                <div class="invalid-feedback">
                                    <?= e($message) ?>
                                </div>
                            <?php endif; unset($message); ?>

                        </div>


                        
                        <div class="mb-3">

                            <label class="form-label" for="id_lokasi">
                                Lokasi
                            </label>

                            <select
                                id="id_lokasi"
                                name="id_lokasi"
                                class="form-select <?= e(errors()->has('id_lokasi') ? 'is-invalid' : '') ?>"
                            >

                                <option value="">
                                    -- Pilih Lokasi --
                                </option>

                                <?php foreach($lokasi as $item): ?>

                                    <option
                                        value="<?= e($item->id_lokasi) ?>"
                                        <?= e(old('id_lokasi') == $item->id_lokasi ? 'selected' : '') ?>
                                    >
                                        <?= e($item->nama_lokasi) ?>
                                    </option>

                                <?php endforeach; ?>

                            </select>

                            <?php if($message = errors()->first('id_lokasi')): ?>
                                <div class="invalid-feedback">
                                    <?= e($message) ?>
                                </div>
                            <?php endif; unset($message); ?>

                        </div>


                        
                        <div class="mb-3">

                            <label class="form-label" for="judul">
                                Judul Pengaduan
                            </label>

                            <input
                                type="text"
                                id="judul"
                                name="judul"
                                value="<?= e(old('judul')) ?>"
                                class="form-control <?= e(errors()->has('judul') ? 'is-invalid' : '') ?>"
                                placeholder="Contoh: Komputer tidak menyala"
                            >

                            <?php if($message = errors()->first('judul')): ?>
                                <div class="invalid-feedback">
                                    <?= e($message) ?>
                                </div>
                            <?php endif; unset($message); ?>

                        </div>


                        
                        <div class="mb-4">

                            <label class="form-label" for="deskripsi">
                                Deskripsi Pengaduan
                            </label>

                            <textarea
                                id="deskripsi"
                                name="deskripsi"
                                rows="5"
                                class="form-control <?= e(errors()->has('deskripsi') ? 'is-invalid' : '') ?>"
                                placeholder="Jelaskan masalah atau kerusakan yang ditemukan..."
                            ><?= e(old('deskripsi')) ?></textarea>

                            <?php if($message = errors()->first('deskripsi')): ?>
                                <div class="invalid-feedback">
                                    <?= e($message) ?>
                                </div>
                            <?php endif; unset($message); ?>

                        </div>


                        
                        <div class="d-flex justify-content-end gap-2">

                            <a href="<?= e(route('dashboard')) ?>"
                               class="btn btn-outline-secondary">
                                Batal
                            </a>

                            <button
                                type="submit"
                                class="btn btn-brand"
                            >
                                Kirim Pengaduan
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>

</div>

<?php \Sakuci\View::stopSection(); ?>