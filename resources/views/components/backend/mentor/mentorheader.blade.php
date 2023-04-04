<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Feb 2023 06:45:15 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>I'm Football Coach</title>
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- plugin css file  -->
    <link rel="stylesheet" href="{{asset('admin/plugin/datatables/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugin/datatables/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugin/multi-select/css/multi-select.css')}}"><!-- Multi Select Css -->
    <link rel="stylesheet" href="{{asset('admin/plugin/bootstrap-tagsinput/bootstrap-tagsinput.css')}}"><!-- Bootstrap Tagsinput Css -->
    <link rel="stylesheet" href="{{asset('admin/plugin/cropper/cropper.min.css')}}"><!--Cropperer Css -->
    <link rel="stylesheet" href="{{asset('admin/plugin/dropify/dist/css/dropify.min.css')}}" /><!-- Dropify Css -->
    <link rel="stylesheet" href="{{asset('admin/plugin/datatables/responsive.dataTables.min.css')}}"><!-- Datatable Css -->
    <link rel="stylesheet" href="{{asset('admin/plugin/datatables/dataTables.bootstrap5.min.css')}}"><!-- Datatable Css -->

    <!-- project css file  -->
    <link rel="stylesheet" href="{{asset('admin/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style-2.css')}}">
</head>

<body>


    <div id="ebazar-layout" class="theme-green">

        <!-- sidebar -->
        <div class="sidebar px-4 py-4 py-md-4 me-0">
            <div class="d-flex flex-column h-100">
                <a href="index.php" class="mb-0 brand-icon">
                    <span class="logo-text">Mentor</span>
                </a>

                <a href="index.php" class="mb-0 brand-icon">
                    <img src="assets/images/logo.png" alt="">

                </a>

                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1 mt-3">
                    <li><a class="m-link active" href="{{ url('mentor-dashboard') }}"><i class="icofont-home fs-5"></i> <span>Dashboard</span></a></li>
                    <li><a class="ms-link" href="{{ url('mentor-profile') }}"><i class="icofont-funky-man fs-5"></i><span>Profile</span></a></li>
                   <!--  <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#customers-info" href="#">
                            <i class="icofont-funky-man fs-5"></i> <span>Coach</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <ul class="sub-menu collapse" id="customers-info">
                            <li><a class="ms-link" href="coach-view.php">View Coach</a></li>
                        </ul>
                    </li> -->
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Injured" href="#">
                            <i class="icofont-medical-sign-alt fs-5"></i> <span>Injured Member</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <ul class="sub-menu collapse" id="menu-Injured">
                            <li><a class="ms-link" href="{{ url('add-injured-players') }}">Add Injured Member</a></li>
                            <li><a class="ms-link" href="{{ url('injured-players') }}">View Injured Member</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#Players" href="#">
                            <i class="icofont-chart-flow fs-5"></i> <span>Players</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <ul class="sub-menu collapse" id="Players">
                            <li><a class="ms-link" href="{{ url('mentor-players') }}">View Players</a></li>
                        </ul>
                    </li>
                    <!-- <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-inventory" href="#">
                            <i class="icofont-chart-histogram fs-5"></i> <span>Inventory</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <ul class="sub-menu collapse" id="menu-inventory">
                            <li><a class="ms-link" href="inventory-info.html">Stock List</a></li>
                            <li><a class="ms-link" href="purchase.html">Purchase</a></li>
                            <li><a class="ms-link" href="supplier.html">Supplier</a></li>
                            <li><a class="ms-link" href="returns.html">Returns</a></li>
                            <li><a class="ms-link" href="department.html">Department</a></li>
                        </ul>
                    </li> -->


                </ul>
            </div>
        </div>

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4">

            <!-- Body: Header -->
            <div class="header">
                <nav class="navbar py-4">
                    <div class="container-xxl">

                        <!-- header rightbar icon -->
                        <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                            <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                                <div class="u-info me-2">
                                    <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">John Quinn</span></p>
                                    <small>Admin Profile</small>
                                </div>
                                <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                    <img class="avatar lg rounded-circle img-thumbnail" src="{{asset('admin/images/profile_av.svg')}}" alt="profile">
                                </a>
                                <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                    <div class="card border-0 w280">
                                        <div class="card-body pb-0">
                                            <div class="d-flex py-1">
                                                <img class="avatar rounded-circle" src="{{asset('admin/images/profile_av.svg')}}" alt="profile">
                                                <div class="flex-fill">
                                                    <p class="mb-0"><span class="font-weight-bold">John Quinn</span></p>
                                                    <small class="">Johnquinn@gmail.com</small>
                                                </div>
                                            </div>

                                            <div>
                                                <hr class="dropdown-divider border-dark">
                                            </div>
                                        </div>
                                        <div class="list-group m-2 ">
                                            <a href="ui-elements/auth-signin.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-5 me-3"></i>Signout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="setting ms-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Settingmodal"><i class="icofont-gear-alt fs-5"></i></a>
                </div> -->
                        </div>

                        <!-- menu toggler -->
                        <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                            <span class="fa fa-bars"></span>
                        </button>

                        <!-- main menu Search-->
                        <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                            <!-- <div class="input-group flex-nowrap input-group-lg">
                                <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                                <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                            </div> -->
                        </div>

                    </div>
                </nav>
            </div>