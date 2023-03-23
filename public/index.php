<?php
//define('ROOT', '/var/www/tp1.fr');
define('ROOT', dirname(dirname(__FILE__)));
require_once(ROOT . '/bootstrap.php');
require_once(APPROOT . 'libraries/Controller.php');
require_once(APPROOT . 'libraries/Database.php');
require_once(APPROOT . 'libraries/Core.php');
$init = new Core();

// On sépare les paramètres et on les met dans le tableau $params
// $params = explode("/", $_GET['url']);


// // Si au moins 1 paramètre existe
// if($params[0] != ""){
//     // On sauvegarde le 1er paramètre dans $controller en mettant sa 1ère lettre en majuscule
//     $controller = ucfirst($params[0]);

//     // On sauvegarde le 2ème paramètre dans $action si il existe, sinon index
//     $action = isset($params[1]) ? $params[1] : 'index';


//     // On appelle le contrôleur
//     if (!file_exists(APPROOT.'controller/'.$controller.'.php')){
//         http_response_code(404);
//         echo "La page recherchée n'existe pas";;
//     }
//     else{

//         require_once(APPROOT.'controller/'.$controller.'.php');


//         // On instancie le contrôleur
//         $controller = new $controller();

//         if(method_exists($controller, $action)){
//             // On supprime les 2 premiers paramètres
//             unset($params[0]);
//             unset($params[1]);

//             // On appelle la méthode $action du contrôleur $controller
//             call_user_func_array([$controller,$action], $params); 
//         }else{
//             // On envoie le code réponse 404
//             http_response_code(404);
//             echo "La page recherchée n'existe pas";
//         }
//     }
// }else{
//     echo "Controllers not exists";
// }

?>

<!-- create table Doctor(
    id int primary key not null auto_increment,
    name varchar(255),
    email varchar(255) unique key not null,
    password varchar(255) not null,
    specialist ENUM("heart", "neuron", "skeleton"),
    gender BOOL,
    create_at DATE
); -->