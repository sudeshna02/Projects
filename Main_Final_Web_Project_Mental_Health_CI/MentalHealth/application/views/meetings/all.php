<?php if(($this->session->userdata('role')) == '1') {?>

<?php $this->load->view('layouts/userNav'); ?>

 <!-- end of side bar -->
 <div class="col-md-9 col-lg-10 py-5">
         
     <!-- title row -->
    <div class="row mb-5">
        <div class="col">
            <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Meetings</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> View - All The Meetings <i class="fa fa-handshake mr-3 text-muted"></i></span>
            </h3>
        </div>
    </div>
    <!-- end of title row -->
        <!--######################################## start of success and failure message  #######################################################-->

        <!-- added successfully -->
        <?php if($success = $this->session->flashdata('add_successful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-success">
                         <?= $success ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!-- add unsuccessful -->
          <?php if($unsuccess = $this->session->flashdata('add_unsuccessful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-danger">
                         <?= $unsuccess ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

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

        <!-- unarchived successfully -->
          <?php if($success = $this->session->flashdata('change_successful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-success">
                         <?= $success ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!-- unarchive unsucessful -->
          <?php if($unsuccess = $this->session->flashdata('change_unsuccessful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-danger">
                         <?= $unsuccess ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!-- unarchived successfully -->
          <?php if($success = $this->session->flashdata('unchange_successful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-success">
                         <?= $success ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!-- unarchive unsucessful -->
          <?php if($unsuccess = $this->session->flashdata('unchange_unsuccessful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-danger">
                         <?= $unsuccess ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!--######################################## end of success and failure message  #######################################################-->

 <!--################## main content ################-->


            <div class="col-md-12 main-datatable">
                <div class="card_body">
                    <div class="row d-flex">
                        <div class="col-sm-4 createSegment"> 
            
                         <!-- Button trigger modal -->
                         
                        
                    <!-- Button trigger modal -->
                    <form action="<?= base_url() ?>admin/manage/meeting/add" method="POST" enctype="multipart/form-data">
                        <button type="submit" class="btn btn-info" >
                            <i class="bi bi-plus-circle"></i>  Add A Meeting 
                        </button>
                    </form>

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
                                    <th style="min-width:50px;"> Title </th>
                                    <th style="min-width:5px;">Doctor</th>
                                    <th style="min-width:50px;">Patient  </th>
                                    <th style="min-width:50px;"> Detail</th>
                                    <th style="min-width:100px;"> Status</th>
                                    <th style="min-width:100px;">  </th>
                                    <th style="min-width:50px;"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($meetings as $diary) { ?>
                                <tr>
                                    <td><?= $diary['mtitle'] ?></td>
                                    <td><?= $diary['sfirstname'] ?> <?= $diary['ssurname'] ?></td>

                                     <td>
                                        <?= $diary['pfirstname'] ?> <?= $diary['psurname'] ?>
                                    </td>
                                    
                                    <td>
                                        <button type="submit" class="btn btn-warning viewDescMeeting"

                                         meet-desc="<?= $diary['mdesc'] ?>"
                                         meet-link="<?= $diary['meet_link'] ?>"
                                         meet-doctor="<?= $diary['semail'] ?>"
                                         meet-patient="<?= $diary['pemail'] ?>"
                                         meet-date="<?= $diary['created_date'] ?>"

                                         >
                                                View <i class="bi bi-eye"></i>
                                        </button>
                                    </td>                                 

                                    <td>
                                        <?php if($diary['mstatus'] == '2'){?> 
                                                <span class="mode mode_on">Unarchived</span>
                                        <?php }else { ?>
                                                <span class="mode mode_off">Archived</span>
                                     <?php }  ?>                               
                                    </td>
                                    <td><form action="<?= base_url() ?>admin/manage/meeting/editView" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" value="<?= $diary['mid']?>" name="editMeeting">
                                             <button type="submit" class="btn btn-info">
                                                    Edit <i class="bi bi-pencil"></i>
                                            </button>
                                        </form>  </td>
                                        
                                    <td> 
                                    <?php if($diary['mstatus'] == '2'){?>   
                                            <button type="submit" class="btn btn-dark archiveMeeting" mee-id="<?= $diary['mid'] ?>">Archive  <i class="bi bi-archive"></i></button>
                                         <?php } 
                                        else { ?>
                                            <button type="submit" class="btn btn-success unarchiveMeeting" meet-id="<?= $diary['mid'] ?>">Unarchive  <i class="bi bi-archive"></i></button>
                                         <?php }  ?>                  

                                        <button type="submit" class="btn btn-danger deleteMeeting" m-id="<?= $diary['mid'] ?>">
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

<?php $this->load->view('modals/meetingModal'); ?>

<?php $this->load->view('layouts/footer'); ?>

<script type="text/javascript">
    
  $(function () {
  $('[data-toggle="popover"]').popover()
});

</script>


<?php } else {
  redirect('login');
}