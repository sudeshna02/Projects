<!--ADD Request  Modal -->
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Category</span>
                <span class="text-uppercase text-danger">/</span><span class="text-muted small"> Add A Category <i class="bi bi-stickies-fill mr-3 text-muted"></i></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
          <!--################## main content ################-->

                    <form action="<?= base_url() ?>category/add" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Category Name: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 my-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="name" type="text" name="catname" placeholder="Category Name" class="form-control bg-white border-left-0 border-md">
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
                            <textarea class="form-control bg-white border-left-0 border-md" placeholder="Description" id="exampleFormControlTextarea1" name="catdesc" rows="6" required></textarea>
                        </div>

                        <!-- User category -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Set Type Of Category: </a>
                            </span>
                        </div>

                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-list text-muted"></i>
                                </span>
                            </div>
                            <select id="role" name="catrole" class="form-control custom-select bg-white border-left-0 border-md">
                            
                                <option value="1">Illness</option>
                                <option value="2">User</option>
                            </select>
                        </div>

                        <!-- User category -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Set The Status: </a>
                            </span>
                        </div>

                        <div class="input-group col-lg-9 mb-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-list text-muted"></i>
                                </span>
                            </div>
                            <select id="status" name="catstatus" class="form-control custom-select bg-white border-left-0 border-md">
                            
                                <option value="1">Archive</option>
                                <option value="2">Unarchive</option>
                            </select>
                        </div>
                        
                        <div class="modal-footer w-100">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <input type="submit" class="btn btn-info" value="Add" name="submitr" />
                        </div>

                     </div>
                 </form>

        <!--################## main content ################-->

      </div>
    </div>
  </div>
</div>


<!--ADD Request  Modal -->
<div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Category</span>
                <span class="text-uppercase text-danger">/</span><span class="text-muted small"> Edit A Category <i class="bi bi-pencil mr-3 text-muted"></i></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
          <!--################## main content ################-->

                    <form action="<?= base_url() ?>category/edit" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Category Name: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 my-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="categoryName" value="categoryName" type="text" name="catname" placeholder="Category Name" class="form-control bg-white border-left-0 border-md">
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
                            <textarea class="form-control bg-white border-left-0 border-md" placeholder="Description" id="categoryDesc" value="categoryDesc" name="catdesc" rows="6" required></textarea>
                        </div>

                        <!-- User category -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Set Type Of Category: </a>
                            </span>
                        </div>

                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-list text-muted"></i>
                                </span>
                            </div>
                            <select id="role" name="catrole" class="form-control custom-select bg-white border-left-0 border-md" required>
                                <option value="">Set</option>
                                <option value="1">Illness</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                        
                        <div class="modal-footer w-100">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <input type="hidden" class="btn btn-info" id="categoryId" name="editCategory" value="categoryId" name="submitr"/>
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
        <form method="post" action="<?= base_url() ?>category/delete">
          <h5>Are you sure you want to delete this data?<br></h5>

          <input type="hidden" class="form-control" name="deleteCategory" id="cId" value="cId">
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
        <form method="post" action="<?= base_url() ?>category/archive">
          <h5>Are you sure you want to archive this data?<br><br>
          <small>People may not be able to see it after you have archived! </small>
          </h5>

          <input type="hidden" class="form-control" name="archiveCategory" id="catId" value="catId">
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
        <form method="post" action="<?= base_url() ?>category/unarchive">
          <h5>Are you sure you want to unarchive this data?<br><br>
          <small>People may be able to see it after you have unarchived! </small>
          </h5>

          <input type="hidden" class="form-control" name="unarchiveCategory" id="cateId" value="cateId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>   

<!--############################################## start of view category ################################################################-->
<div class="modal fade" id="viewCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
               <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Category</span>
                <span class="text-uppercase text-danger">/</span><span class="text-muted small"> Viewing The Category Details <i class="bi bi-eye mr-3 text-muted"></i></span>

        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
        <!--################## view category form body start ###########################################-->
                    <form action="">
                    <div class="row w-80 m-2">
                                                <!-- Category Name -a- -->
                        <div class="input-group col-lg-12 mt-1 mb-1">
                            <span>
                            <a class="text-muted">Category Name: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-card-heading text-muted"></i>
                                </span>
                            </div>
                            <input value="cName" id="cName" type="text" placeholder="Journal Topic" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>


                      <!-- Category Name -a- -->
                        <div class="input-group col-lg-12 mt-1 mb-1">
                              <span>
                                <a class="text-muted"> <i class="bi bi-vector-pen text-muted"></i> Description: </a>
                              </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-12 mb-4">
                            <textarea value="cDesc" id="cDesc" type="text" class="form-control w-100" id="exampleFormControlTextarea1" rows="6" readonly></textarea>
                        </div>

                         <!-- button -->
                        <div class="modal-footer w-100">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-info" data-dismiss="modal" value="Ok" name="submitr" />
                        </div>
                        
                     </div>
                 </form>

       <!--################## view journal form body end ###########################################-->

      </div>
    </div>
  </div>
</div>

<!--############################################## end of view journal ################################################################-->

<script type="text/javascript">
    
    $(".addCategory").click(function () {
    $('#addCategory').modal('show');
});

    $(".editCategory").click(function () {

    var category_name = $(this).attr('category-name');
    $("#categoryName").val( category_name );

    var category_desc = $(this).attr('category-desc');
    $("#categoryDesc").val( category_desc );

    var category_role = $(this).attr('category-role');
    $("#categorRole").val( category_role );

    var category_id = $(this).attr('category-id');
    $("#categoryId").val( category_id );

    $('#editCategory').modal('show');
});

    $(".deleteCategory").click(function () {
    var c_id = $(this).attr('c-id');
    $("#cId").val( c_id );
    $('#deleteCategory').modal('show');
});

    $(".archiveCategory").click(function () {
    var cat_id = $(this).attr('cat-id');
    $("#catId").val( cat_id );
    $('#archiveCategory').modal('show');
});

    $(".unarchiveCategory").click(function () {
    var cate_id = $(this).attr('cate-id');
    $("#cateId").val( cate_id );
    $('#unarchiveCategory').modal('show');
});

    //to show view category modal
    $(".viewCategory").click(function () {
    var c_name = $(this).attr('cat-name');
    $("#cName").val( c_name );

    var c_desc = $(this).attr('cat-desc');
    $("#cDesc").val( c_desc );

    $('#viewCategory').modal('show');
});

</script>








