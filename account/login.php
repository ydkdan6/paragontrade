<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="IpM2jsxM0fQUppANKiGJEEg90tBBpo8AIqbWJq1u">
    <title>Paragontradeinvestment | User Login</title>

    <link rel="icon" href="storage/app/public/photos/8Pdio1Screenshot_2024-06-23_171031-removebg-preview.png1719329154"
        type="image/png" />
    <link href="temp/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="temp/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="temp/css/line.css">
    <link href="temp/css/style.css" rel="stylesheet" type="text/css" />
    <link href="temp/css/colors/default.css" rel="stylesheet">
</head>

<body class="h-100 bg-soft-primary">
    <section class="auth">
        <div class="container">
            <div class="pb-3 row justify-content-center">
                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                    <a href="../index.html"><img
                            src="storage/app/public/photos/8Pdio1WhatsApp_Image_2024-06-23_at_16.24.55_6961f816-removebg-preview.png1719329154"
                            alt="" class="mb-3 img-fluid auth__logo"></a>
                    <div class="bg-white shadow card login-page roundedd border-1">
                        <div class="card-body">
                            <h4 class="text-center card-title">User Login</h4>
<<<<<<< HEAD:account/login.php
                            <form method="POST" action="../account/login-handler.php" class="mt-4 login-form">
                            <!-- General error message -->
                <?php if (!empty($errors['general'])): ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars($errors['general']); ?>
                    </div>
                <?php endif; ?>

=======
                            <form method="post" action="authentication_system.php" class="mt-4 login-form">
>>>>>>> f206c90ebc37c37ff5a680fe217af4bbee43a627:account/login.html
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <div class="position-relative">
<<<<<<< HEAD:account/login.php
                                                <i class="fea icon-sm icons"></i>
                                                <input type="email" class="pl-5 form-control" name="email"
                                                    value="<?php echo htmlspecialchars($formData['email'] ?? ''); ?>"
                                                    id="email" placeholder="name@example.com" required>
                                                    <?php if (!empty($errors['email'])): ?>
                            <small class="text-danger"><?php echo htmlspecialchars($errors['email']); ?></small>
                        <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

=======
                                                <input type="email" class="pl-5 form-control" name="email" id="email" placeholder="name@example.com" required>
                                            </div>
                                        </div>
                                    </div>
>>>>>>> f206c90ebc37c37ff5a680fe217af4bbee43a627:account/login.html
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <div class="position-relative">
<<<<<<< HEAD:account/login.php
                                                <i class="fea icon-sm icons"></i>
                                                <input type="password" class="pl-5 form-control" name="password"
                                                    id="password" placeholder="Enter Password" required>
                                                    <?php if (!empty($errors['password'])): ?>
                            <small class="text-danger"><?php echo htmlspecialchars($errors['password']); ?></small>
                        <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck1" name="remember">
                                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                </div>
                                            </div>
                                            <p class="mb-0 forgot-pass"><a href="forgot-password.php"
                                                    class="text-dark font-weight-bold">Forgot password?</a></p>
                                        </div>
                                    </div>

                                    <div class="mb-0 col-lg-12">
                                        <button class="btn btn-primary btn-block pad" type="submit">Sign in</button>
                                    </div>

                                    <div class="text-center col-12">
                                        <p class="mt-3 mb-0"><small class="mr-2 text-dark">Don't have an account?</small>
                                            <a href="register.php" class="text-dark font-weight-bold">Sign Up</a>
                                        </p>
                                    </div>

                                    <div class="text-center col-12">
                                        <p class="mt-4 mb-0"><small class="mr-2 text-dark">&copy; Copyright 2024 &nbsp;
                                                Paragontradeinvestment &nbsp; All Rights Reserved.</small></p>
=======
                                                <input type="password" class="pl-5 form-control" name="password" id="password" placeholder="Enter Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-12">
                                        <button class="btn btn-primary btn-block pad" name="login" type="submit">Sign in</button>
>>>>>>> f206c90ebc37c37ff5a680fe217af4bbee43a627:account/login.html
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="temp/js/jquery-3.5.1.min.js"></script>
    <script src="temp/js/bootstrap.bundle.min.js"></script>
    <script src="temp/js/owl.carousel.min.js"></script>
    <script src="temp/js/owl.init.js"></script>
    <script src="temp/js/feather.min.js"></script>
    <script src="temp/js/bundle.html"></script>
    <script src="temp/js/app.js"></script>
    <script src="temp/js/widget.js"></script>
</body>

</html>
