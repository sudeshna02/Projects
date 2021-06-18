<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php if(($this->session->userdata('role')) == '1') {?>

<?php $this->load->view('layouts/userNav'); ?>

        <!-- end of side bar -->
        <div class="col-md-9 col-lg-10 py-5">

          <!-- title row -->
          <div class="row mb-5">
            <div class="col">
              <h3>
                <span class="text-uppercase text-danger">Dashboard /</span
                ><span class="text-muted small"> My Dashboard</span>
              </h3>
            </div>
          </div>
          <!-- end of title row -->

          <?php if($success = $this->session->flashdata('login_successful')):?>
                    <div class="row my-3">
                        <div class="col-lg-9">
                            <div class="alert alert-success">
                                <?= $success ?>
                            </div>
                        </div>
                    </div>
          <?php endif;?> 

          <!-- cards row -->

          <div class="row inform-card">
            <div class="col-lg-3 col-md-6 col-10 mx-auto my-5">
              <a href="<?= site_url() ?>admin/manage/request/view_applications">
              <div class="card card-1">
                <div class="card-body">
                  <div class="flex d-flex justify-content-between">
                    <i class="fa fa-envelope-open body-icon"></i>
                    <div class="side-text align-self-center">
                      <h3>20 NEW</h3>
                      <h5>Applications</h5>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                  <a href="<?= site_url() ?>admin/manage/request/view_applications">Inspect</a> <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div></a>
            </div>
            <div class="col-lg-3 col-md-6 col-10 mx-auto my-5">
              <a href="<?= site_url() ?>admin/manage/request/view_non">
              <div class="card card-2">
                <div class="card-body">
                  <div class="flex d-flex justify-content-between">
                    <i class="fa fa-question body-icon"></i>
                    <div class="side-text align-self-center">
                      <h3>30 NEW</h3>
                      <h5>Requests</h5>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                  <a href="<?= site_url() ?>admin/manage/request/view_non">Inspect</a> <i class="fa fa-arrow-circle-right"></i> 
                </div>
              </div></a>
            </div>
            <div class="col-lg-3 col-md-6 col-10 mx-auto my-5">
              <a href="<?= site_url() ?>admin/manage/user/view_patients">
              <div class="card card-3">
                <div class="card-body">
                  <div class="flex d-flex justify-content-between">
                    <i class="fa fa-user-plus  body-icon"></i>
                    <div class="side-text align-self-center">
                      <h3>30 NEW</h3>
                      <h5>Patients</h5>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                  <a href="<?= site_url() ?>admin/manage/user/view_patients">Inspect</a> <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div></a>
            </div>
            <div class="col-lg-3 col-md-6 col-10 mx-auto my-5">
              <a href="<?= site_url() ?>admin/manage/blog">
              <div class="card card-4">
                <div class="card-body">
                  <div class="flex d-flex justify-content-between">
                    <i class="fa fa-newspaper  body-icon"></i>
                    <div class="side-text align-self-center">
                      <h3>20 NEW</h3>
                      <h5>Blogs</h5>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                  <a href="<?= site_url() ?>admin/manage/blog">Inspect</a> <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div></a>
            </div>
          </div>

          <!-- end of cards row -->

        </div>
      </div>
    </div>


<?php $this->load->view('layouts/footer'); ?>

<?php } else {
  redirect('login');
}