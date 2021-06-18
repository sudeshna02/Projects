<?php $this->load->view('layouts/userNav'); ?>
<!--########################################## end of user navigation ###############################################################################-->

<!--################################################## start of admin announcement content ###############################################################-->

<!-- end of side bar -->
<div class="col-md-9 col-lg-10 py-5">

  <!--######################################## start of success and failure message  #######################################################-->


          <!-- title row -->
          <div class="row mb-5">
            <div class="col">
              <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Questions</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> Questions Related To: <?= $category['cname'] ?> <i class="fa fa-bullhorn mr-3 text-muted"></i></span>
              </h3>
            </div>
          </div>
          <!-- end of title row -->



        <!--######################################## start of success and failure message  #######################################################-->

        <!-- added successfully -->
        <!-- added successfully -->
        <?php if($success = $this->session->flashdata('add_successful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-success">
                         <?= $success ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!-- add unsuccessful -->
          <?php if($unsuccess = $this->session->flashdata('add_unsuccessful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-danger">
                         <?= $unsuccess ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!-- edited successfully -->
          <?php if($success = $this->session->flashdata('edit_successful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-warning">
                         <?= $success ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!-- edit unsuccessful -->
          <?php if($unsuccess = $this->session->flashdata('edit_unsuccessful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-danger">
                         <?= $unsuccess ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!-- deleted successfully -->
          <?php if($success = $this->session->flashdata('delete_successful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-info">
                         <?= $success ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!-- delete unsucessful -->
          <?php if($unsuccess = $this->session->flashdata('delete_unsuccessful')):?>
             <div class="row my-3">
                 <div class="col-lg-9">
                     <div class="alert alert-danger">
                         <?= $unsuccess ?>
                     </div>
                 </div>
             </div>
         <?php endif;?> 

        <!--######################################## end of success and failure message  #######################################################-->

        <!--################## main content ################-->

        <div class="col-md-12 main-datatable">
                <div class="card_body">
                    <div class="row d-flex">
                        <div class="col-sm-4 createSegment"> 

                        <?php if($this->session->userdata('role') == '1') {?>
                        <?php $i =0;
 							foreach ($questions as $question) { $i++;}
                        
                        if($i == 10){ ?>

                        <!-- Button trigger modal -->
                         
                        <span class="d-inline-block" data-toggle="popover" data-content="You Have Already Added Required Ten Questions!">
                          <button class="btn btn-info" style="pointer-events: none;" type="button" disabled> <i class="bi bi-plus-circle text-danger"></i> Add A New Question</button>
                        </span>

						<?php }else{ ?>
							<button class="btn btn-info addQuestion" type="button" cat-question-id="<?= $category['cid'] ?>" cat-question-name="<?= $category['cname'] ?>"><i class="bi bi-plus-circle"></i> Add A New Question</button>
						<?php } } else{ ?>
                       
                        <span class="d-inline-block" data-toggle="popover" data-content="You cannot add the questions!">
                          <button class="btn btn-info" style="pointer-events: none;" type="button" disabled> <i class="bi bi-plus-circle"></i> Add A New Question</button>
                        </span>

                      <?php } ?>

                        </div>
                        <div class="col-sm-8 add_flex">
                            <div class="form-group searchInput">
                                <label for="email">Search:</label>
                                <input type="search" class="form-control" id="filterbox" placeholder=" " disabled><i class="p-3 bi bi-search"></i></input>
                            </div>
                        </div> 
                    </div>
                    <div class="overflow-x">
                        <table style="width:100%;" id="filtertable" class="table cust-datatable dataTable no-footer">
                            <thead>
                                <tr>
                                    <th style="min-width:20px;">Id</th>
                                    <th style="min-width:50px;">Question</th>
                                    <th style="min-width:50px;">Answer One</th>
                                    <th style="min-width:5px;"></th>
                                    <th style="min-width:5px;"></th>
                                    <th style="min-width:50px;">High Symptom</th>
                                    <th style="min-width:50px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                        $i =0;
                                
                                foreach ($questions as $question) { $i++; ?>
                              <tr>
                                    <td><?php echo $i;?> </td>
                                    <td><?= $question['question'] ?></td>  
                                    <td><?= $question['ans_one'] ?></td>
                                    <td></td> 
                                    <td></td>

                                    <td> 
                                    <?= $question['high_symp'] ?>

                                     </td>

                                        <td>

                                        <?php if($this->session->userdata('role') == '2') {?>

                                        <span class="d-inline-block" data-toggle="popover" data-content="You cannot edit the questions!">
                                        <button class="btn btn-info" style="pointer-events: none;" type="button" disabled>Edit <i class="bi bi-pencil"></i></button>
                                        </span>

                                        <span class="d-inline-block" data-toggle="popover" data-content="You cannot delete the questions!">
                                        <button class="btn btn-danger" style="pointer-events: none;" type="button" disabled><i class="bi bi-trash"></i></button>
                                        </span>

                                   <?php }else { ?>
                                        <button type="submit" class="btn btn-info editQuestion" 

                                            c-question-id="<?= $category['cid'] ?>"
                                            question-id="<?= $question['qid'] ?>"
                                            question-name="<?= $question['question'] ?>"
                                            question-answer="<?= $question['ans_one'] ?>"
                                            question-high="<?= $question['high_symp'] ?>"

                                            >
                                               Edit <i class="bi bi-pencil"></i>
                                        </button>
                                        <button type="submit" class="btn btn-danger deleteQuestion" 

                                            q-id="<?= $question['qid'] ?>"
                                            cq-id="<?= $category['cid'] ?>"

                                            >
                                                <i class="bi bi-trash"></i>
                                        </button>
                               <?php } ?>
                                    </td>
                               
                               
                                </tr>
                            <?php  
                            } ?>
                            </tbody>
                        </table>

                                 <!-- Button trigger modal -->

                    </div>
                </div>
            </div>
             <!--################## main content ################-->
        </div>
      </div>
    </div>

<?php $this->load->view('modals/questionModal'); ?>

<?php $this->load->view('layouts/footer'); ?>