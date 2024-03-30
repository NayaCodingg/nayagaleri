<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Noysgallery-login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body class="background-color:black">
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block" style="background-image: url(../img/foto.log.jpg); background-position: center; background-size: cover;"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                        <div id="form-ui">
                          <form action="" method="post" id="form">
                          @csrf
                            <div id="form-body">
                              <div id="welcome-lines">
                                <div id="welcome-line-1">Login</div>
                                <div id="welcome-line-2">Welcome Back to GalleryNoys!</div>
                              </div>
                              <div id="input-area">
                                <div class="form-inp">
                                  <input placeholder="Email Address" type="text">
                                </div>
                                <div class="form-inp">
                                  <input placeholder="Password" type="password">
                                </div>
                              </div>
                              <div id="submit-button-cvr">
                                <button href="/home" id="submit-button" type="submit">Login</button>
                              </div>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Login with Google
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgotpassword">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="register">Create an Account!</a>
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