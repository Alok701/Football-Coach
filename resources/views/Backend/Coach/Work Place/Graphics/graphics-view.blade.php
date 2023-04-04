<x-backend.coach.back-coach-header />

<!-- Body: Body -->
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Graphics List</h3>
                    <a href="{{url('/coach/coach-graphics-add')}}"> <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#expadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add Graphics</button></a>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row clearfix g-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SKU NO</th>
                                    <th>Graphics Image</th>
                                    <th>Name of Graphics</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>#CS-00002</strong></td>
                                    <td>
                                        <a href="{{url('/coach/coach-graphics-edit')}}">
                                            <img class="avatar rounded extra" src="{{asset('coach/images/book1.jpg')}}" alt="">

                                        </a>
                                    </td>
                                    <td>
                                        <span class="fw-bold"> Inverting the Pyramid: The History of Soccer Tactics by Jonathan Wilson </span>
                                    </td>
                                    <td><i class="icofont-rupee"></i><span class="fw-bold"> 999</span></td>
                                    <td><span class="badge bg-success">Published</span></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <a href="{{url('/coach/coach-graphics-edit')}}"><button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button></a>
                                            <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>#CS-00014</strong></td>
                                    <td>
                                        <a href="graphics-edit.php">
                                            <img class="avatar rounded extra" src="{{asset('coach/images/book2.jpg')}}" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <span class="fw-bold"> Inverting the Pyramid: The History of Soccer Tactics by Jonathan Wilson </span>
                                    </td>
                                    <td><i class="icofont-rupee"></i><span class="fw-bold"> 999</span></td>
                                    <td><span class="badge bg-danger">Unpublished</span></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <a href="{{url('/coach/coach-graphics-edit')}}"><button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button></a>
                                            <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->
    </div>
</div>

<x-backend.coach.back-coach-footer />