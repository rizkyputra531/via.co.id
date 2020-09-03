<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin Pro</title>
    <link href="css/styles2.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="bg-light">
    <div id=" layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <!-- Basic registration form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="font-weight-light my-4">Daftar Akun</h3>
                                </div>
                                <div class="card-body">
                                    <!-- Registration form-->
                                    <form action="<?= BASEURL; ?>/register/tambah" method="POST">
                                        <input type="hidden" name="id" id="id">
                                        <!-- Form Row-->


                                        <!-- Form Group (first name)-->
                                        <div class="form-group">
                                            <label class="small mb-1" for="nama">Nama</label>
                                            <input class="form-control py-4" id="nama" name="nama" type="text"
                                                placeholder="Masukan Nama Anda" required />
                                        </div>


                                        <!-- Form Group (email address) -->
                                        <div class="form-group">
                                            <label class="small mb-1" for="username">Username</label>
                                            <input class="form-control py-4" id="username" name="username" type="text"
                                                aria-describedby="emailHelp" placeholder="Masukan Username" />
                                        </div>
                                        <!-- Form Row    -->
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <!-- Form Group (password)-->
                                                <div class="form-group">
                                                    <label class="small mb-1" for="password">Password</label>
                                                    <input class="form-control py-4" id="password" name="password"
                                                        type="password" placeholder="Enter password" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Form Group (confirm password)-->
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputConfirmPassword">Confirm
                                                        Password</label>
                                                    <input class="form-control py-4" id="inputConfirmPassword"
                                                        type="password" placeholder="Confirm password" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Form Group (create account submit)-->
                                        <div class="form-group mt-4 mb-0"><button type="submit"
                                                class="btn btn-outline-orange">Tambah Data</button></div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="<?= BASEURL; ?>/login">Sudah Punya Akun? Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer mt-auto footer-dark">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &copy; Your Website 2020</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Privacy Policy</a>
                            &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts2.js"></script>
</body>

</html>