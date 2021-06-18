<!-- ####################################### Start of Modal Detail User ######################################################### -->

<div class="modal fade" id="viewDesc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLongTitle">Private Detail Of The User   <i class="bi bi-shield-lock"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <small>Username:</small>
          <input type="text" class="form-control" name="username" id="userId" value="userId" readonly>
          <small class="mt-5">Meetlink:</small>
          <input type="text" class="form-control" name="username" id="meetId" value="meetId" readonly>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-info" data-dismiss="modal">Ok</button></a>
          </div>
        
      </div>

    </div>
  </div>
</div>

<!-- ####################################### End of Modal Detail User ######################################################### -->


<!-- ####################################### Start of Modal Disable User ######################################################### -->

<div class="modal fade" id="disableAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLongTitle">Continue to disable?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>user/archiveS">
          <h5>Are you sure you want to disable this user account?<br><br>
          <small class="text-danger">This user may not be able to log in to his/her account after you have disabled! </small>
          </h5>

          <input type="hidden" class="form-control" name="disableUser" id="uId" value="uId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- ####################################### End of Modal Disable User ######################################################### -->


<!-- ####################################### Start of Modal enable User ######################################################### -->

<div class="modal fade" id="enableAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLongTitle">Continue to enable?   <i class="bi bi-eye"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>user/unarchiveS">
          <h5>Are you sure you want to enable this user account?<br><br>
          <small class="text-dark">This user will be able to log in to his/her account after you have enabled! </small>
          </h5>

          <input type="hidden" class="form-control" name="enableUser" id="usId" value="usId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- ####################################### End of Modal enable User ######################################################### -->


<!-- ####################################### End of Modal Delete User #########################################################-->

<div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Continue to delete?   <i class="bi bi-x-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>user/deleteS">
          <h5>Are you sure you want to delete this user data?<br></h5>

          <input type="hidden" class="form-control" name="deleteUser" id="useId" value="useId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- ####################################### End of Modal Delete User #########################################################-->

<!-- ####################################### Start of Modal Disable Patient ######################################################### -->

<div class="modal fade" id="disablePatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLongTitle">Continue to disable?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>user/archiveP">
          <h5>Are you sure you want to disable this user account?<br><br>
          <small class="text-danger">This user may not be able to log in to his/her account after you have disabled! </small>
          </h5>

          <input type="hidden" class="form-control" name="disablePatient" id="pId" value="pId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- ####################################### End of Modal Disable Patient ######################################################### -->


<!-- ####################################### Start of Modal enable Patient ######################################################### -->

<div class="modal fade" id="enablePatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLongTitle">Continue to enable?   <i class="bi bi-eye"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>user/unarchiveP">
          <h5>Are you sure you want to enable this user account?<br><br>
          <small class="text-dark">This user will be able to log in to his/her account after you have enabled! </small>
          </h5>

          <input type="hidden" class="form-control" name="enablePatient" id="upId" value="upId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- ####################################### End of Modal enable Patient ######################################################### -->


<!-- ####################################### End of Modal Delete Patient #########################################################-->

<div class="modal fade" id="deletePatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Continue to delete?   <i class="bi bi-x-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>user/deleteP">
          <h5>Are you sure you want to delete this user data?<br></h5>

          <input type="hidden" class="form-control" name="deletePatient" id="upaId" value="upaId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- ####################################### End of Modal Delete Patient #########################################################-->

<!-- Modal Approve-->
<div class="modal fade" id="approveApplication" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLongTitle">Continue to approve? <i class="bi bi-check-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>admin/manage/user/doctor/register">
        <h5>Are you sure you approve this application?<br><br>
        <small>Application Approval Mail will be sent to their email.<br>
        Send them the username and password with the response as soon as possible! </small></h5>

        <input type="hidden" class="form-control" name="firstname" id="firstId" value="firstId">
        <input type="hidden" class="form-control" name="midname" id="middId" value="middId">
        <input type="hidden" class="form-control" name="surname" id="surId" value="surId">
        <input type="hidden" class="form-control" name="contact" id="conttId" value="conttId">
        <input type="hidden" class="form-control" name="quali" id="quaId" value="quaId">

         <input type="hidden" class="form-control" name="email" id="emailId" value="emailId">
        <input type="hidden" class="form-control" name="deleteRequest" id="requestId" value="requestId">
         
        <div class="modal-footer mt-3">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-info">Yes</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Approve-->
<div class="modal fade" id="editDoctorUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLongTitle">Continue to approve? <i class="bi bi-check-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                            <form action="<?= base_url() ?>user/editDoctor" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">

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
                            <input id="userFirstname" type="text" name="firstname" value="userFirstname" placeholder="Firstname" class="form-control bg-white border-left-0 border-md" required>
                        </div>


                        <!-- Middle Name -->
                        <div class="input-group col-lg-4 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="userMidname" type="text" name="middlename" value="userMidname" placeholder="Middlename" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Last Name -->
                        <div class="input-group col-lg-4 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="userSurname" type="text" name="lastname" value="userSurname" placeholder="Lastname" placeholder="Last Name" class="form-control bg-white border-left-0 border-md" required>
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
                            <input id="userEmail" type="email" name="email"  value="userEmail" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" required>
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
                            <input id="userPhone" type="tel" value="userPhone" name="phone" placeholder="Updated Phone Number" class="form-control bg-white border-md border-left-0 pl-3" required>
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
                            <input id="userMeet" type="text" name="meet_link" value="userMeet" placeholder="Meet Link" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                      <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-2">
                          <h6 class="text-muted">  Set Username: </h6>
                        </div>
                        <input id="userName" value="userName" type="tel" name="username" placeholder="Set Username" class=" mx-3 mb-2 form-control  bg-white border-md pl-3" readonly>
                        <div class="input-group col-lg-12 mb-4">

                          <input id="" type="tel" name="username" placeholder="Set Username" class="form-control bg-white border-md pl-3" required>

                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md">
                                    <i class="fa fa-phone-square text-muted"></i>
                                </span>
                            </div>
                            <select id="user_deff" name="username_default" style="max-width: 200px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted" required>
                                <option value="">Select Username Default</option>
                                <option value="_doctor@wellbeing.com">_doctor@wellbeing.com</option>

                            </select>
                        </div>
                        
                        <div class="modal-footer w-100">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <input type="hidden" id= "userrId" value="userrId" name="editDoctor" />
                                  <input type="submit" class="btn btn-info" value="Edit" name="submitr" />
                        </div>

                     </div>
                 </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal Approve-->
<div class="modal fade" id="editPatientUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLongTitle">Continue to approve? <i class="bi bi-check-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                            <form action="<?= base_url() ?>user/editPatient" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">

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
                            <input id="userFirst" type="text" name="firstname" value="userFirst" placeholder="Firstname" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Middle Name -->
                        <div class="input-group col-lg-4 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="userMid" type="text" name="middlename" value="userMid" placeholder="Middlename" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Last Name -->
                        <div class="input-group col-lg-4 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="userSur" type="text" name="lastname" value="userSur" placeholder="Lastname" placeholder="Last Name" class="form-control bg-white border-left-0 border-md" required>
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
                            <input id="userEm" type="email" name="email"  value="userEm" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" required>
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
                            <input id="userPh" type="tel" value="userPh" name="phone" placeholder="Updated Phone Number" class="form-control bg-white border-md border-left-0 pl-3" required>
                        </div>

                      <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-2">
                          <h6 class="text-muted">  Set Username: </h6>
                        </div>
                        <input id="userNa" value="userNa" type="tel" name="username" placeholder="Set Username" class=" mx-3 mb-2 form-control  bg-white border-md pl-3" readonly>
                        <div class="input-group col-lg-12 mb-4">

                          <input id="" type="tel" name="username" placeholder="Set Username" class="form-control bg-white border-md pl-3" required>

                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md">
                                    <i class="fa fa-phone-square text-muted"></i>
                                </span>
                            </div>
                            <select id="user_deff" name="username_default" style="max-width: 200px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted" required>
                                <option value="">Select Username Default</option>
                                <option value="_doctor@wellbeing.com">_doctor@wellbeing.com</option>

                            </select>
                        </div>
                        
                        <div class="modal-footer w-100">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <input type="hidden" id= "userrrId" value="userrrId" name="editPatient" />
                                  <input type="submit" class="btn btn-info" value="Edit" name="submitr" />
                        </div>

                     </div>
                 </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Approve-->
<div class="modal fade" id="editBloggerUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLongTitle">Continue to approve? <i class="bi bi-check-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                            <form action="<?= base_url() ?>user/editBlogger" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">

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
                            <input id="userbFirst" type="text" name="firstname" value="userbFirst" placeholder="Firstname" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Middle Name -->
                        <div class="input-group col-lg-4 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="userbMid" type="text" name="middlename" value="userbMid" placeholder="Middlename" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Last Name -->
                        <div class="input-group col-lg-4 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="userbSur" type="text" name="lastname" value="userbSur" placeholder="Lastname" placeholder="Last Name" class="form-control bg-white border-left-0 border-md" required>
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
                            <input id="userbEm" type="email" name="email"  value="userbEm" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" required>
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
                            <input id="userbPh" type="tel" value="userbPh" name="phone" placeholder="Updated Phone Number" class="form-control bg-white border-md border-left-0 pl-3" required>
                        </div>

                      <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-2">
                          <h6 class="text-muted">  Set Username: </h6>
                        </div>
                        <input id="userbNa" value="userbNa" type="tel" name="username" placeholder="Set Username" class=" mx-3 mb-2 form-control  bg-white border-md pl-3" readonly>
                        <div class="input-group col-lg-12 mb-4">

                          <input id="" type="tel" name="username" placeholder="Set Username" class="form-control bg-white border-md pl-3" required>

                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md">
                                    <i class="fa fa-phone-square text-muted"></i>
                                </span>
                            </div>
                            <select id="user_deff" name="username_default" style="max-width: 200px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted" required>
                                <option value="">Select Username Default</option>
                                <option value="_doctor@wellbeing.com">_doctor@wellbeing.com</option>

                            </select>
                        </div>
                        
                        <div class="modal-footer w-100">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <input type="hidden" id= "userblogId" value="userblogId" name="editBlogger" />
                                  <input type="submit" class="btn btn-info" value="Edit" name="submitr" />
                        </div>

                     </div>
                 </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Experience Archive-->
<div class="modal fade" id="approveRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLongTitle">Continue to approve?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>request/approve">
          <h5>Are you sure you want to approve this request?<br><br>
          <small>Please do the requested task as soon as possible! </small>
          </h5>

          <input type="hidden" class="form-control" name="approveRequest" id="reqId" value="reqId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Modal Experience Archive-->
<div class="modal fade" id="approveRequestBlogger" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLongTitle">Continue to approve?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>request/approveBlogger">
          <h5>Are you sure you want to approve this request?<br><br>
          <small>Please do the requested task as soon as possible! </small>
          </h5>

          <input type="hidden" class="form-control" name="approveRequest" id="reqbId" value="reqbId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Modal Experience Archive-->
<div class="modal fade" id="approveRequestPatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLongTitle">Continue to approve?   <i class="bi bi-eye-slash"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>request/approvePatient">
          <h5>Are you sure you want to approve this request?<br><br>
          <small>Please do the requested task as soon as possible! </small>
          </h5>

          <input type="hidden" class="form-control" name="approveRequest" id="rebbId" value="rebbId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Modal Experience Delete-->
<div class="modal fade" id="deleteRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Continue to delete?   <i class="bi bi-x-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>request/delete">
          <h5>Are you sure you want to delete this data?<br></h5>

          <input type="hidden" class="form-control" name="deleteRequest" id="rId" value="rId">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

  
<script>

    $(".deleteRequest").click(function () {
    var r_id = $(this).attr('r-id');
    $("#rId").val( r_id );
    $('#deleteRequest').modal('show');
});

    $(".approveRequestPatient").click(function () {
    var rebb_id = $(this).attr('rebb-id');
    $("#rebbId").val( rebb_id );
    $('#approveRequestPatient').modal('show');
});

    $(".approveRequestBlogger").click(function () {
    var reqb_id = $(this).attr('reqb-id');
    $("#reqbId").val( reqb_id );
    $('#approveRequestBlogger').modal('show');
});

    $(".approveRequest").click(function () {
    var req_id = $(this).attr('req-id');
    $("#reqId").val( req_id );
    $('#approveRequest').modal('show');
});

    $(".editBloggerUser").click(function () {

    var userb_first = $(this).attr('user-first');
    $("#userbFirst").val( userb_first );

    var userb_midname = $(this).attr('user-midname');
    $("#userbMid").val( userb_midname );

    var userb_surname = $(this).attr('user-surname');
    $("#userbSur").val( userb_surname );

    var userb_email = $(this).attr('user-email');
    $("#userbEm").val( userb_email );

    var userb_phone = $(this).attr('user-phone');
    $("#userbPh").val( userb_phone );

    var userb_name = $(this).attr('user-name');
    $("#userbNa").val( userb_name );

    var userrb_id = $(this).attr('userr-id');
    $("#userblogId").val( userrb_id );

    $('#editBloggerUser').modal('show');
});

    $(".editDoctorUser").click(function () {

    var user_first = $(this).attr('user-first');
    $("#userFirstname").val( user_first );

    var user_midname = $(this).attr('user-midname');
    $("#userMidname").val( user_midname );

    var user_surname = $(this).attr('user-surname');
    $("#userSurname").val( user_surname );

    var user_email = $(this).attr('user-email');
    $("#userEmail").val( user_email );

    var user_phone = $(this).attr('user-phone');
    $("#userPhone").val( user_phone );

    var user_meet = $(this).attr('user-meet');
    $("#userMeet").val( user_meet );

    var user_name = $(this).attr('user-name');
    $("#userName").val( user_name );

    var userr_id = $(this).attr('userr-id');
    $("#userrId").val( userr_id );

    $('#editDoctorUser').modal('show');
});

    $(".editPatientUser").click(function () {

    var user_first = $(this).attr('user-first');
    $("#userFirst").val( user_first );

    var user_midname = $(this).attr('user-midname');
    $("#userMid").val( user_midname );

    var user_surname = $(this).attr('user-surname');
    $("#userSur").val( user_surname );

    var user_email = $(this).attr('user-email');
    $("#userEm").val( user_email );

    var user_phone = $(this).attr('user-phone');
    $("#userPh").val( user_phone );

    var user_meet = $(this).attr('user-meet');
    $("#userMe").val( user_meet );

    var user_name = $(this).attr('user-name');
    $("#userNa").val( user_name );

    var userr_id = $(this).attr('userr-id');
    $("#userrrId").val( userr_id );

    $('#editPatientUser').modal('show');
});

    $(".viewDetail").click(function () {

    var user = $(this).attr('username-id');
    $("#userId").val( user );

    var meet = $(this).attr('meet-id');
    $("#meetId").val( meet );

    $('#viewDesc').modal('show');
});

    $(".disableUser").click(function () {
    var ui = $(this).attr('user-id');
    $("#uId").val( ui );
    $('#disableAccount').modal('show');
});

    $(".enableUser").click(function () {
    var u_id = $(this).attr('us-id');
    $("#usId").val( u_id );
    $('#enableAccount').modal('show');
});
  
    $(".deleteUser").click(function () {
    var id = $(this).attr('use-id');
    $("#useId").val( id );
    $('#deleteUser').modal('show');
});

    $(".disablePatient").click(function () {
    var upi = $(this).attr('patient-id');
    $("#pId").val( upi );
    $('#disablePatient').modal('show');
});

    $(".enablePatient").click(function () {
    var up_id = $(this).attr('up-id');
    $("#upId").val( up_id );
    $('#enablePatient').modal('show');
});
  
    $(".deletePatient").click(function () {
    var p_id = $(this).attr('upa-id');
    $("#upaId").val( p_id );
    $('#deletePatient').modal('show');
});

    $(".approveApplication").click(function () {
    
    var ri = $(this).attr('request-id');
    $("#requestId").val( ri );

    var fn = $(this).attr('first-id');
    $("#firstId").val( fn );

    var mn = $(this).attr('mid-id');
    $("#middId").val( mn );

    var sn = $(this).attr('sur-id');
    $("#surId").val( sn );

    var cn = $(this).attr('cont-id');
    $("#conttId").val( cn );

    var qn = $(this).attr('quali-id');
    $("#quaId").val( qn );

    var email = $(this).attr('email-id');
    $("#emailId").val( email );

    $('#approveApplication').modal('show');
});

</script> 



