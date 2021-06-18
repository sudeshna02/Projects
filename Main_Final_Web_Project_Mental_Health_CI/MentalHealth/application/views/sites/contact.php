<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $this->load->view('layouts/siteNav'); ?>
</header>


    <!-- services section -->
    <section class="services py-2 mt-5 mb-5 text-center">
      <div class="container bg-light">

      	      <!--  title row-->
      <div class="row">
        <div class="col title m-5">
          <i class="fa fa-comments mr-3"></i>
          <div class="title-text">
            <h2 class="text-uppercase">Contact Us</h2>
          </div>
        </div>
      </div>

        <div class="row">
          <!-- single service -->
          <div class="col-10 mx-auto col-md-6 col-lg-4 my-5">
            <span class="service-icon">
              <i class="bi bi-geo-alt"></i>
            </span>
            <h5 class="font-weight-bold text-uppercase mt-5">at our location</h5>
            <p class="text-muted text-capitalize">
              Newroad, Kathmandu, Nepal
            </p>
          </div>
          <!-- end of single service -->
          <!-- single service -->
          <div class="col-10 mx-auto col-md-6 col-lg-4 my-5">
            <span class="service-icon">
              <i class="fas fa-phone-volume"></i>
            </span>
            <h5 class="font-weight-bold text-uppercase mt-5">at our phone</h5>
            <p class="text-muted text-capitalize">
              + 977 9898787976
            </p>
          </div>
          <!-- end of single service -->
          <!-- single service -->
          <div class="col-10 mx-auto col-md-6 col-lg-4 my-5">
            <span class="service-icon">
              <i class="bi bi-envelope"></i>
            </span>
            <h5 class="font-weight-bold text-uppercase mt-5">at our email</h5>
            <p class="text-muted">
              wellbeing.therapy2021@gmail.com
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

<?php $this->load->view('layouts/footer'); ?>