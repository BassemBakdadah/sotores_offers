<?php

declare(strict_types=1);
namespace App\Models;
class Users {
    private  $user_id;
    private  $user_name;
    
    public function __construct() {
    }
    public function getUsers(){
        return [
            ['Name'=>'Nagd Ali Abdu','Age'=>38,'Details'=>'Solutions Archtect'],
            ['Name'=>'Salem','Age'=>45,'Details'=>'Full stack'],
            ['Name'=>'Omer','Age'=>30,'Details'=>'Flutter dev']
        ];
    }
    public function set_user_id( $user_id) :Users{
        $this->user_id = $user_id;
        return $this;
    }
    public function get_user_id() :int{
    
        return $this->user_id;
    }
    public function set_user_name( $user_name) :Users{
        $this->user_name = $user_name;
        return $this;
    }
    public function get_user_name() :string{
    
        return $this->user_name;
    }

}