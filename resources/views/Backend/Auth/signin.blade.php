<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/ui-elements/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Feb 2023 06:46:04 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Signin </title>
    <link rel="icon" href="{{asset('admin/images/logo_1-08.png')}}" type="image/x-icon"> <!-- Favicon-->

    <!-- project css file  -->
    <link rel="stylesheet" href="{{asset('admin/css/ebazar.style.min.css')}}">
</head>

<body>
    <div id="ebazar-layout" class="theme-blue">

        <!-- main body area -->
        <div class="main p-2 py-3 p-xl-5 ">

            <!-- Body: Body -->
            <div class="body d-flex p-0 p-xl-5">
                <div class="container-xxl">

                    <div class="row g-0">
                        <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                            <div style="max-width: 25rem;">
                                <div class="text-center mb-5">
                                    <i class="bi bi-bag-check-fill  text-primary" style="font-size: 90px;"></i>
                                </div>
                                <div class="mb-5">
                                    <h2 class="color-900 text-center">A few clicks is all it takes.</h2>
                                </div>
                                <!-- Image block -->
                                <div class="">
                                    <img src="admin/images/login-img.svg" alt="login-img">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                            <div class="w-100 p-3 p-md-5 card border-0 shadow-sm" style="max-width: 32rem;">
                                <!-- Form -->
                                <form class="row g-1 p-3 p-md-4" action="{{url('/admin-login')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12 text-center mb-5">
                                        <h1>Admin Sign in</h1>
                                    </div>
                                    
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label">Email address</label>
                                                <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="name@example.com">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <div class="form-label">
                                                    <span class="d-flex justify-content-between align-items-center">
                                                        Password
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="***************">
                                            </div>
                                        </div>
                                        <div class="col-12 text-center mt-4">
                                            <!-- <a href="{{ url('/') }}" class="btn btn-lg btn-block btn-light lift text-uppercase" atl="signin">SIGN IN</a> -->
                                            <button class="btn btn-primary btn-flat" type="submit">SIGN IN</button>
                                        </div>
                                        @if(session("loginerror"))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session("loginerror") }}
                                        </div>
                                        @endif
                                </form>
                                <!-- End Form -->

                            </div>
                        </div>
                    </div> <!-- End Row -->

                </div>
            </div>

        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>
</body>

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/ui-elements/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Feb 2023 06:46:05 GMT -->

</html>