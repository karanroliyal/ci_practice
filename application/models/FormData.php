<?php

class FormData extends CI_Model{

    function insertData($data){
        echo "inserting data";
        echo "<pre>";
        print_r($data);
        $this->db->insert('users',$data);
    }

}

?>