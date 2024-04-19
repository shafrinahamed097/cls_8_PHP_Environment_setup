<?php

$a=10;
$b=20;
$c=$a*$b;

echo $c;

$name="Shafrin Ahamed"; //String
$age=27; // Integer Numbers
$isBangladeshi=true; // Boolean
$weight=65;
$g=null;
$h=array('Bangladesh', 'Canada'); //Array

// Scope 1. Local 2.Global 3. Super Global $_SESSION $_GET $_POST


// Global Scope
function myFun1(){
    global $name;
 echo  $name;
}


// Local Scope
function myFun2(){
  $name="Mr.Shakib";
  echo $name;
}

myFun1();
myFun2();


// Const Define

define('BATCH', '3');
define('SITE_NAME', 'http://ostad.app');



// Const Access

echo BATCH;
echo SITE_NAME;





