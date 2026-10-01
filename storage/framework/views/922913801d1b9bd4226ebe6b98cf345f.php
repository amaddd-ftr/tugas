<?php \Sakuci\View::extend('layouts.app'); ?>

<?php \Sakuci\View::startSection('title', 'Login'); ?>

<?php \Sakuci\View::startSection('content'); ?>

    <div class="row atas">
        <div class="col-md-5 mx-auto">
            <div class="card border-0 shadow-sm">
                <div class=" card-body p-4">
                    <h1 class="h4 mb-1">Masuk</h1>
                    <p class="text-secondary small mb-4">Akun demo: admin &mdash; password <code class="inline">rahasia123</code></p>

                    <form method="POST" action="<?= e(route('login.attempt')) ?>">
                        <?= \Sakuci\View::csrfField() ?>

                        <div class="mb-3">
                            <label class="form-label" for="username">Username</label>
                            <input type="text" id="username" name="username" value="<?= e(old('username')) ?>" class="form-control <?= e(errors()->has('username') ? 'is-invalid' : '') ?>" autofocus>
                            <?php if($message = errors()->first('username')): ?> <div class="invalid-feedback"><?= e($message) ?></div> <?php endif; unset($message); ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control <?= e(errors()->has('password') ? 'is-invalid' : '') ?>">
                            <?php if($message = errors()->first('password')): ?> <div class="invalid-feedback"><?= e($message) ?></div> <?php endif; unset($message); ?>
                        </div>

                        <button class="btn btn-brand w-100" type="submit">Login</button>
                    </form>

                    <?php
                        $canRegister = false;
                        try {
                            $canRegister = \App\Models\Role::where('can_register', 1)->exists();
                        } catch (\Throwable $e) {
                            $canRegister = false;
                        }
                    ?>
                    <?php if($canRegister): ?>
                        <p class="text-secondary small text-center mt-3 mb-0">Belum punya akun? <a href="<?= e(route('register')) ?>">Daftar di sini</a>.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php \Sakuci\View::stopSection(); ?>

