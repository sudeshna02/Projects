<?php $this->load->view('layouts/userNav'); ?>

 <!-- end of side bar -->
 <div class="col-md-9 col-lg-10 py-5">
         
     <!-- title row -->
    <div class="row mb-5">
        <div class="col">
            <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Medications</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> View - All The Medications Added By You <i class="fa fa-edit mr-3 text-muted"></i></span>
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


            <div class="col-md-12 main-datatable">
                <div class="card_body">
                    <div class="row d-flex">
                        <div class="col-sm-4 createSegment"> 
            
                         <!-- Button trigger modal -->
                         
                        
                    <!-- Button trigger modal -->
                    <form action="<?= base_url() ?>doctor/manage/medication/add" method="POST" enctype="multipart/form-data">
                        <button type="submit" class="btn btn-info">
                            <i class="bi bi-plus-circle"></i>  Add A Medication
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
                                    <th style="min-width:50px;"> Name </th>
                                    <th style="min-width:200px;"> Description </th>
                                    <th style="min-width:100px;"> For Meeting </th>
                                    <th style="min-width:20px;"> Created At</th>
                                    <th style="min-width:100px;"> Status </th>
                                    <th style="min-width:100px;"> Change </th>
                                    <th style="min-width:150px;"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($medications as $diary) { ?>
                                <tr>
                                    <td><?= $diary['mname'] ?></td>
                                    <td><?= $diary['mcontent'] ?></td>
                                    <td><?= $diary['mtitle'] ?></td>

                                    <td>
                                        <?= $diary['created_at'] ?>
                                    </td>
                                    
                                   <td>
                                         <?php if($diary['mdstatus'] == '2'){?> 
                                                <span class="mode mode_on">Unarchived</span>
                                        <?php }else { ?>
                                                <span class="mode mode_off">Archived</span>
                                     <?php }  ?>  
                                        
                                    </td>
                                    <td>
                                        <?php if($diary['mdstatus'] == '2'){?>   
                                            <button type="submit" class="btn btn-dark archiveMedication" archive-id="<?= $diary['mdid'] ?>">Archive <i class="bi bi-archive"></i></button>
                                         <?php } 
                                        else { ?>
                                            <button type="submit" class="btn btn-success unarchiveMedication" unarchive-id="<?= $diary['mdid'] ?>">Unarchive <i class="bi bi-archive"></i></button> 
                                         <?php }  ?>                                      
                                    </td>

                                    <td> 

                                
                                <button type="submit" class="btn btn-info editMedication"

                                        medication-name = "<?= $diary['mname'] ?>"
                                        medication-desc = "<?= $diary['mcontent'] ?>"
                                        medication-meeting = "<?= $diary['mtitle'] ?>"
                                        medication-id = "<?= $diary['mdid'] ?>">
                                                Edit <i class="bi bi-pencil"></i>
                                        </button>  
                                     
                                        <button type="submit" class="btn btn-danger deleteMedication" delete-id="<?= $diary['mdid'] ?>">
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

<?php $this->load->view('modals/medicationModal'); ?>

<?php $this->load->view('layouts/footer'); ?>

<script type="text/javascript">
    
  $(function () {
  $('[data-toggle="popover"]').popover()
});

</script>