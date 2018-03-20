<?php

/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */



defined("autorizare") or die("Nu aveti autorizare");


$js[] = "app/home/about.js";

$title_app_title = "About";

$organizatori["nume"]=["Iliescu Cristian-Mihai","Macovei Alexandra-Oana",
    "Andora Alexandra","Trifu Marius-Constantin","Scărlătescu George",
    "Stan Alexandra","Nazare Ana-Karina","Iliescu Valentina"];
$organizatori["departament"]=["Project Manager","Manager Public Relations",
    "Manager Fund Raising","Manager IT","Manager Logistica",
    "Manager Human Resources","Manager Design","Manager Multimedia"];
$organizatori["poza"]=["Iliescu_Andrei.jpg","Macovei_Alexandra.jpg",
    "Andora_Alexandra.jpg","Trifu_Marius.jpg","Scarlatescu_George.jpg",
    "Stan_Alexandra.jpg","Karina_Nazare.jpg","Iliescu_Valentina.jpg"];

$content = _ROOT_CONTENT . $page . "/tmpl_about.php";