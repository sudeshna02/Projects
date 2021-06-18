<?php

class Categories extends CI_Controller
{
	 //contructor to load the model
     public function __construct()
    {
        parent::__construct();
        $this->load->model('Category');
    }

    //function to load the page
    public function loadViews($page, $data = []) {
        $this->load->view('categories/'.$page, $data);
    }

    //function to load all the category information and display the result to the admin
    public function categoryView(){
        $data = [
            'page_title' => 'Categories',
            'categories' => $this->Category->selectAll()
        ];
       $this->loadViews('all', $data);
        // echo "working";
    }

    //function to add the category information from the admin into the category table
    public function add(){
    	$successful = $this->Category->add();

        if($successful == 'success'){
            $this->session->set_flashdata('add_successful', 'Added successfully :) A new category will be shown in the website. Keep Posting! <i class="bi bi-emoji-laughing"></i>');
             redirect('admin/manage/category');
        }else {
            $this->session->set_flashdata('add_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
             redirect('admin/manage/category');
        }
    }

    public function edit(){
        $id = $this->input->post('editCategory');
    	$successful = $this->Category->edit($id);

        if($successful == 'success'){
            $this->session->set_flashdata('edit_successful', 'Edited successfully :) A updated category will be shown in the website. Keep Posting! <i class="bi bi-emoji-laughing"></i>');
             redirect('admin/manage/category');
        }else {
            $this->session->set_flashdata('edit_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
             redirect('admin/manage/category');
        }
    }

   //function to archive the category information
    public function archive(){
        $id = $this->input->post('archiveCategory');
        // echo $id;
    	$successful = $this->Category->archive($id);

        if($successful == 'success'){
            $this->session->set_flashdata('archive_successful', 'Archived successfully :) The data will be unavailable to other users now! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/category');
        }else {
            $this->session->set_flashdata('archive_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/category');
        }
    }

   //function to unarchive the category information
    public function unarchive(){
        $id = $this->input->post('unarchiveCategory');
        // echo $id;
    	$successful = $this->Category->unarchive($id);
        if($successful == 'success'){
            $this->session->set_flashdata('unarchive_successful', 'Unarchived successfully :) The data will be available to other users now! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/category');
        }else {
            $this->session->set_flashdata('unarchive_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/category');
        }
    }

    //function to delete the category information
    public function delete(){
        $id = $this->input->post('deleteCategory');
    	$successful = $this->Category->delete($id);
    	if($successful == 'success'){
            $this->session->set_flashdata('delete_successful', 'Deleted successfully :) The data is no longer available! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/category');
        }else {
            $this->session->set_flashdata('delete_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/category');
        }
    }
}

?>
