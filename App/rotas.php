<?php

use App\Controller\QuincyController;
use App\Controller\ArrancarController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) 
{
    case '/':
        echo "página inicial";
    break;

    case '/quincy':
        QuincyController::index();
        break;

    case '/quincy/form':
        QuincyController::form();
        break;

    case '/quincy/form/save':
        QuincyController::save();
        break;

    case '/quincy/delete':
        QuincyController::delete();
        break;

		case '/arrancar':
			ArrancarController::index();
			break;
	
		case '/arrancar/form':
			ArrancarController::form();
			break;
	
		case '/arrancar/form/save':
			ArrancarController::save();
			break;
	
		case '/arrancar/delete':
			ArrancarController::delete();
			break;
    default:
        echo "Erro 404";
        break;
}
