<?php
require_once __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."php".DIRECTORY_SEPARATOR."UserMenu.php";

session_start();

$html = file_get_contents(__DIR__.DIRECTORY_SEPARATOR."403.html");

$menu = new UserMenu();
$content = "";
if (isset($_SESSION['email'])) {        
  $content = $menu->getWelcomeMessage($_SESSION['email'], true);
} else {
    $content = $menu->getAuthenticationButtons(true);
}

$html = str_replace("<UserPlaceholder />", $content, $html);
echo $html;
?>