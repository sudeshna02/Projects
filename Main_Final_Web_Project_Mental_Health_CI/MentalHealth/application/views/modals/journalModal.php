<!--############################################## start of add journal ###################################################################-->
<div class="modal fade" id="addJournal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
               <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Journal</span>
                <span class="text-uppercase text-danger">/</span><span class="text-muted small"> Add A New Journal <i class="bi bi-journal-plus mr-3 text-muted"></i></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
        <!--################## add journal form body start ###########################################-->
          <form action="<?= base_url() ?>journal/add" method="POST" enctype="multipart/form-data">
              <div class="row w-80 m-2">
                <!-- Journal topic start-->
                  <div class="input-group col-lg-12 mt-1 mb-1">
                      <span>
                        <a class="text-muted">Topic: </a>
                      </span>
                  </div>
                <!-- Journal topic -input- -->
                  <div class="input-group col-lg-12 mb-4">
                      <div class="input-group-prepend">
                          <span class="input-group-text bg-white px-4 border-md border-right-0">
                              <i class="bi bi-card-heading text-muted"></i>
                          </span>
                      </div>
                      <input name="jotopic" type="text" placeholder="Journal Topic" class="form-control bg-white border-left-0 border-md" required>
                  </div>
                  <!-- Journal topic end-->

                  <!-- Journal Desc start-->
                  <div class="input-group col-lg-12 mt-1 mb-1">
                      <span>
                        <a class="text-muted"> <i class="bi bi-vector-pen text-muted"></i> Description: </a>
                      </span>
                  </div>
                  <!-- Journal Desc input-->
                      <div class="input-group col-lg-12 mb-4">
                          <textarea class="form-control w-100" id="exampleFormControlTextarea1" name="jodesc" rows="6" required></textarea>
                      </div>
                      
                      <!-- All Form Submit Button -->
                        <div class="modal-footer w-100">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-info" value="Add" name="submitr" />
                        </div>
                        
              </div>
          </form>
       <!--################## add journal form body end ###########################################-->

      </div>
    </div>
  </div>
</div>

<!--############################################## end of add journal ###################################################################-->

<!--############################################## start of view journal ################################################################-->
<div class="modal fade" id="viewJournal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
               <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Journal</span>
                <span class="text-uppercase text-danger">/</span><span class="text-muted small"> Viewing The Journal <i class="bi bi-eye mr-3 text-muted"></i></span>

        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
        <!--################## view journal form body start ###########################################-->
                    <form action="<?= base_url() ?>journal/add" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">
                                                <!-- Category Name -a- -->
                        <div class="input-group col-lg-12 mt-1 mb-1">
                            <span>
                            <a class="text-muted">Topic: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-card-heading text-muted"></i>
                                </span>
                            </div>
                            <input value="tId" id="tId" type="text" placeholder="Journal Topic" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>


                      <!-- Category Name -a- -->
                        <div class="input-group col-lg-12 mt-1 mb-1">
                              <span>
                                <a class="text-muted"> <i class="bi bi-vector-pen text-muted"></i> Description: </a>
                              </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-12 mb-4">
                            <textarea value="dId" id="dId" type="text" class="form-control w-100" id="exampleFormControlTextarea1" rows="6" readonly></textarea>
                        </div>

                         <!-- button -->
                        <div class="modal-footer w-100">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-info" data-dismiss="modal" value="Ok" name="submitr" />
                        </div>
                        
                     </div>
                 </form>

       <!--################## view journal form body end ###########################################-->

      </div>
    </div>
  </div>
</div>

<!--############################################## end of view journal ################################################################-->

<!--############################################## start of edit journal ##############################################################-->
<div class="modal fade" id="editJournal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
               <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Journal</span>
                <span class="text-uppercase text-danger">/</span><span class="text-muted small"> Edit The Journal <i class="bi bi-pencil-square mr-3 text-muted"></i></span>

        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
        <!--################## edit journal form body start ###########################################-->

                    <form action="<?= base_url() ?>journal/edit" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">
                                                <!-- Category Name -a- -->
                        <div class="input-group col-lg-12 mt-1 mb-1">
                            <span>
                            <a class="text-muted">Topic: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-card-heading text-muted"></i>
                                </span>
                            </div>
                            <input value="topId" id="topId" type="text" class="form-control bg-white border-left-0 border-md" name="jourTopic">
                        </div>


                      <!-- Category Name -a- -->
                        <div class="input-group col-lg-12 mt-1 mb-1">
                            <span>
                              <a class="text-muted"> <i class="bi bi-vector-pen text-muted"></i> Description: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-12 mb-4">
                            <textarea value="descId" id="descId" type="text" class="form-control w-100" id="exampleFormControlTextarea1" rows="6" name="jourDesc"></textarea>
                        </div>

                         <!-- button -->
                        <div class="modal-footer w-100">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <input id="jourId" value="jourId" type="hidden" name="editJournal"/>
                            <input type="submit" class="btn btn-info" value="Edit" name="submitr" />
                        </div>
                        
                     </div>
                 </form>

       <!--################## edit journal form body end ###########################################-->

      </div>
    </div>
  </div>
</div>
<!--############################################## end of edit journal ################################################################-->

<!--############################################## start of delete journal ##############################################################-->
<div class="modal fade" id="deleteJournal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Continue to delete?   <i class="bi bi-x-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <!--################## delete journal form body start ###########################################-->

        <form method="post" action="<?= base_url() ?>journal/delete">
          <h5 class="mb-4">Are you sure you want to delete this journal?<br><br>
        <small>All the data of the selected journal will be deleted from your account permanently! </small>
          </h5>

          <input type="hidden" class="form-control" name="deleteJournal" id="jId" value="jId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes</button></a>
          </div>
        </form>

      <!--################## delete journal form body start ###########################################-->
      </div>

    </div>
  </div>
</div>

<!--############################################## end of delete journal ################################################################-->












