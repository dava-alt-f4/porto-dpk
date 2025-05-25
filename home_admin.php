<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('location: loginAdmin.php');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard - Portfolio</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to bottom, #f0f8ff, #0077be, #003f5c);
      color: #fff;
    }

    .dashboard {
      display: grid;
      grid-template-columns: 220px 1fr;
      min-height: 100vh;
    }

    .sidebar {
      background-color: rgba(255, 255, 255, 0.1);
      padding: 1.5rem;
      backdrop-filter: blur(8px);
    }

    .sidebar h2 {
      color: #fff;
      font-size: 1.2rem;
      margin-bottom: 1rem;
    }

    .sidebar button {
      width: 100%;
      margin-bottom: 1rem;
      padding: 0.75rem;
      background-color: #ffffff;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      color: #003f5c;
      cursor: pointer;
    }

    .main {
      padding: 2rem;
    }

    h1 {
      text-align: center;
      margin-bottom: 2rem;
    }

    .section-container {
      display: none;
      flex-direction: column;
      gap: 1.5rem;
    }

    .form-container {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      background-color: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(8px);
      padding: 1.5rem;
      border-radius: 8px;
    }

    .form-container input,
    .form-container textarea,
    .form-container select {
      padding: 0.5rem;
      border: none;
      border-radius: 4px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(6px);
    }

    table th,
    table td {
      padding: 0.5rem;
      border: 1px solid #ccc;
      color: #fff;
      text-align: left;
    }
    .table-frame{
      width: 100px;
      height: 70px;
      overflow: hidden;
    }
    .table-img{
      border-radius: 10px;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    table a{
      color: lightblue;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <div class="sidebar">
      <h2>Dashboard Admin</h2>
      <button onclick="showSection('project')">Projects</button>
      <button onclick="showSection('achievement')">Achievements</button>
    </div>

    <div class="main">
      <h1>Kelola Projects & Achievements</h1>

      <!-- Project Section -->
      <div class="section-container" id="project-section">
        <form class="form-container" action="project.php" method="post" enctype="multipart/form-data">
          <label>Nama Project</label>
          <input type="text" name="nama" placeholder="Masukkan nama project" required/>

          <label>Status</label>
          <select name="status" required>
            <option value="" disabled selected>Pilih status</option>
            <option value="complete">Complete</option>
            <option value="incomplete">Incomplete</option>
          </select>

          <label>Link Project</label>
          <input type="url" name="link" placeholder="Masukkan link project" required/>

          <label>Deskripsi</label>
          <textarea name="deskripsi" placeholder="Deskripsikan project" required></textarea>

          <label>Gambar</label>
          <input type="file" accept="image/*" name="gambar" required/>

          <button type="submit">Simpan</button>
        </form>

        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Status</th>
              <th>Link</th>
              <th>Deskripsi</th>
              <th>Gambar</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $pdo = require 'koneksi.php';
            $sql = 'SELECT id, nama, status, link, deskripsi, gambar FROM projects';
            $query = $pdo->prepare($sql);
            $query->execute();

            ?>
            <?php while($data = $query->fetch()) {
              $base64 = base64_encode($data['gambar']); ?>
            <tr>
              <th><?php echo $data['id']; ?></th>
              <th><?php echo $data['nama']; ?></th>
              <th><?php echo $data['status']; ?></th>
              <th><?php echo $data['link']; ?></th>
              <th><?php echo $data['deskripsi']; ?></th>
              <th class="table-frame"><?php echo "<img src= 'data:image/*;base64, $base64'  alt='' class='table-img'>" ?></th>
              <th><a href="update_project.php?id=<?php echo $data['id'];?>">Edit</a></th>
            </tr>
          <?php  } ?>
          </tbody>
        </table>
      </div>

      <!-- Achievement Section -->
      <div class="section-container" id="achievement-section">
        <form class="form-container" action="achievement.php" enctype="multipart/form-data" method="post">
          <label>Nama Achievement</label>
          <input type="text" name="nama" placeholder="Masukkan nama achievement" />

          <label>Deskripsi</label>
          <textarea name="deskripsi" placeholder="Deskripsikan achievement"></textarea>

          <label>Gambar</label>
          <input type="file" name="gambar" accept="image/*" />

          <button type="submit">Simpan</button>
        </form>

        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Gambar</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $pdo = require 'koneksi.php';
            $sql = 'SELECT id, nama, deskripsi, gambar FROM achievements';
            $query = $pdo->prepare($sql);
            $query->execute();

            ?>
            <?php while($data = $query->fetch()) {
              $base64 = base64_encode($data['gambar']); ?>
              <tr>
              <th><?php echo $data['id']; ?></th>
              <th><?php echo $data['nama']; ?></th>
              <th><?php echo $data['deskripsi']; ?></th>
              <th class="table-frame"><?php echo "<img src= 'data:image/*;base64, $base64'  alt='' class='table-img'>" ?></th>
              <th><a href="update_achievement.php?id=<?php echo $data['id'];?>">Edit</a></th>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script>
    function showSection(section) {
      const projectSection = document.getElementById('project-section');
      const achievementSection = document.getElementById('achievement-section');

      if (section === 'project') {
        projectSection.style.display = 'flex';
        achievementSection.style.display = 'none';
      } else {
        achievementSection.style.display = 'flex';
        projectSection.style.display = 'none';
      }
    }
  </script>
</body>
</html>

