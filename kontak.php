<?php
$hasil = false;
if (!empty($_POST)){
    $pdo = require 'koneksi.php';
    $sql = "INSERT INTO kontak (email, pesan) VALUES (:email, :pesan)";
    $query = $pdo->prepare($sql);
    $query->execute(array(
        'email' => $_POST['email'],
        'pesan' => $_POST['pesan']
    ));
    $hasil = true;
    header("location:index.php");
}