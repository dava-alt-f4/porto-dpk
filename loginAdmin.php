<?php
session_start();
$masuk = false;
if (!empty($_POST)) {
    $pdo = require 'koneksi.php';
    
    $sql = 'SELECT * FROM login';
    $query = $pdo->prepare($sql);
    $query->execute();
    $admin = $query->fetch();
    if(!$admin) {
        $masuk = false;
    } else if($_POST['email'] == $admin['email'] && $_POST['password'] == $admin['password']) {
        $masuk = true;
        $_SESSION['admin'] = [
            'email' => $user['email'],
            'password' => $user['password'],
        ];
        header("location: home_admin.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        
        #login {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        
    </style>
</head>

<body>
    <section id="login">
        <div class="login">
            <div class="judul">
                <h1>Login Admin</h1>
            </div>
            <?php
            if(!empty($_POST) && $masuk == false) {?>
                <p style="color:red;">email atau password salah</p>
            <?php } ?>
            <div class="form">
                <form action="" method="post">
                    <label for="email">Email:</label>
                    <div class="input">
                        <input name="email" type="email" placeholder="Masukkan Email" required>
                    </div>
                    <label for="password">Password:</label>
                    <div class="input">
                        <input name="password" type="password" placeholder="Masukkan Email" required>
                    </div>
                    <button type="submit">Kirim</button>
                </form>
            </div>
        </div>

    </section>
</body>

</html>