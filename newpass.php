<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div id="form">
        <form action="proses_newpass.php" method="post">
            <h4>selamat datang</h4>
            <p>silahkan masukan password baru</p>
            
            <div class="form-login">
                <label for="">email</label>
                <input type="email" name="email" placeholder="email" value="<?= $_GET['email'];?>">
            </div>
            <div class="form-login">
                <label for="">new password</label>
                <input type="password" name="password" placeholder="masukkan password">
            </div>
            <div class="form-login">
                <label for="">konfirmasi new password</label>
                <input type="password" name="konfirmasi" placeholder="masukkan password">
            </div>

            <div class="form-login">
                <button>reset Sekarang</button>
            </div>
            
        </form>
    </div>
</body>

</html>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div id="form">
        <form action="proses_newpass.php" method="post">
            <h4>Selamat Datang</h4>
            <p>Silahkan masukkan email dan password</p>
            <div class="form-login">
                <label for="">Email</label>
                <input type="email" name="username" placeholder="email" value="<?= $_GET['email']; ?>">
            </div>
            <div class="form-login">
                <label for="">New Password</label>
                <input type="password" name="password" placeholder="masukkan password">
            </div>
            <div class="form-login">
                <label for="">Konfirmasi New Password</label>
                <input type="password" name="konfirmasi" placeholder="masukkan password">
            </div>

            <div class="form-login">
                <button>Reset Sekarang</button>
            </div>
            <center><a href="register.php">Belum punya akun? Daftar Sekarang</a></center>
        </form>
    </div>
</body>

</html> -->