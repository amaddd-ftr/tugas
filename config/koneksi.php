<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'latihan';

$conn = new mysqli ($host,$user,$pass,$databse);

if($conn->connect_error){
    die("Koneksi gagal".$conn->connect_error);
}
?>