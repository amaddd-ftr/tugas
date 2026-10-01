
<button id="sidebarToggle"
        class="sidebar-toggle"
        type="button">
    ☰
</button>

<div id="sidebarOverlay" class="sidebar-overlay"></div>

<aside id="sidebar" class="sidebar">

    <div class="sidebar-brand">
        <?php
            $dbConnected = false;

            try {
                \Sakuci\Database\Connection::pdo();
                $dbConnected = true;
            } catch (\Throwable $e) {
                $dbConnected = false;
            }
        ?>

        <button id="themeToggle"
                type="button"
                class="logo-toggle"
                aria-label="Ganti tema terang/gelap"
                title="Ganti tema terang/gelap">

            <svg width="30" height="30" viewBox="0 0 32 32"
                 xmlns="http://www.w3.org/2000/svg"
                 aria-hidden="true">

                <circle class="logo-ring"
                        cx="16" cy="16" r="15"/>

                <circle cx="16" cy="16" r="9"
                        fill="<?= e($dbConnected ? '#28a745' : '#dc3545') ?>"/>
            </svg>

        </button>

        <a href="<?= e(route('home')) ?>" class="sidebar-title">
            <?= e(config('app.name')) ?>
        </a>
    </div>


    
<nav class="sidebar-nav">

    
    
    
    <a class="sidebar-link <?= e(is_route('home') ? 'active' : '') ?>"
       href="<?= e(route('home')) ?>">
        <span>🏠</span>
        <span>Beranda</span>
    </a>


    <?php
        $currentUser = \App\Models\User::current();
    ?>


    
    
    
    <?php if(!$currentUser): ?>

        <?php
            $canRegister = false;

            if ($dbConnected) {
                try {
                    $canRegister =
                        \App\Models\Role::where('can_register', 1)->exists();
                } catch (\Throwable $e) {
                    $canRegister = false;
                }
            }
        ?>

        <?php if($canRegister): ?>
            <a class="sidebar-link <?= e(is_route('register') ? 'active' : '') ?>"
               href="<?= e(route('register')) ?>">
                <span>📝</span>
                <span>Daftar</span>
            </a>
        <?php endif; ?>

        <a class="sidebar-link sidebar-login"
           href="<?= e(route('login')) ?>">
            <span>👤</span>
            <span>Masuk</span>
        </a>


    
    
    
    <?php elseif($currentUser->role === 'admin'): ?>

        <a class="sidebar-link <?= e(is_route('admin.dashboard') ? 'active' : '') ?>"
           href="<?= e(route('admin.dashboard')) ?>">
            <span>📊</span>
            <span>Dashboard</span>
        </a>

        <a class="sidebar-link <?= e(is_route('admin.kategori.index') ? 'active' : '') ?>"
           href="<?= e(route('admin.kategori.index')) ?>">
            <span>📂</span>
            <span>Kategori</span>
        </a>

        <a class="sidebar-link <?= e(is_route('admin.lokasi.index') ? 'active' : '') ?>"
           href="<?= e(route('admin.lokasi.index')) ?>">
            <span>📍</span>
            <span>Lokasi</span>
        </a>
        
        <a class="sidebar-link <?= e(is_route('admin.siswa.index') ? 'active' : '') ?>"
           href="<?= e(route('admin.siswa.index')) ?>">
            <span>👨‍🎓</span>
            <span>Siswa</span>
        </a>

        <a class="sidebar-link <?= e(is_route('admin.sarpras.index') ? 'active' : '') ?>"
           href="<?= e(route('admin.sarpras.index')) ?>">
            <span>🏢</span>
            <span>Sarpras</span>
        </a>

        <a class="sidebar-link <?= e(is_route('admin.status.index') ? 'active' : '') ?>"
           href="<?= e(route('admin.status.index')) ?>">
            <span>📋</span>
            <span>Status</span>
        </a>

        <a class="sidebar-link <?= e(is_route('admin.pengaduan.index') ? 'active' : '') ?>"
           href="<?= e(route('admin.pengaduan.index')) ?>">
            <span>📢</span>
            <span>Pengaduan</span>
        </a>

        <div class="sidebar-divider"></div>

        <form method="POST" action="<?= e(route('logout')) ?>">
            <?= \Sakuci\View::csrfField() ?>

            <button type="submit" class="sidebar-link sidebar-logout">
                <span>↪️</span>
                <span>Logout</span>
            </button>
        </form>


    
    
    
    <?php else: ?>

        <a class="sidebar-link <?= e(is_route('dashboard') ? 'active' : '') ?>"
           href="<?= e(route('dashboard')) ?>">
            <span>📊</span>
            <span>Dashboard</span>
        </a>

        <a class="sidebar-link <?= e(is_route('pengaduan.index') ? 'active' : '') ?>"
           href="<?= e(route('pengaduan.index')) ?>">
            <span>📢</span>
            <span>Pengaduan Saya</span>
        </a>

        <a class="sidebar-link <?= e(is_route('pengaduan.create') ? 'active' : '') ?>"
           href="<?= e(route('pengaduan.create')) ?>">
            <span>➕</span>
            <span>Buat Pengaduan</span>
        </a>

        <div class="sidebar-divider"></div>

        <form method="POST" action="<?= e(route('logout')) ?>">
            <?= \Sakuci\View::csrfField() ?>

            <button type="submit" class="sidebar-link sidebar-logout">
                <span>↪️</span>
                <span>Logout</span>
            </button>
        </form>

    <?php endif; ?>

</nav>

</aside>