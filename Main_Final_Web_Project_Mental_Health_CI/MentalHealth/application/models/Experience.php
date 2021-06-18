<?php 

class Experience extends CI_model{
    
     //function to load the database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    public function selectAll(){
        
        $this->db->select ( '*' ); 
        $this->db->from ( 'experiences' );
        $this->db->join ( 'patients', 'patients.pid = experiences.pid' , 'left' );
        $this->db->join ( 'staff', 'staff.sid = experiences.sid' , 'left' );
        $this->db->order_by ('experiences.eid', 'DESC');
       
        $experiences = $this->db->get();
        return $experiences->result_array();
    }

    public function selectAllUA() {

        $this->db->select ( '*' ); 
        $this->db->from ( 'experiences' );
        $this->db->join ( 'patients', 'patients.pid = experiences.pid' , 'left' );
        $this->db->join ( 'staff', 'staff.sid = experiences.sid' , 'left' );
        $this->db->order_by ('experiences.eid', 'DESC');
        $this->db->limit(10);
        $this->db->where ('experiences.estatus', '2');
        $experiences = $this->db->get();
        return $experiences->result_array();
    }

    public function selectAllUAFour() {

        $this->db->select ( '*' ); 
        $this->db->from ( 'experiences' );
        $this->db->join ( 'patients', 'patients.pid = experiences.pid' , 'left' );
        $this->db->join ( 'staff', 'staff.sid = experiences.sid' , 'left' );
        $this->db->order_by ('experiences.eid', 'DESC');
        $this->db->limit(4);
        $this->db->where ('experiences.estatus', '2');
        $experiences = $this->db->get();
        return $experiences->result_array();
    }

    //function to insert the diary information into the diary table
    public function add(){
        $pid = '';
        $sid = '';

        if ($this->session->userdata('role') == '2' || $this->session->userdata('role') == '4'){
            $sid = $this->session->userdata('id');
        }else {
            $pid = $this->session->userdata('id');
        }

         $data = array(
            'pid' => $pid,
            'sid' => $sid,
            'etitle' => $this->input->post('title'),
            'edesc' => $this->input->post('desc'),
            'estatus' => $this->input->post('status')
        );
        return $this->db->insert('experiences', $data);
    }

    public function getExperiences($id){

        $experiences = $this->db->order_by('eid', 'DESC')->get_where('experiences', ['sid' => $id]);
        return $experiences->result_array();
    }

    public function getExperiencesP($id){

        $experiences = $this->db->order_by('eid', 'DESC')->get_where('experiences', ['pid' => $id]);
        return $experiences->result_array();
    }

        //function to update the diary information of the student in the pat table
    public function edit($id){
         $data = array(
            'sid' => $this->session->userdata('id'),
            'etitle' => $this->input->post('title'),
            'edesc' => $this->input->post('desc'),
            'estatus' => $this->input->post('status'),
        );
        return $this->db->where('eid', $id)->update('experiences', $data);
    }

    public function delete($id){
        $this->db->where('eid', $id)->delete('experiences');
    }

        //function to update the diary information of the student in the pat table
    public function archive($id){
         $data = array(
            'estatus' => '1',
        );
        return $this->db->where('eid', $id)->update('experiences', $data);
    }

    //function to update the diary information of the student in the pat table
    public function unarchive($id){
         $data = array(
            'estatus' => '2',
        );
        return $this->db->where('eid', $id)->update('experiences', $data);
    }
}    


