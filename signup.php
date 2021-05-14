<?php
require_once __DIR__.DIRECTORY_SEPARATOR."php".DIRECTORY_SEPARATOR."UserMenu.php";
require_once __DIR__.DIRECTORY_SEPARATOR."php".DIRECTORY_SEPARATOR."dbAccess.php";

session_start();

$html = file_get_contents(__DIR__.DIRECTORY_SEPARATOR."pages".DIRECTORY_SEPARATOR."registrati.html");

$menu = new UserMenu();
$userContent = "";
if (isset($_SESSION['email'])) {        
  $userContent = $menu->getWelcomeMessage($_SESSION['email']);
} else {
  $userContent = $menu->getAuthenticationButtons(true, false);
}

$errorContent = "<div><ul>";
if (isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["submit"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $name = $_POST["nome"];
  $lastname = $_POST["cognome"];

  $dbAccess = new DBAccess();
  $isFailed = $dbAccess->openDBConnection();

  if ($isFailed) {
    header("Location: /errors/500.php");
  } 
  
  $result = $dbAccess->signupUser($name, $lastname, $email, $password);
  $dbAccess->closeDBConnection(); 

  if ($result["isSuccessful"]) {        
    $_SESSION["email"] = $result["userEmail"];
    $_SESSION["isAdmin"] = $result["userEmail"] === "admin";
    header("Location: /");
  } else {
    $errorContent .= "<li><strong class=\"error\">Errore durante la registrazione</strong></li>";
  }
}
$errorContent .= "</ul></div>";

$html = str_replace("<UserPlaceholder />", $userContent, $html);
$html = str_replace("<SignupErrorPlaceholder />", $errorContent, $html);
echo $html;
?>