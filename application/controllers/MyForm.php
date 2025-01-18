<?php
defined('BASEPATH') or exit('No direct script access allowed');



class MyForm extends CI_Controller
{

    public function index()
    {

        $this->load->helper('form'); // form creation helper to create form 
        $this->load->view('form');
    }
    public function success()
    {

        // form validation library for form validation

        $this->load->library('form_validation');


        $fileds = [
            [
                'field' => 'name',
                'rules' => 'required|trim|alpha_numeric',
            ],
            [
                'field' => 'email',
                'rules' => 'required|trim|valid_emails',
            ],
            [
                'field' => 'password',
                'rules' => 'required|trim|min_length[8]|max_length[18]',
            ],
        ];

        $this->form_validation->set_rules($fileds);

        $keys=[];
        $values=[];

        // validation for image
        if (empty($_FILES['image']['name'])) {
            $this->load->helper('form');
            $this->form_validation->set_rules("image", "Image", 'required');
            array_push($keys , 'image');
            array_push($values , form_error('image'));
        }


        if ($this->form_validation->run()) {

            // image uplaoding proccess
            $config['upload_path'] = './imageUploads';
            $config['allowed_types'] = 'jpg|png|gif';
            $this->load->library('upload', $config);
            $this->upload->do_upload('image');
            // showing error on uploading image
            if (!$this->upload->do_upload('image')) {
                $error = $this->upload->display_errors();
                echo json_encode(['imageError' => $error, 'fields'=>'image']);
            } else {
                // echo "Form submitted successfully <br>";
                    echo 1;
                // getting form data execpt image data 
                $postData = $this->input->post();
                $imageData = $this->upload->data(); // getting image all data 
                $postData['image'] = $imageData['file_name']; // getting file name 
                // print_r($postData);

                $this->load->model('formdata');
                $this->formdata->insertData($postData);
            }
        } else {
            $this->load->helper('form');
            
            for($i=0 ; $i<count($fileds) ; $i++){
                if(!empty(form_error($fileds[$i]['field']))){
                    array_push($keys , $fileds[$i]['field']);
                    array_push($values  , form_error($fileds[$i]['field']) );
                }
            }

            echo json_encode(['errorKeys'=>$keys , 'errorValues'=>$values , 'fields'=>'fields']);
        }
    }
}
