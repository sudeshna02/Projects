<?php if(($this->session->userdata('role')) == '2') {?>

<?php $this->load->view('layouts/userNav'); ?>


        <!-- end of side bar -->
        <div class="col-md-9 col-lg-10 py-5">
          <!-- title row -->
          <div class="row mb-5">
            <div class="col">
              <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Medication</span>
                <span class="text-uppercase text-danger">/</span><span class="text-muted small"> Add A Medication <i class="bi bi-plus-circle text-danger"></i></span>
              </h3>
            </div>
          </div>
          <!-- end of title row -->

            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-10 w-75 m-auto">
        

                    <form action="<?= base_url() ?>medication/add" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">

                        <!-- User category -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Assign Medication For Meeting: </a>
                            </span>
                        </div>

                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-list text-muted"></i>
                                </span>
                            </div>                               
                                
                            <select id="meets" name="meet" class="form-control custom-select bg-white border-left-0 border-md" required>
                            <?php foreach ($meetings as $meeting) { ?>
                                <option value="<?= $meeting['mid'] ?>"><?= $meeting['mtitle'] ?></option>
                            <?php }?>
                            </select>

                        </div>


                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-1">
                            <span>
                            <a class="text-muted"> Title: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-card-heading text-muted"></i>
                                </span>
                            </div>
                            <input id="name" type="text" name="medtitle" placeholder="Title" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Description: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-card-text text-muted"></i>
                                </span>
                            </div>
                            <textarea class="form-control bg-white border-left-0 border-md" placeholder="Description" id="exampleFormControlTextarea1" name="meddesc" rows="6" required></textarea>
                        </div>

                        <!-- User category -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Set The Status: </a>
                            </span>
                        </div>

                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-menu-down text-muted"></i>
                                </span>
                            </div>
                            
                            <select id="status" name="medstatus" class="form-control custom-select bg-white border-left-0 border-md" required>
                                <option value="">Set Status</option>
                                <option value="1">Archive</option>
                                <option value="2">Unarchive</option>
                            </select>

                        </div>
                        
                        <div class="form-group col-lg-6 mx-auto mb-0 mt-4">           
                            <input class="btn btn-info btn-block btn-login py-2" type="submit" value="Add" name="create">
                        </div>

                     </div>
                 </form>

        <!--################## main content ################-->
            </div>

          </div>

        </div>
    </div>

<?php $this->load->view('layouts/footer'); ?>

<?php } else {
  redirect('login');
}