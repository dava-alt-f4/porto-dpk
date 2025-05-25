<?php
if (!empty($_POST)) {
    $pdo = require 'koneksi.php';
    $id = $_GET['id'];
    $sql = "UPDATE projects SET nama =:nama, status =:status, link=:link, deskripsi=:deskripsi, gambar=:gambar WHERE id=:id";
    $query = $pdo->prepare($sql);
    $query->execute(array(
        'nama' => $_POST['nama'],
        'status' =>$_POST['status'],
        'link' => $_POST['link'],
        'deskripsi' => $_POST['deskripsi'],
        'gambar' => file_get_contents($_FILES['gambar']['tmp_name']),
        'id' => $id
    ));
    header('location:home_admin.php');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Update Project - Admin Dashboard</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to bottom, #f0f8ff, #0077be, #003f5c);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .update-container {
      background-color: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(8px);
      padding: 2rem;
      border-radius: 12px;
      width: 400px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
    }

    h1 {
      text-align: center;
      margin-bottom: 2rem;
      font-size: 1.5rem;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    label {
      font-weight: bold;
      font-size: 0.9rem;
    }

    input[type="text"],
    input[type="url"],
    select,
    textarea,
    input[type="file"] {
      padding: 0.5rem;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      font-family: inherit;
    }

    textarea {
      resize: vertical;
      min-height: 80px;
    }

    button {
      margin-top: 1rem;
      padding: 0.75rem;
      background-color: #ffffff;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      color: #003f5c;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #e0e0e0;
    }
  </style>
</head>
<body>
  <div class="update-container">
    <h1>Update Project</h1>
    <form action="" method="post" enctype="multipart/form-data">
      <label for="nama">Nama Project</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama project" required/>

      <label for="status">Status</label>
      <select id="status" name="status" required>
        <option value="" disabled selected>Pilih status</option>
        <option value="complete">Complete</option>
        <option value="incomplete">Incomplete</option>
      </select>

      <label for="link">Link Project</label>
      <input type="url" id="link" name="link" placeholder="Masukkan link project" required/>

      <label for="deskripsi">Deskripsi</label>
      <textarea id="deskripsi" name="deskripsi" placeholder="Deskripsikan project" required></textarea>

      <label for="gambar">Gambar (opsional)</label>
      <input type="file" accept="image/*" id="gambar" name="gambar" />

      <button type="submit">Update</button>
    </form>
  </div>
</body>
</html>
