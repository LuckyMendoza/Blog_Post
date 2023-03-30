<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class BlogPost_model extends Model {


//table for users
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
    //retrive users
    public  function get_users(){
        return $this->db->table('users')->get_all();
    }

	
}
?>
