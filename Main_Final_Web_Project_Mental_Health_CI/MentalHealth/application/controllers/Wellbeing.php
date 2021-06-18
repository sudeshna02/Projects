<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wellbeing extends CI_Controller {

	 //contructor to load the model
     public function __construct()
    {
        parent::__construct();
        $this->load->model('Category');
        $this->load->model('Experience');
        $this->load->model('Blog');
    }

    //function to load the page
    public function loadViews($page, $data = []) {
        $this->load->view('sites/'.$page, $data);
    }

	public function index()
	{
		$data = [
            'page_title' => 'Wellbeing - Home Page',
            'blogs' => $this->Blog->selectAllUAEight(),
            'experiences' => $this->Experience->selectAllUAFour()
        ];
		$this->load->view('wellbeing', $data);
	}

	public function about()
	{
        $data = [
            'page_title' => 'Wellbeing - About',
            'categories' => $this->Category->selectAllUA()
        ];
         $this->loadViews('about', $data);
	}

	public function testyourself()
	{
        $data = [
            'page_title' => 'Wellbeing - Test Yourself',
            'categories' => $this->Category->selectAllUA()
        ];
         $this->loadViews('testyourself', $data);
	}

	public function blogs()
	{
        $data = [
            'page_title' => 'Wellbeing - Blogs',
            'categories' => $this->Category->selectAllUA(),
            'blogs' => $this->Blog->selectAllUA()
        ];
         $this->loadViews('blogs', $data);
	}

	public function experiences()
	{
        $data = [
            'page_title' => 'Wellbeing - Experiences',
            'experiences' => $this->Experience->selectAllUA()
        ];
         $this->loadViews('experiences', $data);
	}

	public function apply()
	{
		$data = [
            'page_title' => 'Wellbeing - Apply',
            'experiences' => $this->Experience->selectAllUA()
        ];
         $this->loadViews('apply', $data);
	}

	public function request()
	{
		$data = [
            'page_title' => 'Wellbeing - Request',
            'experiences' => $this->Experience->selectAllUA()
        ];
         $this->loadViews('request', $data);
	}

	public function contact()
	{
		$data = [
            'page_title' => 'Wellbeing - Contact',
            'experiences' => $this->Experience->selectAllUA()
        ];
         $this->loadViews('contact', $data);
	}

	public function login()
	{
		$data = [
            'page_title' => 'Wellbeing - Login',
            'experiences' => $this->Experience->selectAllUA()
        ];
         $this->loadViews('login', $data);
	}

}
