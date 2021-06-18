<?php if(($this->session->userdata('role')) == '3') {?>

<?php $this->load->view('layouts/userNav'); ?>

 <!-- end of side bar -->
 <div class="col-md-9 col-lg-10 py-5">
         
     <!-- title row -->
    <div class="row mb-5">
        <div class="col">
            <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Meetings</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> View - All The Meetings Assigned To You <i class="fa fa-handshake mr-3 text-muted"></i></span>
            </h3>
        </div>
    </div>
    <!-- end of title row -->

 <!--################## main content ################-->


            <div class="col-md-12 main-datatable">
                <div class="card_body">
                    <div class="row d-flex">
                        <div class="col-sm-4 createSegment"> 
            
                         <!-- Button trigger modal -->
                         
                        
                        <span class="d-inline-block" data-toggle="popover" data-content="You cannot add a meeting!">
                          <button class="btn btn-info" style="pointer-events: none;" type="button" disabled> <i class="bi bi-plus-circle"></i> Add A New Meeting</button>
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
                                    <th style="min-width:50px;"> Title </th>
                                    <th style="min-width:200px;"> Description </th>
                                    <th style="min-width:100px;"> Assigned Doctor </th>
                                    <th style="min-width:100px;"> Created At</th>
                                    <th style="min-width:20px;"> </th>
                                    <th style="min-width:100px;"> Status </th>
                                    <th style="min-width:20px;"> </th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($meetings as $diary) { ?>
                                <tr>
                                    <td><?= $diary['mtitle'] ?></td>
                                    <td><?= $diary['mdesc'] ?></td>
                                    <td>Dr. <?= $diary['sfirstname'] ?> <?= $diary['smiddlename'] ?> <?= $diary['ssurname'] ?> with meetlink: <span class="text-danger"><?= $diary['meet_link'] ?> </span></td>

                                     <td>
                                        <?= $diary['created_date'] ?>
                                    </td>
                                    
                                    <td> 
                                    </td>

                                    <td>
                                        <?php if($diary['attend_status'] == '1'){?> 
                                                <span class="mode mode_off">Not Attended</span>
                                        <?php }else { ?>
                                                <span class="mode mode_on">Attended</span>
                                     <?php }  ?> 

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


<?php } else {
  redirect('login');
}