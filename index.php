<?php 

    include 'controller/ClienteController.php';

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch ( $url ) {

        case '/':
            echo "Página inicial";
                break;

        case '/cliente':
            ClienteController::index ();
                break;
        
        case '/cliente/form':
            ClienteController::form ();
                break;
        case '/cliente/form/save':
            ClienteController::save ();
                break;
        default :
            echo "ERRO 404" ;

    }
?>