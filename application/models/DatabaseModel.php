<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DatabaseModel extends CI_Model{

    public function connect_myproject(){

        return $this->db->select('name')->get('client_master')->result();

    }

}