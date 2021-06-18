<?php if(($this->session->userdata('role')) == '1') {?>

<?php $this->load->view('layouts/userNav'); ?>
<!--########################################## end of user navigation ###############################################################################-->

<!--################################################## start of admin announcement content ###############################################################-->

<!-- end of side bar -->
<div class="col-md-9 col-lg-10 py-5">

          <!-- title row -->
          <div class="row mb-5">
            <div class="col">
              <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Appointment</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> View - All The Appointments <i class="fa fa-calendar-check mr-3 text-muted"></i></span>
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

        <!--######################################## end of success and failure message  #######################################################-->

        <!--################## main content ################-->

        <div class="col-md-12 main-datatable">
                <div class="card_body">
                    <div class="row d-flex">
                        <div class="col-sm-4 createSegment"> 
            
                    <!-- Button trigger modal -->
                    <form action="<?= base_url() ?>admin/manage/appointment/add" method="POST" enctype="multipart/form-data">
                        <button type="submit" class="btn btn-info" >
                            <i class="bi bi-plus-circle"></i>  Add An Appointment 
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
                                    <th style="min-width:100px;">Appointment Set For Meeting</th>
                                    <th style="min-width:150px;">Title</th>
                                    <th style="min-width:150px;">Description</th>
                                    <th style="min-width:50px;">Date</th>
                                    <th style="min-width:50px;">Time</th>
                                    <th style="min-width:20px;"></th>
                                    <th style="min-width:150px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($appointments as $diary) { ?>
                              <tr>
                                    <td><?= $diary['mtitle'] ?></td>  
                                    <td><?= $diary['atitle'] ?></td>
                                    <td><?= $diary['adesc'] ?></td> 
                                    <td><?= $diary['adate'] ?></td>
                                    <td><?= $diary['atime'] ?></td>
                                    <td><form action="<?= base_url() ?>admin/manage/appointment/edit" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" value="<?= $diary['aid']?>" name="editAppointment">
                                             <button type="submit" class="btn btn-info">
                                                    Edit <i class="bi bi-pencil"></i>
                                            </button>
                                        </form>  </td>
                                    <td>   
                                    <?php if($diary['astatus'] == '2'){?>   
                                            <button type="submit" class="btn btn-dark archiveAppointment" aa-id="<?= $diary['aid'] ?>">Archive  <i class="bi bi-archive"></i></button>
                                         <?php } 
                                        else { ?>
                                            <button type="submit" class="btn btn-success unarchiveAppointment" ua-id="<?= $diary['aid'] ?>">Unarchive  <i class="bi bi-archive"></i></button>
                                         <?php }  ?>                  

                                        <button type="submit" class="btn btn-danger deleteAppointment" da-id="<?= $diary['aid'] ?>">
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
             <!--################## main content ################-->
        </div>
      </div>
    </div>

<?php $this->load->view('modals/appointmentModal'); ?>

 <!--###################################################### end of user announcement content ############################################################-->


<?php $this->load->view('layouts/footer'); ?>

<?php } else {
  redirect('login');
}