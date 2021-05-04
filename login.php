<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | KopiKare</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="Username" class="input-control">
            <input type="password" name="pass" placeholder="Password"class="input-control">
            <input type="submit" name="submit" value = "Login" class="button">
        </form>
        <?php
            if(isset($_POST['submit'])){
                session_start();
                include 'db.php'; 
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $cek = mysqli_query ($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".MD5($pass)."'");
                if(mysqli_num_rows($cek )> 0){
                    $d = mysqli_fetch_object($cek);
                    $_SESSION['status_login'] = true;
                    $_SESSION['admin_kopi'] = $d;
                    $_SESSION['id'] = $d->admin_id;
                    echo '<script>window.location="home.html"</script>';
                }else{
                    echo '<script>alert("Username atau password anda salah!")</script>';
                }


            }
        ?>
    </div>
</body>
</html>