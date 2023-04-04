<x-backend.adminheader />




<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Coach Detail's</h3>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row g-3 mb-xl-3">
            <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1 row-cols-xxl-1 row-deck g-3">
                    <div class="col">
                        <div class="card profile-card">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Profile</h6>
                            </div>
                            <div class="card-body d-flex profile-fulldeatil flex-column">
                                <div class="profile-block text-center w220 mx-auto">
                                    <a href="#">
                                        <img src="assets/images/lg/avatar4.svg" alt="" class="avatar xl rounded img-thumbnail shadow-sm">
                                    </a>
                                    <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                        <span class="text-muted small">ID : 1</span>
                                    </div>
                                </div>
                                <div class="profile-info w-100">
                                    <h6 class="mb-0 mt-2  fw-bold d-block fs-6 text-center"> Joan Dyer</h6>
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
                                                <i class="icofont-unlocked"></i>
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
                    <div class="card auth-detailblock">
                        <!-- <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Authentication Details</h6>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#authchange"><i class="icofont-edit"></i></button>
                        </div> -->
                      
                    <div class="card-body">
                        <h5>Status</h5>
                        <!-- <span class="text-muted">Control all our newsletter and email related notifications to your email</span> -->
                        <div class="mt-4">
                            <div class="form-check form-switch mt-2">
                                <input class="form-check-input" type="checkbox" id="np-Newsletter" checked="">
                                <label class="form-check-label" for="np-Newsletter"> Publish</label>
                            </div>
                        </div>
                    </div>
                    </div>



                </div>

            </div>

        </div>
        <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12">

            <div class="card">
                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                    <h6 class="mb-0 fw-bold ">Total's</h6>
                </div>
                <div class="card-body">
                    <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Categories</th>
                                <th>Uploaded Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="order-details.html"><strong>1</strong></a></td>
                                <td><span> Oculus VR </span></td>
                                <td><img src="assets/images/product/product-1.jpg" class="avatar lg rounded me-2" alt="profile-image"></td>
                                <td>Courses</td>
                                <td>June 16, 2021</td>
                            </tr>
                            <tr>
                                <td><a href="order-details.html"><strong>2</strong></a></td>
                                <td><span>Wall Clock</span></td>
                                <td><img src="assets/images/product/product-2.jpg" class="avatar lg rounded me-2" alt="profile-image"></td>
                                <td>Articles</td>
                                <td>June 16, 2021</td>
                            </tr>
                            <tr>
                                <td><a href="order-details.html"><strong>3</strong></a></td>
                                <td><span>Note Diaries</span></td>
                                <td><img src="assets/images/product/product-3.jpg" class="avatar lg rounded me-2" alt="profile-image"></td>
                                <td>Courses</td>
                                <td>June 16, 2021</td>
                            </tr>
                            <tr>
                                <td><a href="order-details.html"><strong>4</strong></a></td>
                                <td><span>Flower Port</span></td>
                                <td><img src="assets/images/product/product-4.jpg" class="avatar lg rounded me-2" alt="profile-image"></td>
                                <td>Books</td>
                                <td>June 16, 2021</td>
                            </tr>
                            <tr>
                                <td><a href="order-details.html"><strong>5</strong></a></td>
                                <td><span>Oculus VR</span></td>
                                <td><img src="assets/images/product/product-1.jpg" class="avatar lg rounded me-2" alt="profile-image"></td>
                                <td>Articles</td>
                                <td>June 17, 2021</td>
                            </tr>
                            <tr>
                                <td><a href="order-details.html"><strong>6</strong></a></td>
                                <td><span>Wall Clock</span></td>
                                <td><img src="assets/images/product/product-4.jpg" class="avatar lg rounded me-2" alt="profile-image"></td>

                                <td>Books</td>
                                <td>June 18, 2021</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- Row end  -->
</div>
</div>


</div>

</div>

<script>
    $(document).ready(function() {
        $('#myProjectTable')
            .addClass('nowrap')
            .dataTable({
                responsive: true,
                columnDefs: [{
                    targets: [-1, -3],
                    className: 'dt-body-right'
                }]
            });
    });
</script>

<x-backend.adminfooter />