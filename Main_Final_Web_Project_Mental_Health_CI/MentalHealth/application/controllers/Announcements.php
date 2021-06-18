<?php

class Announcements extends CI_Controller
{

	 //contructor to load the model
     public function __construct()
    {
        parent::__construct();
        $this->load->model('Announcement');
    }

    public function loadViews($page, $data = []) {
        $this->load->view('announcements/'.$page, $data);
    }

    public function announcementView(){
        $data = [
            'page_title' => 'Announcements',
            'announcements' => $this->Announcement->selectAll()
        ];
       $this->loadViews('all', $data);

        // echo "working";
    }

    public function view(){
        $data = [
            'page_title' => 'Announcements',
            'announcements' => $this->Announcement->selectAllUA()
        ];
       $this->loadViews('view', $data);

        // echo "working";
    }

    public function add(){

    	$successful = $this->Announcement->add();

        if($successful == 'success'){
            $this->session->set_flashdata('add_successful', 'Added successfully :) Your information will be announced to other users. Keep Posting! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/announcement');
        }else {
            $this->session->set_flashdata('add_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/announcement');
        }
    }

    public function edit(){

        $id = $this->input->post('annId');
        $successful = $this->Announcement->edit($id);

        if($successful == 'success'){
            $this->session->set_flashdata('edit_successful', 'Edited successfully :) Your updated information will be announced to other users. Keep Posting! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/announcement');
        }else {
            $this->session->set_flashdata('edit_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/announcement');
        }
    }

    public function archive(){

        $id = $this->input->post('archiveAnnouncement');
    	$successful = $this->Announcement->archive($id);

        if($successful == 'success'){
            $this->session->set_flashdata('archive_successful', 'Archived successfully :) The data will be unavailable to other users now! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/announcement');
        }else {
            $this->session->set_flashdata('archive_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/announcement');
        }
    }

    public function unarchive(){

        $id = $this->input->post('unarchiveAnnouncement');
    	$successful = $this->Announcement->unarchive($id);

        if($successful == 'success'){
            $this->session->set_flashdata('unarchive_successful', 'Unarchived successfully :) The data will be available to other users now! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/announcement');
        }else {
            $this->session->set_flashdata('unarchive_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/announcement');
        }
    }

    public function delete(){

        $id = $this->input->post('deleteAnnouncement');

    	$successful = $this->Announcement->delete($id);
        if($successful == 'success'){
            $this->session->set_flashdata('delete_successful', 'Deleted successfully :) The data is no longer available! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/announcement');
        }else {
            $this->session->set_flashdata('delete_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/announcement');
        }
    }

}

?>
