<?php 

class Blog extends CI_model{
    
     //function to load the database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    // public function selectAll(){
    //     $blogs = $this->db->order_by('bid', 'DESC')->get('blogs');
    //     return $blogs->result_array();
    // }

    public function selectAll() {

        $this->db->select ( '*' ); 
        $this->db->from ( 'blogs' );
        $this->db->join ( 'categories', 'categories.cid = blogs.cid' , 'left' );
        $this->db->join ( 'staff', 'staff.sid = blogs.sid' , 'left' );
        $this->db->order_by ('blogs.bid', 'DESC');
        $experiences = $this->db->get();
        return $experiences->result_array();
    }

    public function selectAllUA() {

        $this->db->select ( '*' ); 
        $this->db->from ( 'blogs' );
        $this->db->join ( 'categories', 'categories.cid = blogs.cid' , 'left' );
        $this->db->join ( 'staff', 'staff.sid = blogs.sid' , 'left' );
        $this->db->order_by ('blogs.bid', 'DESC');
        $this->db->limit(20);
        $this->db->where ('blogs.bstatus', '2');
        $experiences = $this->db->get();
        return $experiences->result_array();
    }

    public function selectAllUATen() {

        $this->db->select ( '*' ); 
        $this->db->from ( 'blogs' );
        $this->db->join ( 'categories', 'categories.cid = blogs.cid' , 'left' );
        $this->db->join ( 'staff', 'staff.sid = blogs.sid' , 'left' );
        $this->db->order_by ('blogs.bid', 'DESC');
        $this->db->limit(8);
        $this->db->where ('blogs.bstatus', '2');
        $experiences = $this->db->get();
        return $experiences->result_array();
    }

    public function selectAllUAEight() {

        $this->db->select ( '*' ); 
        $this->db->from ( 'blogs' );
        $this->db->join ( 'categories', 'categories.cid = blogs.cid' , 'left' );
        $this->db->join ( 'staff', 'staff.sid = blogs.sid' , 'left' );
        $this->db->order_by ('blogs.bid', 'DESC');
        $this->db->limit(8);
        $this->db->where ('blogs.bstatus', '2');
        $experiences = $this->db->get();
        return $experiences->result_array();
    }

    //function to insert the diary information into the diary table
    public function add(){

        $file = '';   
        $pid = '';
        $desc = $this->input->post('desc');

        $config['upload_path'] = './assets/Blogs/';
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

         $data = array(
            'cid' => $this->input->post('category'),
            'sid' => $this->input->post('staffId'),
            'btitle' => $this->input->post('title'),
            'bcontent' => $this->input->post('content'),
            'bimage' => $file,
            'bstatus' => $this->input->post('status')
        );
        return $this->db->insert('blogs', $data);
    }

        //function to update the category information from the admin of the journal table
    public function edit($id){
         $data = array(
            'btitle' => $this->input->post('title'),
            'bcontent' => $this->input->post('content'),
        );
        return $this->db->where('bid', $id)->update('blogs', $data);

    }



    public function getBlogs($id){

        $blogs = $this->db->join ( 'categories', 'categories.cid = blogs.cid' , 'left' )->order_by('bid', 'DESC')->get_where('blogs', ['sid' => $id]);
        return $blogs->result_array();
    }

    public function getBlogsCategory($id){

        $blogs = $this->db->order_by('bid', 'DESC')->get_where('blogs', ['cid' => $id]);
        return $blogs->result_array();
    }

    public function getBlog($id){

        $blogs = $this->db->join ( 'categories', 'categories.cid = blogs.cid' , 'left' )->order_by('bid', 'DESC')->get_where('blogs', ['bid' => $id]);
        return $blogs->row_array();
    }

    public function getTop($id){

        $blogs = $this->db->limit(10)->order_by('bid', 'DESC')->get_where('blogs', ['sid' => $id]);
        return $blogs->result_array();
    }

    public function delete($id){
       $success =  $this->db->where('bid', $id)->delete('blogs');

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

    //function to update the diary information of the student in the pat table
    public function archive($id){
         $data = array(
            'bstatus' => '1',
        );
        
        $success = $this->db->where('bid', $id)->update('blogs', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

    //function to update the diary information of the student in the pat table
    public function unarchive($id){
         $data = array(
            'bstatus' => '2',
        );
        
        $success = $this->db->where('bid', $id)->update('blogs', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

}    