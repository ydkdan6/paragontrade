

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="csrf-token"
      content="IpM2jsxM0fQUppANKiGJEEg90tBBpo8AIqbWJq1u"
    />
    <title>Paragontradeinvestment | Creaet Account</title>

    <link
      rel="icon"
      href="storage/app/public/photos/8Pdio1Screenshot_2024-06-23_171031-removebg-preview.png1719329154"
      type="image/png"
    />

    <link href="temp/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link
      href="temp/css/materialdesignicons.min.css"
      rel="stylesheet"
      type="text/css"
    />

    <link rel="stylesheet" href="temp/css/line.css" />

    <!-- Main Css -->
    <link href="temp/css/style.css" rel="stylesheet" type="text/css" />
    <link href="temp/css/colors/default.css" rel="stylesheet" />
  </head>
  <body class="h-100 bg-soft-primary">
    <section class="y auth">
      <div class="container">
        <div class="pb-3 row justify-content-center">
          <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
            <a href="../index.html"
              ><img
                src="storage/app/public/photos/8Pdio1WhatsApp_Image_2024-06-23_at_16.24.55_6961f816-removebg-preview.png1719329154"
                alt=""
                class="mb-3 img-fluid auth__logo"
            /></a>

            <div class="bg-white shadow card login-page roundedd border-1">
              <div class="card-body">
                <h4 class="text-center card-title">Create an Account</h4>
                <form
                  method="POST"
                  action="../account/registration-handler.php"
                  class="mt-4 login-form"
                >
                <?php if (!empty($errors['general'])): ?>
            <div style="color: red;"><?php echo htmlspecialchars($errors['general']); ?></div>
        <?php endif; ?>
                  <input
                    type="hidden"
                    name="_token"
                    value="IpM2jsxM0fQUppANKiGJEEg90tBBpo8AIqbWJq1u"
                  />
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label
                          >UserName <span class="text-danger">*</span></label
                        >
                        <div class="position-relative">
                          <i data-feather="user" class="fea icon-sm icons"></i>
                          <input
                            type="text"
                            id="input1"
                            class="pl-5 form-control"
                            name="username"
                            value="<?php echo isset($full_name) ? htmlspecialchars($full_name) : ''; ?>"
                            id="input1"
                            placeholder="Enter Unique Username"
                            required
                          />
                          <?php if (!empty($errors['username'])): ?>
                <span style="color: red;"><?php echo htmlspecialchars($errors['username']); ?></span>
            <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label
                          >FullName <span class="text-danger">*</span></label
                        >
                        <div class="position-relative">
                          <i
                            data-feather="user-check"
                            class="fea icon-sm icons"
                          ></i>
                          <input
                            type="text"
                            class="pl-5 form-control"
                            name="name"
                            value=""
                            id="f_name"
                            placeholder="Enter FullName"
                            required
                          />
                          <?php if (!empty($errors['full_name'])): ?>
                <span style="color: red;"><?php echo htmlspecialchars($errors['full_name']); ?></span>
            <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label
                          >Your Email <span class="text-danger">*</span></label
                        >
                        <div class="position-relative">
                          <i data-feather="mail" class="fea icon-sm icons"></i>
                          <input
                            type="email"
                            class="pl-5 form-control"
                            name="email"
                            value=""
                            id="email"
                            placeholder="name@example.com"
                            required
                          />
                          <?php if (!empty($errors['email'])): ?>
                <span style="color: red;"><?php echo htmlspecialchars($errors['email']); ?></span>
            <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label
                          >Phone Number
                          <span class="text-danger">*</span></label
                        >
                        <div class="position-relative">
                          <i data-feather="phone" class="fea icon-sm icons"></i>
                          <input
                            type="phone"
                            class="pl-5 form-control"
                            name="phone"
                            value=""
                            id="phone"
                            placeholder="Enter Phone number"
                            required
                          />
                          <?php if (!empty($errors['phone'])): ?>
                <span style="color: red;"><?php echo htmlspecialchars($errors['phone']); ?></span>
            <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label
                          >Password <span class="text-danger">*</span></label
                        >
                        <div class="position-relative">
                          <i data-feather="key" class="fea icon-sm icons"></i>
                          <input
                            type="password"
                            class="pl-5 form-control"
                            name="password"
                            id="password"
                            placeholder="Enter Password"
                            required
                          />
                          <?php if (!empty($errors['password'])): ?>
                <span style="color: red;"><?php echo htmlspecialchars($errors['password']); ?></span>
            <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label
                          >Confirm Password
                          <span class="text-danger">*</span></label
                        >
                        <div class="position-relative">
                          <i data-feather="key" class="fea icon-sm icons"></i>
                          <input
                            type="password"
                            class="pl-5 form-control"
                            name="password_confirmation"
                            value=""
                            id="confirm-password"
                            placeholder="Confirm Password"
                            required
                          />
                          <?php if (!empty($errors['password_confirmation'])): ?>
                <span style="color: red;"><?php echo htmlspecialchars($errors['password_confirmation']); ?></span>
            <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <!--end col-->

                    <!-- Country Option -->
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label
                          >Referral ID <span class="text-danger">*</span></label
                        >
                        <div class="position-relative">
                          <i data-feather="user" class="fea icon-sm icons"></i>
                          <input
                            type="text"
                            class="pl-5 form-control"
                            value="<?php echo isset($ref_by) ? htmlspecialchars($ref_by) : ''; ?>"
                            name="ref_by"
                            placeholder="optional referral id"
                          />
                        </div>
                      </div>
                    </div>

                    <!--end col-->

                    <div class="mb-0 col-lg-12">
                      <button
                        class="btn btn-primary btn-block pad"
                        type="submit"
                      >
                        Register
                      </button>
                    </div>
                    <!--end col-->
                    

                    <div class="mt-4 text-center col-lg-12"></div>
                    <!--end col-->
                    <!--end col-->

                    <div class="text-center col-12">
                      <p class="mt-3 mb-0">
                        <small class="mr-2 text-dark"
                          >Already have an account
                        </small>
                        <a href="login.php" class="text-dark font-weight-bold"
                          >Login</a
                        >
                      </p>
                    </div>
                    <!--end col-->

                    <div class="text-center col-12">
                      <p class="mt-4 mb-0">
                        <small class="mr-2 text-dark"
                          >&copy; Copyright 2024 &nbsp; Paragontradeinvestment
                          &nbsp; All Rights Reserved.</small
                        >
                      </p>
                    </div>
                  </div>
                  <!--end row-->
                </form>
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

    <script>
      $("#input1").on("keypress", function (e) {
        return e.which !== 32;
      });
    </script>
  </body>
</html>
