<?php $this->load->view('layouts/userNav'); ?>

        <!-- end of side bar -->
        <div class="col-md-9 col-lg-10 py-5">
          <!-- title row -->
          <div class="row mb-5">
            <div class="col">
              <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Users</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small">  Manage - All The Users According To The User's Category <i class="fas fa-users-cog mr-3 text-muted"></i></span>
              </h3>
            </div>
          </div>
          <!-- end of title row -->
        <!--################## main content ################-->

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

                  <!-- cards row -->

          <div class="row inform-card">
            <div class="col-lg-4 col-md-6 col-10 my-5">
              <a href="<?= site_url() ?>admin/manage/user/view_doctors">
              <div class="card card-1 w-75 ml-5">
                <div class="card-body p-5">
                  <div class="flex d-flex justify-content-between">
                    <i class="fas fa-user-md body-icon"></i>
                    <div class="side-text align-self-center ml-4">
                      <h3>MANAGE</h3>
                      <h5>Doctors</h5>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                  <a href="<?= site_url() ?>admin/manage/user/view_doctors">Manage</a><a href="<?= site_url() ?>admin/manage/user/view_doctors"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div></a>
            </div>
            <div class="col-lg-4 col-md-6 col-10 my-5">
              <a href="<?= site_url() ?>admin/manage/user/view_patients">
              <div class="card card-2 w-75 ml-4">
                <div class="card-body p-5">
                  <div class="flex d-flex justify-content-between">
                    <i class="fas fa-user-injured body-icon"></i>
                    <div class="side-text align-self-center">
                      <h3>MANAGE</h3>
                      <h5>Patients</h5>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                  <a href="<?= site_url() ?>admin/manage/user/view_patients">Manage</a><a href="<?= site_url() ?>admin/manage/user/view_patients"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div></a>
            </div>
            <div class="col-lg-4 col-md-6 col-10 my-5">
              <a href="<?= site_url() ?>admin/manage/user/view_bloggers">
              <div class="card card-3 w-75">
                <div class="card-body p-5">
                  <div class="flex d-flex justify-content-between">
                    <i class="fas fa-users  body-icon"></i>
                    <div class="side-text align-self-center">
                      <h3>MANAGE</h3>
                      <h5>Bloggers</h5>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                  <a href="<?= site_url() ?>admin/manage/user/view_bloggers">Manage</a> <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div></a>
            </div>
          </div>

          <!-- end of cards row -->