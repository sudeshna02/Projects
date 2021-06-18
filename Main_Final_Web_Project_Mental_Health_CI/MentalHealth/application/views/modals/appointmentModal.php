<!-- Modal Experience Delete-->
<div class="modal fade" id="deleteCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Continue to delete?   <i class="bi bi-x-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>appointment/delete">
          <h5>Are you sure you want to delete this data?<br></h5>

          <input type="hidden" class="form-control" name="deleteAppointment" id="daId" value="daId">
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
<div class="modal fade" id="archiveCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLongTitle">Continue to archive?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>appointment/archive">
          <h5>Are you sure you want to archive this data?<br><br>
          <small>People may not be able to see it after you have archived! </small>
          </h5>

          <input type="hidden" class="form-control" name="archiveAppointment" id="aaId" value="aaId">
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
<div class="modal fade" id="unarchiveCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLongTitle">Continue to unarchive?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>appointment/unarchive">
          <h5>Are you sure you want to unarchive this data?<br><br>
          <small>People may be able to see it after you have unarchived! </small>
          </h5>

          <input type="hidden" class="form-control" name="unarchiveAppointment" id="uaId" value="uaId">
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
  
    $(".deleteAppointment").click(function () {
    var da_id = $(this).attr('da-id');
    $("#daId").val( da_id );
    $('#deleteCategory').modal('show');
});

    $(".archiveAppointment").click(function () {
    var aa_id = $(this).attr('aa-id');
    $("#aaId").val( aa_id );
    $('#archiveCategory').modal('show');
});

    $(".unarchiveAppointment").click(function () {
    var ua_id = $(this).attr('ua-id');
    $("#uaId").val( ua_id );
    $('#unarchiveCategory').modal('show');
});

</script>