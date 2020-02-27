
<?php 

spl_autoload_register('myAutoloader');


function myAutoloader($classname){

    $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url,'includes')!==false){
    	$path="../classes/";
    }else{
    	$path="classes/";
    }


	$extention=".class.php";
	$fullpath=$path.$classname.$extention;

	
	if (!file_exists($fullpath)) {
		return false;
	}
	include_once $fullpath;
 }


 ?>



