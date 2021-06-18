<?php
  $this->load->view('layouts/head');
?>

<!--################## Navbar https://jsfiddle.net/bootstrapious/3j4a0Lps ############################################-->
<header class="header">
  
    <section class="navigation">    
    <nav class="navbar navbar-expand-lg navbar-light py-3">
       
    <!-- navbar -->
      <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand text-uppercase" href="#">
          <h1 class="nav-title text-color">well-being</h1>
        </a>

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
              <a class="nav-link" href="<?= base_url() ?>"> <i class="bi bi-house-door m-2"></i>Home </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url() ?>about"> <i class="bi bi-info-circle m-2"></i>About Us </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url() ?>testyourself"> <i class="bi bi-chat-left-text m-2"></i>Test Yourself </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url() ?>blogs"> <i class="bi bi-newspaper m-2"></i>Blogs </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url() ?>experiences"> <i class="bi bi-emoji-laughing m-2"></i>Experiences </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url() ?>request"> <i class="bi bi-envelope m-2"></i>Send Request </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url() ?>apply"> <i class="bi bi-envelope-open m-2"></i>Apply </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url() ?>contact"> <i class="bi bi-telephone m-2"></i>Contact </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url() ?>login"> <i class="bi bi-box-arrow-in-right m-2"></i>Login </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url() ?>signup"> <i class="bi bi-person-plus m-2"></i>Signup </a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
</section>


<!--################## End of Navbar https://jsfiddle.net/bootstrapious/3j4a0Lps ########################################-->