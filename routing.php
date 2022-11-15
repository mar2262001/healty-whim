<?php 
    if(array_key_exists('menu', $_GET)){
        $var = $_GET['menu'];
        switch ($var) {
            case 1:
                require_once('Clientes/registrar.php');
            break;
            case 2:
                require_once('Clientes/registrar.php');
            break;
            case 3:
                require_once('Clientes/registrar.php');
            break;
            default:
                require_once('homepage.php');
        }
    }else{
        require_once('homepage.php');
    }
 ?>