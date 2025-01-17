<?php

$config = [

    'registration' => [

        [
            'field' => 'name',
            'label' => 'User name',
            'rules' => 'required',
            'errors' => [
                'required' => '%s is nessecary',
            ]
        ],
        [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|valid_emails',
        ],
        [
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|trim|min_length[8]|max_length[18]',
        ],

    ]

];

$config['error_prefix'] = "<span><small style='color:red'>";
$config['error_suffix'] = "</small></span>";
