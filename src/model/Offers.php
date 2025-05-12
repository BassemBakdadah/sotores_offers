<?php
// تعريف بيانات المتاجر مع العروض المرتبة حسب نوع المتجر واسم المتجر والصنف
declare(strict_types=1);
namespace App\Model;
class Offers {
    private $offer_id;
    private $offer_title;
    private $offer_description;
    private $offer_price;
    private $offer_expiry_date;

    public function __construct() {
    
    }
    public function set_offer_id( $offer_id) :Offers{
        $this->offer_id = $offer_id;
        return $this;
    }
    public function get_offer_id() :string{
    
        return $this->offer_id;
    }
    public function set_offer_title( $offer_title) :Offers{
        $this->offer_title = $offer_title;
        return $this;
    }
    public function get_offer_title() :string{
    
        return $this->offer_title;
    }
    public function set_offer_description( $offer_description) :Offers{
        $this->offer_description = $offer_description;
        return $this;
    }
    public function get_offer_description() :string{
    
        return $this->offer_description;
    }
    public function set_offer_price( $offer_price) :Offers{
        $this->offer_price = $offer_price;
        return $this;
    }
    public function get_offer_price() :int{
    
        return $this->offer_price;
    }
    public function set_offer_expiry_date( $offer_expiry_date) :Offers{
        $this->offer_expiry_date = $offer_expiry_date;
        return $this;
    }
    public function get_offer_expiry_date() :string{
    
        return $this->offer_expiry_date;
    }

}