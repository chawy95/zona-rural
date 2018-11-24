<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require "vendor/autoload.php";

$app = new \Slim\App;

$app->get("/asociacion/buscar",function(){
require "vista/view.consulta_asociacion.php";
});
$app->get("/socios/buscar",function(){
require "vista/view.consulta_socios.php";
});
$app->get("/presupuesto/buscar",function(){
require "vista/view.presupuesto-inicial.php";
});
$app->get("/verificacion/buscar",function(){
require "vista/view.presupuesto-verificacion-campo.php";
});
$app->get("/",function(){
require "vista/inico.view.php";
});
$app->run();
//dsfsd
 ?>