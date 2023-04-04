<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Feb 2023 06:45:15 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>I'm Football Coach</title>
    <link rel="icon" href="{{asset('images/logo/logo_football.jpg')}}" type="image/x-icon"> <!-- Favicon-->
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" class="">

    <!-- project css file  -->
    <link rel="stylesheet" href="{{asset('admin/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style-2.css')}}">
</head>

<body>
    <div id="ebazar-layout" class="theme-green">

        <!-- sidebar -->
        <div class="sidebar px-4 py-4 py-md-4 me-0">
            <?php
            $userData = App\Models\Users::join('user_details', 'user_details.user_id', '=', 'users.id')
                ->where('users.id', session("USER_ID"))->first();
             
            
            $age = \Carbon\Carbon::parse($userData->birth_date)->diff(\Carbon\Carbon::now())->format('%y years');
            ?>
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card profile-card flex-column mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Profile</h6>
                            </div>
                            <div class="card-body d-flex profile-fulldeatil flex-column">
                                <div class="profile-block w220  ">
                                    <a href="#">
                                        @if($userData->profile_image)
                                        <img src="{{asset('coach/profileImage/'.$userData->profile_image)}}" alt="" class="avatar xl rounded img-thumbnail shadow-sm">
                                        @else
                                        <img src="https://placehold.jp/70x70.png" alt="" class="avatar xl rounded img-thumbnail shadow-sm">
                                        @endif
                                    </a>
                                    <button class="btn btn-primary" style="position: absolute;top:15px;right: 15px;" data-bs-toggle="modal" data-bs-target="#editprofile"><i class="icofont-edit"></i></button>
                                    <div class="about-info d-flex   mt-3   flex-column">
                                        <span class="text-muted small">Coach ID : PXL-0001</span>
                                    </div>
                                </div>
                                <div class="profile-info w-100">
                                    <h6 class="mb-0 mt-2  fw-bold d-block fs-6  ">{{$userData->full_name}}</h6>
                                    <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted   mx-auto d-block">{{$age}}, {{$userData->country ? $userData->country : " "}}</span>
                                    <!-- <p class="mt-2">Duis felis ligula, pharetra at nisl sit amet, ullamcorper fringilla mi. Cras luctus metus non enim porttitor sagittis. Sed tristique scelerisque arcu id dignissim.</p> -->
                                    <div class="row g-2 pt-2">
                                        <div class="col-xl-12">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-ui-touch-phone"></i>
                                                <span class="ms-2">{{$userData->mobile}} </span>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-email"></i>
                                                <span class="ms-2">{{$userData->email}}</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-birthday-cake"></i>
                                                <span class="ms-2">{{$userData->birth_date ? $userData->birth_date : ""}}</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-address-book"></i>
                                                <span class="ms-2">{{$userData->address ? $userData->address : ""}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card auth-detailblock">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">CLUB & LICENCE</h6>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#authchange"><i class="icofont-edit"></i></button>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label class="form-label"><strong>Club Name :</strong></label>
                                        <P>{{$userData->club_details}}</P>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label"><strong>Licence Number :</strong></label>
                                        <P>{{$userData->licence_number ? $userData->licence_number : " " }}</P>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Edit Password-->
            <div class="modal fade" id="authchange" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title  fw-bold" id="expeditLabel"> Edit CLUB & LICENCE</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="deadline-form">
                                <form action="{{url('/coach/edit-coach-club-licence')}}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="user_id" value="{{$userData->id}}">
                                    @csrf
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-12">
                                            <label for="club_details" class="form-label">Club Name</label>
                                            <input type="text" class="form-control" id="club_details" name="club_details" value="{{$userData->club_details}}">
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="licence_number" class="form-label">license Number</label>
                                            <input type="text" class="form-control" id="licence_number" name="licence_number" value="{{$userData->licence_number}}">
                                        </div>

                                    </div>
                                
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="editprofile" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title  fw-bold" id="expeditLabel1111"> Edit Profile</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="deadline-form">
                                <form action="{{url('/coach/edit-coach-profile')}}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="user_id" value="{{$userData->id}}">
                                    @csrf
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-12">
                                            <label for="item100" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{$userData->full_name}}">
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="taxtno200" class="form-label">Profile</label>
                                            <input type="file" class="form-control" id="profile_image" name="profile_image">
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-12">
                                            <label class="form-label">Details</label>
                                            <textarea class="form-control" rows="3" name="details" id="details" >{{$userData->details}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-6">
                                            <label class="form-label">Country</label>
                                            <input type="text" class="form-control" id="country" name="country" value="{{$userData->country}}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="abc1" class="form-label">Birthday date</label>
                                            <input type="date" class="form-control w-100" id="birth_date" name="birth_date" value="{{$userData->birth_date}}">
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-6">
                                            <label for="email" class="form-label">Mail</label>
                                            <input type="mail" class="form-control" id="email" name="email" value="{{$userData->email}}" readonly>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="mobile" class="form-label">Phone</label>
                                            <input type="text" class="form-control" id="mobile" name="mobile" value="{{$userData->mobile}}">
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-12">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" rows="3" id="address" name="address">{{$userData->address}}</textarea>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4">

            <!-- Body: Header -->
            <div class="header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">

                        <a href="{{url('coach/coach-dashboard')}}" class="mb-0 brand-icon">
                            <img class="logo" src="{{asset('images/logo/logo_football.jpg')}}" alt="">
                        </a>
                        <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                            <span class="fa fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                                <div class="u-info me-2">
                                    <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">{{$userData->full_name}}</span></p>
                                    <small>Coach Profile</small>
                                </div>
                                <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                    @if($userData->profile_image)
                                    <img class="avatar lg rounded-circle img-thumbnail" src="{{asset('coach/profileImage/'.$userData->profile_image)}}" alt="profile">
                                    @else
                                    <img class="avatar lg rounded-circle img-thumbnail" src="https://placehold.jp/70x70.png" alt="profile">
                                    @endif
                                </a>
                                <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                    <div class="card border-0 w280">
                                        <div class="card-body pb-0">
                                            <div class="d-flex py-1">
                                                @if($userData->profile_image)
                                                <img class="avatar rounded-circle" src="{{asset('coach/profileImage/'.$userData->profile_image)}}" alt="profile">
                                                @else
                                                <img class="avatar rounded-circle" src="https://placehold.jp/70x70.png" alt="profile">
                                                @endif
                                                <div class="flex-fill">
                                                    <p class="mb-0"><span class="font-weight-bold">{{$userData->full_name}}</span></p>
                                                    <small class="">{{$userData->email}}</small>
                                                </div>
                                            </div>

                                            <div>
                                                <hr class="dropdown-divider border-dark">
                                            </div>
                                        </div>
                                        <div class="list-group m-2 ">
                                            <a href="{{url('/logout')}}" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-5 me-3"></i>Signout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </nav>
             
            </div>