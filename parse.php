<?php
require "vendor/autoload.php";
use PHPHtmlParser\Dom;

$dom = new Dom;
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["html_file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["html_file"]["name"], $target_dir);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    if ($imageFileType == 'html' || $imageFileType == 'htm'){
        $dom->loadFromFile($_FILES["html_file"]["name"]);
        $name = $dom->find('input[name="user_name"]');
        echo $name->value;
    } else {
        echo "please upload html file";
    }


}

//echo $a->text;