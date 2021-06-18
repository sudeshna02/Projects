<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $this->load->view('layouts/userNav'); ?>

<!-- end of side bar -->
<div class="col-md-9 col-lg-10 py-5">
    <!-- title row -->
	          <div class="row mb-5">
	            <div class="col">
	              <h3>
	                <span class="text-uppercase text-danger">Dashboard /</span
	                ><span class="text-muted small"> My Profile <i class="bi bi-house-door mr-3 text-muted"></i></span>
	              </h3>
	            </div>
	          </div>
          <!-- end of title row -->

         <!--######################################## start of success and failure message  #######################################################-->

        <!-- added successfully -->
        <?php if($success = $this->session->flashdata('picture_successful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-success">
                         <?= $success ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!-- add unsuccessful -->
          <?php if($unsuccess = $this->session->flashdata('picture_unsuccessful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-danger">
                         <?= $unsuccess ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!--######################################## end of success and failure message  #######################################################-->

          <div class="row mb-5">
          <div class="col-lg-3 col-md-6 col-10 ml-5 my-3">
			<div class="card" style="width: 18rem;">
				<div class="blogs-container p-5">
		
			  <img class="card-img-top" src="<?= base_url() ?>/assets/profiles/<?=$this->session->userdata('image') ?>" class="img-fluid" style="height: 150px;" alt="Profile">
						
			  </div>
			  <div class="card-body">
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <button type="submit" class="btn btn-info ml-3 addPicture">Upload</button>
			    <button type="submit" class="btn btn-info ml-5 addPicture">Update</button>
			  </div>
			
				</div>
			</div>

		<div class="col-lg-6 col-md-6 col-6 my-3">
			

				<div class="card inform-card" style="width: 35rem;">
					  <div class="card-header card-1">
					    Your Details
					  </div>
					  <ul class="list-group list-group-flush">
					    <li class="list-group-item">Name: <?= $this->session->userdata('name') . ' ' . $this->session->userdata('middlename') . ' ' . $this->session->userdata('surname') ?> </li>
					    <li class="list-group-item">Username: <?= $this->session->userdata('usern')?> </li>
					    <li class="list-group-item">Contact: <?= $this->session->userdata('contact')?> </li>
					    <li class="list-group-item">Email: <?= $this->session->userdata('email')?> </li>

					              <?php
	                switch ($this->session->userdata('role')) {
	                    case '1':
	                        echo '<li class="list-group-item">Role: Admin </li>';
	                        break;
	                    case '2':
	                         echo '<li class="list-group-item">Role: Doctor </li>';
	                        break;
	                    case '3':
	                         echo '<li class="list-group-item">Role: Patient </li>';
	                        break;
	                    case '4':
	                        echo '<li class="list-group-item">Role: Blogger </li>';
	                        break;
              				  } ?>
					    <li class="list-group-item">Meet-Link: </li>
					    <li class="list-group-item">Status: <span class="mode mode_on">Active</span></li>
					    <li class="list-group-item card-1"></li>
					  </ul>
					</div>
			</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('modals/profileModal'); ?>
<?php $this->load->view('layouts/footer'); ?>