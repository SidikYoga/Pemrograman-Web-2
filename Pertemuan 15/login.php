<?php 
    session_start();
    include "koneksi.php";


    if(isset($_SESSION["login"])){
        header("Location: index.php");
        exit;
    }

   
    $error = false;

  
    if(isset($_POST["login"])){

        $id = $_POST["id"];
        $pass = $_POST["password"];

    
        $result = mysqli_query($kon, "SELECT * FROM login WHERE id = '$id'");

   
        if(mysqli_num_rows($result) === 1){

     
            $row = mysqli_fetch_assoc($result);

            if(password_verify($pass, $row["password"])){
            
                $_SESSION["login"] = array(
                    'nuptk' => $row["nuptk"]
                );
                $_SESSION["login"] = true;

                header("location: index.php");
                exit;
            }
        }

        $error = true;
    }

    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<script>alert('Login gagal! username dan password salah!');</script>";
        } elseif($_GET['pesan']=="logout"){
            echo "<script>alert('Anda telah berhasil logout');</script>";
        }elseif($_GET['pesan']=="belum_login"){
            echo "<script>alert('Anda harus login untuk mengakses halaman ini');</script>";
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Form Login</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Capsule -->
    <div id="appCapsule" class="pt-0">

        <div class="login-form mt-1">
            <div class="section">
                <img src="assets/img/login/login.jpg" alt="image" class="form-image">
            </div>
            <div class="section mt-1">
                <h1>Menu Login</h1>
                <h4>Silahkan Login</h4>    
            </div>
            <?php if($error) : ?>
                <script type="text/javascript">
                    alert("ID atau Password salah");
                </script>
            <?php endif; ?>
            <div class="section mt-1 mb-3">
                <form action="" method="post">
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="text" class="form-control" name="id" id="id" placeholder="Username">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                    <div class="form-button">
                        <button type="submit" class="btn btn-primary btn-block btn-lg" name="login">Log in</button>   
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- * App Capsule -->

    <!-- Jquery -->
    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>

</body>

</html>
