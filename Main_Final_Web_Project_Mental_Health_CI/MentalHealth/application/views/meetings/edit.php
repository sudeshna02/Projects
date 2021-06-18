<?php if(($this->session->userdata('role')) == '1') {?>

<?php $this->load->view('layouts/userNav'); ?>


        <!-- end of side bar -->
        <div class="col-md-9 col-lg-10 py-5">
          <!-- title row -->
          <div class="row mb-5">
            <div class="col">
              <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Meeting</span>
                <span class="text-uppercase text-danger">/</span><span class="text-muted small"> Edit A Meeting <i class="fa fa-edit text-danger"></i></span>
              </h3>
            </div>
          </div>
          <!-- end of title row -->

                    <form action="<?= base_url() ?>meeting/edit" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">

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
                            <input id="name" type="text" value="<?=$meeting['mtitle']?>" name="meetitle" placeholder="Title" class="form-control bg-white border-left-0 border-md" required>
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
                            <textarea id="<?=$meeting['mdesc']?>" class="form-control bg-white border-left-0 border-md" value="<?=$meeting['mdesc']?>" placeholder="<?=$meeting['mdesc']?>" id="exampleFormControlTextarea1" name="meedesc" rows="6" required></textarea>
                        </div>

                     <!-- User category -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Set Doctor: </a>
                            </span>
                        </div>

                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-menu-down text-muted"></i>
                                </span>
                            </div>
                            
                               
                                
                            <select id="status" name="meedoc" class="form-control custom-select bg-white border-left-0 border-md" required>
                                <option value="">Set Doctor</option>
                            <?php foreach ($doctors as $diary) { ?>
                                <option value="<?= $diary['sid'] ?>"><?= $diary['sfirstname'] ?> with email  <?= $diary['semail'] ?></option>
                                
                        <?php }?>
                            </select>

                        </div>

                        <!-- User category -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Set Patient: </a>
                            </span>
                        </div>

                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-menu-down text-muted"></i>
                                </span>
                            </div>                               
                                
                            <select id="status" name="meepat" class="form-control custom-select bg-white border-left-0 border-md" required>
                                <option value="">Set Patient</option>
                            <?php foreach ($patients as $diary) { ?>
                                <option value="<?= $diary['pid'] ?>"><?= $diary['pfirstname']?> with email  <?= $diary['pemail'] ?></option>
                            <?php }?>
                            </select>

                        </div>
                        
                        <div class="form-group col-lg-6 mx-auto mb-0 mt-4">
                            <input class="btn btn-info btn-block btn-login py-2" type="hidden" value="<?=$meeting['mid']?>" name="editMeeting">    
                            <input class="btn btn-info btn-block btn-login py-2" type="submit" value="Edit" name="create">
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