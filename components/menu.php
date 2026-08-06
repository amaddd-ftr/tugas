<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link <?= ($_GET['page'] == 'dashboard') ? 'active' : '' ?>" href="index.php?page=dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link <?= ($_GET['page'] == 'databuku') ? 'active' : '' ?>" href="pages/databuku.php?page=databuku">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Data Buku
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap


                    </div>
</nav>