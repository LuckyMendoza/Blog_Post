<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller {
	
    public function __construct() {
        parent::__construct();
        $this->call->model('User_model');
        $this->call->library(array('database', 'session', 'form_validation'));
        $this->call->helper(array('url','alert','alert_message'));
    }



//sign in user
public function login(){
  
    $this->call->view('signin');
}


public function signin()
{
    if ($this->form_validation->submitted()) {
        $this->form_validation
            ->name('username')->required()
            ->name('password')->required();



            if ($this->form_validation->run()) {
                $username = $this->io->post('username');
                $password = $this->io->post('password');
            
                // Get data from database
            $row = $this->db->table('users')
              
                    ->where(['username' => $username, 'password' => $password])
                    ->get();

               
            
               if ($row) {
                    // Login successful, set session data
                     $this->session->set_userdata('username', $username);
                     redirect('Blog_post/dashboard');
             
                     $this->session->set_flashdata('status', 'Welcome', $username);
                 } else {
                     // Login failed
                     $this->session->set_flashdata('errors', 'Invalid Username and Password!');
                     redirect('User/login');
                 }
             
        
            }

    }
}

public function logout(){
     
		$this->session->sess_destroy();
		redirect ('Blog_post/Home');
		exit;
        
}




//registering and insert data to database
public function register(){
    $this->call->view('signup');
}


    public function  insert() {
    
        if ($this->form_validation->submitted()) {
            
            $this->form_validation
                ->name('username')->required()
                ->name('email')->required()
                ->valid_email()
                ->name('password')->required()
                ->name('confirm_password')->required()->matches('password');
            
                // ->name('avatar')->required();
            
            if ($this->form_validation->run()) {
                
                $img = $_FILES['avatar']['name'];   
     
                if ($img) {
                    $this->call->library('upload', $_FILES['avatar']);
                    $this->upload
                        ->set_dir('./public/img/')
                        ->allowed_extensions(array('jpg', 'jpeg', 'png'))
                        ->allowed_mimes(array('image/jpg', 'image/jpeg', 'image/png'))
                        ->is_image();

                        if ($this->upload->do_upload()) {
                           
                            $img = $this->upload->get_filename();

    
                  
                } else {
                    $img= null;
                }
    
                if ($this->User_model->signup(
                    $this->io->post('username'),
                    $this->io->post('email'),
                    $this->io->post('password'),
                      $img
                    
                )){
                    

                    $this->session->set_flashdata(array('status', 'User successfully registered'));
                    redirect('User/login');
                
                } else {
                    $this->session->set_flashdata( array('errors', 'Failed to register user.'));
               
                    exit;
                }
                   
            }
            
        }

    }
}
}



        

    
?>
