<?php if(($this->session->userdata('role')) == '1') {?>

<?php $this->load->view('layouts/userNav'); ?>

        <!-- end of side bar -->
        <div class="col-md-9 col-lg-10 py-5">
          <!-- title row -->
          <div class="row mb-5">
            <div class="col">
              <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Blogs</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> View - All The Blogs Posted By All The Users  <i class="fa fa-edit mr-3 text-muted"></i></span>
              </h3>
            </div>
          </div>
          <!-- end of title row -->

        <!-- deleted successfully -->
          <?php if($success = $this->session->flashdata('delete_successful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-info">
                         <?= $success ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!-- delete unsucessful -->
          <?php if($unsuccess = $this->session->flashdata('delete_unsuccessful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-danger">
                         <?= $unsuccess ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 


        <!--archived successfully -->
          <?php if($success = $this->session->flashdata('archive_successful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-warning">
                         <?= $success ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!-- archive unsucessful -->
          <?php if($unsuccess = $this->session->flashdata('archive_unsuccessful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-danger">
                         <?= $unsuccess ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!-- unarchived successfully -->
          <?php if($success = $this->session->flashdata('unarchive_successful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-warning">
                         <?= $success ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!-- unarchive unsucessful -->
          <?php if($unsuccess = $this->session->flashdata('unarchive_unsuccessful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-danger">
                         <?= $unsuccess ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

               <!--################## main content ################-->

            <div class="col-md-12 main-datatable">
                <div class="card_body">
                    <div class="row d-flex">
                        
                        <div class="col-sm-4 createSegment"> 
            
                        <span class="d-inline-block" data-toggle="popover" data-content="You as an administrator cannot add a blog!">
                          <button class="btn btn-info" style="pointer-events: none;" type="button" disabled><i class="bi bi-plus-circle"></i> Add A New Blog</button>
                        </span>

                        </div>
                        <div class="col-sm-8 add_flex">
                            <div class="form-group searchInput">
                                <label for="email">Search:</label>
                                <input type="search" class="form-control" id="filterbox" placeholder=" "><i class="p-3 bi bi-search"></i></input>
                            </div>
                        </div> 
                    </div>
                    <div class="overflow-x">
                        <table style="width:100%;" id="filtertable" class="table cust-datatable dataTable no-footer">
                            <thead>
                                <tr>
                                    <th style="min-width:50px;">Title</th>
                                    <th style="min-width:150px;">Category</th>
                                    <th style="min-width:1px;"></th>
                                    <th style="min-width:100px;">Details</th>
                                    <th style="min-width:150px;">Status</th>
                                    <th style="min-width:100px;">Action</th>
                                    <th style="min-width:150px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($blogs as $diary) { ?>
                                <tr>
                                    <td><?= $diary['btitle'] ?></td>
                                    <td><?= $diary['cname'] ?></td>
                                    <td></td>
                                    <td><button type="submit" class="btn btn-warning viewBlog"

                                        blog-title-v = "<?= $diary['btitle'] ?>"
                                        blog-content-v = "<?= $diary['bcontent'] ?>"
                                        blog-added-by = "<?= $diary['sfirstname'] ?> <?= $diary['ssurname'] ?> "
                                        blog-category = "<?= $diary['cname'] ?>"
                                        >
                                                View <i class="bi bi-eye"></i>
                                        </button></td>
                                    <td>
                                        <?php if($diary['bstatus'] == '2'){?> 
                                                <span class="mode mode_on">Unarchived</span>
                                        <?php }else { ?>
                                                <span class="mode mode_off">Archived</span>
                                     <?php }  ?> 
                                    </td>
                                    <td><?php if($diary['bstatus'] == '2'){?>   
                                            <button type="submit" class="btn btn-dark archiveBlog" blo-id="<?= $diary['bid'] ?>">Archive <i class="bi bi-archive"></i></button>
                                         <?php } 
                                        else { ?>
                                            <button type="submit" class="btn btn-success unarchiveBlog" b-id="<?= $diary['bid'] ?>">Unarchive <i class="bi bi-archive"></i></button>
                                         <?php }  ?>  
                                                                      
                                    </td>

                                    <td> 
                                        <span class="d-inline-block" data-toggle="popover" data-content="You as an administrator cannot edit a blog!">
                                            <button class="btn btn-info" style="pointer-events: none;" type="button" disabled></i> Edit <i class="bi bi-pencil"></i></button>
                                        </span>
                                    
                                        <button type="submit" class="btn btn-danger deleteBlog" blog-id="<?= $diary['bid'] ?>">
                                                <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
     
                                </tr>
                               
                               <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>


		</div>
	</div>
<div>

<?php $this->load->view('modals/blogModal'); ?>

<?php $this->load->view('layouts/footer'); ?>

<?php } else {
  redirect('login');
}