<?php $this->load->view('layouts/userNav'); ?>


        <!-- end of side bar -->
        <div class="col-md-9 col-lg-10 py-5">
          <!-- title row -->
          <div class="row mb-5">
            <div class="col">
              <h3>
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Users</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> Doctor</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> Register</span>
              </h3>
            </div>
          </div>
          <!-- end of title row -->

            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-10 w-50 m-auto">
                
                <?php if($success = $this->session->flashdata('approve_successful')):?>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="alert alert-success">
                                <?= $success ?>
                            
                            </div>
                        </div>
                    </div>
                <?php endif;?> 

                <?php if($unsuccess = $this->session->flashdata('register_unsuccessful')):?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger">
                                <?= $unsuccess ?>
                            </div>
                        </div>
                    </div>
                <?php endif;?> 


                <form action="<?= base_url() ?>user/sendDetail" method="POST" enctype="multipart/form-data">
                    <div class="row">

                    	<div class="input-group col-lg-12 mb-2">
                           <h6 class="text-muted"> Fullname: </h6>
                        </div>

                        <!-- First Name -->
                        <div class="input-group col-lg-4 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="firstName" type="text" name="firstname" value="<?= $firstname ?>" placeholder="Firstname" class="form-control bg-white border-left-0 border-md" required readonly>
                        </div>

                        <!-- Middle Name -->
                        <div class="input-group col-lg-4 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="middlename" type="text" name="middlename" value="<?= $middlename ?>" placeholder="Middlename" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>

                        <!-- Last Name -->
                        <div class="input-group col-lg-4 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="lastName" type="text" name="lastname" value="<?= $surname?>" placeholder="Lastname" placeholder="Last Name" class="form-control bg-white border-left-0 border-md" required readonly>
                        </div>

                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-2">
                           <h6 class="text-muted"> Email: </h6>
                        </div>

                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="email" name="email"  value="<?= $email?>" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" required readonly>
                        </div>

                        <!-- Phone Number -->
                        <div class="input-group col-lg-12 mb-2">
                          <h6 class="text-muted">  Phone Number: </h6>
                        </div>
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-phone-square text-muted"></i>
                                </span>
                            </div>
                            <select id="countryCode" name="country_code" style="max-width: 80px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted" disabled>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                            <input id="phoneNumber" type="tel" name="phone" value="<?= $contact?>" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3" required readonly>
                        </div>

                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-2">
                           <h6 class="text-muted"> Set Meet Link: </h6>
                        </div>
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="meet_link" type="text" name="meet_link" placeholder="Meet Link" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                    	<!-- Email Address -->
                        <div class="input-group col-lg-12 mb-2">
                          <h6 class="text-muted">  Set Username: </h6>
                        </div>
                        <div class="input-group col-lg-12 mb-4">
                        	<input id="phoneNumber" type="tel" name="username" placeholder="Set Username" class="form-control bg-white border-md pl-3" required>

                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md">
                                    <i class="fa fa-phone-square text-muted"></i>
                                </span>
                            </div>
                            <select id="user_def" name="username_default" style="max-width: 200px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted" required>
                                <option value="">Select Username Default</option>
                                <option value="_doctor@wellbeing.com">_doctor@wellbeing.com</option>

                            </select>
                        </div>

                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-2">
                           <h6 class="text-muted"> Set Password: </h6>
                        </div>
                        <div class="input-group col-lg-12 mb-4">
                        	<input id="" type="password" name="password" placeholder="Set Username" class="form-control bg-white border-md pl-3" required>

                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md">
                                    <i class="fa fa-phone-square text-muted"></i>
                                </span>
                            </div>
                            <select id="pass_def" name="password_default" style="max-width: 200px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted" required>
                                <option value="">Select Password Default</option>
                                <option value="_doctor@wellbeing">_doctor@wellbeing</option>
                            </select>
                        </div>
                        
                        <!-- Create Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0">

                            <input class="btn btn-info btn-block btn-login py-2" type="hidden" id="<?= $rid ?>" value="<?= $rid ?>" name="deleteRequest">
                            <input class="btn btn-info btn-block btn-login py-2" type="hidden" value="2" name="user_role">
                            <input class="btn btn-info btn-block btn-login py-2" type="submit" value="Create An Account" name="create">
                            
                        </div>

                     </div>
                 </form>
            </div>






          </div>

        </div>
        </div>

<?php $this->load->view('modals/modal'); ?>

<?php $this->load->view('layouts/footer'); ?>