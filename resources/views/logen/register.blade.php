<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Noysgallery-login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
                                        <form action="{{ route('register.store') }}" method="post">
                                            @csrf
                                            <div id="form-body">
                                                <div class="text-center">
                                                    <h1 class="h4 text-primary-900 mb-4">Create an Account!</h1>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="Username" class="form-control rounded-top" id="exampleInputName" placeholder="Username">
                                                    @error('name')
                                                    <div class="invalid-feedback">
                                                        Please choose a name
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="NamaLengkap" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama Lengkap">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="Email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                                                </div>
                                                <div class="passwoo">
                                                    <input type="password" name="Password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                                </div>
                                                <div class="passwoo">
                                                    <textarea name="Alamat" id="exampleInputPassword" rows="5" class="form-control form-control-user" placeholder="Alamat"></textarea>
                                                </div>
                                                <div id="submit-button-cvr">
                                                    <button id="submit-button" type="submit">Register</button>
                                                </div>
                                                <hr>
                                                <a href="" class="btn btn-google btn-user btn-block">
                                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                                </a>
                                                <a href="" class="btn btn-facebook btn-user btn-block">
                                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                                </a>
                                            </div>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                                        </div>
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