<?php 

class Medication extends CI_model{
    
     //function to load the database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    public function selectAllUA() {

        $this->db->select ( '*' ); 
        $this->db->from ( 'medications' );
        $this->db->join ( 'meetings', 'meetings.mid = medications.mid' , 'left' );
        $this->db->order_by ('medications.mdid', 'DESC');
        $this->db->where ('medications.sid', $this->session->userdata('id'));
        $medications = $this->db->get();
        return $medications->result_array();
    }

    public function selectAll() {

        $this->db->select ( '*' ); 
        $this->db->from ( 'medications' );
        $this->db->join ( 'meetings', 'meetings.mid = medications.mid' , 'left' );
        $this->db->join ( 'staff', 'staff.sid = medications.sid' , 'left' );
        $this->db->order_by ('medications.mdid', 'DESC');
        $medications = $this->db->get();
        return $medications->result_array();
    }

    public function selectAllUAP() {

        $this->db->select ( '*' ); 
        $this->db->from ( 'medications' );
        $this->db->join ( 'meetings', 'meetings.mid = medications.mid' , 'left' );
        $this->db->order_by ('medications.mdid', 'DESC');
        $this->db->where ('medications.mdstatus', '2');
        $this->db->where ('meetings.pid', $this->session->userdata('id'));
        $medications = $this->db->get();
        return $medications->result_array();
    }

    //function to insert the diary information into the diary table
    public function add(){
         $data = array(
            'mid' => $this->input->post('meet'),
            'sid' => $this->session->userdata('id'),
            'mname' => $this->input->post('medtitle'),
            'mcontent' => $this->input->post('meddesc'),
            'mdstatus' => $this->input->post('medstatus')
        );
        $success = $this->db->insert('medications', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        } 

    }

    //function to update the category information from the admin of the journal table
    public function edit($id){
         $data = array(
            'mname' => $this->input->post('name'),
            'mcontent' => $this->input->post('desc'),
        );
        $success = $this->db->where('mdid', $id)->update('medications', $data);
        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

   //function to archive the category information
    public function archive($id){
         $data = array(
            'mdstatus' => '1',
        );

        $success = $this->db->where('mdid', $id)->update('medications', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

   //function to unarchive the category information
    public function unarchive($id){
         $data = array(
            'mdstatus' => '2',
        );
    
        $success = $this->db->where('mdid', $id)->update('medications', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

    //function to delete the category information
    public function delete($id){
        $success = $this->db->where('mdid', $id)->delete('medications');

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

}    