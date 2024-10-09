<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('admin/images/logo.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('page_title')</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Ayurmarts - eCommerce Template">
    <meta name="author" content="p-themes">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('marketplace/assets/images/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('marketplace/assets/images/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('marketplace/assets/images/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('marketplace/assets/images/icons/site.html')}}">
    <link rel="mask-icon" href="{{ asset('marketplace/assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="shortcut icon" href="{{ asset('marketplace/assets/images/icons/favicon.ico')}}">
    <meta name="apple-mobile-web-app-title" content="Ayurmarts">
    <meta name="application-name" content="Ayurmarts">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ asset('marketplace/assets/images/icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" href="{{ asset('marketplace/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('marketplace/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('marketplace/assets/css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('marketplace/assets/css/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('marketplace/assets/css/plugins/jquery.countdown.css') }}">
    <link rel="stylesheet" href="{{ asset('marketplace/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('marketplace/assets/css/skins/skin-demo-13.css') }}">
    <link rel="stylesheet" href="{{ asset('marketplace/assets/css/demos/demo-13.css') }}">

    <script src="{{ asset('marketplace/assets/js/jquery.min.js')}}"></script>


    {{-- toast --}}
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/base/plugins/extensions/ext-component-toastr.css') }}">

</head>

<body>
    <div class="page-wrapper">

        @if (Request::is('/')  || Request::is('home'))
            @include('marketplace.sections.header-2')
        @else
            @include('marketplace.sections.header-2')
        @endif


        <main class="main">

            @yield('content')

        </main><!-- End .main -->
        @if (Request::is('/')  || Request::is('home'))
            @include('marketplace.sections.footer')
        @else
            @include('marketplace.sections.footer-2')
        @endif


    </div><!-- End .page-wrapper -->


    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>
    <!-- Mobile Menu -->
    @include('marketplace.sections.mobile-menu')
    <!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item" style="border: none;">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->
{{--
    @include('marketplace.components.news-letter') --}}

    <!-- Plugins JS File -->

    <script src="{{ asset('marketplace/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('marketplace/assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{ asset('marketplace/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('marketplace/assets/js/superfish.min.js')}}"></script>
    <script src="{{ asset('marketplace/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('marketplace/assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{ asset('marketplace/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('marketplace/assets/js/jquery.plugin.min.js')}}"></script>
    <script src="{{ asset('marketplace/assets/js/jquery.countdown.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('marketplace/assets/js/main.js')}}"></script>
    <script src="{{ asset('marketplace/assets/js/demos/demo-13.js')}}"></script>

    <script src="{{ asset('marketplace/assets/js/custom.js')}}"></script>


    {{-- toast --}}
    <script src="{{ asset('admin/vendors/js/extensions/toastr.min.js') }}"></script>


    <script>
        $(document) .ready(function(){
            // this is for scrolling category tabs
            var li =  $(".owl-item li a.nav-link");
            $(".owl-item li").click(function(){
                li.removeClass('active');

            });
        });
    </script>


</body>

<!-- Ayurmarts/index-13.html  22 Nov 2019 09:59:31 GMT -->
</html>
