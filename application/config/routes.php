<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*

*/
$route['default_controller'] = 'Welcome';


$route['quienes_somos']='Welcome/quienes_somos';
$route['comercializacion'] = 'Welcome/comercializacion';
$route['informacion_de_contactos'] = 'Welcome/informacion_de_contactos';
$route['terminos_y_usos'] = 'Welcome/terminos_y_usos';
$route['catalogo_de_productos'] = 'Welcome/catalogo_de_productos';
$route['consultas'] = 'Welcome/consultas';
$route['registro'] = 'Welcome/registro';
$route['verifico_nuevoregistro']='registro_controller';

$route['404_override']= '';
$route['translate_uri_dashes'] = FALSE;
