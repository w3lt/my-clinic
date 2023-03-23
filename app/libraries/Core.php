<?php
class Core
{
    protected $CurrentController = "Pages";
    protected $CurrentMethod = "index";
    // public $url;
    protected $params = [];
    public function __construct()
    {
        $params = $this->geturl();
        if (!$params || $params[0] == "") {
            $controller = $this->CurrentController;
            $action = $this->CurrentMethod;
        } else {
            // On sauvegarde le 1er paramètre dans $controller en mettant sa 1ère lettre en majuscule
            $controller = ucfirst($params[0]);

            // On sauvegarde le 2ème paramètre dans $action si il existe, sinon index
            $action = isset($params[1]) ? $params[1] : 'index';



        }
        // On appelle le contrôleur
        if (!file_exists(APPROOT . 'controller/' . $controller . '.php')) {
            http_response_code(404);
            echo "La page recherchée n'existe pas";
            ;
        } else {

            require_once(APPROOT . 'controller/' . $controller . '.php');
            // On instancie le contrôleur
            $controller = new $controller();
        }
        if (method_exists($controller, $action)) {
            // On supprime les 2 premiers paramètres
            unset($params[0]);
            unset($params[1]);

            // On appelle la méthode $action du contrôleur $controller
            call_user_func_array([$controller, $action], $params);
        } else {
            // On envoie le code réponse 404
            http_response_code(404);
            echo "La page recherchée n'existe pas";
        }

    }
    public function geturl()
    {
        $params = [];
        // Program to display current page URL.
        $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
            === 'on' ? "https" : "http") .
            "://" . $_SERVER['HTTP_HOST'] .
            $_SERVER['REQUEST_URI'];

        if (!isset(parse_url($link)['query'])) {
            return $params;
        }
        $query = parse_url($link)['query'];

        parse_str($query, $params);
        $params = explode("/", $params['url']);
        return $params;
    }
}
?>