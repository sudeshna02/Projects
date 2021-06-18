
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experiences extends CI_Controller {

	 //contructor to load the model
     public function __construct()
    {
        parent::__construct();
        $this->load->model('Experience');
    }

    public function loadViews($page, $data = []){

        $this->load->view('experiences/'.$page, $data);
    }

    public function experienceView(){
        $data = [
            'page_title' => 'Experiences',
            'experiences' => $this->Experience->selectAll()
        ];
       $this->loadViews('all', $data);

        // echo "working";
    }

    public function add()
    {
    	$successful = $this->Experience->add();

    
    		$this->session->set_flashdata('experience_successful', 'Experience Added Successfully! :)');

          if($this->session->userdata('role') == '4'){
                $id = $this->session->userdata('id');
            redirect("blogger/manage/experiences/" . $id);
            }elseif($this->session->userdata('role') == '3'){
                $id = $this->session->userdata('id');
                redirect("patient/manage/experience/" . $id);
            }elseif($this->session->userdata('role') == '2'){
                $id = $this->session->userdata('id');
                redirect("doctor/manage/experiences/" . $id);
            }    
            else{
                echo 'Invalid Page';
            }

    }

    public function added($id){

            if($this->session->userdata('role') == '3'){
                        $data = [
            'page_title' => 'All Added Experiences',
            'experiences' => $this->Experience->getExperiencesP($id)
        ]; 
            }else{
                        $data = [
            'page_title' => 'All Added Experiences',
            'experiences' => $this->Experience->getExperiences($id)
        ];             }

       $this->loadViews('added', $data);
    }

    public function edit(){

      $id = $this->input->post('id');
      $this->Experience->edit($id);

      $this->session->set_flashdata('experience_edit_successful', 'Experience Edited Successfully! :)');

            if($this->session->userdata('role') == '4'){
            $uid = $this->session->userdata('id');
                redirect('blogger/manage/experiences/' . $uid);
            }elseif($this->session->userdata('role') == '3'){
              $uid = $this->session->userdata('id');
                redirect("patient/manage/experience/" . $uid);
            }elseif($this->session->userdata('role') == '2'){
              $uid = $this->session->userdata('id');
                redirect("doctor/manage/experiences/" . $uid);
            }else {
              redirect("admin/manage/experience");
            }
      
    }

    public function delete(){

        $id = $this->input->post('deleteEx');

        $successful = $this->Experience->delete($id);

       $this->session->set_flashdata('delete_successful', 'Successful :) Your selected data has been deleted successfully!');
          if($this->session->userdata('role') == '4'){
            $uid = $this->session->userdata('id');
                redirect("blogger/manage/experiences/" . $uid);
            }elseif($this->session->userdata('role') == '3'){
              $uid = $this->session->userdata('id');
                redirect("patient/manage/experience/" . $uid);
            }elseif($this->session->userdata('role') == '2'){
              $uid = $this->session->userdata('id');
                redirect("doctor/manage/experiences/" . $uid);
            }else {
              redirect("admin/manage/experience");
            }
    }

    public function archive(){

        $id = $this->input->post('archiveEx');

        $successful = $this->Experience->archive($id);

       $this->session->set_flashdata('archive_successful', 'Successful :) Your selected data has been archived successfully!');
          if($this->session->userdata('role') == '4'){
            $uid = $this->session->userdata('id');
                redirect("blogger/manage/experiences/" . $uid);
            }elseif($this->session->userdata('role') == '3'){
              $uid = $this->session->userdata('id');
                redirect("patient/manage/experience/" . $uid);
            }elseif($this->session->userdata('role') == '2'){
              $uid = $this->session->userdata('id');
                redirect("doctor/manage/experiences/" . $uid);
            }else {
              redirect("admin/manage/experience");
            }

    }

    public function unarchive(){

        $id = $this->input->post('unarchiveEx');
        
      $this->Experience->unarchive($id);

       $this->session->set_flashdata('unarchive_successful', 'Successful :) Your selected data has been unarchived successfully!');
          if($this->session->userdata('role') == '4'){
            $uid = $this->session->userdata('id');
                redirect("blogger/manage/experiences/" . $uid);
            }elseif($this->session->userdata('role') == '3'){
              $uid = $this->session->userdata('id');
                redirect("patient/manage/experience/" . $uid);
            }elseif($this->session->userdata('role') == '2'){
              $uid = $this->session->userdata('id');
                redirect("doctor/manage/experiences/" . $uid);
            }else {
              redirect("admin/manage/experience");
            }

    }

}    
