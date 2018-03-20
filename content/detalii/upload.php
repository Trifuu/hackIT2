<?php

/* 
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */


defined("autorizare") or die("Nu aveti autorizare");

$title_app_title = "Uploading...";

//$target_dir = "uploads/";
$target_dir = _ROOT."uploads/";
$target_file = $target_dir . explode("@", $user["email"])[0].".".end(explode('.', $_FILES["fileToUpload"]["name"]));
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    unlink($target_file);
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $mesaj= "Ai incarcat un fisier prea mare!";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $mesaj= "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $mesaj= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        $mesaj= "Sorry, there was an error uploading your file.";
    }
}
$_SESSION["error"]=$mesaj;

redirect(getUrl("detalii", "dashboard"));