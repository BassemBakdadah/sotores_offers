<?php
session_start();

//sstring data separated with coma
$list= "user,admin,tech_support" ;  

//array functiom used to split the string into an array according to sparator.
$arr = explode(",", $list);

//work with file storage.

if(file_put_contents( "storage.txt",json_encode( $arr,flags: JSON_PRETTY_PRINT)))
echo 'file saved successfully';

echo '<br />';

$val = json_decode(file_get_contents('storage.txt'));

echo '<br />';
var_dump($val);

