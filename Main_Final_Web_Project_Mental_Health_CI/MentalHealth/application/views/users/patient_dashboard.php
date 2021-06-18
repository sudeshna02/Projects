<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $this->load->view('layouts/patient_nav'); ?>

<!-- profile -->
  <section class="about py-5" id="about">
        <div class="container">
           <div class="row">

            <div class="col-10 col-md-6 my-5 align-self-center">
			<div class="card" style="width: 18rem;">
				<div class="blogs-container p-5">
		
			  <img class="card-img-top" src="<?= base_url() ?>/assets/profiles/<?=$this->session->userdata('image') ?>" class="img-fluid" style="height: 150px;" alt="Profile">
						
			  </div>
			  <div class="card-body">
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="<?= base_url() ?>patient/profile" class="btn btn-info ml-3">Manage</a>
			    <a href="<?= base_url() ?>patient/profile" class="btn btn-info ml-3">Update</a>
			  </div>
			
				</div>
            </div>
            <div class="col-10 mx-auto col-md-6 my-5 align-self-center">
          	<div class="card inform-card" style="width: 30rem;">
					  <div class="card-header card-1">
					    Your Details
					  </div>
					  <ul class="list-group list-group-flush">
					    <li class="list-group-item">Name: <?= $this->session->userdata('name') . ' ' . $this->session->userdata('middlename') . ' ' . $this->session->userdata('surname') ?> </li>
					    <li class="list-group-item">Username: <?= $this->session->userdata('usern')?> </li>
					    <li class="list-group-item">Contact: <?= $this->session->userdata('contact')?> </li>
					    <li class="list-group-item">Email: <?= $this->session->userdata('email')?> </li>
					    <li class="list-group-item">Role: </li>
					    <li class="list-group-item">Meet-Link: </li>
					    <li class="list-group-item">Status: </li>
					    <li class="list-group-item card-1"></li>
					  </ul>
					</div>
            </div>
          </div>

            </div>
      </section>

    <!-- services section -->
    <section class="services py-2 mb-5 text-center">
      <div class="container bg-light">

              <!--  title row-->
      <div class="row">
        <div class="col title m-5">
          <i class="fa fa-comments mr-3"></i>
          <div class="title-text">
            <h2 class="text-uppercase">About Us</h2>
          </div>
        </div>
      </div>

        <div class="row">
          <!-- single service -->
          <div class="col-10 mx-auto col-md-6 col-lg-4 my-5">
            <span class="service-icon">
              <i class="fas fa-user-md"></i>
            </span>
            <h5 class="font-weight-bold text-uppercase mt-5">direct consultation</h5>
            <p class="text-muted text-capitalize">
              consult with highly qualified doctors
            </p>
          </div>
          <!-- end of single service -->
          <!-- single service -->
          <div class="col-10 mx-auto col-md-6 col-lg-4 my-5">
            <span class="service-icon">
              <i class="fas fa-phone-volume"></i>
            </span>
            <h5 class="font-weight-bold text-uppercase mt-5">online support 24/7</h5>
            <p class="text-muted text-capitalize">
              we will assist you with your inquiries
            </p>
          </div>
          <!-- end of single service -->
          <!-- single service -->
          <div class="col-10 mx-auto col-md-6 col-lg-4 my-5">
            <span class="service-icon">
              <i class="fas fa-dollar-sign"></i>
            </span>
            <h5 class="font-weight-bold text-uppercase mt-5">free of cost service</h5>
            <p class="text-muted text-capitalize">
              no need to pay, just log in and share
            </p>
          </div>
          <!-- end of single service -->
        </div>

          <div class="row">
            <div class="col text-center section-title my-4">
              <a href="<?= base_url() ?>login" class="btn btn-black text-info"><h5 class="w-100 mx-auto">Get Started</h5></a>
              <div class="title-underline my-3 bg-secondary">
                <div class="title-underline__center"></div>
              </div>
            </div>
          </div>
      </div>
    </section>

      </div>
    </div>


<?php $this->load->view('layouts/footer'); ?>
