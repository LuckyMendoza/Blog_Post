<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class BlogPost_model extends Model {


//--------------------------------------User tableee---------------------------

//add user table
    public function add_user(  $username,  $password  , $avatar, $is_admin, ) 
    {
        $created_at = date('Y-m-d H:i:s');
        $data = array(
            
            'username' => $username,
            'password' =>$password,
            'avatar' => $avatar,
            'is_admin'=> $is_admin,
            'created_at' => $created_at
            
        );

        $result= $this->db->table('users')->insert($data);
        if($result){
            return true;
        }else {
             return false;
         }
    } 

    //retrive users table
    public  function get_users(){
        return $this->db->table('users')->get_all();
    }
    

//edit users atble
    
public function edit_user($id){
    return $this->db->table('users')
    ->where('id',$id)
    ->get();
  }


//update user table

public function update_user($id,$username,$is_admin){

    $data = array(
        
            'username'=>$username,
            'is_admin'=>$is_admin
    );
       $this->db->table('users')
       ->where(array('id'=>$id))
       ->update($data);
      
       
     
}


//delete user table

public function delete_user($id){
    $result = $this->db->table('users')   
                    ->where(array('id' => $id))    
                    ->delete();             
                   
       if ($result){
         return true;
    }else {
        return false;
    }
  }

  
//---------------------------------------Category Table--------------------------------

//add category table

public function add_category(  $Title,$description ) 
{
    $created_at = date('Y-m-d H:i:s');
    $data = array(
        
        'Title'=>$Title,
       'description'=>$description,
        'created_at' => $created_at
        
    );

    $result= $this->db->table('category')->insert($data);
    if($result){
        return true;
    }else {
         return false;
     }
} 



    //retrive  category  table
    public  function get_category(){
        return $this->db->table('category')->get_all();
    }
    



    
//edit category table--->
    
public function edit_category($id){
    return $this->db->table('category')
    ->where('id',$id)
    ->get();
  }


  
//update category table

public function update_category($id,$Title,$description){

    $data = array(
        
            'Title'=>$Title,
            'description'=>$description
    );
       $this->db->table('category')
       ->where(array('id'=>$id))
       ->update($data);
      
       
     
}

//delete user table

public function delete_category($id){
    $result = $this->db->table('category')   
                    ->where(array('id' => $id))    
                    ->delete();             
                   
       if ($result){
         return true;
    }else {
        return false;
    }
  }

    
  
}
?>
