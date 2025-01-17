<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DemoLibrary extends CI_Controller{

    public function index(){

        echo "<h2>Custom Library</h2>";

        $this->load->library('custom');

        $this->custom->show();

    }

}


?>