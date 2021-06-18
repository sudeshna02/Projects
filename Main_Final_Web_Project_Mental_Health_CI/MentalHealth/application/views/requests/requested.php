<?php $this->load->view('layouts/userNav'); ?>

        <!-- end of side bar -->
        <div class="col-md-9 col-lg-10 py-5">

          <!-- title row -->
          <div class="row mb-5">
            <div class="col">
              <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Requests</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> View - All The Requests Sent By You  <i class="fa fa-paper-plane mr-3 text-muted"></i></span>
              </h3>
            </div>
          </div>
          <!-- end of title row -->

                <?php if($success = $this->session->flashdata('request_successful')):?>
                    <div class="row mt-5">
                        <div class="col-lg-9">
                            <div class="alert alert-success">
                                <?= $success ?>
                            </div>
                        </div>
                    </div>
                <?php endif;?>  


                <?php if($unsuccess = $this->session->flashdata('request_unsuccessful')):?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger">
                                <?= $unsuccess ?>
                            </div>
                        </div>
                    </div>
                <?php endif;?> 

               <!--################## main content ################-->


                           <div class="col-md-12 main-datatable">
                <div class="card_body">
                    <div class="row d-flex">
                        
                        <div class="col-sm-4 createSegment"> 
            
                         <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info requestModal">
                           <i class="bi bi-plus-circle"></i>  Send New Request
                        </button>

                        </div>
                        <div class="col-sm-8 add_flex">
                            <div class="form-group searchInput">
                                <label for="email">Search:</label>
                                <input type="search" class="form-control" id="filterbox" placeholder=" "><i class="p-3 bi bi-search"></i></input>
                            </div>
                        </div> 
                    </div>
                    <div class="overflow-x">
                        <table style="width:100%;" id="filtertable" class="table cust-datatable dataTable no-footer">
                            <thead>
                                <tr>
                                    <th style="min-width:20px;"></th>
                                    <th style="min-width:20px;"></th>
                                    <th style="min-width:100px;">Desc</th>
                                    <th style="min-width:100px;">Made At</th>
                                    <th style="min-width:100px;">Status</th>
                                    <th style="min-width:20px;"></th>
                                    <th style="min-width:20px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($requests as $diary) { ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><?= $diary['rdesc'] ?></td>
                                    <td><?= $diary['made_at'] ?></td>
                                    <td>
                                        <?php if($diary['approval'] == '1'){ ?>
                                         <span class="mode mode_process">Processing</span>
                                    <?php } else { ?>
                                         <span class="mode mode_on">Approved</span>
                                    <?php } ?>
                                    </td>
                                    <td></td>
                                    <td></td>
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
<div>

<?php $this->load->view('modals/modal'); ?>

<?php $this->load->view('layouts/footer'); ?>