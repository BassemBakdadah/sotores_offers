<?php

declare(strict_types=1);
namespace App\Model;
class Users {
    private  $user_id;
    private  $user_name;
    
    public function __construct() {
    }
    public function set_user_id( $user_id) :Users{
        $this->user_id = $user_id;
        return $this;
    }
    public function get_user_id() :string{
    
        return $this->user_id;
    }
    public function set_user_name( $category_name) :Users{
        $this->user_name = $user_name;
        return $this;
    }
    public function get_user_name() :string{
    
        return $this->user_name;
    }

}