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
                    redirect('Blog_post/manage_users');
                
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



public function delete_user($id) {
    if($this->BlogPost_model->delete_user($id)) 
    {
        $this->session->set_flashdata('status', 'Successfully deleted.');
        redirect('Blog_post/manage_users');
       
        exit;
    }
}

  // edit user
public function edit_user($id){

    $data= $this->BlogPost_model->edit_user($id);
    $this->call->view('edit_user',$data);
}

//update user
public function update_user()
{
    
    if ($this->form_validation->submitted())
    {
        $this->form_validation
        ->name('username')->required()         
        ->name('is_admin')->required();
 
        if($this->form_validation->run()){
                      
             $this->BlogPost_model->update_user(
             $this->io->post('id'),
             $this->io->post('username'),
             $this->io->post('is_admin'));{
         
           $this->session->set_flashdata('status', 'User was Successfully Updated');
           redirect('Blog_post/manage_users');
           
			
        
            }
         }
      }
    }
    
//----------------------------------Add Category Function----------------------------//
//add categoryy
  public function add_category(){
      $this->call->view('add_category');
  }

  public function addCategory(){
    // $data = $this->BlogPost_model->get_category();
    if ($this->form_validation->submitted()) {
            
        $this->form_validation
            ->name('Title')->required()         
            ->name('description')->required();

            if ($this->form_validation->run()) {
                if($this->BlogPost_model->add_category(
                    $this->io->post('Title'),
                    $this->io->post('description')
                )){
                    
                    $this->session->set_flashdata(array('status', 'Category Added'));
                    redirect('Blog_post/manage_category');
                }else{
                    $this->session->set_flashdata(array('status', 'Failed to Add Category'));
                    redirect('Blog_post/add_category');
                }
            }

                
  }
}

public function manage_category(){
    $data= $this->BlogPost_model->get_category();
        $this->call->view('dashboard', $data);
}


  // edit category---->
  public function edit_category($id){
    $data= $this->BlogPost_model->edit_category($id);
    $this->call->view('edit_category',$data);
}


//update category
public function update_category()
{
    
    if ($this->form_validation->submitted())
    {
        $this->form_validation
        ->name('Title')->required()         
        ->name('description')->required();
 
        if($this->form_validation->run()){
                      
             $this->BlogPost_model->update_category(
             $this->io->post('id'),
             $this->io->post('Title'),
             $this->io->post('description'));{
         
           $this->session->set_flashdata('status', 'Category was Successfully Updated');
           redirect('Blog_post/manage_category');
           
			
        
            }
         }
      }
    }
    

public function delete_category($id) {
    if($this->BlogPost_model->delete_category($id)) 
    {
        $this->session->set_flashdata('status', 'Successfully deleted.');
        redirect('Blog_post/manage_category');
       
        exit;
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
