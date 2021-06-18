<?php 

class Request extends CI_model{
    
     //function to load the database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    public function add(){

        $file = '';   
        $pid = '';
        $desc = $this->input->post('desc');


        // id
        if ($this->session->userdata('id') && $this->session->userdata('role') == '2' || $this->session->userdata('role') == '4'){
            $sid = $this->session->userdata('id');
        }elseif($this->session->userdata('role') == '3'){
            $pid =  $this->session->userdata('id');
        }else {
            $sid = ' ';
            $pid = ' ';
        }

        // role
        if ($this->session->userdata('role') == '2'){
            $role = '2';
        }elseif($this->session->userdata('role') == '4'){
            $role = '4';
        }elseif($this->session->userdata('role') == '3'){
            $role = '3';
        }else {
            $role = $this->input->post('crole');
        }

        if ($this->session->userdata('name')){
            $firstname = $this->session->userdata('name');
        }else {
            $firstname = $this->input->post('firstname');
        }

        if ($this->session->userdata('middlename')){
            $middlename = $this->session->userdata('middlename');
        }else {
            $middlename = $this->input->post('middlename');
        }

        if ($this->session->userdata('surname')){
            $surname = $this->session->userdata('surname');
        }else {
            $surname = $this->input->post('lastname');
        }

        if ($this->session->userdata('contact')){
            $contact = $this->session->userdata('contact');
        }else {
            $phone = $this->input->post('phone');
            $code = $this->input->post('country_code');
            $contact = $code . $phone;
        }

        if ($this->session->userdata('email')){
            $email = $this->session->userdata('email');
        }else {
            $email = $this->input->post('email');
        }


        // id
        if ($this->session->userdata('id') && $this->session->userdata('role') == '2' || $this->session->userdata('role') == '4'){
            $file = ' ';
        }elseif($this->session->userdata('role') == '3'){
            $file = ' ';
        }else {
            
            $config['upload_path'] = './assets/CVs/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '4096';

            $this->load->library('upload', $config);


            if(!$this->upload->do_upload('file')){
                echo 'file not uploaded'; //Change this line to something else
            }
            else{
                $uploadData = $this->upload->data();
                $file = $uploadData['file_name'];
            }
        }

        $data = array(

            'sid' => $sid,
            'pid' => $pid,
            'crole' => $role,
            'rfirstname' => $firstname,
            'rmiddlename' => $middlename,
            'rsurname' => $surname,
            'rcontact' => $contact,
            'remail' => $email,
            'rquali' => $file,
            'rdesc' => $desc,
            'approval' => '1',
            'status' => '2',
        );

        return $this->db->insert('requests', $data);
    }      

    public function doctor(){
        $requests = $this->db->get_where('requests', ['crole' => '2']);
        return $requests->result_array();
        
    }

    public function patient(){
        $requests = $this->db->get_where('requests', ['crole' => '3']);
        return $requests->result_array();
        
    }  
    
    public function blogger(){
        $requests = $this->db->get_where('requests', ['crole' => '4']);
        return $requests->result_array();
        
    }      

    public function nonLogin(){
        $requests = $this->db->order_by('rid', 'DESC')->get_where('requests', ['crole' => '5']);
        return $requests->result_array();
        
    }

    public function application(){
        $requests = $this->db->order_by('rid', 'DESC')->get_where('requests', ['crole' => '6']);
        return $requests->result_array();
        
    }
    
    public function getRequests($id){

        $requests = $this->db->order_by('rid', 'DESC')->get_where('requests', ['sid' => $id]);
        return $requests->result_array();
    }

    public function getRequestsP($id){

        $requests = $this->db->order_by('rid', 'DESC')->get_where('requests', ['pid' => $id]);
        return $requests->result_array();
    }

   //function to unarchive the category information
    public function approve($id){
         $data = array(
            'approval' => '2',
        );
    
        $success = $this->db->where('rid', $id)->update('requests', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

    //function to delete the category information
    public function delete($id){
        $success = $this->db->where('rid', $id)->delete('requests');

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }
}    



            














              