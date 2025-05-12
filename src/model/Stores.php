<?php

declare(strict_types=1);
namespace App\Model;
class Stores {
    private $store_id;
    private $store_name;

    private $store_type;

    public function __construct() {

    }
    public function store_id( $store_id) :Stores{
        $this->store_id = $store_id;
        return $this;
    }
    public function get_store_id() :int{
    
        return $this->store_id;
    }
    public function set_store_type( $store_type) :Stores{
        $this->store_type = $store_type;
        return $this;
    }
    public function get_store_type() :string{
    
        return $this->store_type;
    }
    public function set_store_name( $store_name) :Stores{
        $this->store_name = $store_name;
        return $this;
    }
    public function get_store_name() :string{
    
        return $this->store_name;
    }

}