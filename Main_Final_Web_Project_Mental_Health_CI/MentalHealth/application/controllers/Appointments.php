<?php

class Appointments extends CI_Controller
{

	 //contructor to load the model
     public function __construct()
    {
        parent::__construct();
        $this->load->model('Appointment');
        $this->load->model('Meeting');
    }

    public function loadViews($page, $data = []) {
        $this->load->view('appointments/'.$page, $data);
    }

    public function appointmentView(){
        $data = [
            'page_title' => 'Wellbeing - Appointments',
            'appointments' => $this->Appointment->selectAll()
        ];
       $this->loadViews('all', $data);

        // echo "working";
    }

    public function addView(){
        $data = [
            'page_title' => 'Appointments - Add',
            'meetings' => $this->Meeting->selectAll()
        ];
       $this->loadViews('add', $data);

        // echo "working";
    }

    public function editView(){

        $id = $this->input->post('editAppointment');

        $data = [
            'page_title' => 'Appointments - Edit',
            'meetings' => $this->Meeting->selectAll(),
            'appointment' => $this->Appointment->getAppointment($id)
        ];
       $this->loadViews('edit', $data);

        // echo "working";
    }

    public function view(){
        $data = [
            'page_title' => 'Wellbeing- Meetings',
            'appointments' => $this->Appointment->selectAllUA()
        ];
       $this->loadViews('view', $data);

        // echo "working";
    }

    public function patientView(){
        $data = [
            'page_title' => 'Wellbeing- Meetings',
            'appointments' => $this->Appointment->selectAllUAP()
        ];
       $this->loadViews('viewPatient', $data);

        // echo "working";
    }

    public function add(){

    	$successful = $this->Appointment->add();

        if($successful == 'success'){
            $this->session->set_flashdata('add_successful', 'Added successfully :) Your information will be announced to other users. Keep Posting! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/appointment');
        }else {
            $this->session->set_flashdata('add_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/appointment');
        }
    }

    public function edit(){
        $id = $this->input->post('id');
    	$successful = $this->Appointment->edit($id);
    	if($successful){
            $this->session->set_flashdata('edit_successful', 'Edited successfully :) Your updated information will be displayed to assigned doctor and patient. Keep Posting! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/appointment');
        }else {
            $this->session->set_flashdata('edit_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/appointment');
        }
    }

    public function archive(){

        $id = $this->input->post('archiveAppointment');
    	$successful = $this->Appointment->archive($id);

        if($successful == 'success'){
            $this->session->set_flashdata('archive_successful', 'Archived successfully :) The data will be unavailable to other users now! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/appointment');
        }else {
            $this->session->set_flashdata('archive_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/appointment');
        }
    }

    public function unarchive(){

        $id = $this->input->post('unarchiveAppointment');
    	$successful = $this->Appointment->unarchive($id);

        if($successful == 'success'){
            $this->session->set_flashdata('unarchive_successful', 'Unarchived successfully :) The data will be available to other users now! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/appointment');
        }else {
            $this->session->set_flashdata('unarchive_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/appointment');
        }
    }

    public function delete(){

        $id = $this->input->post('deleteAppointment');
        // echo $id;

    	$successful = $this->Appointment->delete($id);
        if($successful == 'success'){
            $this->session->set_flashdata('delete_successful', 'Deleted successfully :) The data is no longer available! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/appointment');
        }else {
            $this->session->set_flashdata('delete_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/appointment');
        }
    }

}

?>
