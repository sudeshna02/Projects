<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $this->load->view('layouts/siteNav'); ?>

</header>

<!-- ############################################## start of sign up or register section ################################################################## -->
<section class="signup">
    <div class="container">
        <div class="row py-5 mt-4 align-items-center">

            
            <!-- section: sign up picture and info -->
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="<?= base_url() ?>/assets/img2.jpg" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h1><i class="bi bi-person-plus mr-3"></i>Create An Account</h1>
                <p class="font-italic text-muted mb-0">Create a minimal registeration page using Bootstrap 4 HTML form elements.</p>
                <p class="font-italic text-muted">Snippet By <a href="https://bootstrapious.com" class="text-muted">
                <u>Bootstrapious</u></a>
                </p>
            </div>
            <!-- end of section: sign up picture and info -->


            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                
                <?php if($success = $this->session->flashdata('register_successful')):?>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="alert alert-success">
                                <?= $success ?>
                                <a href="login">Login</a>
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

                <form action="<?= base_url() ?>user/register" method="POST" enctype="multipart/form-data">
                    <div class="row">

                        <!-- User category -->
                        <div class="input-group col-lg-3 mt-4">
                            <span>
                            <a class="text-muted"> Select User Type: </a>
                            </span>
                        </div>
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fab fa-black-tie text-muted"></i>
                                </span>
                            </div>

                            <select id="job" name="user_role" class="form-control custom-select bg-white border-left-0 border-md" required>
                            
                                <option value="3">Patient</option>
                                <option value="4">Blogger</option>
                            </select>
                        </div>

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
                            <input id="middlename" type="text" name="middlename" placeholder="Middle Name" class="form-control bg-white border-left-0 border-md" value="<?= set_value('middlename')?>">
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
                              <small class="mb-1 text-muted">If you have already registered go to login page! or Kindly Enter A Valid Email Address! </small>
                        </div>

                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" value="<?= set_value('email')?>" required>
                        </div>

                        <div class="col-lg-12">
                              <small class="text-danger"><?php echo form_error('phone'); ?></small>
                              <small class="mb-1 text-muted">If you have already registered go to login page! or Kindly Enter A Valid Contact Number!</small>
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

                        <!-- Username -->
                        <div class="input-group col-lg-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-person-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="username" type="text" name="username" placeholder="Username" class="form-control bg-white border-left-0 border-md" value="<?= set_value('username')?>" required>
                        </div>

                        <!-- Username Confirmation -->
                        <div class="input-group col-lg-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-lock-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="usernameConfirmation" type="text" name="usernameConfirmation" placeholder="Confirm Username" class="form-control bg-white border-left-0 border-md" value="<?= set_value('usernameConfirmation')?>" required>
                        </div>

                        <div class="col-lg-6">
                              <small class="text-danger"><?php echo form_error('username'); ?></small>
                              <small class="mb-1 text-muted">Requires Unique Username*</small>
                        </div>

                        <div class="col-lg-6">
                              <small class="text-danger"><?php echo form_error('usernameConfirmation'); ?></small>
                        </div>

                        <!-- Password -->
                        <div class="input-group col-lg-6 mt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-key text-muted"></i>
                                </span>
                            </div>
                            <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md" value="<?= set_value('password')?>" required>
                        </div>

                        <!-- Password Confirmation -->
                        <div class="input-group col-lg-6 mt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-lock-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="passwordConfirmation" type="text" name="passwordConfirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md" value="<?= set_value('passwordConfirmation')?>" required>
                        </div>

                        <div class="col-lg-6 mb-4">
                              <small class="text-danger"><?php echo form_error('password'); ?></small>
                        </div>

                        <div class="col-lg-6 mb-4">
                              <small class="text-danger"><?php echo form_error('passwordConfirmation'); ?></small>
                        </div>

                        <div class="col-12 d-flex mb-3">
                            <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="cb1" required>
                                    <label class="custom-control-label" for="cb1">I agree all the terms & conditions.</label>
                            </div>
                        </div>
                        
                        <!-- Create Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            
                            <input class="btn btn-info btn-block btn-login py-2" type="submit" value="Create An Account" name="create">
                            
                        </div>

                        <!-- Divider Text -->
                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                            <div class="border-bottom w-25 ml-5"></div>
                            <span class="px-2 small text-muted font-weight-bold text-muted">OR CONTINUE WITH </span>
                            <div class="border-bottom w-25 mr-5"></div>
                        </div>

                        <!-- Social Login -->
                        <div class="form-group col-lg-12 mx-auto d-flex">

                            <div class="col-lg-4">
                                    <a href="" class="btn btn-primary btn-block py-2 btn-facebook">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="" class="btn btn-danger btn-block py-2 btn-gmail">
                                        <i class="bi bi-google"></i>
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="" class="btn btn-primary btn-block py-2 btn-twitter">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                </div>
                            
                        </div>

                        <!-- Already Registered -->
                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold">Already Registered? <a href="login.html" class="text-primary ml-2">Login</a></p>
                        </div>

                     </div>
                 </form>
            </div>
        </div>   
    </div>
</section>  

<!-- ########### start of request/queries and application section ############################################################## -->

<?php $this->load->view('layouts/footer'); ?>