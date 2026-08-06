<?php
 include 'components/header.php'; 

?>


            <main>
                <div class="container-fluid px-4 mt-3">
<?php 
if ($_GET['page'] == 'register') {
    include 'pages/register.php';
} elseif ($_GET['page'] == 'login') {
    include 'pages/login.php';
} elseif ($_GET['page'] == 'databuku') {
    include 'pages/databuku.php';
} else {
    include 'pages/dashboard.php';
}
?>
                </div>
            </main>

<?php include 'components/footer.php'; ?>