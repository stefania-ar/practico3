<?php
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once 'base.php';
require_once 'index.php';
require_once 'materias.php';
//require_once 'index.html';


if(isset($_GET['action'])){
    $action= $_GET['action'];
}else echo "ingrese algo";

$params = explode('/', $action);

switch ($params[0]) {
    case 'insert':
        insert();
        mostrarTareas();
        break;
    case 'mostrar':
        mostrarTareas();
        break; 
    case 'home':
        home();
        break;    
    case 'insertMateria':
        insertMateria();
        mostrarMaterias();
        break; 
    default:
        home();
        break;
}


?>