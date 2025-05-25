<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Panel</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to bottom, #e0f7fa, #b2ebf2);
      color: #023e8a;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 2rem;
    }

    .button-group {
      display: flex;
      gap: 1rem;
      margin-bottom: 2rem;
    }

    button {
      background-color: #0077b6;
      color: white;
      border: none;
      padding: 0.75rem 1.5rem;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background-color: #005f87;
    }

    .form-container {
      background: white;
      border-radius: 16px;
      padding: 2rem;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      width: 100%;
      display: none;
      flex-direction: column;
      gap: 1rem;
      margin-bottom: 2rem;
    }

    label {
      font-weight: bold;
      margin-top: 0.5rem;
    }

    input, textarea {
      width: 100%;
      padding: 0.5rem;
      border-radius: 8px;
      border: 1px solid #90e0ef;
      resize: vertical;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
    }

    th, td {
      padding: 0.75rem;
      text-align: left;
      border-bottom: 1px solid #ccc;
    }

    th {
      background-color: #caf0f8;
    }

    .actions button {
      background-color: #00b4d8;
      margin-right: 0.5rem;
    }
  </style>
</head>
<body>
  <div class="button-group">
    <button onclick="showForm('project')">Projects</button>
    <button onclick="showForm('achievement')">Achievements</button>
  </div>

  <!-- Project Form -->
  <div id="project-form" class="form-container">
    <h2>Tambah Project</h2>
    <label>Nama</label>
    <input type="text" />
    <label>Status</label>
    <input type="text" />
    <label>Link</label>
    <input type="text" />
    <label>Deskripsi</label>
    <textarea rows="4"></textarea>
    <button>Simpan</button>

    <table>
      <thead>
        <tr><th>No</th><th>Nama</th><th>Status</th><th>Link</th><th>Deskripsi</th><th>Update</th></tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Contoh Project</td><td>Selesai</td><td>link.com</td><td>Deskripsi singkat</td><td class="actions"><button>Edit</button><button>Hapus</button></td></tr>
      </tbody>
    </table>
  </div>

  <!-- Achievement Form -->
  <div id="achievement-form" class="form-container">
    <h2>Tambah Achievement</h2>
    <label>Nama</label>
    <input type="text" />
    <label>Deskripsi</label>
    <textarea rows="4"></textarea>
    <button>Simpan</button>

    <table>
      <thead>
        <tr><th>No</th><th>Nama</th><th>Deskripsi</th><th>Update</th></tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Contoh Achievement</td><td>Deskripsi prestasi</td><td class="actions"><button>Edit</button><button>Hapus</button></td></tr>
      </tbody>
    </table>
  </div>

  <script>
    function showForm(formName) {
      document.getElementById('project-form').style.display = formName === 'project' ? 'flex' : 'none';
      document.getElementById('achievement-form').style.display = formName === 'achievement' ? 'flex' : 'none';
    }
  </script>
</body>
</html>
