<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Blog_post extends Controller {


    public function __construct() {
        parent::__construct();
        $this->call->model( 'BlogPost_model');
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



    //------------------------------------------------Add User function-------------------//
    public function add_user(){
        $this->call->view('add_user');
    }

    public function addUser(){
      
        if ($this->form_validation->submitted()) {
            
            $this->form_validation
                ->name('username')->required()         
                ->name('password')->required()
                ->name('confirm_password')->required()->matches('password')
                ->name('is_admin')->required();
            
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
    
                if ($this->BlogPost_model->add_user(
                    $this->io->post('username'),
                    $this->io->post('password'),
                    $img,
                    $this->io->post('is_admin'),
                   
                    
                )){
                    

                    $this->session->set_flashdata(array('status', 'Successfully Added'));
                    redirect('Blog_post/dashboard');
                
                } else {
                    $this->session->set_flashdata( array('errors', 'Failed to Add User!.'));
                    redirect('Blog_post/add_user');
                    exit;
                }
                   
            }
            
        }
     
    }
}

//-----------------------------------------------------Manage user functions--------------------
 public function manage_users(){
        $data = $this->BlogPost_model->get_users();
        $this->call->view('manage_user', $data);
    }

  //deleting users
public function delete_user($id){
	if ($this->BlogPost_model->delete_user($id))
	  redirect ('Blog_post/manage_users');
	
  }
  // edit user
public function edit_user($id){

    $data= $this->BlogPost_model->edit_user($id);
    $this->call->view('edit_user',$data);
}


public function update_user()
{
    
    if ($this->form_validation->submitted())
    {
        $this->form_validation
        ->name('username')->required()         
        ->name('is_admin')->required();
 
        if($this->form_validation->run()){
                      
            if( $this->BlogPost_model->update_user(
                $this->io->post('username'),
                $this->io->post('is_admin'))){
         
           $this->session->set_flashdata('status', 'User was Successfully Updated');
           redirect('Blog_post/manage_users');
           exit;
            }
         }
      }
    }
    


     




    //-------------------------------------------------add post function -----------//
    public function add_post(){
        $this->call->view('add_post');

    }
    public function addPost(){

              
    }




}
?>
