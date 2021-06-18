



    <!--ADD Request  Modal -->
<div class="modal fade" id="addRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small">Send Your Request/Query  <i class="fa fa-question mr-3 text-muted"></i></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
          <!--################## main content ################-->

                    <form action="<?= base_url() ?>sendRequest" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">

                          <!-- text area-->
                            <div class="input-group col-lg-12 mb-1">
                                <label for="exampleFormControlTextarea1">Enter Your Query Here:</label>
                               <textarea class="form-control w-100" id="exampleFormControlTextarea1" name="desc" rows="6" required></textarea>
                            </div>

                            <!-- button -->
                            <div class="modal-footer w-100">
                                  <input type="hidden" class="btn btn-info" id="urId" value="urId" name="user" />
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <input type="submit" class="btn btn-info" value="Send" name="submitr" />
                        </div>
                          

                     </div>
                 </form>

        <!--################## main content ################-->


      </div>
    </div>
  </div>
</div>

<!--ADD Experience  Modal -->
<div class="modal fade" id="addExperience" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Add An Experience  <i class="bi bi-stars mr-3 text-muted"></i></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
          <!--################## main content ################-->

                    <form action="<?= base_url() ?>sendExperience" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">
                                                <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-1">
                            <span>
                            <a class="text-muted"> Experience Title: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="ex_name" type="text" name="title" placeholder="Experience Title" class="form-control bg-white border-left-0 border-md" required>
                        </div>


                                          <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Your Experience: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <textarea class="form-control w-100" id="exampleFormControlTextarea1" name="desc" rows="6" required></textarea>
                        </div>
                                                    <!-- User category -->
                        <div class="input-group col-lg-3 mt-2">
                            <span>
                            <a class="text-muted"> Set The Status: </a>
                            </span>
                        </div>

                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-list text-muted"></i>
                                </span>
                            </div>
                            <select id="status" name="status" class="form-control custom-select bg-white border-left-0 border-md" required>
                            
                                <option value="1">Archive</option>
                                <option value="2">Unarchive</option>
                            </select>
                        </div>


                            <!-- button -->
                            <div class="modal-footer w-100">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <input type="submit" class="btn btn-info" value="Add" name="submitr" />
                        </div>
                          


                     </div>
                 </form>

        <!--################## main content ################-->


      </div>
    </div>
  </div>
</div>

    <!--Edit Experience  Modal -->
<div class="modal fade" id="editExperience" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Edit An Experience  <i class="bi bi-stars mr-3 text-muted"></i></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
          <!--################## main content ################-->

                    <form action="<?= base_url() ?>manage/experience/edit" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">
                                                <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-1">
                            <span>
                            <a class="text-muted"> Experience Title: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="etitle" type="text" name="title" value ="etitle" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                                          <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Your Experience: </a>
                            </span>
                        </div>
                                                         
                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <textarea class="form-control w-100" id="edesc" name="desc" value="edesc" rows="6" required></textarea>
                        </div>
                                                    <!-- User category -->
                        <div class="input-group col-lg-3 mt-2">
                            <span>
                            <a class="text-muted"> Set The Status: </a>
                            </span>
                        </div>

                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-list text-muted"></i>
                                </span>
                            </div>
                            <select id="status" name="status" class="form-control custom-select bg-white border-left-0 border-md" required>
                            
                                <option value="1">Archive</option>
                                <option value="2">Unarchive</option>
                            </select>
                        </div>

                            <!-- button -->
                            <div class="modal-footer w-100">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <input type="hidden" class="btn btn-info" id="eId" value="eId" name="id" />
                                  <input type="submit" class="btn btn-info" value="Edit" name="submitr" />
                        </div>
                          


                     </div>
                 </form>

        <!--################## main content ################-->


      </div>
    </div>
  </div>
</div>


<!-- Modal Rejection-->
<div class="modal fade" id="rejectApplication" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Continue to reject? <i class="bi bi-x-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>rejectionMail">
        <h5>Are you sure you want to reject this application/request?<br><br>
        <small>Application Rejection Mail will be sent to their email.<br>
          Also all the requested data of the selected user will be deleted from this website! </small></h5>
         <input type="hidden" class="form-control" name="email" id="emailDID" value="emailDID">
         <input type="hidden" class="form-control" name="requestDID" id="requestDID" value="requestDID">
        <div class="modal-footer mt-3">
          
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-info">Yes</button>
        </div>
      </form>
      </div>

    </div>
  </div>
</div>

<!-- Modal Request Delete-->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Continue to delete?   <i class="bi bi-x-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="delete">
          <h5>Are you sure you want to delete this data?<br></h5>

          <input type="hidden" class="form-control" name="deleteId" id="deleteId" value="deleteId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Modal Blog Delete-->
<!-- <div class="modal fade" id="deleteBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Continue to delete?   <i class="bi bi-x-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="manage/blog/delete">
          <h5>Are you sure you want to delete this data?<br></h5>

          <input type="hidden" class="form-control" name="deleteBlog" id="blogId" value="blogId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
 -->


<script>


    $(".requestModal").click(function () {

      var urid = $(this).attr('ur-id');
      $("#urId").val( urid );

    $('#addRequest').modal('show');
});

    $(".experienceModal").click(function () {
    $('#addExperience').modal('show');
});

    $(".editExperience").click(function () {
      var ex_id = $(this).attr('exId'); 
      var ex_title = $(this).attr('title');
      var ex_desc = $(this).attr('desc');
      var ex_status = $(this).attr('status');

      $("#eId").val( ex_id );
      $("#etitle").val( ex_title );
      $("#edesc").val( ex_desc );
      $("#estat").val( ex_status );

    $('#editExperience').modal('show');
});


//     $(".deleteById").click(function () {
//     var ids = $(this).attr('data-id');
//     $("#deleteId").val( ids );
//     $('#delete').modal('show');
// });

    $(".rejectApplication").click(function () {

    var request_idr = $(this).attr('request-idr');
    $("#requestDID").val( request_idr );

    var email_idr = $(this).attr('email-idr');
    $("#emailDID").val( email_idr );

    $('#rejectApplication').modal('show');
});

//     $(".deleteBlog").click(function () {
//     var ids = $(this).attr('blogId');
//     $("#blogId").val( ids );
//     $('#deleteBlog').modal('show');
// });

</script>


