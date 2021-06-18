<?php

class Journals extends CI_Controller
{
     //contructor to load the model journal to access to the database
     public function __construct()
    {
        parent::__construct();
        $this->load->model('Journal');
    }

    //function to load the page
    public function loadViews($page, $data = []) {
        $this->load->view('journals/'.$page, $data);
    }

    //function to load all the journal information of the logged in patient and display the result to the user(patient)
    public function journalView($id){

        $data = [
            'page_title' => 'Wellbeing - Your Journals',
            'journals' => $this->Journal->getJournals($id)
        ];
       $this->loadViews('view', $data);

        // echo "working";
    }

    //function to insert the journal information from the patient and display the result to the user(patient)
    public function add(){
        $uid = $this->session->userdata('id');

        $successful = $this->Journal->add();
        if($successful == 'success'){
            $this->session->set_flashdata('add_successful', 'Added successfully :) Your information is safe here. Keep Posting! <i class="bi bi-emoji-laughing"></i>');
            redirect('patient/manage/journal/' . $uid);
        }else {
            $this->session->set_flashdata('add_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('patient/manage/journal/' . $uid);
        }
    }

    //function to edit the journal information of the patient and display the result to the user(patient)
    public function edit(){
        $uid = $this->session->userdata('id');
        $id = $this->input->post('editJournal');

        $successful = $this->Journal->edit($id);

        if($successful == 'success'){
            $this->session->set_flashdata('edit_successful', 'Edited successfully :) You can view your updated journal here. Keep Posting! <i class="bi bi-emoji-laughing"></i>');
            redirect('patient/manage/journal/' . $uid);
        }else {
            $this->session->set_flashdata('edit_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('patient/manage/journal/' . $uid);
        }
    }

    //function to delete the journal information of the patient and display the result to the user(patient)
    public function delete(){
        $uid = $this->session->userdata('id');
        $id = $this->input->post('deleteJournal');

        $successful = $this->Journal->delete($id);

        if($successful == 'success'){
            $this->session->set_flashdata('delete_successful', 'Deleted successfully :) The data is no longer available! <i class="bi bi-emoji-laughing"></i>');
            redirect('patient/manage/journal/' . $uid);
        }else {
            $this->session->set_flashdata('delete_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('patient/manage/journal/' . $uid);
        }
    }

}

?>



