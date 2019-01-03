<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminuser extends CI_Controller {
    public function __construct(){
                parent::__construct();
                // Loading my model which will use
                $this->load->model('user_model', 'user');  
                // imedate database link
                $this->load->database();    
                
                //Load session library 
             $this->load->library('session');
             $this->load->library('user_agent');
             $this->load->library('encryption');
             $this->load->library('form_validation');


        }
        public function user_admin(){
            $scripts='';
            $data=array('title' =>"Admin Dashboard",'script_js'=>$scripts,'menu_status'=>'','sub_menu'=>'','sub_menu_1'=>'','sub_menu_2'=>'','sub_menu_3'=>'','sub_menu_1'=>'','sub_menu_2'=>'','sub_menu_3'=>'');
            $this->load->view('template/template_header',$data);
            $this->load->view('admin/template/template_top_head');
            $this->load->view('admin/template/template_side_bar',$data);
            $this->load->view('admin/user_dashboard');
            $this->load->view('template/template_footer',$data);
        }
        public function user_admin_home(){
             $scripts='';
            $data=array('title' =>"Admin Dashboard",'script_js'=>$scripts,'menu_status'=>'','sub_menu'=>'','sub_menu_1'=>'','sub_menu_2'=>'','sub_menu_3'=>'','sub_menu_1'=>'','sub_menu_2'=>'','sub_menu_3'=>'');
            
            $this->load->view('template/template_header',$data);
            $this->load->view('admin/template/template_top_head');
            $this->load->view('admin/template/template_side_bar',$data);
            $this->load->view('admin/user_dashboard');
            $this->load->view('template/template_footer',$data);
        }