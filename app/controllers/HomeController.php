<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class HomeController extends Controller {

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
    //    }



}
?>
