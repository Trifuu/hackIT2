<?php
/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");


switch ($view):
        case "dashboard":
                require_once _ROOT_CONTENT . $page . "/view_dashboard.php";
                break;
        case "edit":
                require_once _ROOT_CONTENT . $page . "/view_edit_profile.php";
                break;

        case "post_edit_account":
                require_once _ROOT_CONTENT . $page . "/post_edit_account.php";
                break;

        case "post_edit_password":
                require_once _ROOT_CONTENT . $page . "/post_edit_password.php";
                break;
        default:
                header("HTTP/1.0 404 Not Found");
                $title_app_title = "404 - Pagina Inexistenta";
                $content = _ROOT_CONTENT . "404.php";
                break;
endswitch;
