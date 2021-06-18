<?php $this->load->view('layouts/userNav'); ?>

 <!-- end of side bar -->
 <div class="col-md-9 col-lg-10 py-5">
         
     <!-- title row -->
    <div class="row mb-5">
        <div class="col">
            <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Medications</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> View - All The Medications Added By Doctors <i class="fa fa-edit mr-3 text-muted"></i></span>
            </h3>
        </div>
    </div>
    <!-- end of title row -->

            <!--######################################## start of success and failure message  #######################################################-->

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

 <!--################## main content ################-->


            <div class="col-md-12 main-datatable">
                <div class="card_body">
                    <div class="row d-flex">
                        <div class="col-sm-4 createSegment"> 
            
                         <!-- Button trigger modal -->
                         
                        
                    <!-- Button trigger modal -->
                        <span class="d-inline-block" data-toggle="popover" data-content="You as an administrator cannot add medications!">
                          <button class="btn btn-info" style="pointer-events: none;" type="button" disabled><i class="bi bi-plus-circle"></i> Add A New Medication</button>
                        </span>

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
                                    <th style="min-width:50px;"> Name </th>
                                    <th style="min-width:200px;"> Description </th>
                                    <th style="min-width:100px;"> Added By </th>
                                    <th style="min-width:20px;"> Created At</th>
                                    <th style="min-width:100px;"> For Meeting</th>
                                    <th style="min-width:10px;"> </th>
                                    <th style="min-width:10px;"> </th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($medications as $diary) { ?>
                                <tr>
                                    <td><?= $diary['mname'] ?></td>
                                    <td><?= $diary['mcontent'] ?></td>
                                    <td><?= $diary['sfirstname'] ?> <?= $diary['ssurname'] ?></td>

                                    <td>
                                        <?= $diary['created_at'] ?>
                                    </td>
                                    
                                    <td> <?= $diary['mtitle'] ?>
                                    </td>

                                    <td>

                                    </td>                                   


                                    <td>          

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

<?php $this->load->view('modals/meetingModal'); ?>

<?php $this->load->view('layouts/footer'); ?>

<script type="text/javascript">
    
  $(function () {
  $('[data-toggle="popover"]').popover()
});

</script>