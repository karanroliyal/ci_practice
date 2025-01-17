<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DemoHelper extends CI_Controller{

    public function index(){

        echo "<h2>Testing function</h2>";

        $array = ['name'=>'karan','age'=>'22'];

        $this->load->helper('test');

        testing($array);

    }

}