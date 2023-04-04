

<!--=================================
    Modal login -->
<div class="modal login fade" id="WelcomePopup" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header border-0"  style="background-color:#288334;">
                <!-- <h5 class="modal-title" id="loginModalLabel">Welcome <span style="color:#288334">{{SESSION("USER_POSITION")}}</span></h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-color:#288334;">
                @if(SESSION("USER_PLAN") == "Free")
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-fluid" alt="" src="{{asset('images/trial/coach1.png')}}">
                    </div>
                    <div class="col-md-8">
                        <!--<h2 style="line-height: 60px;">Welcome <span style="color:#288334">{{SESSION("USER_POSITION")}}</span></h2>-->
                        <h6 class="mb-4">Welcome {{SESSION("USER_POSITION")}} my name is Dr. Tomas Hvostik and I am the founder of this platform. Thank you for your registration and enjoy the 7-day free version to the fullest.</h6>
                        <!-- <a class="btn btn-md btn-primary animated" href="{{url('/trial')}}">Free Trial</a> -->
                    </div>
                </div>
                @elseif(SESSION("USER_PLAN") == "Premium")
                <div class="row " style="align-item:center;display:flex;justify-content: center;">
                    
                    <div class="col-md-7" >
                         <!--<h2 style="line-height: 60px;padding:50px;padding: 0px 50px 0px 50px;font-weight: 600;">Welcome <span style="color:#ffff">{{SESSION("USER_POSITION")}}</span></h2>-->
                        <h2  style="padding: 0px 50px 0px 50px;;color: #ffffff;">Hi and welcome coach. My name is Dr. Tomas Hvostik and I am the founder of this platform. Thank you for purchasing the premium version. I believe that you will make full use of it for your professional advancement. All sections are now open for you and you can use them.</h6>
                   <ul style="display:flex;" class="li-img">
                        <li>
                             <div class="image-hov">
                            <img class="img-fluid"  alt="" src="{{asset('images/bubble-box/1.png')}}">
                                </div>
                        </li>
                        <li>
                             <div class="image-hov">
                            <img class="img-fluid"  alt="" src="{{asset('images/bubble-box/2.png')}}">
                                </div>
                        </li>
                         <li>
                              <div class="image-hov">
                            <img class="img-fluid"  alt="" src="{{asset('images/bubble-box/4.png')}}">
                                </div>
                        </li>
                           <li>
                              <div class="image-hov">
                            <img class="img-fluid"  alt="" src="{{asset('images/bubble-box/8.png')}}">
                                </div>
                        </li>
                      
                    </ul>
                    </div>
                    <div class="col-md-5">
                      
                        <div class="image-hov">
                        <img class="img-fluid" style="width: -webkit-fill-available;"  alt="" src="{{asset('images/trial/coach1.png')}}">
                        </div>
                       
                    </div>
                </div>
                <!--<div class="row">-->
                <!--    <div class="col-md-4">-->
                <!--        <img class="img-fluid" alt="" src="{{asset('images/trial/coach1.png')}}">-->
                <!--    </div>-->
                <!--    <div class="col-md-8">-->
                <!--        <h2 style="line-height: 60px;">Welcome <span style="color:#288334">{{SESSION("USER_POSITION")}}</span></h2>-->
                <!--        <h6 class="mb-4">Hi and welcome coach. My name is Dr. Tomas Hvostik and I am the founder of this platform. Thank you for purchasing the premium version. I believe that you will make full use of it for your professional advancement. All sections are now open for you and you can use them.</h6>-->
                        <!-- <a class="btn btn-md btn-primary animated" href="{{url('/trial')}}">Free Trial</a> -->
                <!--    </div>-->
                <!--</div>-->
                @endif
            </div>
        </div>
    </div>
</div>
<!--=================================
    Modal login -->

<!-- Jquery Core Js -->
<script src="{{asset('admin/bundles/libscripts.bundle.js')}}"></script>


<!-- Plugin Js -->
<script src="{{asset('admin/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{asset('admin/bundles/dataTables.bundle.js')}}"></script>

<script src="{{asset('admin/plugin/multi-select/js/jquery.multi-select.js')}}"></script>
<script src="{{asset('admin/plugin/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
<script src="{{asset('admin/plugin/cropper/cropper.min.js')}}"></script>
<script src="{{asset('admin/plugin/cropper/cropper-init.js')}}"></script>
<script src="{{asset('admin/bundles/dropify.bundle.js')}}"></script>
<script src="{{asset('admin/bundles/dataTables.bundle.js')}}"></script>
<!-- Jquery Page Js -->
<script src="{{asset('admin/js/template.js')}}"></script>
<script src="{{asset('admin/js/ckeditor.js')}}"></script>
<script src="{{asset('admin/js/page/index.js')}}"></script>
 <script src="{{asset('admin/js/page/todo.js')}}"></script> 
  <script src="{{asset('admin/js/page/profile.js')}}"></script>
   <script src="{{asset('admin/js/page/google.js')}}"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1Jr7axGGkwvHRnNfoOzoVRFV3yOPHJEU&amp;callback=myMap"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>

@if(SESSION("loginsuccess"))
<script>
    $('document').ready(function() {
        $('#WelcomePopup').modal('show');
    });
</script>
@endif


@if(SESSION("profileUpdate"))
<script>
    Swal.fire(
        // "{{SESSION("success")}}"
        '',
        '{{SESSION("profileUpdate")}}',
        'success'
    )
</script>
@endif


<script>
    $('#myDataTable')
        .addClass('nowrap')
        .dataTable({
            responsive: true,
            columnDefs: [{
                targets: [-1, -3],
                className: 'dt-body-right'
            }]
        });
</script>
<script>
    // project data table
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
        $('.deleterow').on('click', function() {
            var tablename = $(this).closest('table').DataTable();
            tablename
                .row($(this)
                    .parents('tr'))
                .remove()
                .draw();

        });
    });
</script>

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


</body>

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Feb 2023 06:45:30 GMT -->

</html>