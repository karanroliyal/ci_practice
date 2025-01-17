<?php
defined('BASEPATH') or exit('No direct script access allowed');


class MyForm extends CI_Controller
{

    public function index(){

        $this->load->helper('form'); // form creation helper to create form 
        $this->load->view('form');

    }
    public function success(){

        // form validation library for form validation

        $this->load->library('form_validation');

        if ($this->form_validation->run('registration')) {

            echo "Form submitted successfully <br>";
            $postData = $this->input->post();

            $config['upload_path']='./imageUploads';
            $config['allowed_types']='jpg|png|gif';

            $this->load->library('upload',$config);

            $this->upload->do_upload('image');

            // $this->load->model('formdata');
            // $this->formdata->insertData($postData);

        } else {

            $this->load->view('form');

        }

    }
}
