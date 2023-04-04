<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model
{

    public function signup(  $username,  $password  , $avatar, $is_admin=0) 
    {
        $created_at = date('Y-m-d H:i:s');
        $data = array(
        
            'username' => $username,
            'password' => $password, 
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


    // public function signin($username , $password){
        
	// 	$data= [
	// 		"username" => $username,
	// 		"password" => $password
	// 	];
	// 	return $this->db->table('users')->where($data)->get();
    // }




}
    
?>