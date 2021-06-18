<!--ADD Blog Modal -->
<div class="modal fade" id="addBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Upload A Blog  <i class="bi bi-stickies-fill mr-3 text-muted"></i></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
          <!--################## main content ################-->

                    <form action="<?= base_url() ?>manage/blog/add" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-1">
                            <span>
                            <a class="text-muted"> Blog Title: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input type="text" name="title"  placeholder="Blog Title" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Content: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <textarea class="form-control w-100" id="exampleFormControlTextarea1" name="content" rows="6" required></textarea>
                        </div>

                            <!-- CV -->
                            <div class="form-group pl-4">

                                <label for="exampleFormControlFile1">Drop your blog picture here:</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file" id="inputGroupFile02" required>
                                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                    </div>
                                    <small class="form-text text-muted">Please use jpg formats only!</small>
                            </div>

                      <!-- User category -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Select Category: </a>
                            </span>
                        </div>

                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-list text-muted"></i>
                                </span>
                            </div>
                            <select id="status" name="category" class="form-control custom-select bg-white border-left-0 border-md" required>
                            
                                <option value="1">Depression</option>
                                <option value="2">Bipolar Disorder</option>
                                <option value="3">Sociopathy</option>
                                <option value="4">Anxiety</option>
                                <option value="5">ADHD</option>
                                <option value="6">Schizophrenia</option>
                            </select>
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
                            <select id="status" name="status" class="form-control custom-select bg-white border-left-0 border-md" required>
                            
                                <option value="1">Archive</option>
                                <option value="2">Unarchive</option>
                            </select>
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


<!-- Modal Experience Archive-->
<div class="modal fade" id="unarchiveBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLongTitle">Continue to unarchive?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>blog/unarchive">
          <h5>Are you sure you want to unarchive this data?<br><br>
          <small>People may be able to see it after you have unarchived! </small>
          </h5>

          <input type="hidden" class="form-control" name="unarchiveBlog" id="bId" value="bId">
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
<div class="modal fade" id="archiveBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLongTitle">Continue to archive?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>blog/archive">
          <h5>Are you sure you want to archive this data?<br><br>
          <small>People may not be able to see it after you have archived! </small>
          </h5>

          <input type="hidden" class="form-control" name="archiveBlog" id="bloId" value="bloId">
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


<!-- Modal Blog Delete-->
<div class="modal fade" id="deleteBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Continue to delete?   <i class="bi bi-x-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>blog/delete">
          <h5>Are you sure you want to delete this blog data?<br></h5>

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


<!-- Modal -->
<div class="modal fade" id="detailBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">       
                <span class="text-muted small"> Blog</span>
                <span class="text-uppercase text-danger">/</span><span class="text-muted small"> Viewing The Blog <i class="bi bi-eye mr-3 text-muted"></i></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <div class="row w-80 m-2">

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-12 mt-1">
                            <span>
                            <a class="text-muted"> Blog Title: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="blogTitle" type="text" value="heheh" placeholder="" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-12 mt-4">
                            <span>
                            <a class="text-muted"> Content: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-12 mb-4">
                            <textarea class="form-control w-100" value="blogContentD" id="blogContentD" name="content" rows="15" readonly></textarea>
                        </div>

                        <div class="input-group col-lg-12 mt-1 mb-1">
                            <span>
                            <a class="text-muted">Added By: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-card-heading text-muted"></i>
                                </span>
                            </div>
                            <input value="blogAddedByD" id="blogAddedByD" type="text" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>

                      <!-- User category -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted">Category: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-card-heading text-muted"></i>
                                </span>
                            </div>
                            <input value="blogCategoryD" id="blogCategoryD" type="text" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>


                    

                     </div>


      </div>
      <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-info" data-dismiss="modal" value="Ok" name="submitr" />
      </div>
    </div>
  </div>
</div>


<!--View blog Modal -->
<div class="modal fade" id="viewBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
               <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Blog</span>
                <span class="text-uppercase text-danger">/</span><span class="text-muted small"> Viewing The Blog <i class="bi bi-eye mr-3 text-muted"></i></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
          <!--################## main content ################-->

                    <div class="row w-80 m-2">

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-1">
                            <span>
                            <a class="text-muted"> Blog Title: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="blogTitleV" type="text" value="blogTitleV" placeholder="Blog Title" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Content: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <textarea class="form-control w-100" value="blogContentV" id="blogContentV" name="content" rows="6" readonly></textarea>
                        </div>

                        <div class="input-group col-lg-12 mt-1 mb-1">
                            <span>
                            <a class="text-muted">Added By: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-card-heading text-muted"></i>
                                </span>
                            </div>
                            <input value="blogAddedBy" id="blogAddedBy" type="text" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>

                      <!-- User category -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted">Category: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-card-heading text-muted"></i>
                                </span>
                            </div>
                            <input value="blogCategory" id="blogCategory" type="text" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>


                        
                        <div class="modal-footer w-100">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-info" data-dismiss="modal" value="Ok" name="submitr" />
                        </div>

                     </div>

        <!--################## main content ################-->


      </div>
    </div>
  </div>
</div>

<!--View blog Modal -->
<div class="modal fade" id="editBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
               <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Blog</span>
                <span class="text-uppercase text-danger">/</span><span class="text-muted small"> Editing The Blog <i class="bi bi-eye mr-3 text-muted"></i></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
          <!--################## main content ################-->
                    <form action="<?= base_url() ?>blog/edit" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-1">
                            <span>
                            <a class="text-muted"> Blog Title: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="blogTitleE" type="text" value="blogTitleE" name="title" placeholder="Blog Title" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Content: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <textarea class="form-control w-100" value="blogContentE" id="blogContentE" name="content" rows="6"></textarea>
                        </div>

                        <div class="input-group col-lg-12 mt-1 mb-1">
                            <span>
                            <a class="text-muted">Added By: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-card-heading text-muted"></i>
                                </span>
                            </div>
                            <input value="blogAddedByE" id="blogAddedByE" type="text" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>

                      <!-- User category -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted">Category: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-card-heading text-muted"></i>
                                </span>
                            </div>
                            <input value="blogCategoryE" id="blogCategoryE" type="text" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>


                        
                        <div class="modal-footer w-100">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="hidden" id="blogEdit" value="blogEdit" name="editBlog" />
                            <input type="submit" class="btn btn-info" value="Edit" name="submitr" />
                        </div>

                     </div>

                  </form>
        <!--################## main content ################-->


      </div>
    </div>
  </div>
</div>






<script type="text/javascript">

    $(".viewBlog").click(function () {

    var blog_title_v = $(this).attr('blog-title-v');
    $("#blogTitleV").val( blog_title_v );

    var blog_content_v = $(this).attr('blog-content-v');
    $("#blogContentV").val( blog_content_v );

    var blog_added_by = $(this).attr('blog-added-by');
    $("#blogAddedBy").val( blog_added_by );

    var blog_category = $(this).attr('blog-category');
    $("#blogCategory").val( blog_category );

    $('#viewBlog').modal('show');
});

    $(".detailBlog").click(function () {

    var blog_title = $(this).attr('blog-title');
    $("#blogTitle").val( blog_title );

    $('#detailBlog').modal('show');
});

    $(".editBlog").click(function () {

    var blog_edit = $(this).attr('blog-edit');
    $("#blogEdit").val( blog_edit );

    var blog_title_e = $(this).attr('blog-title-e');
    $("#blogTitleE").val( blog_title_e );

    var blog_content_e = $(this).attr('blog-content-e');
    $("#blogContentE").val( blog_content_e );

    var blog_added_bye = $(this).attr('blog-added-bye');
    $("#blogAddedByE").val( blog_added_bye );

    var blog_categorye = $(this).attr('blog-categorye');
    $("#blogCategoryE").val( blog_categorye );

    $('#editBlog').modal('show');
});

    $(".uploadModal").click(function () {
    $('#addBlog').modal('show');
});

    $(".archiveBlog").click(function () {
    var blid = $(this).attr('blo-id');
    $("#bloId").val( blid );
    $('#archiveBlog').modal('show');
});

    $(".unarchiveBlog").click(function () {
    var blogid = $(this).attr('b-id');
    $("#bId").val( blogid );
    $('#unarchiveBlog').modal('show');
});
  
    $(".deleteBlog").click(function () {
    var ids = $(this).attr('blog-id');
    $("#blogId").val( ids );
    $('#deleteBlog').modal('show');
});

</script>