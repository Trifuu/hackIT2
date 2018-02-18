<?php
/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */


# -- start output buffer
ob_start();

define("_ROOT", getcwd() . "/");
define("autorizare", 1);

require _ROOT . "includes/config.php";

$page = isset($_GET["page"]) ? htmlspecialchars(strip_tags($_GET["page"]), ENT_QUOTES) : "home";
$view = isset($_GET["view"]) ? htmlspecialchars(strip_tags($_GET["view"]), ENT_QUOTES) : "dashboard";

$content = null;

$js = [];
$css = [];
if ($user == null && ($page == "users" || $page == "participanti")) {
    $page = "home";
    $view = "dashboard";
}

if (get_user_type($user["categorie"], "users") == 3 && ($page == "users" || $page == "participanti") && $view == "dashboard") {
    $page = "detalii";
}

if (get_user_type($user["categorie"], "users") == 2 && ($page == "users" || $page == "detalii") && $view == "dashboard") {
    $page = "participanti";
}
if ($user == null && ($page == "users" || $page == "participanti" || $page == "detalii")) {
    $page = "home";
    $view = "dashboard";
}

switch ($page):
    case "home":
        require_once _ROOT_CONTENT . "home/controller.php";
        break;
    case "users":
        require_once _ROOT_CONTENT . "users/controller.php";
        break;
    case "participanti":
        require_once _ROOT_CONTENT . "participanti/controller.php";
        break;
    case "formular":
        require_once _ROOT_CONTENT . "formular/controller.php";
        break;
    case "login":
        require_once _ROOT_CONTENT . "login/controller.php";
        break;
    case "detalii":
        require_once _ROOT_CONTENT . "detalii/controller.php";
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        $content = _ROOT_CONTENT . "404.php";
        break;
endswitch;

require_once _ROOT_CONTENT . "template.php";

# -- end output buffer
ob_end_flush();
