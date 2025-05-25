<?php
$pdo = require 'koneksi.php';
if (!empty($_POST)) {
    $sql = 'INSERT INTO projects (nama, status, link, deskripsi, gambar) VALUES (:nama, :status, :link, :deskripsi, :gambar)';
    $query = $pdo->prepare($sql);
    $query->execute(array(
        'nama' => $_POST['nama'],
        'status' => $_POST['status'],
        'link' => $_POST['link'],
        'deskripsi' => $_POST['deskripsi'],
        'gambar' => file_get_contents($_FILES['gambar']['tmp_name'])
    ));
    header('location: home_admin.php');
    exit;
}