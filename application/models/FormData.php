<?php

class FormData extends CI_Model{

    function insertData($data){
        $this->db->insert('users',$data);
    }

}

?>