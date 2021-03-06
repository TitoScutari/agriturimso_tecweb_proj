<?php
require_once __DIR__.DIRECTORY_SEPARATOR."php".DIRECTORY_SEPARATOR."UserMenu.php";
require_once __DIR__.DIRECTORY_SEPARATOR."php".DIRECTORY_SEPARATOR."NewsListFactory.php";
require_once __DIR__.DIRECTORY_SEPARATOR."php".DIRECTORY_SEPARATOR."RoomsListFactory.php";

session_start();

$html = file_get_contents(__DIR__.DIRECTORY_SEPARATOR."pages".DIRECTORY_SEPARATOR."camere.html");

$menu = new UserMenu();
$content = "";
if (isset($_SESSION['email'])) {        
  $content = $menu->getWelcomeMessage($_SESSION['email']);
} else {
  $content = $menu->getAuthenticationButtons();
}

$contentAdminNews = "";
$contentAdminAddRoom = "";
if (isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]) {
  $contentAdminNews = "<div id=\"adminSection\"><a class=\"button\" href=\"./insertNews.php\">Aggiungi notizia</a></div>";
  $contentAdminAddRoom = "<a class=\"button\" href=\"./insertRoom.php\">Aggiungi stanza</a>";
}

$roomsContent = (new RoomsListFactory())->createRoomsList();
if (!$roomsContent) {
  header("Location: ./errors/500.php");
}

$newsContent = (new NewsListFactory())->createNewsList();
if (!$newsContent) {
  header("Location: ./errors/500.php");
}


$html = str_replace("<UserPlaceholder />", $content, $html);
$html = str_replace("<AdminNewsManagementPlaceholder />", $contentAdminNews, $html);
$html = str_replace("<AdminAddRoomPlaceholder />", $contentAdminAddRoom, $html);
$html = str_replace("<RoomsListPlaceholder />", $roomsContent, $html);
$html = str_replace("<NewsListPlaceholder />", $newsContent, $html);
echo $html;
?>