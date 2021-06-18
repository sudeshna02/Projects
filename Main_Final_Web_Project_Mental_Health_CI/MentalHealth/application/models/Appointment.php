<?php 

class Appointment extends CI_model{
    
     //function to load the database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    public function selectAll(){
        
        $this->db->select ( '*' ); 
        $this->db->from ( 'appointments' );
        $this->db->join ( 'meetings', 'meetings.mid = appointments.mid' , 'left' );
        $this->db->order_by ('appointments.aid', 'DESC');
       
        $appointments = $this->db->get();
        return $appointments->result_array();
    }


    public function selectAllUA() {

        $this->db->select ( '*' ); 
        $this->db->from ( 'appointments' );
        $this->db->join ( 'meetings', 'meetings.mid = appointments.mid' , 'left' );
        $this->db->where ('meetings.sid', $this->session->userdata('id'));
        $this->db->where ('appointments.astatus', '2');
        $this->db->order_by ('appointments.aid', 'DESC');
        $appointments = $this->db->get();
        return $appointments->result_array();
    }

    public function selectAllUAP() {

        $this->db->select ( '*' ); 
        $this->db->from ( 'appointments' );
        $this->db->join ( 'meetings', 'meetings.mid = appointments.mid' , 'left' );
        $this->db->where ('meetings.pid', $this->session->userdata('id'));
        $this->db->where ('appointments.astatus', '2');
        $this->db->order_by ('appointments.aid', 'DESC');
        $appointments = $this->db->get();
        return $appointments->result_array();
    }


    // public function selectAll(){
    //     $announcements = $this->db->order_by('aid', 'DESC')->get('appointments');
    //     return $announcements->result_array();
    // }

    //function to insert the announcement information into the announcement table
    public function add(){
         $data = array(
            'atitle' => $this->input->post('apptitle'),
            'adesc' => $this->input->post('appdesc'),
            'mid' => $this->input->post('appmeet'),
            'atime' => $this->input->post('apptime'),
            'adate' => $this->input->post('appdate'),
            'astatus' => $this->input->post('appstatus'),
        );

        $success = $this->db->insert('appointments', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

    //function to update the diary information of the student in the pat table
    public function edit($id){
         $data = array(
            'atitle' => $this->input->post('apptitle'),
            'adesc' => $this->input->post('appdesc'),
            'mid' => $this->input->post('appmeet'),
            'atime' => $this->input->post('apptime'),
            'adate' => $this->input->post('appdate'),
            'astatus' => $this->input->post('appstatus'),
        );
        return $this->db->where('aid', $id)->update('appointments', $data);
    }

    public function getAppointment($id){

        $appointment = $this->db->get_where('appointments', ['aid' => $id]);
        return $appointment->row_array();
    }

    //function to archive the announcement information  
    public function archive($id){
         $data = array(
            'astatus' => '1',
        );
        $success = $this->db->where('aid', $id)->update('appointments', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

    //function to unarchive the announcement information  
    public function unarchive($id){
         $data = array(
            'astatus' => '2',
        );

        $success = $this->db->where('aid', $id)->update('appointments', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

    //function to delete the announcement information from the announcement table
    public function delete($id){
        
        $success = $this->db->where('aid', $id)->delete('appointments');

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

}    