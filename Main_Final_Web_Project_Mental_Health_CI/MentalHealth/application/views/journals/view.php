<?php if(($this->session->userdata('role')) == '3') {?>

<?php $this->load->view('layouts/userNav'); ?>

<!--########################################## end of user navigation ###############################################################################-->

<!--################################################## start of user journal content ###############################################################-->
<div class="col-md-9 col-lg-10 py-5">

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
               <div class="alert alert-success">
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

	<!--######################################## end of success and failure message  #######################################################-->

          <!-- title row -->
          <div class="row mb-5">
            <div class="col">
              <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Journals</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> View - All The Journals Added By You  <i class="bi bi-journal-text mr-3 text-muted"></i></span>
              </h3>
            </div>
          </div>
          <!-- end of title row -->

          <!-- cards row -->
            <div class="col-sm-4 createSegment"> 
            	<!-- Button trigger modal -->
                <button type="button" class="btn btn-info addJournal">
                   <i class="bi bi-journal-plus"></i> Add A New Journal
                </button>

            </div>     
                              

          <div class="row inform-card">
          <?php foreach ($journals as $diary) { ?>
            <div class="col-lg-3 col-md-6 col-10 mx-auto my-5">
              <div class="card card-1">
                <div class="card-body">
                  <div class="flex d-flex justify-content-between">
                    <i class="bi bi-journal-bookmark body-icon"></i>
                    <div class="side-text align-self-center">      	
                      <h3>Written At:</h3>
                      <h5><?= $diary['written_at'] ?></h5>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                  <a href="#" class="viewJournal" topicc-id="<?= $diary['jtopic'] ?>" desc-id="<?= $diary['jdesc'] ?>" date-id="<?= $diary['written_at'] ?>"><i class="fas fa-eye"></i> View</a>
                  <a href="#" class="editJournal" jour-id="<?= $diary['jid'] ?>" topi-id="<?= $diary['jtopic'] ?>" descc-id="<?= $diary['jdesc'] ?>" datee-id="<?= $diary['written_at'] ?> "><i class="fas fa-edit"></i> Edit</a>
                  <a href="#" class="deleteJournal" journal-id="<?= $diary['jid'] ?>"><i class="fas fa-trash"></i> Delete</a>
                </div>
              </div>
            </div>
           <?php } ?>
          </div>
          <!-- end of cards row -->

        </div>



		</div>
	</div>
<div>

<?php $this->load->view('modals/journalModal'); ?>

 <!--###################################################### end of user journal content ############################################################-->

<?php $this->load->view('layouts/footer'); ?>

<?php } else {
  redirect('login');
}