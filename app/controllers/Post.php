<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Post extends Controller {


    
    public function __construct() {
        parent::__construct();
        $this->call->model(array( 'BlogPost_model', 'User_model'));
        $this->call->library(array('database', 'session', 'form_validation'));
        $this->call->helper(array('url','alert','alert_message'));
    }
	


    

    //-------------------------------------------------add post function -----------//
    public function add_post(){
        $this->call->database();
        $categories = $this->db->table('category')->get_all();
        $this->call->view('add_post', [
            'categories' => $categories
        ]);

    }
    public function addPost(){
        if ($this->form_validation->submitted()) {
            
            $this->form_validation
                ->name('title')->required()         
                ->name('n_category')->required()
                ->name('body')->required();
               
            
                // ->name('avatar')->required();
            
            if ($this->form_validation->run()) {
                
                $img = $_FILES['thumbnail']['name'];   
     
                if ($img) {
                    $this->call->library('upload', $_FILES['thumbnail']);
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
    
                if ($this->BlogPost_model->add_post(
                    $this->io->post('title'),
                    $this->io->post('n_category'),
                    $this->io->post('body'),
                    $img,
              
                   
                    
                )){
                    

                    $this->session->set_flashdata(array('status', 'Post Added'));
                    redirect('Post/manage_post');
                
                } else {
                    $this->session->set_flashdata( array('errors', 'Failed to Add Post!.'));
                    redirect('Post/add_post');
                    exit;
                }
                   
            }
            
        }
     
    }
}


public function manage_post(){
    $this->call->view('manage_post');
}
        

//---------------------------------------------------show post in Homepage--------------------

public function showPost(){
    $data['post']= $this->BlogPost_model->show_post();
        //    $this->call->view('home', $data);
        var_dump($data['post']);
}
    







              
    

}

?>
