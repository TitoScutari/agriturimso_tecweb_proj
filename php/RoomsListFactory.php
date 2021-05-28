<?php
require_once __DIR__.DIRECTORY_SEPARATOR."dbAccess.php";

class RoomsListFactory {
  public function createRoomsList() {
    $db = new DBAccess();
    $isFailed = $db->openDBConnection();

    if ($isFailed) {
      return null;
    }

    $roomsContent = "";
    $rooms = $db->getRooms();

    $db->closeDBConnection();
    if ($rooms) {
      foreach ($rooms as $room) {
        $name = $room["name"];
        $people = $room["people"];
        $price = $room["price"];
        $mainImg = $room["mainImg"];
        $mainImgLongdesc = $room["mainImgLongdesc"];
        $firstGallery = $room["firstGallery"];
        $secondGallery = $room["secondGallery"];
        $thirdGallery = $room["thirdGallery"];
        $fourthGallery = $room["fourthGallery"];

        $roomsContent .= "<div class=\"bedroom\">";
        $roomsContent .= "<h3><span>$people persone</span> ";
        $roomsContent .= "<span><abbr title=\"euro\">€</abbr> <span class=\"price\">$price</span>";
        $roomsContent .= "</h3>";
        $roomsContent .= "<img src=\"$mainImg\" alt=\"\" longdesc=\"$mainImgLongdesc\" />";
        $roomsContent .= "<ul>";
        $roomsContent .= "<li>Buona colazione inclusa</li>";
        $roomsContent .= "<li>Cancellazione <strong class="free">GRATUITA</strong></li>";
        $roomsContent .= "<li><strong>NESSUN PAGAMENTO ANTICIPATO</strong><div>Paga in struttura</div></li>";
        $roomsContent .= "</ul>";

        $roomsContent .= "<div class=\"services\">";
        $roomsContent .= "<dl></dl>";
        $roomsContent .= "<div><h4>Servizi in camera:</h4>";
        $roomsContent .= "<ul>";
        $roomsContent .= $room["tv"] ? "<li>TV a schermo piatto</li>" : "";
        $roomsContent .= $room["balcony"] ? "<li>Balcone</li>" : "";
        $roomsContent .= $room["gardenView"] ? "<li>Vista giardino</li>" : "";
        $roomsContent .= $room["airCondition"] ? "<li>Aria condizionata</li>" : "";
        $roomsContent .= $room["heat"] ? "<li>Riscaldamento</li>" : "";
        $roomsContent .= $room["parquet"] ? "<li><span xml:lang=\"fr\">Parquet</span> o pavimento in legno</li>" : "";
        $roomsContent .= $room["shower"] ? "<li>Doccia</li>" : "";
        $roomsContent .= $room["shampoo"] ? "<li>Prodotti da bagno in omaggio</li>" : "";
        $roomsContent .= $room["wc"] ? "<li><abbr xml:lang=\"en\" title=\"water closet\">WC</abbr></li>" : "";
        $roomsContent .= $room["bath"] ? "<li>Vasca</li>" : "";
        $roomsContent .= $room["bidet"] ? "<li xml:lang=\"fr\">Bidet</li>" : "";
        $roomsContent .= $room["paper"] ? "<li>Carta igienica</li>" : "";
        $roomsContent .= $room["towels"] ? "<li>Asciuga mani</li>" : "";
        $roomsContent .= $room["closet"] ? "<li>Armadio o guardaroba</li>" : "";
        $roomsContent .= "</ul></div></div>";

        $roomsContent .= "<a class=\"bottoneform\" href=\"./prenota.php\">Prenota</a>";
        $roomsContent .= "<div class=\"gallery\">";
        $roomsContent .= "<img src=\"$firstGallery\" alt=\"\" class=\"galleryElement\" />";
        $roomsContent .= "<img src=\"$secondGallery\" alt=\"\" class=\"galleryElement\" />";
        $roomsContent .= "<img src=\"$thirdGallery\" alt=\"\" class=\"galleryElement\" />";
        $roomsContent .= "<img src=\"$fourthGallery\" alt=\"\" class=\"galleryElement\" />";
        $roomsContent .= "</div></div>";
      }
    } else {
      $roomsContent = "<h3>Nessuna camera trovata</h3>";
    }

    return $roomsContent;
  }
}
?>