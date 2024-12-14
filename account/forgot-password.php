<!DOCTYPE html>
<html lang="en">
    
<head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Paragontradeinvestment | Forgot your password</title>
        
        
        <link rel="icon" href="storage/app/public/photos/8Pdio1Screenshot_2024-06-23_171031-removebg-preview.png1719329154" type="image/png"/>
                   
            <link href="temp/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <!-- Icons -->
            <link href="temp/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        
            <link rel="stylesheet" href="temp/css/line.css">
            
            <!-- Main Css -->
            <link href="temp/css/style.css" rel="stylesheet" type="text/css" />
            <link href="temp/css/colors/default.css" rel="stylesheet">

            <link href="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.css" rel="stylesheet">
        

    </head>
    <body class="h-100 bg-soft-primary">
       <section class=" auth">
        <div class="container">
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                   
                    
                     
                        
                    
                    <div class="bg-white shadow card login-page roundedd border-1 ">
                        <div class="card-body">
                            <h4 class="text-center card-title">Password Reset</h4>
                            <?php if (isset($_SESSION['error'])): ?>
                                <div class="alert alert-danger">
                                    <?php 
                                        echo $_SESSION['error'];
                                        unset($_SESSION['error']);
                                    ?>
                                </div>
                            <?php endif; ?>
                            <form method="POST" action="password-reset-request.php"  class="mt-4 login-form">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i class="fea icon-sm icons"></i>
                                                <input type="email" class="pl-5 form-control" name ="email" value="" id="email" placeholder="name@example.com" required>
                                            </div>
                                                                                    </div>
                                    </div>
                                    <!--end col-->

                                    
                                    <div class="mb-0 col-lg-12">
                                        <button class="btn btn-primary btn-block pad" type="submit">Email Password Reset Link</button>
                                    </div>
                                    <!--end col-->


                                    <div class="text-center col-12">
                                        <p class="mt-3 mb-0"><small class="mr-2 text-dark">Repeat Login
                                                ?</small> <a href="login.php"
                                                class="text-dark font-weight-bold">Login</a></p>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="text-center col-12">
                                        <p class="mt-4 mb-0"><small class="mr-2 text-dark">&copy; Copyright  2024 &nbsp; Paragontradeinvestment &nbsp; All Rights Reserved.</small>
                                        </p>
                                    </div>
                                </div>
                                <!--end row-->
                            </form>
                             <!-- Show success message as a toast if set -->
                             <?php if (isset($_SESSION['message'])): ?>
                                <script src="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.js"></script>
                                <script>
                                    Toastify({
                                        text: "<?php echo $_SESSION['message']; ?>",
                                        duration: 5000, // 5 seconds
                                        close: true,
                                        gravity: "top", // top or bottom
                                        position: "right", // left, center, right
                                        backgroundColor: "#4CAF50", // green
                                    }).showToast();
                                    <?php unset($_SESSION['message']); // Clear message after displaying ?>
                                </script>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!---->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->




                 <script src="temp/js/jquery-3.5.1.min.js"></script>
            <script src="temp/js/bootstrap.bundle.min.js"></script>
            
            <!-- SLIDER -->
            <script src="temp/js/owl.carousel.min.js"></script>
            <script src="temp/js/owl.init.js"></script>
            <!-- Icons -->
            <script src="temp/js/feather.min.js"></script>
            <script src="temp/js/bundle.html"></script>
            
            <script src="temp/js/app.js"></script>
            <script src="temp/js/widget.js"></script>
       

    </body>

<!-- Mirrored from Paragontradeinvestment.com/account/forgot-password by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Dec 2024 20:24:38 GMT -->
</html>
