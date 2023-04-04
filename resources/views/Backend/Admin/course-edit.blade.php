<x-backend.adminheader />


<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">

        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Course Edit</h3>
                </div>
            </div>
        </div> <!-- Row end  -->

        <div class="row g-3 mb-3">
            <div class="col-xl-12 col-lg-12">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Basic information</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label class="form-label">Course Title</label>
                                    <input type="text" class="form-control" value="Web Developer">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Course Subtitle</label>
                                    <input type="text" class="form-control" value="front-end">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Instructor's Name</label>
                                    <input type="text" class="form-control" value="Saveasweb">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Course Hours</label>
                                    <input type="text" class="form-control" value="5">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Course Price</label>
                                    <input type="text" class="form-control" value="500">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Course Language</label>
                                    <input type="text" class="form-control" value="English">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">short Description</label>
                                    <input type="text" class="form-control" value="Web development is the building and maintenance of websites">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Long Description</label>
                                    <div id="editor">
                                        <h4>Web development is the building and maintenance of websites</h4>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Images</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row g-3 align-items-center">

                                <div class="col-md-12">
                                    <label class="form-label">Thumnail Images</label>
                                    <!-- <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small> -->
                                    <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" data-max-file-size="2M" data-max-height="2000" data-default-file="assets/images/xs/book1.jpg">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Videos</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row g-3 align-items-center">

                                <div class="col-md-12">
                                    <label class="form-label">Video Title</label>
                                    <input type="text" class="form-control" value="Web Developer">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Course Video URL</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">https://</span>
                                        <input type="text" class="form-control" value="Web Developer">
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div><!-- Row end  -->
    </div>

</div>

<div class="row align-items-center ">
    <div class="border-0 mb-4">
        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-center border-bottom flex-wrap gap-5">
            <button type="submit" class="btn bg-warning btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save & Unpublish</button>
            <button type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save & Publish</button>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        //Ch-editer
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
        //Datatable
        $('#myCartTable')
            .addClass('nowrap')
            .dataTable({
                responsive: true,
                columnDefs: [{
                    targets: [-1, -3],
                    className: 'dt-body-right'
                }]
            });
        $('.deleterow').on('click', function() {
            var tablename = $(this).closest('table').DataTable();
            tablename
                .row($(this)
                    .parents('tr'))
                .remove()
                .draw();

        });
        //Multiselect
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
    });

    $(function() {
        $('.dropify').dropify();

        var drEvent = $('#dropify-event').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-dÃ©posez un fichier ici ou cliquez',
                replace: 'Glissez-dÃ©posez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'DÃ©solÃ©, le fichier trop volumineux'
            }
        });
    });
</script>







<x-backend.adminfooter />