<!--############################################## start of add announcement ############################################################-->
<div class="modal fade" id="addAnnouncement" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Announcement</span>
                <span class="text-uppercase text-danger">/</span><span class="text-muted small"> Add An Announcement <i class="fa fa-mail-bulk mr-3 text-muted"></i></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
        <!--################## add announcement form body start ###########################################-->

                    <form action="<?= base_url() ?>announcement/add" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-1">
                            <span>
                            <a class="text-muted"> Announcement Title: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-blockquote-left text-muted"></i>
                                </span>
                            </div>
                            <input id="name" type="text" name="anntitle" placeholder="Announcement Title" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Announcement: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-text-paragraph text-muted"></i>
                                </span>
                            </div>
                            <textarea class="form-control bg-white border-left-0 border-md" placeholder="Announcement Content" id="exampleFormControlTextarea1" name="anncontent" rows="6" required></textarea>
                        </div>

                        <!-- User category -->
                        <div class="input-group col-lg-3 mt-4">
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
                            <select id="status" name="annstatus" class="form-control custom-select bg-white border-left-0 border-md" required>
                                <option value="">Set The Status</option>
                                <option value="1">Archive</option>
                                <option value="2">Unarchive</option>
                            </select>
                        </div>
                        
                        <div class="modal-footer w-100">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <input type="submit" class="btn btn-info" value="Make" name="submitr">
                        </div>

                     </div>
                 </form>

       <!--################## add announcement form body end ###########################################-->


      </div>
    </div>
  </div>
</div>

<!--############################################## end of add announcement ###################################################################-->

<!--############################################## start of add announcement ############################################################-->
<div class="modal fade" id="editAnnouncement" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Announcement</span>
                <span class="text-uppercase text-danger">/</span><span class="text-muted small"> Edit An Announcement <i class="fa fa-mail-bulk mr-3 text-muted"></i></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
        <!--################## add announcement form body start ###########################################-->

                    <form action="<?= base_url() ?>announcement/edit" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-1">
                            <span>
                            <a class="text-muted"> Announcement Title: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-blockquote-left text-muted"></i>
                                </span>
                            </div>
                            <input id="eaTitle" type="text" value="eaTitle" name="anntitle" placeholder="Announcement Title" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Announcement: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-text-paragraph text-muted"></i>
                                </span>
                            </div>
                            <textarea id="eaContent" value="eaContent" class="form-control bg-white border-left-0 border-md" placeholder="Announcement Content" id="exampleFormControlTextarea1" name="anncontent" rows="6" required></textarea>
                        </div>

                        <!-- User category -->
                        <div class="input-group col-lg-3 mt-4">
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
                            <select id="status" name="annstatus" class="form-control custom-select bg-white border-left-0 border-md" required>
                                <option value="">Set The Status</option>
                                <option value="1">Archive</option>
                                <option value="2">Unarchive</option>
                            </select>
                        </div>
                        
                        <div class="modal-footer w-100">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <input type="hidden" id="eaId" value="eaId" name="annId">
                                  <input type="submit" class="btn btn-info" value="Edit" name="submitr">
                        </div>

                     </div>
                 </form>

       <!--################## add announcement form body end ###########################################-->


      </div>
    </div>
  </div>
</div>

<!--############################################## end of add announcement ###################################################################-->


<!--############################################## start of delete announcement ##############################################################-->
<div class="modal fade" id="deleteAnnouncement" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Continue to delete?   <i class="bi bi-x-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>announcement/delete">
          <h5>Are you sure you want to delete this data?<br></h5>

          <input type="hidden" class="form-control" name="deleteAnnouncement" id="aId" value="aId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!--############################################## end of delete announcement ################################################################-->

<!--############################################## start of archive announcement ################################################################-->
<div class="modal fade" id="archiveAnnouncement" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLongTitle">Continue to archive?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>announcement/archive">
          <h5>Are you sure you want to archive this data?<br><br>
          <small>People may not be able to see it after you have archived! </small>
          </h5>

          <input type="hidden" class="form-control" name="archiveAnnouncement" id="annId" value="annId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!--############################################## end of archive announcement ################################################################-->

<!--############################################## start of unarchive announcement ################################################################-->
<div class="modal fade" id="unarchiveAnnouncement" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLongTitle">Continue to unarchive?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>announcement/unarchive">
          <h5>Are you sure you want to unarchive this data?<br><br>
          <small>People may be able to see it after you have unarchived! </small>
          </h5>

          <input type="hidden" class="form-control" name="unarchiveAnnouncement" id="annoId" value="annoId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>   

<!--############################################## end of unarchive announcement ################################################################-->

<script>

    $(".addAnnouncement").click(function () {
    $('#addAnnouncement').modal('show');
});

    $(".editAnnouncement").click(function () {

      var ea_id = $(this).attr('ea-id'); 
      var ea_title = $(this).attr('ea-title');
      var ea_content = $(this).attr('ea-content');

      $("#eaId").val( ea_id );
      $("#eaTitle").val( ea_title );
      $("#eaContent").val( ea_content );

    $('#editAnnouncement').modal('show');
});

    $(".archiveAnnouncement").click(function () {
    var ann_id = $(this).attr('ann-id');
    $("#annId").val( ann_id );
    $('#archiveAnnouncement').modal('show');
});

    $(".unarchiveAnnouncement").click(function () {
    var anno_id = $(this).attr('anno-id');
    $("#annoId").val( anno_id );
    $('#unarchiveAnnouncement').modal('show');
});

    $(".deleteAnnouncement").click(function () {
    var a_id = $(this).attr('a-id');
    $("#aId").val( a_id );
    $('#deleteAnnouncement').modal('show');
});

</script>