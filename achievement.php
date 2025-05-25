<?php
$pdo = require 'koneksi.php';
if (!empty($_POST)) {
    $sql = 'INSERT INTO achievements (nama, deskripsi, gambar) VALUES (:nama, :deskripsi, :gambar)';
    $query = $pdo->prepare($sql);
    $query->execute(array(
        'nama' => $_POST['nama'],
        'deskripsi' => $_POST['deskripsi'],
        'gambar' => file_get_contents($_FILES['gambar']['tmp_name'])
    ));
    header('location: home_admin.php');
    exit;
}