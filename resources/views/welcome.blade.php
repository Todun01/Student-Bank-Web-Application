{{-- @include('sweetalert::alert') --}}
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<head>

    <meta charset="utf-8" />
    <title>Sign In </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{env('APP_DESCRIPTION')}}" name="description" />
    <meta content="{{env('APP_AUTHOR')}}" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- Layout config Js -->
    <script src="{{asset('assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            {{-- <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <img src="{{asset('assets/images/NOOA LOGO.png')}}" alt="" height="70">
                                </a>
                            </div> --}}
                            <p class="mt-3 fs-15 fw-medium">NOOA STUDENT BANK</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Welcome!</h5>
                                    <p class="text-muted">Are you an Admin or a Student?</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <div class="row">
                                        <div class="col-xl-3 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate bg-primary">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <p class="text-uppercase fw-medium text-muted mb-0">Student</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <h5 class="text-success fs-14 mb-0">
                                                                <i class="las la-user-graduate"></i>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                        <div>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white"><span class="counter-value" data-target="559.25">Studying in this University</span></h4>
                                                            <p class="text-decoration-underline">Click here to login <i class="bx bx-chevrons-right"></i><i data-feather="chevrons-right"></i></p>
                                                        </div>
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <a href="{{url('user/login')}}">
                                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                                    <i class="bx bx-log-in text-success"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->

                                        <div class="col-xl-3 col-md-6" >
                                            <!-- card -->
                                            <div class="card card-animate bg-info">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <p class="text-uppercase fw-medium text-white-50 mb-0">Admin</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <h5 class="text-warning fs-14 mb-0">
                                                                <i class="las la-user-tie"></i>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                        <div>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="36894">Working in this University</span></h4>
                                                            <p class="text-decoration-underline text-white-50">Click here to login <i class="bx bx-chevrons-right"></i></p>
                                                        </div>
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <a href="">
                                                                <span class="avatar-title bg-white bg-opacity-25 rounded fs-3">
                                                                    <i class="bx bx-log-in text-white"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->

                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Don't have an account ? <a href="{{url('/user/register')}}" class="fw-semibold text-primary text-decoration-underline"> Signup </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> NOOA.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>

    <!-- particles js -->
    <script src="{{asset('assets/libs/particles.js/particles.js')}}"></script>
    <!-- particles app js -->
    <script src="{{asset('assets/js/pages/particles.app.js')}}"></script>
    <!-- password-addon init -->
    <script src="{{asset('assets/js/pages/password-addon.init.js')}}"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 12:54:30 GMT -->
</html>