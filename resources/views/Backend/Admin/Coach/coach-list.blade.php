<x-backend.adminheader />


<!-- Body: Body -->
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Coach Information</h3>
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
                                    
                                    <th>Name of Coach</th>
                                    <th>Plan</th>
                                    <th>Register Date</th>
                                    <th>Mail</th>
                                    <th>Phone</th>
                                    <th>Total Courses</th>
                                    <th>Total Books</th>
                                    <th>Status</th>
                                    <!-- <th>Actions</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($coachList as $data)
                                <tr>
                                    <td><a href="javascript:void();"><span class="fw-bold ms-1">{{$data['full_name']}}</span></a></td>
                                    <td>{{$data['plan']}}</td>
                                    <td>
                                        {{date('d-m-Y', strtotime($data["created_at"]))}}
                                    </td>
                                    <td>{{$data['email']}}</td>
                                    <td>{{$data['mobile']}}</td>
                                    <td>18</td>
                                    <td>18</td>
                                    <td>
                                        <div class="form-check form-switch mt-2">
                                            <input class="form-check-input" type="checkbox" id="np-Newsletter">
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->
    </div>
</div>


<!-- Add Coach-->
<div class="modal fade" id="expadd" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="expaddLabel">Add Coach</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label for="item" class="form-label">Coach Name</label>
                                <input type="text" class="form-control" id="item">
                            </div>
                            <div class="col-sm-12">
                                <label for="taxtno" class="form-label">Coach Profile</label>
                                <input type="File" class="form-control" id="taxtno">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="depone" class="form-label">Country</label>
                                <input type="text" class="form-control" id="depone">
                            </div>
                            <div class="col-sm-6">
                                <label for="abc" class="form-label">Coach Register date</label>
                                <input type="date" class="form-control w-100" id="abc">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="abc11" class="form-label">Mail</label>
                                <input type="text" class="form-control" id="abc11">
                            </div>
                            <div class="col-sm-6">
                                <label for="abc111" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="abc111">
                            </div>
                        </div>


                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Coach-->
<div class="modal fade" id="expedit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="expeditLabel"> Edit Coach</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label for="item1" class="form-label">Coach Name</label>
                                <input type="text" class="form-control" id="item1" value="Cloth">
                            </div>
                            <div class="col-sm-12">
                                <label for="taxtno1" class="form-label">Coach Profile</label>
                                <input type="file" class="form-control" id="taxtno1">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label class="form-label">Country</label>
                                <input type="text" class="form-control" value="South Africa">
                            </div>
                            <div class="col-sm-6">
                                <label for="abc1" class="form-label">Coach Register date</label>
                                <input type="date" class="form-control w-100" id="abc1" value="2021-03-12">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="mailid" class="form-label">Mail</label>
                                <input type="text" class="form-control" id="mailid" value="PhilGlover@gmail.com">
                            </div>
                            <div class="col-sm-6">
                                <label for="phoneid" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phoneid" value="843-555-0175">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>

</div>

</div>



<x-backend.adminfooter />