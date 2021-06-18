<?php
  $this->load->view('layouts/head');
?>

    <!-- navbar -->

    <nav class="navbar navbar-expand-md">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand text-uppercase text-info" href="#">
          <h1>well-being</h1>
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
          <ul class="navbar-nav links d-md-none">
            <?php if ($this->session->userdata('role') == '1'){  ?>
            <li class="nav-item">
              <a class="nav-link active" href="<?= site_url() ?>admin/dashboard"
                ><i class="fa fa-columns text-muted mr-3"></i>Dashboard</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/profile"
                ><i class="fa fa-home text-muted mr-3"></i>My Profile</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link addAnnouncement" href="#"
                ><i class="fa fa-bullhorn mr-3 text-muted"></i>Make An Announcement!</a
              >
            </li>  <?php } ?>
            <?php if ($this->session->userdata('role') == '2'){  ?>
            <li class="nav-item">
              <a class="nav-link active" href="<?= site_url() ?>doctor/dashboard"
                ><i class="fa fa-columns text-muted mr-3"></i>Dashboard</a
              >
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/profile"
                ><i class="fa fa-home text-muted mr-3"></i>My Profile</a
              >
            </li>
            <li class="nav-item experienceModal">
              <a class="nav-link " href="#"
                ><i class="bi bi-stars mr-3 text-muted"></i>Add An Experience</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link requestModal" href="#"
                ><i class="fa fa-question mr-3 text-muted"></i>Send A Request</a
              >
            </li> <?php } ?>
            
            <?php if ($this->session->userdata('role') == '4'){  ?>
            <li class="nav-item">
                <a class="nav-link active" href="<?= site_url() ?>blogger/dashboard"
                  ><i class="fa fa-columns text-muted mr-3"></i>Dashboard</a
                >
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>blogger/profile"
                ><i class="fa fa-home text-muted mr-3"></i>My Profile</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>blogger/recentBlogs/<?=$this->session->userdata('id')?>"
                ><i class="bi bi-view-stacked mr-3 text-muted"></i>Recent Blogs</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link uploadModal" href="#"
                ><i class="bi bi-stickies-fill mr-3 text-muted"></i>Upload A Blog</a
              >
            </li>
            <li class="nav-item experienceModal">
              <a class="nav-link " href="#"
                ><i class="bi bi-stars mr-3 text-muted"></i>Add An Experience</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link requestModal" href="#"
                ><i class="fa fa-question mr-3 text-muted"></i>Send A Request</a
              >
            </li>

            <?php } ?>

          <?php if ($this->session->userdata('role') == '3'){  ?>
            <li class="nav-item">
                <a class="nav-link active" href="<?= site_url() ?>patient/dashboard"
                  ><i class="fa fa-columns text-muted mr-3"></i>Dashboard</a
                >
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>patient/profile"
                ><i class="fa fa-home text-muted mr-3"></i>My Profile</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link requestModal" href="#"
                ><i class="bi bi-pencil-square mr-3 text-muted"></i>Write A Journal</a
              >
            </li>

            <li class="nav-item experienceModal">
              <a class="nav-link " href="#"
                ><i class="bi bi-stars mr-3 text-muted"></i>Add An Experience</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link requestModal" href="#"
                ><i class="fa fa-question mr-3 text-muted"></i>Send A Request</a
              >
            </li>
            <?php } ?>

           <?php if ($this->session->userdata('role') == '1'){  ?>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/user"
                ><i class="fa fa-users-cog mr-3 text-muted"></i>Users</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/meeting"
                ><i class="fa fa-handshake mr-3 text-muted"></i>Meetings</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/qa"
                ><i class="fa fa-question-circle mr-3 text-muted"></i>Q/As</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/blog"
                ><i class="fa fa-edit mr-3 text-muted"></i>Blogs</a
              >
            </li> 
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/experience"
                ><i class="fa fa-comments mr-3 text-muted"></i>Experiences</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/medication"
                ><i class="fa fa-prescription-bottle-alt mr-3 text-muted"></i>Medications</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/appointment"
                ><i class="fa fa-calendar-check mr-3 text-muted"></i>Appointments</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/category"
                ><i class="fa fa-stream mr-3 text-muted"></i>Categories</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/request"
                ><i class="fa fa-question mr-3 text-muted"></i>Requests</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/announcement"
                ><i class="fa fa-mail-bulk mr-3 text-muted"></i>Announcements</a
              >
            </li> <?php } ?>

            <?php if ($this->session->userdata('role') == '2'){  ?>

            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/manage/announcement"
                ><i class="fa fa-bullhorn mr-3 text-muted"></i>View Announcements</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/manage/meeting"
                ><i class="fa fa-handshake mr-3 text-muted"></i>Meetings</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/manage/qa"
                ><i class="fa fa-question-circle mr-3 text-muted"></i>View Q/As</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/manage/appointment"
                ><i class="fa fa-calendar-check mr-3 text-muted"></i>Appointments</a
              >
            </li> 
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/manage/medication"
                ><i class="fa fa-prescription-bottle-alt mr-3 text-muted"></i>Medications</a
              >
            </li><?php } ?>

            <?php if ($this->session->userdata('role') == '4'){  ?>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>blogger/manage/blogs/<?=$this->session->userdata('id')?>"
                ><i class="fa fa-edit mr-3 text-muted"></i>View Added Blogs</a
              >
            </li> 
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>blogger/manage/requests/<?=$this->session->userdata('id')?>"
                ><i class="fa fa-paper-plane mr-3 text-muted"></i>View Sent Requests</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>blogger/manage/experiences/<?=$this->session->userdata('id')?>"
                ><i class="fa fa-comments mr-3 text-muted"></i>View Added Experiences</a
              >
            </li> <?php } ?> 
            <?php if ($this->session->userdata('role') == '2'){  ?>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/manage/blogs/<?=$this->session->userdata('id')?>"
                ><i class="fa fa-edit mr-3 text-muted"></i>View Added Blogs</a
              >
            </li> 
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/manage/experiences/<?=$this->session->userdata('id')?>"
                ><i class="fa fa-comments mr-3 text-muted"></i>View Added Experiences</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/manage/requests/<?=$this->session->userdata('id')?>"
                ><i class="fa fa-paper-plane mr-3 text-muted"></i>View Sent Requests</a
              >
            </li> <?php } ?> 
            <?php if ($this->session->userdata('role') == '3'){  ?>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>patient/manage/meeting"
                ><i class="fa fa-handshake mr-3 text-muted"></i>View Meetings</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>patient/manage/appointment"
                ><i class="fa fa-calendar-check mr-3 text-muted"></i>View Apppointments</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>patient/manage/medication"
                ><i class="fa fa-prescription-bottle-alt mr-3 text-muted"></i>View Medications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>patient/manage/request/<?=$this->session->userdata('id')?>"
                ><i class="fa fa-paper-plane mr-3 text-muted"></i>View Sent Requests</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>patient/manage/experience/<?=$this->session->userdata('id')?>"
                ><i class="fa fa-comments mr-3 text-muted"></i>View Added Experiences</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>patient/manage/journal/<?=$this->session->userdata('id')?>"
                ><i class="bi bi-journal-text mr-3 text-muted"></i>View Added Journals</a>
            </li> <?php } ?>
          </ul>


          <!-- nav icons -->
          <ul class="navbar-nav icons">
            <li class="nav-item mr-4">
              <a class="nav-link" href="#"> <i class="fa fa-search"></i> </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="#"> <i class="fa fa-bell icon"></i> </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="#">
                <i class="fa fa-comment icon"></i>
              </a>
            </li>
            <li class="nav-item mr-5">
              <a class="nav-link" href="#">
                <img
                  src="<?= base_url() ?>/assets/profiles/<?=$this->session->userdata('image') ?>"
                  class="img-fluid rounded-circle img-thumbnail"
                  alt="Logo"
                  style="width:30px;"
                />
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="<?= site_url() ?>logout"
              >
                <i class="fa fa-sign-out-alt"></i> Log Out
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end of nav -->

    <!-- main content -->

    <div class="container-fluid mt-2">
      <div class="row">
        <nav
          class="col-md-3 col-lg-2 d-none d-md-block sidebar right-padding max-viewport bg-light" 
        >
          <a class="navbar-brand text-color py-3" href="#">
            <img
              src="<?= base_url() ?>/assets/profiles/<?=$this->session->userdata('image') ?>"
              class="img-fluid rounded-circle img-thumbnail mr-3"
              alt="Logo"
              style="width:40px;"
            />
           <?php  echo $this->session->userdata('name'); ?> 
           <?php  echo $this->session->userdata('middlename'); ?> 
           <?php  echo $this->session->userdata('surname'); ?> 
          </a>

          <?php
                switch ($this->session->userdata('role')) {
                    case '1':
                        echo '<br><small>Role:  Admin</small>';
                        break;
                    case '2':
                         echo '<br><small>Role:  Doctor</small>';
                        break;
                    case '4':
                        echo '<br><small>Role:  Blogger</small>';
                        break;
                }
             ?>
          <hr />
          <?php if ($this->session->userdata('role') == '1'){  ?>
          <ul class="navbar-nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="<?= site_url() ?>admin/dashboard"
                ><i class="fa fa-columns text-muted mr-3"></i>Dashboard</a
              >
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/profile"
                ><i class="fa fa-home text-muted mr-3"></i>My Profile</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link addAnnouncement" href="#"
                ><i class="fa fa-bullhorn mr-3 text-muted"></i>Make An Announcement!</a
              >
            </li> <?php } ?>
            <?php if ($this->session->userdata('role') == '2'){  ?>
            <ul class="navbar-nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="<?= site_url() ?>doctor/dashboard"
                ><i class="fa fa-columns text-muted mr-3"></i>Dashboard</a
              >
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/profile"
                ><i class="fa fa-home text-muted mr-3"></i>My Profile</a
              >
            </li>
            <li class="nav-item experienceModal">
              <a class="nav-link " href="#"
                ><i class="bi bi-stars mr-3 text-muted"></i>Add An Experience</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link requestModal" href="#"
                ><i class="fa fa-question mr-3 text-muted"></i>Send A Request</a
              >
            </li> <?php } ?>

            <?php if ($this->session->userdata('role') == '4'){  ?>
          <ul class="navbar-nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="<?= site_url() ?>blogger/dashboard"
                  ><i class="fa fa-columns text-muted mr-3"></i>Dashboard</a
                >
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>blogger/profile"
                ><i class="fa fa-home text-muted mr-3"></i>My Profile</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>blogger/recentBlogs/<?=$this->session->userdata('id')?>"
                ><i class="bi bi-view-stacked mr-3 text-muted"></i>Recent Blogs</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link uploadModal" href="#"
                ><i class="bi bi-stickies-fill mr-3 text-muted"></i>Upload A Blog</a
              >
            </li>
            <li class="nav-item experienceModal">
              <a class="nav-link " href="#"
                ><i class="bi bi-stars mr-3 text-muted"></i>Add An Experience</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link requestModal" href="#"
                ><i class="fa fa-question mr-3 text-muted"></i>Send A Request</a
              >
            </li>

            <?php } ?>

          <?php if ($this->session->userdata('role') == '3'){  ?>
            <ul class="navbar-nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="<?= site_url() ?>patient/dashboard"
                  ><i class="fa fa-columns text-muted mr-3"></i>Dashboard</a
                >
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>patient/profile"
                ><i class="fa fa-home text-muted mr-3"></i>My Profile</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link requestModal" href="#"
                ><i class="bi bi-pencil-square mr-3 text-muted"></i>Write A Journal</a
              >
            </li>

            <li class="nav-item experienceModal">
              <a class="nav-link " href="#"
                ><i class="bi bi-stars mr-3 text-muted"></i>Add An Experience</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link requestModal" href="#"
                ><i class="fa fa-question mr-3 text-muted"></i>Send A Request</a
              >
            </li>
            <?php } ?>

          </ul>

          <ul class="navbar-nav flex-column my-4">
            <li class="nav-item text-uppercase text-muted">Manage</li>

           <?php if ($this->session->userdata('role') == '1'){  ?>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/user"
                ><i class="fa fa-users-cog mr-3 text-muted"></i>Users</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/meeting"
                ><i class="fa fa-handshake mr-3 text-muted"></i>Meetings</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/qa"
                ><i class="fa fa-question-circle mr-3 text-muted"></i>Q/As</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/blog"
                ><i class="fa fa-edit mr-3 text-muted"></i>Blogs</a
              >
            </li> 
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/experience"
                ><i class="fa fa-comments mr-3 text-muted"></i>Experiences</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/medication"
                ><i class="fa fa-prescription-bottle-alt mr-3 text-muted"></i>Medications</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/appointment"
                ><i class="fa fa-calendar-check mr-3 text-muted"></i>Appointments</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/category"
                ><i class="fa fa-stream mr-3 text-muted"></i>Categories</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/request"
                ><i class="fa fa-question mr-3 text-muted"></i>Requests</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>admin/manage/announcement"
                ><i class="fa fa-mail-bulk mr-3 text-muted"></i>Announcements</a
              >
            </li> <?php } ?>

            <?php if ($this->session->userdata('role') == '2'){  ?>

            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/manage/announcement"
                ><i class="fa fa-bullhorn mr-3 text-muted"></i>View Announcements</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/manage/meeting"
                ><i class="fa fa-handshake mr-3 text-muted"></i>Meetings</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/manage/qa"
                ><i class="fa fa-question-circle mr-3 text-muted"></i>View Q/As</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/manage/appointment"
                ><i class="fa fa-calendar-check mr-3 text-muted"></i>Appointments</a
              >
            </li> 
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/manage/medication"
                ><i class="fa fa-prescription-bottle-alt mr-3 text-muted"></i>Medications</a
              >
            </li><?php } ?>

            <?php if ($this->session->userdata('role') == '4'){  ?>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>blogger/manage/blogs/<?=$this->session->userdata('id')?>"
                ><i class="fa fa-edit mr-3 text-muted"></i>View Added Blogs</a
              >
            </li> 
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>blogger/manage/requests/<?=$this->session->userdata('id')?>"
                ><i class="fa fa-paper-plane mr-3 text-muted"></i>View Sent Requests</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>blogger/manage/experiences/<?=$this->session->userdata('id')?>"
                ><i class="fa fa-comments mr-3 text-muted"></i>View Added Experiences</a
              >
            </li> <?php } ?> 
            <?php if ($this->session->userdata('role') == '2'){  ?>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/manage/blogs/<?=$this->session->userdata('id')?>"
                ><i class="fa fa-edit mr-3 text-muted"></i>View Added Blogs</a
              >
            </li> 
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/manage/experiences/<?=$this->session->userdata('id')?>"
                ><i class="fa fa-comments mr-3 text-muted"></i>View Added Experiences</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>doctor/manage/requests/<?=$this->session->userdata('id')?>"
                ><i class="fa fa-paper-plane mr-3 text-muted"></i>View Sent Requests</a
              >
            </li> <?php } ?> 
            <?php if ($this->session->userdata('role') == '3'){  ?>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>patient/manage/meeting"
                ><i class="fa fa-handshake mr-3 text-muted"></i>View Meetings</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>patient/manage/appointment"
                ><i class="fa fa-calendar-check mr-3 text-muted"></i>View Apppointments</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>patient/manage/medication"
                ><i class="fa fa-prescription-bottle-alt mr-3 text-muted"></i>View Medications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>patient/manage/request/<?=$this->session->userdata('id')?>"
                ><i class="fa fa-paper-plane mr-3 text-muted"></i>View Sent Requests</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>patient/manage/experience/<?=$this->session->userdata('id')?>"
                ><i class="fa fa-comments mr-3 text-muted"></i>View Added Experiences</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= site_url() ?>patient/manage/journal/<?=$this->session->userdata('id')?>"
                ><i class="bi bi-journal-text mr-3 text-muted"></i>View Added Journals</a>
            </li> <?php } ?>

          </ul>
        </nav>


<?php
 $this->load->view('modals/blogModal');
  $this->load->view('modals/announcementModal');
  $this->load->view('modals/modal');
?>