<?php
$servername = "localhost";
$username = "user_air";
$password = "#Us3r_A1r_2025#";
$namadatabase = "air";

// Create connection
$koneksi = mysqli_connect($servername, $username, $password, $namadatabase);

// Check connection
if (!$koneksi) echo "KONEKSI GAGAL > COBA LAGI";


// // masuk data ke tabel user
// $pass=password_hash("admin", PASSWORD_DEFAULT);
// mysqli_query($koneksi, "INSERT INTO user(Username,Password,nama,alamat,kota,tip,level,tipe,status) VALUES('admin2','$pass','Admin Web','Polines','Semarang','024111','admin','-','aktif')");
// if (mysqli_affected_rows($koneksi) > 0) echo "Data berhasil masuk";
// else echo "data gagal masukk ";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <?php
                        if(isset($_POST['tombol'])) {
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            // echo "user : $username", "password : $password";
                        
                            //cek user neng tabel
                            $qc = mysqli_query($koneksi, "SELECT Username, Password FROM user Where Username='$username'");
                            $dc=mysqli_fetch_row($qc);

                           
                            if(!empty($dc[0])) $user_cek = $dc[0];
                            // echo "hasil cek: $user_cek";
                            if(!empty($user_cek)) {
                                // cek password
                                $pass_cek = $dc[1];

                                // veriv password
                                if (password_verify($password, $pass_cek)) {
                                    // daftarkan session
                                    $_SESSION['user']=$username;
                                    $_SESSION['pass']=$password;

                                    // redirect ke dashboard page
                                    echo "<script>window.location.replace('./login/index.php')</script>";
                                } else {
                                    echo"<div class=\"alert alert-danger\">
                                <strong>Login!</strong> Salah ...
                                </div>";
                                }
                                // echo "user ketemu hasil cek: $user_cek";
                            } else {

                                echo"<div class=\"alert alert-danger\">
                                <strong>Username!</strong>Tidak Ketemu...
                                </div>";
                            
                            }
                            


                        }
                        ?>
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form method="post" class="needs-validation">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="inputuserr" aria-describedby="emailHelp"
                                                placeholder="Username" name="username" required />
                                
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password" required/>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" name="tombol" value ="login" class="btn btn-primary">
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>