<?php 

class Journal extends CI_model{
    
     //function to load the database to access the journal table
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    //function to get all the journal information of the logged in patient from the journal table
    public function getJournals($id){

    	$journal = $this->db->order_by('jid', 'DESC')->get_where('journals', ['pid' => $id]);
        return $journal->result_array();
    }

    //function to insert the journal information from the patient into the journal table
    public function add(){
         $data = array(
            'pid' => $this->session->userdata('id'),
            'jtopic' => $this->input->post('jotopic'),
            'jdesc' => $this->input->post('jodesc')
        );

        $success = $this->db->insert('journals', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

    //function to update the journal information of the patient of the journal table
    public function edit($id){
         $data = array(
            'pid' => $this->session->userdata('id'),
            'jtopic' => $this->input->post('jourTopic'),
            'jdesc' => $this->input->post('jourDesc')
        );

        $success =  $this->db->where('jid', $id)->update('journals', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

    //function to delete the journal information of the patient from the journal table
    public function delete($id){
        
    	$success = $this->db->where('jid', $id)->delete('journals');

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

}    