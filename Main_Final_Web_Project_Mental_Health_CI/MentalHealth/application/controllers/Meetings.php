<?php

class Meetings extends CI_Controller
{
     //contructor to load the model
     public function __construct()
    {
        parent::__construct();
        $this->load->model('Meeting');
        $this->load->model('User');
    }

    public function loadViews($page, $data = []) {
        $this->load->view('meetings/'.$page, $data);
    }

    public function meetingView(){
        $data = [
            'page_title' => 'Meetings',
            'meetings' => $this->Meeting->selectAll()
        ];
       $this->loadViews('all', $data);

        // echo "working";
    }

    public function view(){
        $data = [
            'page_title' => 'Wellbeing- Meetings',
            'meetings' => $this->Meeting->selectAllUA()
        ];
       $this->loadViews('view', $data);

        // echo "working";
    }

    public function viewPatient(){

        // echo "view patient";
        $data = [
            'page_title' => 'Wellbeing- Patient Meetings',
            'meetings' => $this->Meeting->selectAllUAP()
        ];
       $this->loadViews('viewPatient', $data);

        // echo "working";
    }

    public function addView(){
        $data = [
            'page_title' => 'Meetings - Add',
            'doctors' => $this->User->doctor(),
            'patients' => $this->User->patient()
        ];
       $this->loadViews('add', $data);

        // echo "working";
    }

    public function editView(){

        $id = $this->input->post('editMeeting');

        $data = [
            'page_title' => 'Meetings - Edit',
            'doctors' => $this->User->doctor(),
            'patients' => $this->User->patient(),
            'meeting' => $this->Meeting->getMeeting($id)
        ];
       $this->loadViews('edit', $data);

        // echo "working";
    }

    public function add(){
    
        $successful = $this->Meeting->add();

        if($successful == 'success'){
            $this->session->set_flashdata('add_successful', 'Added successfully :) Your information will be displayed to assigned doctor and patient. Keep Posting! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/meeting');
        }else {
            $this->session->set_flashdata('add_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/meeting');
        }
    }

    public function edit(){
    
    $id = $this->input->post('editMeeting');
        $successful = $this->Meeting->edit($id);

        if($successful == 'success'){
            $this->session->set_flashdata('edit_successful', 'Edited successfully :) Your updated information will be displayed to assigned doctor and patient. Keep Posting! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/meeting');
        }else {
            $this->session->set_flashdata('edit_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/meeting');
        }
    }


    public function archive(){

        $id = $this->input->post('archiveMeet');
        $successful = $this->Meeting->archive($id);

        if($successful == 'success'){
            $this->session->set_flashdata('archive_successful', 'Archived successfully :) The data will be unavailable to other users now! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/meeting');
        }else {
            $this->session->set_flashdata('archive_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/meeting');
        }
    }

    public function unarchive(){

        $id = $this->input->post('unarchiveMeet');
        $successful = $this->Meeting->unarchive($id);

        if($successful == 'success'){
            $this->session->set_flashdata('unarchive_successful', 'Unarchived successfully :) The data will be available to other users now! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/meeting');
        }else {
            $this->session->set_flashdata('unarchive_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/meeting');
        }
    }

    public function change(){

        $id = $this->input->post('archiveMeet');
        $successful = $this->Meeting->change($id);

        if($successful == 'success'){
            $this->session->set_flashdata('change_successful', 'Changed successfully :) Thank You For Supporting Our Patients! <i class="bi bi-emoji-laughing"></i>');
            redirect('doctor/manage/meeting');
        }else {
            $this->session->set_flashdata('change_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('doctor/manage/meeting');
        }
    }

    public function unchange(){

        $id = $this->input->post('unarchiveMeet');
        $successful = $this->Meeting->unchange($id);

        if($successful == 'success'){
            $this->session->set_flashdata('unchange_successful', 'Changed successfully :) Kindly Join The Meeting And Support Our Patients! <i class="bi bi-emoji-laughing"></i>');
            redirect('doctor/manage/meeting');
        }else {
            $this->session->set_flashdata('unchange_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('doctor/manage/meeting');
        }
    }

    public function delete(){

        $id = $this->input->post('deleteMeet');

        $successful = $this->Meeting->delete($id);
        if($successful == 'success'){
            $this->session->set_flashdata('delete_successful', 'Deleted successfully :) The data is no longer available! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/meeting');
        }else {
            $this->session->set_flashdata('delete_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/meeting');
        }
    }

}

?>
