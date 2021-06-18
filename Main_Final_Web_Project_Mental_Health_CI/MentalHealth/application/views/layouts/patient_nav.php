<?php
  $this->load->view('layouts/head');
?>
    
<!-- ############################################## start of index header and navigation section ###################################################### -->

<!-- header section -->
    <header class="header" id="header">
      <div class="container-fluid">
        <div class="row height-max-pat align-items-center">
          <div class="col col-md-9 ml-auto pr-5">
            <h1
              class="title-heading d-inline-block p-2 text-uppercase display-2"
            >
              Welcome!
            </h1>
            <h5 class="text-muted my-2 title">
              We Are Glad That You Are Here!<br><br>
              <a href="<?= base_url() ?>patient/manage/journal"><pre class="btn btn-black text-uppercase text-info">Pour Your Heart Out! <i class="bi bi-heart"></i></pre></a>

              <!-- <small>You can share your thoughts here! </small> -->
            </h5>
          </div>
        </div>
      </div>
    </header>


    <section class="navigation">    
    
    <nav class="navbar navbar-expand-lg navbar-light py-3">
       
      <!-- navbar -->
      <div class="container-fluid">
        
        <!-- Brand -->
        <a class="text-muted"><i class="fa fa-copyright" aria-hidden="true"></i> 2021/ Well-being</a>

        <!-- Toggler/collapsibe Button -->
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#myNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

                <!-- Navbar links -->

        <div class="collapse navbar-collapse justify-content-end" id="myNavbar">

          <!-- nav icons -->
          <ul class="navbar-nav icons">
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url() ?>patient/profile"> <i class="bi bi-house-door m-2"></i>My Profile </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url() ?>patient/manage/meeting"> <i class="bi bi-info-circle m-2"></i>Meetings </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url() ?>patient/manage/request/<?=$this->session->userdata('id')?>"> <i class="bi bi-newspaper m-2"></i>Requests </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url() ?>patient/manage/experience/<?=$this->session->userdata('id')?>"> <i class="bi bi-newspaper m-2"></i>Experiences </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url() ?>patient/manage/appointment"> <i class="bi bi-emoji-laughing m-2"></i>Appointments </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url() ?>patient/manage/medication"> <i class="bi bi-info-circle m-2"></i>Medications </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url() ?>patient/manage/journal/<?=$this->session->userdata('id')?>"> <i class="bi bi-envelope m-2"></i>Journal </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= site_url() ?>logout"><i class="fa fa-sign-out-alt"></i> Logout </a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
</section>    

<!-- ############################################## end of index header and navigation section ######################################################## -->