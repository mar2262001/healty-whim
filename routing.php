<?php 
    if(array_key_exists('menu', $_GET)){
        $var = $_GET['menu'];
        switch ($var) {
            case "offers":
                require_once('offers.php');
            break;
            case "administrator":
                require_once('administrator.php');
            break;
            case "about":
                require_once('about.php');
            break;
            case "contact":
                require_once('contact.php');
            break;
            case "login":
                require_once('login.php');
            break;
            default:
                require_once('homepage.php');
        }
    }else{
        require_once('homepage.php');
    }
 ?>