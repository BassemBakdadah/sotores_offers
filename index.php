<?php
//echo phpinfo();

// مشروع بسيط لإدارة المتاجر والعروض
// index.php
declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php'; // استخدام Composer autoload

/* 'Store.php';
require_once 'Category.php';
require_once 'Offer.php';
require_once 'StoreManager.php';*/

use App\Model\Categories;
use App\Model\Offers;
use App\Model\Stores;
use App\Model\Users;

$store= new Stores();

$store->set_store_name("jj");
echo $store->get_store_name();