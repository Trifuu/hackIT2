<?php

/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

define("autorizare", 1);

$name = $_POST['name'];
$email = $_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$mesaj=$_POST["mesaj"];

$subject = "Contact HackItAll";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: lsacbucu@truster-2.webhosting4.net" . "\r\n";
$headers .= "Return-Path: lsacbucu@truster-2.webhosting4.net" . "\r\n";
$template = '<div>'.$email.',<br/><br/>'.$name.',<br/><br/>'. $mesaj.'</div>';

$sendmessage = wordwrap($template, 70);
mail("trifumarius01@gmail.com", $subject, $sendmessage, $headers);