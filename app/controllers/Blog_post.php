<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Blog_post extends Controller {


    public function __construct() {
        parent::__construct();
        $this->call->model('User_model');
        $this->call->library(array('database', 'session', 'form_validation'));
        $this->call->helper(array('url','alert','alert_message'));
    }


    public function Home(){
     $this->call->view('home');
       
    }

    public function about(){
        $this->call->view('about');

    }
    public function services(){
        $this->call->view('services');

    }

    public function contact(){
        $this->call->view('contact');

    }
    
    public function signin(){
        $this->call->view('signin');

    }
    public function dashboard(){
        $this->call->view('dashboard');
    }

    //----------add post function ------------------//
    public function add_post(){
        $this->call->view('add_post');

    }
    public function addPost(){
            
    }



}
?>
