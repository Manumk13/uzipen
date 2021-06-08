<?php
error_reporting(E_ALL);				// directivas para activar 
ini_set('display_errors', '1');	// la notificación de errores

session_start();

include_once 'model/model.inc.php';
include_once 'view/view.inc.php';
include_once 'controller/controller.inc.php';

actualizar_sesion();					// tareas relacionadas con la sesión

show_header();
show_original();
show_content();
show_footer();


?>