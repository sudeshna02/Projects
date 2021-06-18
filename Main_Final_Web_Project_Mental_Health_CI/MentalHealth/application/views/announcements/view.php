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
                ><span class="text-muted small"> Announcement</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> View - All The Announcements Made By Administrations  <i class="fa fa-bullhorn mr-3 text-muted"></i></span>
              </h3>
            </div>
          </div>
          <!-- end of title row -->

        <!--################## main content ################-->

            <div class="row">
             <?php foreach ($announcements as $announcement) { ?>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><?= $announcement['atitle'] ?></h5>
                    <p class="card-text"><?= $announcement['acontent'] ?></p>
                    <h6 class="text-info" style="text-decoration: none;">Made At: <?= $announcement['created_at'] ?></h6>
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



