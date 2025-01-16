<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DatabaseController extends CI_Controller{

    public function index(){
        $this->load->view('database');
        $this->load->model('databasemodel');
        // echo "<pre>";
        // print_r($this->databasemodel->connect_myproject());

        $data = $this->databasemodel->connect_myproject();

        foreach($data as $val){

            echo "Name : $val->name <br>";

        }

    }

}