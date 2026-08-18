<?php
session_start();
if(!isset($_GET['page'])){
    header('Location: index.php?page=login');
    exit();
}
 include 'components/header.php'; 
 include 'controllers/Auth.php';
 $auth = new Auth();

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
} elseif($_GET['page'] == 'proseslogin'){
    $user = $auth->login
    ($_POST['username'],$_POST['password']);
} else {
    include 'pages/dashboard.php';
} 
?>
                </div>
            </main>

<?php include 'components/footer.php'; ?>