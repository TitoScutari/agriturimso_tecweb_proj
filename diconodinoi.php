<?php 
session_start();
require_once 'php/userNameMenu.php';

$htmlPage = file_get_contents("diconodinoi.html");

$userAcc = new userNameMenu();

$strAccedi = $userAcc->getAccedi();

if(isset($_SESSION["user"])){
    $strAccedi = $userAcc->loginSucc();
}

echo str_replace("<bottoniLogin/>", $strAccedi, $htmlPage);
?>