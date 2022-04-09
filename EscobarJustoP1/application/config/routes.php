<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//Rutas de navegacion
$route['default_controller'] = 'welcome';


$route['inicio']= 'Welcome/index';
$route['acerca']= 'Welcome/quienes';
$route['terminos']= 'Welcome/terminos';
$route['factura']= 'Welcome/factura_prueba';

/*---------------------------------Consultas--------------------------------------------*/
$route['consulta']= 'Welcome/consulta';
$route['verifico_nuevaconsulta']= 'back/consulta_controller';
$route['consultas_eliminadas']= 'back/consulta_controller/muestra_eliminados';
$route['consultas_elimina/(:num)']='back/consulta_controller/eliminar_consulta/$1';
$route['muestra_consultas']= 'back/consulta_controller/listar_consultas';

/* -------------------------------- Rutas del registro --------------------------------- */
$route['regis']= 'Welcome/registrarse';
$route['verifico_nuevoregistro']='back/registro_controller';

/* -------------------------------- Rutas del login ------------------------------------- */ 
$route['login']= 'Welcome/loguearse'; 
$route['verifico_usuario']='back/login_controller';
$route['logout']='Welcome/logout'; 
$route['panel']= 'Welcome/us_logueado';

/* -------------------------------- Rutas del Producto ---------------------------------- */ 
$route['productos_todos']='back/producto_controller';
/*--------------------------------- Verificar infor de producto --------------------------*/
$route['verifico_nuevoproducto']='back/producto_controller/agrega_producto';
$route['verifico_modificaproducto/(:num)']='back/producto_controller/modificar_producto/$1';

/*--------------------------------- Vistas del producto ----------------------------------*/
$route['productos_categoria1']='back/producto_controller/muestra_categoria1';
$route['productos_categoria2']='back/producto_controller/muestra_categoria2';
$route['productos_eliminados']='back/producto_controller/muestra_eliminados';

$route['productos_agrega']='back/producto_controller/form_agrega_producto';

$route['productos_modifica/(:num)']='back/producto_controller/muestra_modificar/$1';
$route['productos_elimina/(:num)']='back/producto_controller/eliminar_producto/$1';
$route['productos_activa/(:num)']='back/producto_controller/activar_producto/$1';

/* -------------------------------- Rutas del Usuario ---------------------------------- */
$route['usuarios_todos']='back/usuario_controller';

/*--------------------------------- Verificar infor de usuario --------------------------*/
$route['verifico_nuevousuario']='back/usuario_controller/agrega_usuario';
$route['verifico_modificausuario/(:num)']='back/usuario_controller/modificar_usuario';

/*--------------------------------- Vistas del usuario ----------------------------------*/
$route['usuarios_eliminados']='back/usuario_controller/muestra_eliminados';

$route['usuarios_agrega']='back/usuario_controller/form_agrega_usuario';

$route['usuarios_modifica/(:num)']='back/usuario_controller/muestra_modificar/$1';
$route['usuarios_elimina/(:num)']='back/usuario_controller/eliminar_usuario/$1';
$route['usuarios_activa/(:num)']='back/usuario_controller/activar_usuario/$1';

/*--------------------------------- Rutas del carrito ------------------------------------*/
$route['carro']= 'Welcome/carrito';
$route['productos']= 'back/carrito_controller/dieteticos';
$route['planes']= 'back/carrito_controller/planes';

$route['carrito_agrega']= 'back/carrito_controller/add';
$route['carrito_actualiza']= 'back/carrito_controller/actualiza_carrito';
$route['carrito_elimina/(:any)']= 'back/carrito_controller/remove/$1';
$route['borrar_carri']= 'back/carrito_controller/borrar_carrito';

$route['comprar']= 'back/carrito_controller/muestra_compra';
$route['confirma_compra']= 'back/carrito_controller/guarda_compra';

/*------------------------------------VENTAS-------------------------------------------*/
$route['muestra_ventas']= 'back/producto_controller/listar_ventas';

/*-----------------------------------COMPRAS------------------------------------------*/
$route['muestra_compras']= 'back/usuario_controller/listar_compras';

/*-----------------------------------DATOS USUARIO--------------------------------------*/
$route['muestra_datos']= 'back/usuario_controller/mostrar_datos';
$route['verifico_modifica_datos_usuario/(:num)']='back/usuario_controller/modificar_datos_usuario';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;