<!-- ####################################### Start of Modal Detail User ######################################################### -->

<div class="modal fade" id="viewDescMeeting" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLongTitle">Detail Of The Meeting   <i class="bi bi-shield-lock"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="input-group col-lg-12 mt-1 mb-1">
              <span>
                <a class="text-muted"> <i class="bi bi-vector-pen text-muted"></i> Description: </a>
              </span>
        </div>

        <!-- Category Name -input- -->
        <div class="input-group col-lg-12 mb-4">
            <textarea value="meetDesc" id="meetDesc" type="text" class="form-control w-100" id="exampleFormControlTextarea1" rows="6" readonly></textarea>
         </div>
          <small class="mt-5">Meetlink:</small>
          <input type="text" class="form-control" id="meetLink" value="meetLink" readonly>
          <small class="mt-5">Doctor Details:</small>
          <small class="mt-5">(Email)</small>
          <input type="text" class="form-control" id="meetDoctor" value="meetDoctor" readonly>
          <small class="mt-5">Patient Details:</small>
          <small class="mt-5">(Email)</small>
          <input type="text" class="form-control" id="meetPatient" value="meetPatient" readonly>
          <small class="mt-5">Created Date:</small>
          <input type="text" class="form-control" id="meetDate" value="meetDate" readonly>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-info" data-dismiss="modal">Ok</button></a>
          </div>
        
      </div>

    </div>
  </div>
</div>

<!-- ####################################### End of Modal Detail User ######################################################### -->

<!-- Modal Experience Archive-->
<div class="modal fade" id="unarchiveMeet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLongTitle">Continue to unarchive?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>meeting/unarchive">
          <h5>Are you sure you want to unarchive this data?<br><br>
          <small>People may be able to see it after you have unarchived! </small>
          </h5>

          <input type="hidden" class="form-control" name="unarchiveMeet" id="meetId" value="meetId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>



<!-- ####################################### Start of Modal enable User ######################################################### -->

<!-- Modal Experience Archive-->
<div class="modal fade" id="archiveMeet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLongTitle">Continue to archive?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>meeting/archive">
          <h5>Are you sure you want to archive this data?<br><br>
          <small>People may not be able to see it after you have archived! </small>
          </h5>

          <input type="hidden" class="form-control" name="archiveMeet" id="meeId" value="meeId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- ####################################### End of Modal enable User ######################################################### -->

<!-- Modal Experience Archive-->
<div class="modal fade" id="changeMeeting" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLongTitle">Continue to set the status as attended?   <i class="bi bi-check-circle"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>meeting/change">
          <h5>Are you sure you want to set status as attended?<br><br>
          <small>If you have attended, thank you for supporting our patients! </small>
          </h5>

          <input type="hidden" class="form-control" name="archiveMeet" id="meecId" value="meecId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>



<!-- ####################################### Start of Modal enable User ######################################################### -->

<!-- Modal Experience Archive-->
<div class="modal fade" id="unchangeMeeting" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLongTitle">Continue to set the status as not attended?   <i class="bi bi-x-circle"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>meeting/unchange">
          <h5>Are you sure you want to set status as not attended?<br><br>
          <small>If you have not attended, attend as soon as possible! </small>
          </h5>

          <input type="hidden" class="form-control" name="unarchiveMeet" id="meetcId" value="meetcId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- ####################################### End of Modal enable User ######################################################### -->

<!-- ####################################### End of Modal Delete User #########################################################-->

<div class="modal fade" id="deleteMeeting" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Continue to delete?   <i class="bi bi-x-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>meeting/delete">
          <h5>Are you sure you want to delete this user data?<br></h5>

          <input type="hidden" class="form-control" name="deleteMeet" id="mId" value="mId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- ####################################### End of Modal Delete User #########################################################-->

<script type="text/javascript">
  
    $(".viewDescMeeting").click(function () { 

    var meet_desc = $(this).attr('meet-desc');
    $("#meetDesc").val( meet_desc );

    var meet_link = $(this).attr('meet-link');
    $("#meetLink").val( meet_link );

    var meet_doctor = $(this).attr('meet-doctor');
    $("#meetDoctor").val( meet_doctor );

    var meet_patient = $(this).attr('meet-patient');
    $("#meetPatient").val( meet_patient );

    var meet_date = $(this).attr('meet-date');
    $("#meetDate").val( meet_date );

    $('#viewDescMeeting').modal('show');
});

    $(".archiveMeeting").click(function () {
    var mtid = $(this).attr('mee-id');
    $("#meeId").val( mtid );
    $('#archiveMeet').modal('show');
});

    $(".unarchiveMeeting").click(function () {
    var meetid = $(this).attr('meet-id');
    $("#meetId").val( meetid );
    $('#unarchiveMeet').modal('show');
});
  
    $(".changeMeeting").click(function () {
    var mcid = $(this).attr('mee-id');
    $("#meecId").val( mcid );
    $('#changeMeeting').modal('show');
});

    $(".unchangeMeeting").click(function () {
    var mtcid = $(this).attr('meet-id');
    $("#meetcId").val( mtcid );
    $('#unchangeMeeting').modal('show');
});

    $(".deleteMeeting").click(function () {
    var meeid = $(this).attr('m-id');
    $("#mId").val( meeid );
    $('#deleteMeeting').modal('show');
});

</script>