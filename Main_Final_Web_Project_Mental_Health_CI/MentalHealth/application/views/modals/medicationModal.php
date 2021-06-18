<!--ADD Request  Modal -->
<div class="modal fade" id="editMedication" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Medication</span>
                <span class="text-uppercase text-danger">/</span><span class="text-muted small"> Edit A Medication <i class="bi bi-pencil mr-3 text-muted"></i></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
          <!--################## main content ################-->

                    <form action="<?= base_url() ?>medication/edit" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Medication Name: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 my-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="medicationName" value="medicationName" type="text" name="name" placeholder="Category Name" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Description: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <textarea class="form-control bg-white border-left-0 border-md" placeholder="Description" id="medicationDesc" value="medicationDesc" name="desc" rows="6" required></textarea>
                        </div>

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> For Meeting: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 my-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="medicationRole" value="medicationRole" type="text" name="" placeholder="Category Name" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>

                        
                        <div class="modal-footer w-100">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <input type="hidden" class="btn btn-info" id="medicationId" name="editMedication" value="medicationId" name="submitr"/>
                                  <input type="submit" class="btn btn-info" value="Edit" name="submitr" />
                        </div>

                     </div>
                 </form>

        <!--################## main content ################-->

      </div>
    </div>
  </div>
</div>

<!-- Modal Experience Delete-->
<div class="modal fade" id="deleteMedication" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Continue to delete?   <i class="bi bi-x-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>medication/delete">
          <h5>Are you sure you want to delete this data?<br></h5>

          <input type="hidden" class="form-control" name="deleteMedication" id="deleteId" value="deleteId">
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
<div class="modal fade" id="archiveMedication" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLongTitle">Continue to archive?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>medication/archive">
          <h5>Are you sure you want to archive this data?<br><br>
          <small>People may not be able to see it after you have archived! </small>
          </h5>

          <input type="hidden" class="form-control" name="archiveMedication" id="archiveId" value="archiveId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>


<!-- Modal Category UnArchive-->
<div class="modal fade" id="unarchiveMedication" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLongTitle">Continue to unarchive?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>medication/unarchive">
          <h5>Are you sure you want to unarchive this data?<br><br>
          <small>People may be able to see it after you have unarchived! </small>
          </h5>

          <input type="hidden" class="form-control" name="unarchiveMedication" id="unarchiveId" value="unarchiveId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>   

<!-- ####################################### End of Modal Delete User #########################################################-->

<script type="text/javascript">

    $(".deleteMedication").click(function () {
        var delete_id = $(this).attr('delete-id');
        $("#deleteId").val( delete_id );
    $('#deleteMedication').modal('show');
});

    $(".editMedication").click(function () {
    var medication_name = $(this).attr('medication-name');
    $("#medicationName").val( medication_name );

    var medication_desc = $(this).attr('medication-desc');
    $("#medicationDesc").val( medication_desc );

    var medication_meeting = $(this).attr('medication-meeting');
    $("#medicationRole").val( medication_meeting );

    var medication_id = $(this).attr('medication-id');
    $("#medicationId").val( medication_id );
    $('#editMedication').modal('show');
});

    $(".archiveMedication").click(function () {
        var archive_id = $(this).attr('archive-id');
        $("#archiveId").val( archive_id );
    $('#archiveMedication').modal('show');
});

    $(".unarchiveMedication").click(function () {
        var unarchive_id = $(this).attr('unarchive-id');
        $("#unarchiveId").val( unarchive_id );
    $('#unarchiveMedication').modal('show');
});
  
</script>