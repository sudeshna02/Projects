<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $this->load->view('layouts/siteNav'); ?>

</header>
<!-- ############################################## start of login section ################################################################## -->
<section class="login">
    <div class="container">

        <div class="row py-5 mt-4 align-items-center">
        
        <!-- section: login picture and info -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="<?= base_url() ?>/assets/img3.png" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1><i class="bi bi-box-arrow-in-right mr-3"></i>Login To Your Account</h1>
            <p class="font-italic text-muted mb-0">Share your problems with us.</p>
            <p class="font-italic text-muted">By <a href="<?= base_url() ?>" class="text-muted">
                <u>Wellbeing</u></a>
            </p>
        </div>
        <!-- end of section: login picture and info -->

        <!-- Login Form -->
        <div class="col-md-7 col-lg-6 ml-auto">

                        <?php if($unsuccess = $this->session->flashdata('login_unsuccessful')):?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger">
                                <?= $unsuccess ?>
                            </div>
                        </div>
                    </div>
                <?php endif;?> 

                <?php if($unsuccess = $this->session->flashdata('disabled_account')):?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger">
                                <?= $unsuccess ?>
                            </div>
                        </div>
                    </div>
                <?php endif;?> 

        <form action="<?= base_url() ?>user/login" method="POST" enctype="multipart/form-data">
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
                        <select id="user_role" name="user_role" class="form-control custom-select bg-white border-left-0 border-md">

                        	<option value="1">Admin / Doctor/ Blogger</option>
                            <option value="3">Patient</option>
                        </select>
                    </div>

                    <!-- Username -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="bi bi-person-fill text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="text" name="username" placeholder="Username" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                   
                    <!-- Password -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="bi bi-key text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                     <!-- Remember check box-->
                    <div class="input-group col-lg-9 mb-4">
                        <div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="cb1">
								<label class="custom-control-label" for="cb1">Remember me!</label>
						</div>
                    </div>
                    
                    <!-- forget link -->
                    <div class="input-group col-lg-3 mb-4">
                        <div class="pull-right">
							<a href="#" class="forget-link">Forget password?</a>
						</div>
					</div>

                    <!-- Login Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                            <input type="submit" class="btn btn-info btn-block btn-login py-2" value="Submit" name="submitr">
                
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
                        <p class="text-muted font-weight-bold">Don't Have an Account? <a href="signup.html" class="text-primary ml-2">Register</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
</section>
<!-- ############################################## end of login section ################################################################## -->

<?php $this->load->view('layouts/footer'); ?>