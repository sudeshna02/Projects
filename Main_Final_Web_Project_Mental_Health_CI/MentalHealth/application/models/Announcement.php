<?php 

class Announcement extends CI_model{
    
     //function to load the database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    public function selectAll(){
        $announcements = $this->db->order_by('aid', 'DESC')->get('announcements');
        return $announcements->result_array();
    }

    public function selectAllUA(){

        $announcements = $this->db->limit(10)->order_by('aid', 'DESC')->get_where('announcements', ['astatus' => '2']);
        return $announcements->result_array();
    }

    //function to insert the announcement information into the announcement table
    public function add(){
         $data = array(
            'atitle' => $this->input->post('anntitle'),
            'acontent' => $this->input->post('anncontent'),
            'astatus' => $this->input->post('annstatus'),
        );

        $success = $this->db->insert('announcements', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

    //function to update the diary information of the student in the pat table
    public function edit($id){
         $data = array(
            'atitle' => $this->input->post('anntitle'),
            'acontent' => $this->input->post('anncontent'),
            'astatus' => $this->input->post('annstatus'),
        );
        return $this->db->where('aid', $id)->update('announcements', $data);
    }

    //function to archive the announcement information  
    public function archive($id){
         $data = array(
            'astatus' => '1',
        );
        $success = $this->db->where('aid', $id)->update('announcements', $data);

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

        $success = $this->db->where('aid', $id)->update('announcements', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

    //function to delete the announcement information from the announcement table
    public function delete($id){
        
        $success = $this->db->where('aid', $id)->delete('announcements');

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

}    