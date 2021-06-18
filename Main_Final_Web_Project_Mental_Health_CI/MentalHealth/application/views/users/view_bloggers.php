<?php $this->load->view('layouts/userNav'); ?>

 <!-- end of side bar -->
 <div class="col-md-9 col-lg-10 py-5">
         
     <!-- title row -->
    <div class="row mb-5">
        <div class="col">
            <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Users</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> View - Bloggers <i class="fas fa-users mr-3 text-muted"></i></span>
            </h3>
        </div>
    </div>
    <!-- end of title row -->

     <!--################## start of sucess message and fail message ################-->
        <!--######################################## start of success and failure message  #######################################################-->
        
        <!-- edited successfully -->
          <?php if($success = $this->session->flashdata('edit_successful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-success">
                         <?= $success ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!-- edit unsuccessful -->
          <?php if($unsuccess = $this->session->flashdata('edit_unsuccessful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-danger">
                         <?= $unsuccess ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

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

        <!--######################################## end of success and failure message  #######################################################-->

    <!--################## end of sucess message and fail message ################-->

 <!--################## main content ################-->


                           <div class="col-md-12 main-datatable">
                <div class="card_body">
                    <div class="row d-flex">
                        <div class="col-sm-4 createSegment"> 
            
                         <!-- Button trigger modal -->
                         
                        <span class="d-inline-block" data-toggle="popover" data-content="You cannot add a blogger!">
                          <button class="btn btn-info" style="pointer-events: none;" type="button" disabled><i class="bi bi-person-plus"></i> Add A Blogger</button>
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
                                    <th style="min-width:50px;"> Fullname</th>
                                    <th style="min-width:100px;"> Contact </th>
                                    <th style="min-width:250px;"> Email </th>
                                    <th style="min-width:100px;"> Username </th>
                                    <th style="min-width:100px;"> Status</th>
                                    <th style="min-width:100px;"> Account</th>
                                    <th style="min-width:200px;"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($requests as $diary) { ?>
                                <tr>
                                    <td><?= $diary['sfirstname'] . ' ' . $diary['smiddlename'] . ' ' . $diary['smiddlename'] ?></td>
                                    <td><?= $diary['scontact'] ?></td>
                                    <td><?= $diary['semail'] ?></td>

                                     <td>
                                        <?= $diary['susername'] ?>
                                    </td>
                                    
                                    <td>
                                     <?php if($diary['sstatus'] == '2'){?> 
                                        <span class="mode mode_on">Enabled</span>
                                    <?php }else { ?>
                                        <span class="mode mode_off">Disabled</span>
                                     <?php }  ?>   
                                    </td>                                   

                                    <td>
                                         <?php if($diary['sstatus'] == '2'){?>   
                                            <button type="submit" class="btn btn-dark disableUser" user-id="<?= $diary['sid'] ?>">Disable <i class="bi bi-x-circle"></i></button>
                                         <?php } 
                                        else { ?>
                                            <button type="submit" class="btn btn-success enableUser" us-id="<?= $diary['sid'] ?>">Enable <i class="bi bi-check-circle"></i></button>
                                         <?php }  ?>                                  
                                    </td>

                                    <td>                      
                                         <button type="submit" class="btn btn-info editBloggerUser"

                                         user-first = "<?=$diary['sfirstname']?>"
                                         user-midname = "<?=$diary['smiddlename']?>"
                                         user-surname = "<?=$diary['ssurname']?>"
                                         user-email = "<?=$diary['semail']?>"
                                         user-phone = "<?=$diary['scontact']?>"
                                         user-meet = "<?=$diary['meet_link']?>"
                                         user-name = "<?=$diary['susername']?>"
                                         userr-id = "<?= $diary['sid'] ?>"

                                         >
                                                Edit <i class="bi bi-pencil"></i>
                                        </button>
                                        <button type="submit" class="btn btn-danger deleteUser" use-id="<?= $diary['sid'] ?>">
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

<?php $this->load->view('modals/userModal'); ?>

<?php $this->load->view('layouts/footer'); ?>

<script type="text/javascript">
    
    $(function () {
  $('[data-toggle="popover"]').popover()
});
</script>