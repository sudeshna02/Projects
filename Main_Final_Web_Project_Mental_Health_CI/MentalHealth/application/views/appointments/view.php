<?php if(($this->session->userdata('role')) == '2') {?>

<?php $this->load->view('layouts/userNav'); ?>
<!--########################################## end of user navigation ###############################################################################-->

<!--################################################## start of admin announcement content ###############################################################-->

<!-- end of side bar -->
<div class="col-md-9 col-lg-10 py-5">

          <!-- title row -->
          <div class="row mb-5">
            <div class="col">
              <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Appointment</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> View - All The Appointments You Have To Attend <i class="fa fa-calendar-check mr-3 text-muted"></i></span>
              </h3>
            </div>
          </div>
          <!-- end of title row -->

        <!--################## main content ################-->

            <div class="row">
             <?php foreach ($appointments as $medication) { ?>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><?= $medication['atitle'] ?></h5>
                    <p class="card-text"><?= $medication['adesc'] ?></p>
                    <h6 class="text-info" style="text-decoration: none;">At Date: <?= $medication['atime'] ?> Time: <?= $medication['adate']?></h6>
                  </div>
                </div>
              </div>
          <?php } ?>
            </div>
                 <!--################## main content ################-->
                 
        </div>
      </div>
    </div>

<?php $this->load->view('modals/announcementModal'); ?>

 <!--###################################################### end of user announcement content ############################################################-->


<?php $this->load->view('layouts/footer'); ?>

<?php } else {
  redirect('login');
}