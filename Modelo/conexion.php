<?php 
try{
	$base=new PDO("mysql:host=localhost; dbname=gobernacion","root","");
	echo "conexion ok";
}catch(Exception $e){
	print_r ($e->getMessage());
 }
 ?>