<?php 

class Category extends CI_model{
    
     //function to load the database to access the category table
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    //function to get all the category information 
    public function selectAll(){
    	$categories = $this->db->order_by('cid', 'DESC')->get('categories');
    	return $categories->result_array();
    }

    //function to get all the category information 
    public function selectAllUA(){
        $categories = $this->db->order_by('cid', 'DESC')->get_where('categories', ['cstatus' => '2' ]);
        return $categories->result_array();
    }

    public function getCategory($id){

    	$category = $this->db->get_where('categories', ['cid' => $id]);
        return $category->row_array();
    }

    //function to insert the category information from the admin into the category table
    public function add(){
         $data = array(
            'cname' => $this->input->post('catname'),
            'cdesc' => $this->input->post('catdesc'),
            'crole' => $this->input->post('catrole'),
            'cstatus' => $this->input->post('catstatus')
        );

        $success = $this->db->insert('categories', $data);
        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

    //function to update the category information from the admin of the journal table
    public function edit($id){
         $data = array(
            'cname' => $this->input->post('catname'),
            'cdesc' => $this->input->post('catdesc'),
            'crole' => $this->input->post('catrole'),
            'cstatus' => '2',
        );
        $success = $this->db->where('cid', $id)->update('categories', $data);
        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

   //function to archive the category information
    public function archive($id){
         $data = array(
            'cstatus' => '1',
        );

        $success = $this->db->where('cid', $id)->update('categories', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

   //function to unarchive the category information
    public function unarchive($id){
         $data = array(
            'cstatus' => '2',
        );
    
        $success = $this->db->where('cid', $id)->update('categories', $data);

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

    //function to delete the category information
    public function delete($id){
    	$success = $this->db->where('cid', $id)->delete('categories');

        if($success){
             return 'success';
         }else{
            return 'failed';
        }
    }

}    