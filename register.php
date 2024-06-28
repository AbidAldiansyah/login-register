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
        <form action="proses_reg.php" method="post">
            <h4>selamat datang</h4>
            <p>silahkan buat akun anda</p>
            <div class="form-login">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama" placeholder="masukkan nama lengkap">
            </div>
            <div class="form-login">
                <label for="">nomor telepon</label>
                <input type="text" name="nomor" placeholder="08xxxxxx">
            </div>
            <div class="form-login">
                <label for="">email</label>
                <input type="text" name="username" placeholder="masukkan email">
            </div>
            <div class="form-login">
                <label for="">password</label>
                <input type="password" name="password" placeholder="masukkan password">
            </div>
            <div class="form-login">
                <label for="">konfirmasi password</label>
                <input type="text" name="konfirmasi" placeholder="masukkan password">
            </div>
            <div class="form-login">
                <button>Daftar Sekarang</button>
            </div>
            <center><a href="index.php">sudah Punya Akun? login Sekarang</a></center>
        </form>
    </div>
</body>

</html>