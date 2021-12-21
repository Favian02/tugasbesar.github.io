<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    </head>
    <body id="bg-login">
        <div class="box-login">
            <h2>Login</h2>
            <form action="" method="POST">
                <input type="text" name="user" placeholder="Username" class="input-control">
                <input type="password" name="pass" placeholder="Password" class="input-control">
                <input type="submit" name="submit" value="Login" class="btn">
            </form>
            <?php
                if (isset($_POST['submit'])) {
                    include 'koneksi.php';

                    $user = $_POST['user'];
                    $pass = $_POST['pass'];

                    $cek = mysqli_query($connect, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".$pass."'");
                    if(mysqli_num_rows($cek) > 0){
                        $d = mysqli_fetch_object($cek);
                        $_SESSION['status_login'] = true;
                        echo '<script>window.location="utama.html"</script>';
                    } else {
                        echo '<script>alert("Usename atau password anda salah")</script>';
                    }
                }
            ?>
        </div>
    </body>
</html>