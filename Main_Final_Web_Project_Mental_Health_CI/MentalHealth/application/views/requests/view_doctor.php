<?php $this->load->view('layouts/userNav'); ?>


        <!-- end of side bar -->
        <div class="col-md-9 col-lg-10 py-5">
          <!-- title row -->
          <div class="row mb-5">
            <div class="col">
              <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Requests</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> View - Requests Sent By Doctors</span>
              </h3>
            </div>
          </div>
          <!-- end of title row -->

                          <?php if($success = $this->session->flashdata('approve_successful')):?>
                    <div class="row mt-5">
                        <div class="col-lg-9">
                            <div class="alert alert-success">
                                <?= $success ?>
                            </div>
                        </div>
                    </div>
                <?php endif;?>  


                          <?php if($success = $this->session->flashdata('reject_successful')):?>
                    <div class="row mt-5">
                        <div class="col-lg-9">
                            <div class="alert alert-success">
                                <?= $success ?>
                            </div>
                        </div>
                    </div>
                <?php endif;?>  


               <!--################## main content ################-->


                           <div class="col-md-12 main-datatable">
                <div class="card_body">
                    <div class="row d-flex">
                                                <div class="col-sm-4 createSegment"> 
            
                        <span class="d-inline-block" data-toggle="popover" data-content="You as an administrator cannot add a requests!">
                          <button class="btn btn-info" style="pointer-events: none;" type="button" disabled><i class="bi bi-plus-circle"></i> Add A New Requests</button>
                        </span>


                        </div>
                        <div class="col-sm-8 add_flex">
                            <div class="form-group searchInput">
                                <label for="email">Search:</label>
                                <input type="search" class="form-control" id="filterbox" placeholder=" ">
                            </div>
                        </div> 
                    </div>
                    <div class="overflow-x">
                        <table style="width:100%;" id="filtertable" class="table cust-datatable dataTable no-footer">
                            <thead>
                                <tr>
                                    <th style="min-width:50px;"> Fullname</th>
                                    <th style="min-width:100px;"> Contact </th>
                                    <th style="min-width:250px;"> Email </th>
                                    <th style="min-width:100px;"> Message </th>
                                    <th style="min-width:10px;"> </th>
                                    <th style="min-width:100px;"> Status </th>
                                    <th style="min-width:200px;"> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($requests as $diary) { ?>
                                <tr>
                                    <td><?= $diary['rfirstname'] . ' ' . $diary['rmiddlename'] . ' ' . $diary['rsurname'] ?></td>
                                    <td><?= $diary['rcontact'] ?></td>
                                    <td><span class="mode mode_process"><?= $diary['remail'] ?></span></td>
                                    <td><?= $diary['rdesc'] ?></td>
                                    <td></td>
                                    <td>
                                        <?php if($diary['approval'] == '1'){ ?>
                                         <span class="mode mode_process">Processing</span>
                                    <?php } else { ?>
                                         <span class="mode mode_on">Approved</span>
                                    <?php } ?>
                                    </td>
                                    <td>

                                    <?php if($diary['approval'] == '1'){ ?>
                                    <button type="submit" class="btn btn-info approveRequest" 
                                         
                                            req-id="<?= $diary['rid'] ?>">
                                                Approve
                                        </button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-info approveRequest" disabled>
                                                Approve
                                        </button>
                                    <?php } ?>
                                        
                                        <button type="submit" class="btn btn-danger rejectApplication"

                                         email-idr="<?= $diary['remail'] ?>"
                                         request-idr="<?= $diary['rid'] ?>">
                                                Reject
                                        </button>
                                        <button type="submit" class="btn btn-danger deleteRequest" r-id="<?= $diary['rid'] ?>">
                                               <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                               
                               <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



          </div>

        </div>
        </div>

<?php $this->load->view('modals/modal'); ?>
<?php $this->load->view('modals/userModal'); ?>

<?php $this->load->view('layouts/footer'); ?>