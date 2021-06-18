<?php $this->load->view('layouts/userNav'); ?>


        <!-- end of side bar -->
        <div class="col-md-9 col-lg-10 py-5">
          <!-- title row -->
          <div class="row mb-5">
            <div class="col">
              <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Announcement</span>
                <span class="text-uppercase text-danger">/</span><span class="text-muted small"> Add An Announcement</span>
              </h3>
            </div>
          </div>
          <!-- end of title row -->

<!--################## main content ################-->

                    <form action="<?= base_url() ?>/admin/manage/announcement/add" method="POST" enctype="multipart/form-data">
                    <div class="row w-75 ml-5">

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Announcement Title: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="name" type="text" name="anntitle" placeholder="Announcement Title" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Content: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="name" type="textarea" name="anncontent" placeholder="Announcement Content" class="form-control bg-white border-left-0 border-md">
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
                                    <i class="bi bi-list text-muted"></i>
                                </span>
                            </div>
                            <select id="status" name="annstatus" class="form-control custom-select bg-white border-left-0 border-md">
                            
                                <option value="1">Archive</option>
                                <option value="2">Unarchive</option>
                            </select>
                        </div>
                        
                        <!-- Create Button -->
                        <div class="form-group col-lg-7 mt-5 mb-0">

                        

                            <input type="submit" value="Submit" name="submitr">

                        </div>

                     </div>
                 </form>

        <!--################## main content ################-->


        </div>
      </div>
    </div>

<?php $this->load->view('layouts/footer'); ?>


