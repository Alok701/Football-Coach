<x-backend.coach.back-coach-header />

<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">

        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Graphics Edit</h3>
                </div>
            </div>
        </div> <!-- Row end  -->

        <div class="row g-3 mb-3">
            <div class="col-xl-8 col-lg-8">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Basic information</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row g-3 align-items-center">
                                <div class="col-md-12">
                                    <label class="form-label">Graphics Name</label>
                                    <input type="text" class="form-control" value="Inverting the Pyramid: The History of Soccer Tactics by Jonathan Wilson">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Author Name</label>
                                    <input type="text" class="form-control" value="Jonathan Wilson">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Graphics Description</label>
                                    <div id="editor">
                                        <p>This is some sample content.</p>
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Integer vitae leo quis urna pulvinar tristique..</li>
                                            <li>In porttitor sem at ligula vehicula, at scelerisque lectus placerat.</li>
                                            <li>Nullam ornare risus ac tellus ullamcorper rhoncus.</li>
                                            <li>Nam dictum neque et velit fermentum blandit.</li>
                                            <li>Vivamus congue metus sit amet sapien pulvinar tincidunt.</li>
                                        </ul>
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
                                    <label class="form-label">Graphics Images Upload</label>
                                    <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                    <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" data-default-file="{{asset('coach/images/book1.jpg')}}">
                                </div>



                                <h6 class="mb-0 fw-bold pt-2 pb-2">Thumnail Images</h6>
                                <div class="col-md-12">
                                    <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" data-default-file="{{asset('coach/images/book1.jpg')}}">
                                </div>
                                <div class="col-md-12">
                                    <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" data-default-file="{{asset('coach/images/book1.jpg')}}">
                                </div>
                                <div class="col-md-12">
                                    <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" data-default-file="{{asset('coach/images/book1.jpg')}}">
                                </div>
                                <div class="col-md-12">
                                    <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" data-default-file="{{asset('coach/images/book1.jpg')}}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="sticky-lg-top">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">Pricing Info</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-12">
                                    <label class="form-label">Old Price</label>
                                    <input type="text" class="form-control" value="1500">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">New Price</label>
                                    <input type="text" class="form-control" value="999">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">Inventory Info</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-12">
                                    <label class="form-label">SKU</label>
                                    <input type="text" class="form-control" value="#CS-00002">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Total Stock Quantity</label>
                                    <input type="text" class="form-control" value="10">
                                </div>
                            </div>
                        </div>
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

<x-backend.coach.back-coach-footer />