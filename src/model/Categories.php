<?php

declare(strict_types=1);
namespace App\Model;
class Categories {
    private  $category_id;
    private  $category_name;
    
    public function __construct() {
    }
    public function set_category_id( $category_id) :Categories{
        $this->category_id = $category_id;
        return $this;
    }
    public function get_category_id() :string{
    
        return $this->category_id;
    }
    public function set_category_name( $category_name) :Categories{
        $this->category_name = $category_name;
        return $this;
    }
    public function get_category_name() :string{
    
        return $this->category_name;
    }

}