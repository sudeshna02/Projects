<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $this->load->view('layouts/siteNav'); ?>
</header>
        <!-- ############################################## start of request/queries and application section ################################################################## -->
        <section class="queries my-4">
          <div class="container-fluid request">
          		<div class="row">

          			<!-- section: request logo side info login-->
          			<div class="col-md-3 request-left">
          				<img class="p-3" src="https://i.ibb.co/TbVHMjD/request2.png" alt=""/>
          				<h3 class="text-uppercase">send your query!</h3>
          				<p>Our team will reply back to you within a matter of hours to help you.</p>
          				<h6 class="font-weight-bold">Have an account?</h6>
          				<a href="login"><input type="submit" name="" href="login.html" value="Login"/></a><br/>
          			</div>
          			<!-- end of the logo section-->

          			<!-- start of tab section -->
          			<div class="col-md-9 request-right">
          				<!--tabs title-->
<!--           				<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
          					<li class="nav-item">
          						<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
          						Request</a>	
          					</li>	
          					<li class="nav-item">
                                 <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Apply</a>
                            </li>
          				</ul>	 -->
          				<!--end of tabs title-->

          		<!--tabs content-->
          		<div class="tab-content w-75" style="margin-left: 15%" id="myTabContent">


                    <!--first tab: send a query tab -->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

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

                        <h3 class="request-heading">Send A Query!</h3>

                        <form action="<?= base_url() ?>sendRequest" method="POST" enctype="multipart/form-data">

                          <div class="row request-form">

                            <div class="col-lg-4 mb-1">
                                <small class="text-muted"><?php echo form_error('firstname'); ?></small>
                            </div>
                            <div class="col-lg-4 mb-1">
                                <small class="text-muted"><?php echo form_error('middlename'); ?></small>
                            </div>
                            <div class="col-lg-4 mb-1">
                                <small class="text-muted"><?php echo form_error('lastname'); ?></small>
                            </div>
                            <!-- First Name -->
                            <div class="input-group col-lg-4 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-user text-muted"></i>
                                    </span>
                                </div>
                                <input id="firstName" type="text" name="firstname" placeholder="First Name" class="form-control bg-white border-left-0 border-md" value="<?= set_value('firstname')?>" required>
                            </div>

                            <!-- Middle Name -->
                            <div class="input-group col-lg-4 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-user text-muted"></i>
                                    </span>
                                </div>
                                <input id="lastName" type="text" name="middlename" placeholder="Middle Name" class="form-control bg-white border-left-0 border-md" value="<?= set_value('middlename')?>">
                            </div>

                            <!-- Last Name -->
                            <div class="input-group col-lg-4 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-user text-muted"></i>
                                    </span>
                                </div>
                                <input id="lastName" type="text" name="lastname" placeholder="Last Name" class="form-control bg-white border-left-0 border-md" value="<?= set_value('lastname')?>" required>
                            </div>

                      
                            <div class="col-lg-12">
                              <small class="text-danger"><?php echo form_error('email'); ?></small>
                              <small class="mb-1 text-muted">If you have already sent please wait for the response! or Kindly Enter A Valid Email Address! </small>
                            </div>
                         
                            <!-- Email Address -->
                            <div class="input-group col-lg-12 mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-envelope text-muted"></i>
                                    </span>
                                </div>
                                <input type="text" name="email" id="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" value="<?= set_value('email')?>" required>

                            </div>

                          <div class="col-lg-12">
                              <small class="text-danger"><?php echo form_error('phone'); ?></small>
                              <small class="mb-1 text-muted">If you have already sent please wait for the response! or Kindly Enter A Valid Contact Number!</small>
                            </div>

                            <!-- Phone Number -->
                            <div class="input-group col-lg-12 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-phone-square text-muted"></i>
                                    </span>
                                </div>
                                <select id="countryCode" name="country_code" style="max-width: 80px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted" value="<?= set_value('country_code')?>" required>
                                    <option value="">Code</option>
                                    <option value="+977">+977</option>
                                    <option value="+10">+10</option>
                                    <option value="+15">+15</option>
                                    <option value="+18">+18</option>
                                </select>
                                <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3" value="<?= set_value('phone')?>" required>
                            </div>
                            
                            <div class="col-lg-12">
                              <small class="mb-1 text-danger"><?php echo form_error('desc'); ?></small>
                            </div>

                            <div class="input-group col-lg-12 mb-1">
                                <label for="exampleFormControlTextarea1">Enter Your Query Here:</label>
                               <textarea class="form-control w-100" id="exampleFormControlTextarea1" name="desc" rows="6" value="<?= set_value('desc')?>" required></textarea>
                            </div>

                            <!-- button -->
                            <div class="input-group col-lg-12 mb-4">
                                <input type="hidden" class="btnRequest" name="crole" value="5"/>
                                <input type="submit" class="btnRequest" name="button" value="Send"/>
                            </div>
                          </div>

                        </form>  
                    </div>
                    <!-- end of first tab -->

          				</div>	
          				<!--end of tabs content-->
          			</div>	
          			<!-- end of tab section -->
          		</div>	
          </div>
        </section>  
        <!-- ############################################## start of request/queries and application section ################################################################## -->
 

<?php $this->load->view('layouts/footer'); ?>
