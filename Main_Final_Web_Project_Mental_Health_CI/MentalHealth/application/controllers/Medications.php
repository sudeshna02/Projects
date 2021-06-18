<?php

class Medications extends CI_Controller
{
     //contructor to load the model
     public function __construct()
    {
        parent::__construct();
        $this->load->model('Medication');
        $this->load->model('Meeting');
        $this->load->model('User');
    }

    public function loadViews($page, $data = []) {
        $this->load->view('medications/'.$page, $data);
    }

    // public function medicationView(){
    //     $data = [
    //         'page_title' => 'Medications',
    //         'meetings' => $this->Meeting->selectAll()
    //     ];
    //    $this->loadViews('all', $data);

    //     // echo "working";
    // }

    public function view(){
        $data = [
            'page_title' => 'Medications - Doctor',
            'medications' => $this->Medication->selectAllUA()
        ];
       $this->loadViews('posted', $data);
    }

    public function all(){
        $data = [
            'page_title' => 'Medications',
            'medications' => $this->Medication->selectAll()
        ];
       $this->loadViews('view', $data);
    }

    public function viewPatient(){
        $data = [
            'page_title' => 'Medications - Doctor',
            'medications' => $this->Medication->selectAllUAP()
        ];
       $this->loadViews('viewPatient', $data);
    }

    public function addView(){
        $data = [
            'page_title' => 'Medications - Add',
            'meetings' => $this->Meeting->selectAllUA()
        ];
       $this->loadViews('add', $data);

        // echo "working";
    }

    public function add(){
    
        $successful = $this->Medication->add();

        if($successful == 'success'){
            $this->session->set_flashdata('add_successful', 'Added successfully :) Your information will be displayed to assigned doctor and patient. Keep Posting! <i class="bi bi-emoji-laughing"></i>');
            redirect('doctor/manage/medication');
        }else {
            $this->session->set_flashdata('add_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('doctor/manage/medication');
        }
    }

    public function edit(){
        $id = $this->input->post('editMedication');
        $successful = $this->Medication->edit($id);

        if($successful == 'success'){
            $this->session->set_flashdata('edit_successful', 'Edited successfully :) A updated medication will be shown to the patient. Keep Posting! <i class="bi bi-emoji-laughing"></i>');
             redirect('doctor/manage/medication');
        }else {
            $this->session->set_flashdata('edit_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
             redirect('doctor/manage/medication');
        }
    }
   //function to archive the category information
    public function archive(){
        $id = $this->input->post('archiveMedication');
        // echo $id;
        $successful = $this->Medication->archive($id);

        if($successful == 'success'){
            $this->session->set_flashdata('archive_successful', 'Archived successfully :) The data will be unavailable to other users now! <i class="bi bi-emoji-laughing"></i>');
            redirect('doctor/manage/medication');
        }else {
            $this->session->set_flashdata('archive_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('doctor/manage/medication');
        }
    }

   //function to unarchive the category information
    public function unarchive(){
        $id = $this->input->post('unarchiveMedication');
        // echo $id;
        $successful = $this->Medication->unarchive($id);
        if($successful == 'success'){
            $this->session->set_flashdata('unarchive_successful', 'Unarchived successfully :) The data will be available to other users now! <i class="bi bi-emoji-laughing"></i>');
            redirect('doctor/manage/medication');
        }else {
            $this->session->set_flashdata('unarchive_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('doctor/manage/medication');
        }
    }

    //function to delete the category information
    public function delete(){
        $id = $this->input->post('deleteMedication');
        $successful = $this->Medication->delete($id);
        if($successful == 'success'){
            $this->session->set_flashdata('delete_successful', 'Deleted successfully :) The data is no longer available! <i class="bi bi-emoji-laughing"></i>');
            redirect('doctor/manage/medication');
        }else {
            $this->session->set_flashdata('delete_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('doctor/manage/medication');
        }
    }

}

?>
