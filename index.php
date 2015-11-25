<?php
/**
* @author Deepak Kumar Vellingiri
* @link http://dwebsight.com/about-deepak/
*/

//displaying the errors with PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);
//Seperating into classes
include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
//Commenting out standard class to use normal class
//$pageData = new stdClass();
$pageData->title = "Thomas Blom Hansen: Portfolio site";
$pageData->content = include_once "views/navigation.php";
$pageData->css = "<link href='css/layout.css' rel='stylesheet' />";
//Changes
$navigationIsClicked = isset($_GET['page']);
if ($navigationIsClicked) {
	$fileToLoad = $_GET['page'];
} else {
	$fileToLoad = "skills";
}
$pageData->content .= include_once "views/$fileToLoad.php";
$pageData->embeddedStyle = "
<style>
nav a[href *= '?page=$fileToLoad'] {
	padding:3px;
    background-color:white;
    border-top-left-radius:3px;
    border-top-right-radius:3px;
}
</style>
";
$page = include_once "templates/page.php";
echo $page;