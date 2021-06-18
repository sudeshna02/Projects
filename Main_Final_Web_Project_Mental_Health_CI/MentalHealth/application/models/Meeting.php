<?php 

class Meeting extends CI_model{
    
     //function to load the database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    public function selectAll(){
        
        $this->db->select ( '*' ); 
        $this->db->from ( 'meetings' );
        $this->db->join ( 'patients', 'patients.pid = meetings.pid' , 'left' );
        $this->db->join ( 'staff', 'staff.sid = meetings.sid' , 'left' );
        $this->db->order_by ('meetings.mid', 'DESC');
       
        $meetings = $this->db->get();
        return $meetings->result_array();
    }

    public function selectAllUA() {

        $this->db->select ( '*' ); 
        $this->db->from ( 'meetings' );
        $this->db->join ( 'patients', 'patients.pid = meetings.pid' , 'left' );
        $this->db->order_by ('meetings.mid', 'DESC');
        $this->db->where ('meetings.sid', $this->session->userdata('id'));
        $this->db->where ('meetings.mstatus', '2');
        $experiences = $this->db->get();
        return $experiences->result_array();
    }

    public function selectAllUAP() {

        $this->db->select ( '*' ); 
        $this->db->from ( 'meetings' );
        $this->db->join ( 'staff', 'staff.sid = meetings.sid' , 'left' );
        $this->db->order_by ('meetings.mid', 'DESC');
        $this->db->where ('meetings.pid', $this->session->userdata('id'));
        $this->db->where ('meetings.mstatus', '2');
        $experiences = $this->db->get();
        return $experiences->result_array();
    }
    //function to insert the diary information into the diary table
    public function add(){
         $data = array(
            'mtitle' => $this->input->post('meetitle'),
            'mdesc' => $this->input->post('meedesc'),
            'sid' => $this->input->post('meedoc'),
            'pid' => $this->input->post('meepat'),
            'mstatus' => $this->input->post('meestatus'),
            'attend_status' => '1'
        );
        $success = $this->db->insert('meetings', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }        
    }

    public function getMeeting($id){

        $meeting = $this->db->get_where('meetings', ['mid' => $id]);
        return $meeting->row_array();
    }

    public function edit($id){
         $data = array(
            'mtitle' => $this->input->post('meetitle'),
            'mdesc' => $this->input->post('meedesc'),
            'sid' => $this->input->post('meedoc'),
            'pid' => $this->input->post('meepat'),
            'attend_status' => '1'
        );
        $success = $this->db->where('mid', $id)->update('meetings', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }        
    }

    // //function to update the diary information of the student in the pat table
    // public function edit($id){
    //      $data = array(
    //         'atitle' => $this->input->post('anntitle'),
    //         'acontent' => $this->input->post('anncontent'),
    //         'astatus' => $this->input->post('annstatus'),
    //     );
    //     return 
    // }

    //function to update the diary information of the student in the pat table
    public function archive($id){
         $data = array(
            'mstatus' => '1',
        );
        $success = $this->db->where('mid', $id)->update('meetings', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }        
    }

    //function to update the diary information of the student in the pat table
    public function unarchive($id){
         $data = array(
            'mstatus' => '2',
        );
        $success = $this->db->where('mid', $id)->update('meetings', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }        
    }

    //function to update the diary information of the student in the pat table
    public function change($id){
         $data = array(
            'attend_status' => '2',
        );
        $success = $this->db->where('mid', $id)->update('meetings', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }        
    }

    //function to update the diary information of the student in the pat table
    public function unchange($id){
         $data = array(
            'attend_status' => '1',
        );

        $success = $this->db->where('mid', $id)->update('meetings', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }        
    }

    public function delete($id){
       $success = $this->db->where('mid', $id)->delete('meetings');

        if($success){
             return 'success';
         }else{
            return 'failed';
        }

    }

}    