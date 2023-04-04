<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Feb 2023 06:45:15 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>I'm Football Coach</title>
    <link rel="icon" href="admin/images/logo_1-08.png" type="image/x-icon"> <!-- Favicon-->
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
                    <span class="logo-text">Admin</span>
                </a>

                <a href="index.php" class="mb-0 brand-icon">
                    <img src="assets/images/logo.png" alt="">

                </a>

                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1 mt-3">
                    <li><a class="m-link active" href="{{url('/admin/dashboard')}}"><i class="icofont-home fs-5"></i> <span>Dashboard</span></a></li>
                    <!--<li><a class="ms-link" href="{{url('/acount')}}"><i class="icofont-funky-man fs-5"></i><span>Profile</span></a></li>-->
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#customers-info" href="#">
                            <i class="icofont-funky-man fs-5"></i> <span>Coach</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <ul class="sub-menu collapse" id="customers-info">
                            <li><a class="ms-link" href="{{url('/admin/coach-list')}}">View Coach</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Courses" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Courses</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <ul class="sub-menu collapse" id="menu-Courses">
                            <li><a class="ms-link" href="{{url('/course-add')}}">Add Courses</a></li>
                            <li><a class="ms-link" href="{{url('/course')}}">View Courses</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Books" href="#">
                            <i class="icofont-book fs-5"></i> <span>Books</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <ul class="sub-menu collapse" id="menu-Books">
                            <li><a class="ms-link" href="{{url('/admin-books')}}">My Books</a></li>
                            <li><a class="ms-link" href="{{url('/books-add')}}">Add Books</a></li>
                            <li><a class="ms-link" href="{{url('/books')}}">View Books</a></li>
                            </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Article" href="#">
                            <i class="icofont-paper fs-5"></i> <span>Articles</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <ul class="sub-menu collapse" id="menu-Article">
                            <li><a class="ms-link" href="{{url('/admin-articles')}}">My Articles</a></li>
                            <li><a class="ms-link" href="{{url('/articles-add')}}">Add Articles</a></li>
                            <li><a class="ms-link" href="{{url('/articles')}}">View Articles</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#Players" href="#">
                            <i class="icofont-chart-flow fs-5"></i> <span>Players</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <ul class="sub-menu collapse" id="Players">
                            <li><a class="ms-link" href="{{url('/players')}}">View Players</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-order" href="#">
                            <i class="icofont-notepad fs-5"></i> <span>Orders</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <ul class="sub-menu collapse" id="menu-order">
                            <li><a class="ms-link" href="{{url('/order')}}">Orders List</a></li>
                            <!-- <li><a class="ms-link" href="order-details.html">Order Details</a></li>
                            <li><a class="ms-link" href="order-invoices.html">Order Invoices</a></li> -->
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-sale" href="#">
                            <i class="icofont-sale-discount fs-5"></i> <span>Sales Promotion</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <ul class="sub-menu collapse" id="menu-sale">
                            <li><a class="ms-link" href="{{url('/coupon-add')}}">Add Coupons</a></li>
                            <li><a class="ms-link" href="{{url('/coupon')}}">View Coupons</a></li>
                            <!-- <li><a class="ms-link" href="coupon-edit.php">Coupons Edit</a></li> -->
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
                                            <a href="{{url('/dashboard')}}" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-5 me-3"></i>Signout</a>
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
                            <!--<div class="input-group flex-nowrap input-group-lg">-->
                            <!--    <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">-->
                            <!--    <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>-->
                            <!--</div>-->
                        </div>

                    </div>
                </nav>
            </div>