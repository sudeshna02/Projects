<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $this->load->view('layouts/siteNav'); ?>

<?php $this->load->view('layouts/carousal'); ?>


<!-- questions -->
<section class="questions">
	<div class="container-fluid">
		<div class="row">
			<!-- blogs categories info -->
   			<?php $this->load->view('layouts/siteCategoryTest'); ?>

				<div class="col-10 col-md-7 col-lg-9 mx-auto my-3 ">

				   <!--  title row-->
				    <div class="row">
				      <div class="col title mt-4">
				         <i class="fa fa-stethoscope mr-3"></i>
				         <div class="title-text">
				           <h4 class="text-uppercase font-weight-bold">Test YourSelf!</h4>
				         </div>
				      </div>
				    </div>

				    <div class="row inform-card">
				       <!-- single link -->
       					<?php foreach ($categories as $category) { ?>     					
					        <div class="col-lg-4 col-md-6 col-10 my-5">
					           <a href="<?= site_url() ?>testyourself/question/display/<?= $category['cid'] ?>">
					            <div class="card card-1 w-75 ml-5">
					               <div class="card-body p-5">
					                  <div class="flex d-flex justify-content-between">
					                    <i class="bi bi-file-earmark-medical body-icon"></i>
					                    <div class="side-text align-self-center ml-4">
					                      <h3></h3>
					                      <h5><?= $category['cname'] ?></h5>
					                    </div>
					                  </div>
					                </div>
					                <div class="card-footer d-flex justify-content-between">
					                  <a href="<?= site_url() ?>testyourself/question/display/<?= $category['cid'] ?>">Start</a><a href="<?= site_url() ?>testyourself/question/display/<?= $category['cid'] ?>"><i class="fa fa-arrow-circle-right"></i></a>
					                </div>
					              </div></a>
					        </div>

					    <?php } ?>

					</div>
				 
				</div>
		</div>
	</div>
</section>

<?php $this->load->view('layouts/footer'); ?>