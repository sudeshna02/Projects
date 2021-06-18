<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	 //contructor to load the model
     public function __construct()
    {
        parent::__construct();
        $this->load->model('User');
        $this->load->model('Request');
    }

    public function loadViews($page, $data = []){

        $this->load->view('users/'.$page, $data);
    }

    public function register()
    {

        $user_role = $this->input->post('user_role');
        
        $this->form_validation->set_rules('firstname', 'Firstname', 'required|trim');
        $this->form_validation->set_rules('middlename', 'Middlename', 'trim');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');  
        $this->form_validation->set_rules('passwordConfirmation', 'Password Confirmation', 'required|matches[password]');

        if($user_role == '3'){
            $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[patients.pusername]');  
            $this->form_validation->set_rules('usernameConfirmation', 'Username Confirmation', 'required|matches[username]');

            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[patients.pemail]');

        }else{
            $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[staff.susername]');  
            $this->form_validation->set_rules('usernameConfirmation', 'Username Confirmation', 'required|matches[username]');

            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[staff.semail]');
        }    

            $validation_success = $this->form_validation->run();

            if($validation_success == true){
                $successful = $this->User->add();

                if($successful){
                    $this->session->set_flashdata('register_successful', 'Successfully registered :) You can now log in !');
                redirect('signup');
                
                }else {
                    $this->session->set_flashdata('register_unsuccessful', 'Something went wrong :/ Please try again!');
                redirect('signup');
                }

            } else {
                 $this->session->set_flashdata('register_unsuccessful', 'Something went wrong :/ Please try again!');
                $this->signup();
            } 

    }

    public function signup()
    {
        $data = [
            'page_title' => 'Wellbeing - Sign Up'
        ];
        $this->loadViews('signup', $data);
    }

    public function registerAdmin()
    {
        $id = $this->input->post('deleteRequest');
        $successful = $this->User->add();

        if($successful){

            $this->deleteRequest($id);
            $this->session->set_flashdata('register_successful', 'Successfully registered :) You can view their details here !');

                redirect('admin/manage/user/view_doctors');

        }else {
            $this->session->set_flashdata('register_unsuccessful', 'Something went wrong :/ Please try again!');
                redirect('admin/manage/user/view_doctors');
        }
    }

    public function userEditDoctor()
    {
        $id = $this->input->post('editDoctor');
        $successful = $this->User->edit($id);

        if($successful){
            $this->session->set_flashdata('edit_successful', 'Successfully edited :) User can now view their updated details !');

                redirect('admin/manage/user/view_doctors');

        }else {
            $this->session->set_flashdata('edit_unsuccessful', 'Something went wrong :/ Please try again!');
                redirect('admin/manage/user/view_doctors');
        }
    }

    public function userEditPatient()
    {
        $id = $this->input->post('editPatient');
        $successful = $this->User->editP($id);

        if($successful){
            $this->session->set_flashdata('edit_successful', 'Successfully edited :) User can now view their updated details !');

                redirect('admin/manage/user/view_patients');

        }else {
            $this->session->set_flashdata('edit_unsuccessful', 'Something went wrong :/ Please try again!');
                redirect('admin/manage/user/view_patients');
        }
    }

    public function userEditBlogger()
    {
        $id = $this->input->post('editBlogger');
        $successful = $this->User->edit($id);

        echo $id;
        if($successful){
            $this->session->set_flashdata('edit_successful', 'Successfully edited :) User can now view their updated details !');

                redirect('admin/manage/user/view_bloggers');

        }else {
            $this->session->set_flashdata('edit_unsuccessful', 'Something went wrong :/ Please try again!');
                redirect('admin/manage/user/view_bloggers');
        }
    }


    public function login()
    {
        $user_role = $this->input->post('user_role');

        // echo $user_role;
        if($user_role == '1'){

	        $staff = $this->User->staffLogin();

            if ($staff) {
                $user_data = array(
                    'id' => $staff['sid'],
                    'name' => $staff['sfirstname'],
                    'middlename' => $staff['smiddlename'],
                    'surname' => $staff['ssurname'],
                    'usern' => $staff['susername'],
                    'passw' => $staff['spass'],
                    'contact' => $staff['scontact'],
                    'email' => $staff['semail'],
                    'role' => $staff['srole'],
                    'image' => $staff['simage'],
                    'status' => $staff['sstatus'],
                );

            $this->session->set_userdata($user_data);

            if($this->session->userdata('status') == '2'){
            switch ($user_data['role']) {
                    case '1':
                        $this->session->set_flashdata('login_successful', 'Successfully Logged In :) Welcome !');
                        redirect('admin/dashboard');
                        // echo 'staff loggedin';
                        break;
                    case '2':
                        $this->session->set_flashdata('login_successful', 'Successfully Logged In :) Welcome !');
                         redirect('doctor/dashboard');
                        break;
                    case '4':
                        $this->session->set_flashdata('login_successful', 'Successfully Logged In :) Welcome !');
                        redirect('blogger/dashboard');
                        break;
                }

            }else{
                $this->session->set_flashdata('disabled_account', 'Your Account Has Been Disabled For Some Reason. :/ Email Us For Further Information! <i class="bi bi-emoji-frown"></i>');
                redirect('login');      
                // echo 'staff not loggedin';   
            }

            }else {
                $this->session->set_flashdata('login_unsuccessful', 'Incorrect Credentials :/ Please try again!');
                redirect('login');      
                // echo 'staff not loggedin';     
            }

        }else {

        //     echo 'A patient';
            $patient = $this->User->patientLogin();

            if ($patient) {
                $user_data = array(
                    'id' => $patient['pid'],
                    'name' => $patient['pfirstname'],
                    'middlename' => $patient['pmiddlename'],
                    'surname' => $patient['psurname'],
                    'usern' => $patient['pusername'],
                    'passw' => $patient['ppass'],
                    'contact' => $patient['pcontact'],
                    'email' => $patient['pemail'],
                    'status' => $patient['pstatus'],
                    'image' => $patient['pimage'],
                    'role' => '3'
                );

            $this->session->set_userdata($user_data);

            $this->session->set_flashdata('login_successful', 'Successfully Logged In :) Welcome !');
            // redirect('patient/dashboard');
            redirect('patient/dashboard');

            }else {
                $this->session->set_flashdata('login_unsuccessful', 'Incorrect Credentials :/ Please try again!');
                redirect('login');      
                // echo 'patient not loggedin';     
            }

        }

    }

    public function pictureAdd(){



        $successful = $this->User->addPicture();

        if($successful){
            $this->session->set_flashdata('picture_successful', 'New picture added successfully :) <br> You can view your added picture in your profile after next login! Thank you! ');

            if($this->session->userdata('role') == '1'){
                redirect('admin/profile');
            }elseif($this->session->userdata('role') == '2'){
                redirect('doctor/profile');
            }elseif($this->session->userdata('role') == '4'){
                redirect('blogger/profile');
            }elseif($this->session->userdata('role') == '3'){
                redirect('patient/profile');
            }else{
                echo "404 ERROR Encountered";
            }
        }else {
            $this->session->set_flashdata('picture_unsuccessful', 'Something went wrong :/ Please try again!');
            if($this->session->userdata('role') == '1'){
                redirect('admin/profile');
            }elseif($this->session->userdata('role') == '2'){
                redirect('doctor/profile');
            }elseif($this->session->userdata('role') == '4'){
                redirect('blogger/profile');
            }elseif($this->session->userdata('role') == '3'){
                redirect('patient/profile');
            }else{
                echo "404 ERROR Encountered";
            }
        }
    }

    public function dashboard()
    {
        if ($this->session->userdata('role') == '1'){ 

        $data = [
            'page_title' => 'Wellbeing - Admin - Dashboard'
        ];
         $this->loadViews('admin_dashboard', $data);

        }elseif($this->session->userdata('role') == '4') {

        $data = [
            'page_title' => 'Wellbeing - Blogger - Dashboard'
        ];
         $this->loadViews('blogger_dashboard', $data);
         
        }elseif($this->session->userdata('role') == '2') {

        $data = [
            'page_title' => 'Wellbeing - Doctor - Dashboard'
        ];
         $this->loadViews('blogger_dashboard', $data);
         
        }elseif($this->session->userdata('role') == '3') {
        $data = [
            'page_title' => 'Wellbeing - Patient - Dashboard'
        ];
         $this->loadViews('patient_dashboard', $data);
        }else{
            echo "404 ERROR - doesnt exists";
        }
    }

    public function profile(){

            $data = [
                'page_title' => 'Wellbeing - Profile'
            ];
            
        $this->loadViews('profile', $data);
    }

    public function logout()
    {
        $logout = $this->User->logout();
        redirect('/');   
    }

    public function sendApprovalEmail()
    {
        $this->load->model('Email');
        
        $this->Email->approvalLetter();

        $this->session->set_flashdata('approve_successful', 'Approved Successfully! :)');

            $data = [
                'page_title' => 'Register',
                'firstname' => $this->input->post('firstname'),
                'middlename' => $this->input->post('midname'),
                'surname' => $this->input->post('surname'),
                'contact' => $this->input->post('contact'),
                'email' => $this->input->post('email'),
                'quali' => $this->input->post('quali'),
                'rid' => $this->input->post('deleteRequest')
            ];

        $this->loadViews('doctor_register', $data);
    }

    public function sendDetail()
    {
           $user_name = $this->input->post('username');
           $default = $this->input->post('username_default');

           $username = $user_name . $default;

            $pass_word = $this->input->post('password');
           $default = $this->input->post('password_default');

           $pass = $pass_word . $default;

        $this->load->model('Email');
        
        $this->Email->sendDetail($username, $pass);

        $this->registerAdmin();

    }

    public function deleteRequest($id){


        // echo $id;

       $this->Request->delete($id);

    }


    public function rejectionEmail()
    {   
        $email = $this->input->post('email');
        $id = $this->input->post('requestDID');
        $this->load->model('Email');

        $successful = $this->Email->rejectionLetter();

        $this->deleteRequest($id);
        $this->session->set_flashdata('reject_successful', 'Rejected Successfully! :)');
        redirect('admin/manage/request');
    
    }

    public function userView(){

            $data = [
                'page_title' => 'Users'
            ];
            
        $this->loadViews('all', $data);
    }

    public function deleteStaff(){

        $id = $this->input->post('deleteUser');
        // echo $id;

        $successful = $this->User->deleteStaff($id);

        if($successful){
            $this->session->set_flashdata('delete_successful', 'Successfully registered :) You can now log in !');
                redirect('admin/manage/user');

        }else {
            $this->session->set_flashdata('delete_unsuccessful', 'Something went wrong :/ Please try again!');
                redirect('admin/manage/user');
        }

    }

    public function archiveStaff(){

        $id = $this->input->post('disableUser');

        $successful = $this->User->archiveStaff($id);

        if($successful){
            $this->session->set_flashdata('archive_successful', 'Successfully disabled :) The user cannot log in now !');
                redirect('admin/manage/user');

        }else {
            $this->session->set_flashdata('archive_unsuccessful', 'Something went wrong :/ Please try again!');
                redirect('admin/manage/user');
        }

    }

    public function unarchiveStaff(){

        $id = $this->input->post('enableUser');

        $successful = $this->User->unarchiveStaff($id);

        if($successful){
            $this->session->set_flashdata('delete_successful', 'Successfully enabled :) The user can log in now !');
                redirect('admin/manage/user');

        }else {
            $this->session->set_flashdata('delete_unsuccessful', 'Something went wrong :/ Please try again!');
                redirect('admin/manage/user');
        }

    }

    public function deletePatient(){

        $id = $this->input->post('deletePatient');
        // echo $id;

        $successful = $this->User->deletePatient($id);

        if($successful){
            $this->session->set_flashdata('delete_successful', 'Successfully  :) You can now log in !');
                redirect('admin/manage/user/view_patients');

        }else {
            $this->session->set_flashdata('delete_unsuccessful', 'Something went wrong :/ Please try again!');
                redirect('admin/manage/user/view_patients');
        }

    }

    public function archivePatient(){

        $id = $this->input->post('disablePatient');

        echo $id;

        $successful = $this->User->archivePatient($id);

        if($successful){
            $this->session->set_flashdata('delete_successful', 'Successfully registered :) You can now log in !');
                redirect('admin/manage/user/view_patients');

        }else {
            $this->session->set_flashdata('delete_unsuccessful', 'Something went wrong :/ Please try again!');
                redirect('admin/manage/user/view_patients');
        }

    }

    public function unarchivePatient(){

        $id = $this->input->post('enablePatient');

        $successful = $this->User->unarchivePatient($id);

        if($successful){
            $this->session->set_flashdata('delete_successful', 'Successfully registered :) You can now log in !');
                redirect('admin/manage/user/view_patients');

        }else {
            $this->session->set_flashdata('delete_unsuccessful', 'Something went wrong :/ Please try again!');
                redirect('admin/manage/user/view_patients');
        }

    }

    public function doctor(){

            $data = [
                'page_title' => 'Doctors',
                'requests' => $this->User->doctor()
            ];
            
        $this->loadViews('view_doctors', $data);
    }

    public function patient(){

            $data = [
                'page_title' => 'Patients',
                'requests' => $this->User->patient()
            ];
            
        $this->loadViews('view_patients', $data);
    }

    public function blogger(){

            $data = [
                'page_title' => 'Bloggers',
                'requests' => $this->User->blogger()
            ];
            
        $this->loadViews('view_bloggers', $data);
    } 


}

