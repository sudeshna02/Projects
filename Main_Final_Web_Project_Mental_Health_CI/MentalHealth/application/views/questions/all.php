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
                ><span class="text-muted small"> Questions</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> Manage - All The Questions According To The Category <i class="fa fa-edit mr-3 text-muted"></i></span>
            </h3>
            </div>
          </div>
          <!-- end of title row -->

        <!--################## main content ################-->

				    <div class="row inform-card">
				       <!-- single link -->
       					<?php foreach ($categories as $category) { ?>     					
					        <div class="col-lg-4 col-md-6 col-10 my-5">

					        	<?php if($this->session->userdata('role') == '1') {?>
					           <a href="<?= site_url() ?>admin/manage/question/display/<?= $category['cid'] ?>">
					          <?php } else { ?>
					           <a href="<?= site_url() ?>doctor/manage/question/display/<?= $category['cid'] ?>">
					      <?php } ?>
					            <div class="card card-1 w-75 ml-5">
					               <div class="card-body p-5">
					                  <div class="flex d-flex justify-content-between">
					                    <i class="bi bi-file-earmark-medical body-icon"></i>
					                    <div class="side-text align-self-center ml-4">
					                      <h3></h3>
					                      <h5><?= $category['cname'] ?></h5>
					                    </div>
					                  </div>
					                </div>
					                <div class="card-footer d-flex justify-content-between">
					                <?php if($this->session->userdata('role') == '1') {?>
					                  <a href="<?= site_url() ?>admin/manage/question/display/<?= $category['cid'] ?>">Manage</a><a href="<?= site_url() ?>admin/manage/question/display/<?= $category['cid'] ?>"><i class="fa fa-arrow-circle-right"></i></a>
					                <?php } else { ?>
					                <a href="<?= site_url() ?>doctor/manage/question/display/<?= $category['cid'] ?>">Manage</a><a href="<?= site_url() ?>doctor/manage/question/display/<?= $category['cid'] ?>"><i class="fa fa-arrow-circle-right"></i></a>

					                <?php } ?>
					                </div>
					              </div></a>
					        </div>

					    <?php } ?>

					</div>
				 
				</div>
		</div>
	</div>
</section>
