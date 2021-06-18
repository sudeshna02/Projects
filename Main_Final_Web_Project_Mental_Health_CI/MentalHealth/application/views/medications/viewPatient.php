<?php if(($this->session->userdata('role')) == '3') {?>

<?php $this->load->view('layouts/userNav'); ?>

 <!-- end of side bar -->
 <div class="col-md-9 col-lg-10 py-5">
         
     <!-- title row -->
    <div class="row mb-5">
        <div class="col">
            <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Medications</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> View - All The Medications Assigned To You <i class="fa fa-edit mr-3 text-muted"></i></span>
            </h3>
        </div>
    </div>
    <!-- end of title row -->

        <!--################## main content ################-->

            <div class="row">
             <?php foreach ($medications as $medication) { ?>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><?= $medication['mname'] ?></h5>
                    <p class="card-text"><?= $medication['mcontent'] ?></p>
                    <h6 class="text-info" style="text-decoration: none;">Made At: <?= $medication['created_at'] ?></h6>
                  </div>
                </div>
              </div>
          <?php } ?>
            </div>
                 <!--################## main content ################-->



          </div>

        </div>
        </div>

<?php $this->load->view('modals/meetingModal'); ?>

<?php $this->load->view('layouts/footer'); ?>

<script type="text/javascript">
    
  $(function () {
  $('[data-toggle="popover"]').popover()
});

</script>

<?php } else {
  redirect('login');
}