<?php
declare(strict_types=1);
require "vendor/autoload.php";

//echo phpinfo();

// مشروع بسيط لإدارة المتاجر والعروض
// index.php
//require_once __DIR__ . '/vendor/autoload.php'; // استخدام Composer autoload
use App\Controllers\UserController;
use App\Model\Offers;
use App\Model\Stores;
use App\Model\Categories;
use App\Models\Users;


/*$store= new Stores();

$store->set_store_name("jj");
echo $store->get_store_name();*/
$user = new UserController();
$user->index();

