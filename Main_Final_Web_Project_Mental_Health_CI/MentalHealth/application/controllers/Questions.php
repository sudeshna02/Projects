<?php

class Questions extends CI_Controller
{

	 //contructor to load the model
     public function __construct()
    {
        parent::__construct();
        $this->load->model('Question');
        $this->load->model('Category');
    }

    public function loadViews($page, $data = []) {
        $this->load->view('questions/'.$page, $data);
    }

    public function qAView(){
        $data = [
            'page_title' => 'Questions',
            'categories' => $this->Category->selectAllUA()
        ];
       $this->loadViews('all', $data);

        // echo "working";
    }

    //function to add the category information from the admin into the category table
    public function add(){

        $successful = $this->Question->add();

        $id = $this->input->post('caid');
        if($successful == 'success'){
            $this->session->set_flashdata('add_successful', 'Added successfully :) A new question will be shown in the website. Keep Posting! <i class="bi bi-emoji-laughing"></i>');
           
            redirect('admin/manage/question/display/' . $id);
        
        }else {
            $this->session->set_flashdata('add_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            
           redirect('admin/manage/question/display/' . $id);
        }
    }

    //function to add the category information from the admin into the category table
    public function edit(){

        $id = $this->input->post('editQuestion');

        $successful = $this->Question->edit($id);

        $id = $this->input->post('caid');
        if($successful == 'success'){
            $this->session->set_flashdata('edit_successful', 'Edited successfully :) A updated question will be shown in the website. Keep Posting! <i class="bi bi-emoji-laughing"></i>');
           
            redirect('admin/manage/question/display/' . $id);
        
        }else {
            $this->session->set_flashdata('edit_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            
           redirect('admin/manage/question/display/' . $id);
        }
    }

    //function to delete the category information
    public function delete(){
        $id = $this->input->post('deleteQuestion');
        $successful = $this->Question->delete($id);

        $id = $this->input->post('caid');
        if($successful == 'success'){
            $this->session->set_flashdata('delete_successful', 'Deleted successfully :) The data is no longer available! <i class="bi bi-emoji-laughing"></i>');
            redirect('admin/manage/question/display/' . $id);
        }else {
            $this->session->set_flashdata('delete_unsuccessful', 'Something went wrong :/ Please try again! <i class="bi bi-emoji-frown"></i>');
            redirect('admin/manage/question/display/' . $id);
        }
    }

    public function manageView($i){
        $data = [
            'page_title' => 'Questions',
            'questions' => $this->Question->selectAllByCategory($i),
            'category' => $this->Category->getCategory($i),
            'categories' => $this->Category->selectAllUA(),
        ];
       $this->loadViews('viewManage', $data);

        // echo "working";
    }

    public function questionView($i){
        $data = [
            'page_title' => 'Questions',
            'questions' => $this->Question->selectAllByCategory($i),
            'category' => $this->Category->getCategory($i),
            'categories' => $this->Category->selectAllUA()
        ];
       $this->loadViews('view', $data);

        // echo "working";
    }

    public function resultView($i){
        
        $data['checks'] = array(
             'ques1' => $this->input->post('qaid1'),
             'ques2' => $this->input->post('qaid2'),
             'ques3' => $this->input->post('qaid3'),
             'ques4' => $this->input->post('qaid4'),
             'ques5' => $this->input->post('qaid5'),
             'ques6' => $this->input->post('qaid6'),
             'ques7' => $this->input->post('qaid7'),
             'ques8' => $this->input->post('qaid8'),
             'ques9' => $this->input->post('qaid9'),
             'ques10' => $this->input->post('qaid10'),
        );

        $data ['results'] = $this->Question->selectAllByCategory($i);
         $data ['categories'] = $this->Category->selectAllUA();
       $this->loadViews('result', $data);

        // echo "working";
    }

}

?>
