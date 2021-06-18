<?php

class Blogs extends CI_Controller
{

	 //contructor to load the model
     public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog');
        $this->load->model('Category');
    }

    public function loadViews($page, $data = []) {
        $this->load->view('blogs/'.$page, $data);
    }

    public function blogView(){
        $data = [
            'page_title' => 'Blogs',
            'blogs' => $this->Blog->selectAll()
        ];
       $this->loadViews('all', $data);

        // echo "working";
    }

    public function blog($id){

        $data = [
            'page_title' => 'Blogs',
            'blog' => $this->Blog->getBlog($id),
            'categories' => $this->Category->selectAllUA()
        ];
       $this->loadViews('blogView', $data);

        // echo "working";
    }

    public function blogCategory($id){
        $data = [
            'page_title' => 'Questions',
            'blogs' => $this->Blog->getBlogsCategory($id),
            'category' => $this->Category->getCategory($id),
            'categories' => $this->Category->selectAllUA()
        ];
       $this->loadViews('view', $data);

        // echo "working";
    }

    public function add(){

    	$successful = $this->Blog->add();

        if($successful){
            $this->session->set_flashdata('add_successful', 'Blog added successfully :) <br> You can view your added blog in the website now! Keep sharing your ideas. Thank you! ');

            if($this->session->userdata('role') == '4'){
                $id = $this->session->userdata('id');
                redirect("blogger/manage/blogs/" . $id);
            }elseif($this->session->userdata('role') == '2'){
                $id = $this->session->userdata('id');
                redirect("doctor/manage/blogs/" . $id);
            }else{
                echo "404 error- page not found!";
            }
        }else {
            $this->session->set_flashdata('add_unsuccessful', 'Something went wrong :/ Please try again!');
            redirect('blogger/dashboard');
        }
    }

    public function edit(){

        $id = $this->input->post('editBlog');
        $successful = $this->Blog->edit($id);

        if($successful){
            $this->session->set_flashdata('edit_successful', 'Blog edited successfully :) <br> You can view your updated blog in the website now! Keep sharing your ideas. Thank you! ');

            if($this->session->userdata('role') == '4'){
                $id = $this->session->userdata('id');
                redirect("blogger/manage/blogs/" . $id);
            }elseif($this->session->userdata('role') == '2'){
                $id = $this->session->userdata('id');
                redirect("doctor/manage/blogs/" . $id);
            }else{
                echo "404 error- page not found!";
            }
        }else {
            $this->session->set_flashdata('edit_unsuccessful', 'Something went wrong :/ Please try again!');
            redirect('blogger/dashboard');
        }
    }

    public function recentBlogs($id){
        $data = [
            'page_title' => 'All Recent Blogs',
            'blogs' => $this->Blog->getTop($id)
        ];
       $this->loadViews('recent', $data);
    }

    public function blogsPosted($id){
        $data = [
            'page_title' => 'All Posted Blogs',
            'blogs' => $this->Blog->getBlogs($id)
        ]; 
       $this->loadViews('posted', $data);
    }

    public function archive(){
        $id = $this->input->post('archiveBlog');
        echo $id;
        $successful = $this->Blog->archive($id);

        if($successful == 'success'){
            $this->session->set_flashdata('archive_successful', 'Archived successfully :) The data will be unavailable to other users now! <i class="bi bi-emoji-laughing"></i>');

            if($this->session->userdata('role') == '4'){
             $uid = $this->session->userdata('id');
                redirect("blogger/manage/blogs/" . $uid);
            }elseif($this->session->userdata('role') == '2'){
                $id = $this->session->userdata('id');
                redirect("doctor/manage/blogs/" . $id);
            }else{
                redirect('admin/manage/blog');
            }

        }else {
            $this->session->set_flashdata('archive_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            
            if($this->session->userdata('role') == '4'){
             $uid = $this->session->userdata('id');
                redirect("blogger/manage/blogs/" . $uid);
            }elseif($this->session->userdata('role') == '2'){
                $id = $this->session->userdata('id');
                redirect("doctor/manage/blogs/" . $id);
            }else{
                redirect('admin/manage/blog');
            }

        }
    }

    public function unarchive(){

        $id = $this->input->post('unarchiveBlog');
        // echo $id;
        $successful = $this->Blog->unarchive($id);
        
        if($successful == 'success'){
            $this->session->set_flashdata('unarchive_successful', 'Unarchived successfully :) The data will be available to other users now! <i class="bi bi-emoji-laughing"></i>');
            
            if($this->session->userdata('role') == '4'){
             $uid = $this->session->userdata('id');
                redirect("blogger/manage/blogs/" . $uid);
            }elseif($this->session->userdata('role') == '2'){
                $id = $this->session->userdata('id');
                redirect("doctor/manage/blogs/" . $id);
            }else{
                redirect('admin/manage/blog');
            }

        }else {
            $this->session->set_flashdata('unarchive_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/blog');

            if($this->session->userdata('role') == '4'){
             $uid = $this->session->userdata('id');
                redirect("blogger/manage/blogs/" . $uid);
            }elseif($this->session->userdata('role') == '2'){
                $id = $this->session->userdata('id');
                redirect("doctor/manage/blogs/" . $id);
            }else{
                redirect('admin/manage/blog');
            }
        }
    }

    public function delete(){

        $id = $this->input->post('deleteBlog');
        // echo $id;

        $successful = $this->Blog->delete($id);

        if($successful == 'success'){
            $this->session->set_flashdata('delete_successful', 'Deleted successfully :) The data is no longer available! <i class="bi bi-emoji-laughing"></i>');
            
            if($this->session->userdata('role') == '4'){
             $uid = $this->session->userdata('id');
                redirect("blogger/manage/blogs/" . $uid);
            }elseif($this->session->userdata('role') == '2'){
                $id = $this->session->userdata('id');
                redirect("doctor/manage/blogs/" . $id);
            }else{
                redirect('admin/manage/blog');
            }

        }else {
            $this->session->set_flashdata('delete_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            
            if($this->session->userdata('role') == '4'){
             $uid = $this->session->userdata('id');
                redirect("blogger/manage/blogs/" . $uid);
            }elseif($this->session->userdata('role') == '2'){
                $id = $this->session->userdata('id');
                redirect("doctor/manage/blogs/" . $id);
            }else{
                redirect('admin/manage/blog');
            }
        }       

    }

}

?>
