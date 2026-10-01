<?php \Sakuci\View::extend('layouts.app'); ?>

<?php \Sakuci\View::startSection('content'); ?>

<div class="container">
    <h1>Tambah Status</h1><form action="<?= e(route('admin.status.store')) ?>" method="POST">
    <?= \Sakuci\View::csrfField() ?>

    <div class="form-group mb-3">
        <label for="nama_status">Nama Status</label>

        <input
            type="text"
            class="form-control"
            id="nama_status"
            name="nama_status"
            placeholder="Contoh: Diajukan"
            required
        >
    </div>

    <button type="submit" class="btn btn-primary">
        Simpan
    </button>

    <a href="<?= e(route('admin.status.index')) ?>"
       class="btn btn-secondary">
        Kembali
    </a>
</form>

</div><?php \Sakuci\View::stopSection(); ?>