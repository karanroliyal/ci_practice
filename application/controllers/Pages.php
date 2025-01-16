<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{

    public function view($page = 'home')
    {
        if (! file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = "ucfirst($page)"; // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }

    public function index()
	{
        $this->load->model('homemodel');
        $arr['sum'] = $this->homemodel->sum();
        $arr['sub'] = $this->homemodel->sub();
        $this->load->library('email');
		$this->load->view('home' , $arr);
	}
    
    public function myFun($name = null){

        $arr['values']=$name;

        $arr['names']=["karan" , "rohan" , "mohan" , "sohan"];

        $this->load->view('about', $arr);
    }



}
