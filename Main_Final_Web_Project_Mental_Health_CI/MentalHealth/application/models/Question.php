<?php 

class Question extends CI_model{
    
     //function to load the database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    public function selectAllByCategory($id){
    	$categories = $this->db->get_where('questions', ['cid' => $id]);
    	return $categories->result_array();
    }

    //function to insert the category information from the admin into the category table
    public function add(){
         $data = array(
            'cid' => $this->input->post('caid'),
            'question' => $this->input->post('question'),
            'ans_one' => $this->input->post('ans_one'),
            'ans_two' => 'null',
            'ans_three' => 'null',
            'high_symp' => $this->input->post('high_ans'),
        );

        $success = $this->db->insert('questions', $data);
        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

    //function to insert the category information from the admin into the category table
    public function edit($id){
         $data = array(
            'question' => $this->input->post('question'),
            'ans_one' => $this->input->post('ans_one'),
            'high_symp' => $this->input->post('high_ans'),
        );

        $success = $this->db->where('qid', $id)->update('questions', $data);
        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

    //function to delete the category information
    public function delete($id){
        $success = $this->db->where('qid', $id)->delete('questions');

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

}    





