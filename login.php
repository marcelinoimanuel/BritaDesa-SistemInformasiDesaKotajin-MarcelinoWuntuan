<?php
session_start();

if( isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

    $connect = mysqli_connect("localhost", "root", "", "project_web");

    if(isset($_POST["masuk"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username'");

        // cek username
        if(mysqli_num_rows($result) === 1){

            // cek password
            if($password){
                
                // set session
                $_SESSION["login"] = true;
                
                echo "<script>
                        confirm('Berhasil masuk sebagai admin');
                        document.location.href = 'index.php';
                    </script>";
                    
                // header("Location: index.php");
            }
        }

        $error = true;

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Informasi</title>
    <link rel="stylesheet" href="assets/vendor/css/login.css">

</head>

<body>
    <div id="login" class="login">
        <h1 class="Login">Login</h1>

        <?php if(isset($error)): ?>
            <p style="color: red; font-style: italic;">Username/Password salah!</p>
        <?php endif; ?>

        <form name="quiz-samuel-login" class="form" id="form1" action="" method="POST" autocomplete="off">
            <input class="input" type="text" name="username" placeholder="username" id="username" minlength="3" autofocus>
            <input class="input pass" type="password" name="password" placeholder="password" id="password">
            <br>
            <button class="btn btn-primary btn-block btn-large" type="submit" value="Login" name="masuk">Login</button>
        </form>
    </div>

</body>

</html>