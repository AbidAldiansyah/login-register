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
        <form action="login.php" method="post"
            <h4>selamat datang</h4>
            <p>silahkan masukan email dan password</p>
            <div class="form-login">
                <label for="">email</label>
                <input type="text" name="username" placehorder="masukan email">
            </div>
            <div class="form-login">
                <label for="">password</label>
                <input type="password" name="password" placeholder="masukan password">
            </div>
            <a href="reset.php">Lupa Password</a>
            <div class="form-login">
                <button>Login Sekarang</button>
            </div>
            <center><a href="register.php">Belum Punya Akun? Daftar Sekarang</a></center>
        </form>
    </div>
</body>

</html>