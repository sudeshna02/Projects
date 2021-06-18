<!--ADD Blog Modal -->
<div class="modal fade" id="addPicture" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">

            <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Profile</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> Add - Profile Picture <i class="bi bi-image mr-3 text-muted"></i></span>

        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
          <!--################## main content ################-->

                    <form action="<?= base_url() ?>picture/add" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">

                            <!-- CV -->
                            <div class="form-group pl-4">

                                <label for="exampleFormControlFile1">Drop your blog picture here:</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file" id="inputGroupFile02" required>
                                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                    </div>
                                    <small class="form-text text-muted">Please use image formats only!</small>
                            </div>
                        
                        <div class="modal-footer w-100">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <input type="hidden" class="btn btn-info" name="staffId" value="<?=$this->session->userdata('id')?>" name="submitr"/>
                                  <input type="submit" class="btn btn-info" value="Upload" name="submitr" />
                        </div>

                     </div>
                 </form>

        <!--################## main content ################-->

      </div>
    </div>
  </div>
</div>


<script>

    $(".addPicture").click(function () {
    $('#addPicture').modal('show');
});

</script>    