<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

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

              <!-- cards row -->
              <div class="row inform-card">
                <div class="col-lg-3 col-md-6 col-10 mx-auto my-5">
                  <div class="card card-1">
                    <div class="card-body">
                      <div class="flex d-flex justify-content-between">
                        <i class="fa fa-newspaper body-icon"></i>
                        <div class="side-text align-self-center">
                          <h3>VIEW</h3>
                          <h5>Added Blogs</h5>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                      <a href="#">Inspect</a> <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-10 mx-auto my-5">
                  <div class="card card-2">
                    <div class="card-body">
                      <div class="flex d-flex justify-content-between">
                        <i class="fa fa-envelope-open body-icon"></i>
                        <div class="side-text align-self-center">
                          <h3>VIEW</h3>
                          <h5>Sent Requests</h5>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                      <a href="#">Inspect</a> <i class="fa fa-arrow-circle-right"></i> 
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-10 mx-auto my-5">
                  <div class="card card-3">
                    <div class="card-body">
                      <div class="flex d-flex justify-content-between">
                        <i class="fa fa-comments  body-icon"></i>
                        <div class="side-text align-self-center">
                          <h3>VIEW</h3>
                          <h5>Added Experiences</h5>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                      <a href="#">Inspect</a> <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </div>

          </div>

          <!-- end of cards row -->

      </div>
    </div>
  </div>

<?php $this->load->view('layouts/footer'); ?>