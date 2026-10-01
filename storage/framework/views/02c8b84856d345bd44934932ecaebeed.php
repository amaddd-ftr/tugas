<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= \Sakuci\View::yieldContent('title', config('app.name')) ?></title>

    
    <script>
        (function () {
            var saved = localStorage.getItem('sakuci-theme');
            var theme = saved ||
                (matchMedia('(prefers-color-scheme: dark)').matches
                    ? 'dark'
                    : 'light');

            document.documentElement.setAttribute(
                'data-bs-theme',
                theme
            );
        })();
    </script>

    
    <link rel="stylesheet"
          href="<?= e(asset('vendor/bootstrap/css/bootstrap.min.css?v=2')) ?>">

    
    <link rel="stylesheet"
          href="<?= e(asset('css/app.css?v=2')) ?>">
</head>

<body class="d-flex flex-column min-vh-100 bg-body-tertiary">

    
    <?= \Sakuci\View::insert(get_defined_vars(), 'partials.navbar') ?>

    
    <main class="main-content flex-grow-1">

        <?= \Sakuci\View::insert(get_defined_vars(), 'partials.flash') ?>

        <?= \Sakuci\View::yieldContent('content') ?>

    </main>

    
    <?= \Sakuci\View::insert(get_defined_vars(), 'partials.footer') ?>


    
    <script src="<?= e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')) ?>"></script>

    
    <script src="<?= e(asset('js/theme.js')) ?>"></script>

    <?= \Sakuci\View::yieldContent('scripts') ?>


    
    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        if (sidebar && sidebarToggle && sidebarOverlay) {

            sidebarToggle.addEventListener('click', function () {
                sidebar.classList.toggle('show');
                sidebarOverlay.classList.toggle('show');
            });

            sidebarOverlay.addEventListener('click', function () {
                sidebar.classList.remove('show');
                sidebarOverlay.classList.remove('show');
            });

        }
    </script>

</body>
</html>