<!--ADD Experience  Modal -->
<div class="modal fade" id="viewExperience" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
               <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Experience</span>
                <span class="text-uppercase text-danger">/</span><span class="text-muted small"> Viewing The Experience <i class="bi bi-eye mr-3 text-muted"></i></span>
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
                            <input id="experienceTitle" value="experienceTitle" type="text" name="title" placeholder="Experience Title" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>


                                          <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Experience Detail: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <textarea class="form-control w-100" value="experienceDesc" id="experienceDesc" name="desc" rows="6" readonly></textarea>
                        </div>
                                                    <!-- User category -->
                           <!-- button -->
                        <div class="modal-footer w-100">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-info" value="Ok" data-dismiss="modal" />
                        </div>
                          


                     </div>
                 </form>

        <!--################## main content ################-->


      </div>
    </div>
  </div>
</div>



<!-- Modal Experience Delete-->
<div class="modal fade" id="deleteExperience" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Continue to delete?   <i class="bi bi-x-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>manage/experience/delete">
          <h5>Are you sure you want to delete this data?<br></h5>

          <input type="hidden" class="form-control" name="deleteEx" id="experId" value="experId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>


<!-- Modal Experience Archive-->
<div class="modal fade" id="archiveExperience" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLongTitle">Continue to archive?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>manage/experience/archive">
          <h5>Are you sure you want to archive this data?<br><br>
          <small>People may not be able to see it after you have archived! </small>
          </h5>

          <input type="hidden" class="form-control" name="archiveEx" id="expId" value="expId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>


<!-- Modal Experience Archive-->
<div class="modal fade" id="unarchiveExperience" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLongTitle">Continue to unarchive?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>manage/experience/unarchive">
          <h5>Are you sure you want to unarchive this data?<br><br>
          <small>People may be able to see it after you have unarchived! </small>
          </h5>

          <input type="hidden" class="form-control" name="unarchiveEx" id="eperId" value="eperId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>


<script type="text/javascript">

    $(".viewExperience").click(function () {

    var experience_title = $(this).attr('experience-title');
    $("#experienceTitle").val( experience_title );

    var experience_desc = $(this).attr('experience-desc');
    $("#experienceDesc").val( experience_desc );

    $('#viewExperience').modal('show');
});
  
    $(".deleteExperience").click(function () {
    var ids = $(this).attr('experId');
    $("#experId").val( ids );
    $('#deleteExperience').modal('show');
});

    $(".archiveExperience").click(function () {
    var ids = $(this).attr('expId');
    $("#expId").val( ids );
    $('#archiveExperience').modal('show');
});

    $(".unarchiveExperience").click(function () {
    var ids = $(this).attr('experId');
    $("#eperId").val( ids );
    $('#unarchiveExperience').modal('show');
});

</script>