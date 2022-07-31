<?php

    Class fungsi{
        function __construct(){
            $this->ci =& get_instance();
        }

        function user_login(){
            $this->ci->load->model('username');
            $user_id = $this->ci->session->userdata('id');
            $user_data = $this->ci->user_m->get();
            return $user_data;
        }
    }

?>