<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DatabaseModel extends CI_Model{

    public function connect_myproject(){

        $this->db->select("name");
        return  $this->db->get('client_master', 3 , 5)->result();
        

    }

}