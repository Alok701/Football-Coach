<x-backend.adminheader />

<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Admin Profile</h3>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row g-3">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card profile-card flex-column mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Profile</h6>
                    </div>
                    <div class="card-body d-flex profile-fulldeatil flex-column">
                        <div class="profile-block text-center w220 mx-auto">
                            <a href="#">
                                <img src="assets/images/lg/avatar4.svg" alt="" class="avatar xl rounded img-thumbnail shadow-sm">
                            </a>
                            <button class="btn btn-primary" style="position: absolute;top:15px;right: 15px;" data-bs-toggle="modal" data-bs-target="#editprofile"><i class="icofont-edit"></i></button>
                            <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                <span class="text-muted small">Admin ID : PXL-0001</span>
                            </div>
                        </div>
                        <div class="profile-info w-100">
                            <h6 class="mb-0 mt-2  fw-bold d-block fs-6 text-center">Adrian Allan</h6>
                            <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted text-center mx-auto d-block">24 years, California</span>
                            <p class="mt-2">Duis felis ligula, pharetra at nisl sit amet, ullamcorper fringilla mi. Cras luctus metus non enim porttitor sagittis. Sed tristique scelerisque arcu id dignissim.</p>
                            <div class="row g-2 pt-2">
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-center">
                                        <i class="icofont-ui-touch-phone"></i>
                                        <span class="ms-2">202-555-0174 </span>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-center">
                                        <i class="icofont-email"></i>
                                        <span class="ms-2">adrianallan@gmail.com</span>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-center">
                                        <i class="icofont-birthday-cake"></i>
                                        <span class="ms-2">19/03/1980</span>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-center">
                                        <i class="icofont-address-book"></i>
                                        <span class="ms-2">2734 West Fork Street,EASTON 02334.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card auth-detailblock">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Authentication Details</h6>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#authchange"><i class="icofont-edit"></i></button>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label col-6 col-sm-5">User Name :</label>
                                <span><strong>Adrian007</strong></span>
                            </div>
                            <div class="col-12">
                                <label class="form-label col-6 col-sm-5">Login Password :</label>
                                <span><strong>Abc*******</strong></span>
                            </div>
                            <div class="col-12">
                                <label class="form-label col-6 col-sm-5">Last Login:</label>
                                <span><strong>128.456.89 (Apple) safari</strong></span>
                            </div>
                            <div class="col-12">
                                <label class="form-label col-6 col-sm-5">Last Password change:</label>
                                <span><strong>3 Month Ago</strong></span>
                            </div>
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
                <h5 class="modal-title  fw-bold" id="expeditLabel"> Edit Authentication</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="item1" class="form-label">User Name</label>
                                <input type="text" class="form-control" id="item1" value="Adrian007">
                            </div>
                            <div class="col-sm-6">
                                <label for="taxtno111" class="form-label">Password</label>
                                <input type="password" class="form-control" id="taxtno111" value="abcxyzabc">
                            </div>
                            <div class="col-sm-12">
                                <label for="taxtno11" class="form-label">Conform Password</label>
                                <input type="text" class="form-control" id="taxtno11">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit profile-->
<div class="modal fade" id="editprofile" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="expeditLabel1111"> Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label for="item100" class="form-label">Name</label>
                                <input type="text" class="form-control" id="item100" value="Adrian Allan">
                            </div>
                            <div class="col-sm-12">
                                <label for="taxtno200" class="form-label">Profile</label>
                                <input type="file" class="form-control" id="taxtno200">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label class="form-label">Details</label>
                                <textarea class="form-control" rows="3">Duis felis ligula, pharetra at nisl sit amet, ullamcorper fringilla mi. Cras luctus metus non enim porttitor sagittis. Sed tristique scelerisque arcu id dignissim. Aenean sed erat ut est commodo tristique ac a metus. Praesent efficitur congue orci. Fusce in mi condimentum mauris maximus sodales. Quisque dictum est augue, vitae cursus quam finibus in. Nulla at tempus enim. Fusce sed mi et nibh laoreet consectetur nec vitae lacus.</textarea>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label class="form-label">Country</label>
                                <input type="text" class="form-control" value="California">
                            </div>
                            <div class="col-sm-6">
                                <label for="abc1" class="form-label">Birthday date</label>
                                <input type="date" class="form-control w-100" id="abc1" value="1980-03-19">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="mailid" class="form-label">Mail</label>
                                <input type="text" class="form-control" id="mailid" value="adrianallan@gmail.com">
                            </div>
                            <div class="col-sm-6">
                                <label for="phoneid" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phoneid" value="202-555-0174">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" rows="3">2734 West Fork Street,EASTON 02334.</textarea>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<x-backend.adminfooter />