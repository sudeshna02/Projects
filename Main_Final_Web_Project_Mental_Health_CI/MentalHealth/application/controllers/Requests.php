<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requests extends CI_Controller {

	 //contructor to load the model https://www.codexworld.com/codeigniter-file-upload-validation/
     public function __construct()
    {
        parent::__construct();
        $this->load->model('Request');
    }

    public function loadViews($page, $data = []){

        $this->load->view('requests/'.$page, $data);
    }

    public function add()
    {
        if($this->session->userdata('id') && $this->session->userdata('role') == '2' || $this->session->userdata('role') == '3' || $this->session->userdata('role') == '4') {
            $successful = $this->Request->add();

             if($successful){
                    $this->session->set_flashdata('request_successful', 'Request sent successfully :) <br> If applicable you will receive a response soon in your email or contact number! <i class="bi bi-emoji-laughing"></i>');

                     if($this->session->userdata('role') == '4'){
                        $id = $this->session->userdata('id');
                        redirect("blogger/manage/requests/" . $id);
                    }elseif($this->session->userdata('role') == '3'){
                        $id = $this->session->userdata('id');
                        redirect("patient/manage/request/" . $id);
                    }else{
                        $id = $this->session->userdata('id');
                        redirect("doctor/manage/requests/" . $id);
                    }

                }else {
                    $this->session->set_flashdata('request_unsuccessful', 'Something went wrong :/ Please try again!');
                    if($this->session->userdata('role') == '4'){
                        $id = $this->session->userdata('id');
                        redirect("blogger/manage/requests/" . $id);
                    }elseif($this->session->userdata('role') == '3'){
                        $id = $this->session->userdata('id');
                        redirect("patient/manage/request/" . $id);
                    }else{
                        $id = $this->session->userdata('id');
                        redirect("doctor/manage/requests/" . $id);
                    }
                    
                }

        }else{
        $this->form_validation->set_rules('firstname', 'Firstname', 'required|trim');
        $this->form_validation->set_rules('middlename', 'Middlename', 'trim');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required|trim');
        $this->form_validation->set_rules('phone', 'Contact Number', 'required|trim|is_unique[requests.rcontact]');
        $this->form_validation->set_rules('desc', 'Description', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[requests.remail]');
        $validation_success = $this->form_validation->run();

        if($validation_success == true){
            $successful = $this->Request->add();
           
                if($successful){
                    $this->session->set_flashdata('request_successful', 'Request sent successfully :) <br> If applicable you will receive a response soon in your email or contact number! <i class="bi bi-emoji-laughing"></i>');

                    redirect('request');

                }else {
                    $this->session->set_flashdata('request_unsuccessful', 'Something went wrong :/ Please try again!');
                    redirect('request');
                }

             }else{
                $this->request();
            }
        }

    }

    public function request()
    {
        $data = [
            'page_title' => 'Wellbeing - Send Request'
        ];
         $this->loadViews('request', $data);
    }
    
    public function requestView(){

            $data = [
                'page_title' => 'Wellbeing - All Sent Requests',
                'page_title' => 'Request'
            ];
            
        $this->loadViews('all', $data);
    }


    public function nonLogin(){

            $data = [
                'page_title' => 'View Requests - Non Login',
                'requests' => $this->Request->nonLogin()
            ];
            
        $this->loadViews('view_non', $data);
    }

    public function application(){

            $data = [
                'page_title' => 'View Application - Applicants',
                'requests' => $this->Request->application()
            ];
            
        $this->loadViews('view_application', $data);
    }

    public function apply()
    {
        $data = [
            'page_title' => 'Wellbeing - Send Application'
        ];
         $this->loadViews('apply', $data);
    }

    public function addApp()
    {
        $this->form_validation->set_rules('firstname', 'Firstname', 'required|trim');
        $this->form_validation->set_rules('middlename', 'Middlename', 'trim');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required|trim');
        $this->form_validation->set_rules('phone', 'Contact Number', 'required|trim|is_unique[requests.rcontact]');
        $this->form_validation->set_rules('desc', 'Description', 'required|trim');
        $this->form_validation->set_rules('file', '', 'callback_file_check');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[requests.remail]');
        $validation_success = $this->form_validation->run();

        if($validation_success == true){
             $successful = $this->Request->add();
           
            if($successful){
                $this->session->set_flashdata('application_successful', 'Applied successfully :) <br> The administration will examine your CV and if applicable you will receive a response soon in your email or contact number! <i class="bi bi-emoji-laughing"></i>');
                redirect('apply');
            }else {
                $this->session->set_flashdata('application_unsuccessful', 'Something went wrong :/ Please try again!');
                redirect('apply');
            }

        }else{
            $this->apply();
        }

    }

    public function file_check($str){

        //load form validation library
        $this->load->library('form_validation');
        
        //load file helper
        $this->load->helper('file');

        $allowed_mime_type_arr = array('application/pdf');
        $mime = get_mime_by_extension($_FILES['file']['name']);
        if(isset($_FILES['file']['name']) && $_FILES['file']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check', 'File with wrong extension selected :/ Please select only pdf file!');
                return false;
            }
        }else{
            $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
            return false;
        }
    }

    public function approve(){
        $id = $this->input->post('approveRequest');
        // echo $id;
        $successful = $this->Request->approve($id);

        if($successful == 'success'){
            $this->session->set_flashdata('approve_successful', 'Approved successfully :) Please response the user as soon as possible! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/request/view_doctors');
        }else {
            $this->session->set_flashdata('approve_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/request/view_doctors');
        }
    }

    public function approveBlogger(){
        $id = $this->input->post('approveRequest');
        // echo $id;
        $successful = $this->Request->approve($id);

        if($successful == 'success'){
            $this->session->set_flashdata('approve_successful', 'Approved successfully :) Please response the user as soon as possible! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/request/view_bloggers');
        }else {
            $this->session->set_flashdata('approve_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/request/view_bloggers');
        }
    }

    public function approvePatient(){
        $id = $this->input->post('approveRequest');
        // echo $id;
        $successful = $this->Request->approve($id);

        if($successful == 'success'){
            $this->session->set_flashdata('approve_successful', 'Approved successfully :) Please response the user as soon as possible! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/request/view_patients');
        }else {
            $this->session->set_flashdata('approve_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/request/view_patients');
        }
    }

    public function patient(){

            $data = [
                'page_title' => 'Wellbeing - All Sent Requests',
                'requests' => $this->Request->patient()
            ];
            
        $this->loadViews('view_logged', $data);
    }

    public function doctor(){

            $data = [
                'page_title' => 'Wellbeing - All Sent Requests',
                'requests' => $this->Request->doctor()
            ];
            
        $this->loadViews('view_doctor', $data);
    }

    public function blogger(){

            $data = [
                'page_title' => 'Wellbeing - All Sent Requests',
                'requests' => $this->Request->blogger()
            ];
            
        $this->loadViews('view_blogger', $data);
    } 

    public function requested($id){

    if($this->session->userdata('role') == '3'){
        $data = [
            'page_title' => 'Wellbeing - All Sent Requests',
            'requests' => $this->Request->getRequestsP($id)
        ]; 
      }else {
                $data = [
            'page_title' => 'Wellbeing - All Sent Requests',
            'requests' => $this->Request->getRequests($id)
        ]; 
      }  
       $this->loadViews('requested', $data);
    }

    //function to delete the category information
    public function delete(){
        $id = $this->input->post('deleteRequest');
        $successful = $this->Request->delete($id);
        if($successful == 'success'){
            $this->session->set_flashdata('delete_successful', 'Deleted successfully :) The data is no longer available! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/request');
        }else {
            $this->session->set_flashdata('delete_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/request');
        }
    }

}    