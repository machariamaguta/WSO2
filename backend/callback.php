<?php
require 'WSO2.php';

$info=json_decode(file_get_contents('php://input'));

// get received fields here

// Generate db update statement
// $sql="";

$WSO2= new WSO2;
echo $WSO2::update($sql);