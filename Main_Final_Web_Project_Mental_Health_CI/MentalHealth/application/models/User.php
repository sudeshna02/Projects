<?php 

class User extends CI_model{
    
     //function to load the database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    public function add(){

        $user_role = $this->input->post('user_role');

        $phone = $this->input->post('phone');
        $code = $this->input->post('country_code');

        $contact = $code . $phone;
        
        if($user_role == '3'){
             $data = array(
                'pfirstname' => $this->input->post('firstname'),
                'pmiddlename' => $this->input->post('middlename'),
                'psurname' => $this->input->post('lastname'),
                'pusername' => $this->input->post('username'),
                'ppass' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'pcontact' => $contact,
                'pemail' => $this->input->post('email'),
                'pstatus' => '2'
        );

        return $this->db->insert('patients', $data);

        }elseif(($user_role == '2') || $user_role == '4') {

           $user_name = $this->input->post('username');
           $default = $this->input->post('username_default');

           $username = $user_name . $default;

           $pass_word = $this->input->post('password');
           $default = $this->input->post('password_default');

           $pass = $pass_word . $default;

            $data = array(
                'sfirstname' => $this->input->post('firstname'),
                'smiddlename' => $this->input->post('middlename'),
                'ssurname' => $this->input->post('lastname'),
                'susername' => $username,
                'spass' => password_hash($pass, PASSWORD_DEFAULT),
                'scontact' => $this->input->post('phone'),
                'meet_link' => $this->input->post('meet_link'),
                'semail' => $this->input->post('email'),
                'srole' => $user_role,
                'sstatus' => '2'
        );

        return $this->db->insert('staff', $data);

        }else{
            echo"not now";
        }
    }

    public function edit($id){

        $phone = $this->input->post('phone');
        $code = $this->input->post('country_code');

        $contact = $code . $phone;
        

        $user_name = $this->input->post('username');
        $default = $this->input->post('username_default');
        $username = $user_name . $default;

        $data = array(
                'sfirstname' => $this->input->post('firstname'),
                'smiddlename' => $this->input->post('middlename'),
                'ssurname' => $this->input->post('lastname'),
                'susername' => $username,
                'scontact' => $this->input->post('phone'),
                'meet_link' => $this->input->post('meet_link'),
                'semail' => $this->input->post('email'),
        );

        return $this->db->where('sid', $id)->update('staff', $data);

    }

    public function editP($id){

        $phone = $this->input->post('phone');
        $code = $this->input->post('country_code');

        $contact = $code . $phone;
        

        $user_name = $this->input->post('username');
        $default = $this->input->post('username_default');
        $username = $user_name . $default;

        $data = array(
                'pfirstname' => $this->input->post('firstname'),
                'pmiddlename' => $this->input->post('middlename'),
                'psurname' => $this->input->post('lastname'),
                'pusername' => $username,
                'pcontact' => $this->input->post('phone'),
                'pemail' => $this->input->post('email')
        );

        return $this->db->where('pid', $id)->update('patients', $data);

    }

    //function to insert the diary information into the diary table
    public function addPicture(){  

        $config['upload_path'] = './assets/Profiles/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = '4096';

        $this->load->library('upload', $config);


        if(!$this->upload->do_upload('file')){
            echo 'file not uploaded'; //Change this line to something else
        }
        else{
            $uploadData = $this->upload->data();
            $file = $uploadData['file_name'];
        }

        // echo $file;

        if($this->session->userdata('role') == '2' || $this->session->userdata('role') == '4' || $this->session->userdata('role') == '1' ){

        $data = array(
            'simage' => $file
        );
        return $this->db->where('sid', $this->session->userdata('id'))->update('staff', $data);
        }else {

            $data = array(
            'pimage' => $file
        );
            return $this->db->where('pid', $this->session->userdata('id'))->update('patients', $data);
        }


    }

    public function staffLogin(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('staff', ['susername' => $username]);

        if ($user->num_rows() == 1) {
            if(password_verify($password, $user->row(0)->spass)){
                return $user->row_array(0);
            }else{
                return false;
            }
        }
        else {
            return false;
        }

    }

    public function patientLogin(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('patients', ['pusername' => $username]);

        if ($user->num_rows() == 1) {
            if(password_verify($password, $user->row(0)->ppass)){
                return $user->row_array(0);
            }else{
                return false;
            }
        }
        else {
            return false;
        }
    }

    public function doctor(){
        $requests = $this->db->order_by('sid', 'DESC')->get_where('staff', ['srole' => '2']);
        return $requests->result_array();
        
    }

    public function patient(){
        $requests = $this->db->order_by('pid', 'DESC')->get('patients');
        return $requests->result_array();
        
    }  
    
    public function blogger(){
        $requests = $this->db->order_by('sid', 'DESC')->get_where('staff', ['srole' => '4']);
        return $requests->result_array();
        
    } 

    public function deleteStaff($id){
        $this->db->where('sid', $id)->delete('staff');
    }

    //function to update the diary information of the student in the pat table
    public function archiveStaff($id){
         $data = array(
            'sstatus' => '1',
        );
        return $this->db->where('sid', $id)->update('staff', $data);
    }

    //function to update the diary information of the student in the pat table
    public function unarchiveStaff($id){
         $data = array(
            'sstatus' => '2',
        );
        return $this->db->where('sid', $id)->update('staff', $data);
    }

    public function deletePatient($id){
        $this->db->where('pid', $id)->delete('patients');
    }

    //function to update the diary information of the student in the pat table
    public function archivePatient($id){
         $data = array(
            'pstatus' => '1',
        );
        return $this->db->where('pid', $id)->update('patients', $data);
    }

    //function to update the diary information of the student in the pat table
    public function unarchivePatient($id){
         $data = array(
            'pstatus' => '2',
        );
        return $this->db->where('pid', $id)->update('patients', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('middlename');
        $this->session->unset_userdata('surname');
        $this->session->unset_userdata('usern');
        $this->session->unset_userdata('passw');
        $this->session->unset_userdata('contact');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('status');
        
    }

}    

