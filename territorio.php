<?php
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Agriturismo Morgan</title>

<meta name="title" content="Agriturismo Morgan" />
<meta name="description"
	content="Agriturismo situato nei pressi di Montebelluna (TV), che offre camere e colazione" />
<meta name="keywords"
	content="Agriturismo, Bed and Breakfast, Camere da letto, Montebelluna" />

<meta name="author" content="Matteo, Massimo, Tito, Lorenzo" />
<meta name="language" content="italian it" />

<link rel="stylesheet" type="text/css" href="style/style_lavoro.css"
	media="screen" />

<link rel="stylesheet" type="text/css" href="style/small_lavoro.css"
	media="handheld, screen and (max-width: 640px), only screen and (max-device-width: 640px)" />

<link rel="stylesheet" type="text/css" href="style/printLavoro.css"
	media="print" />

</head>
<body>
	<div id="header">
		<ul class="aiutiNascosti">
			<li><a href="#menu">Vai al menu</a></li>
			<li><a href="#contentTerritorio">Vai al contenuto</a></li>
			<li><a href="#ultimeNews">Vai alle ultime news</a></li>
		</ul>
		<img id="logo" src="images/bbtlogo.png" alt="Logo dell'agriturismo" />
		<h1>Agriturismo Morgan</h1>
		<h2>Ai piedi del Montello e dei colli Asolani</h2>
	</div>

	<div id="breadcrumb">
		<div id="menu">
			<ul>
				<li><a xml:lang="en" href="index.php">Home</a></li>
				<li><a href="camere.php">Camere</a></li>
				<li id="currentLink">Territorio</li>
				<li><a href="diconodinoi.php">Dicono di noi</a></li>
			</ul>
		</div>
		<div id="user">
		<?php
            if (isset($_SESSION["user"])) {
                echo "<p class='reg'>Benvenuto: " . $_SESSION["user"] . "</p>";
            } else {
                echo '<a href="registrati.html" class="reg">Registrati</a> <a
            				href="accedi.html" class="reg">Accedi</a>';
            }
        ?>
		</div>
	</div>

	<div class="row">

		<div id="contentTerritorio" class="contenutoGenerale column">
			<div class="titleImageTerritorio">
				<h2>I campi di carciofi</h2>
				<img src="images/carciofo.jpg" alt="pianta di carciofo"
					class="imgTerritorio" />
			</div>
			<p>Il carciofo è un ortaggio fresco, gustoso e caratteristico del
				periodo che va dalla fine dell'inverno all'inizio della primavera.
				Si tratta di un vero e proprio protagonista della cucina povera
				mediterranea. Si può gustare crudo oppure cucinato come contorno,
				ripieno o per arricchire primi piatti, torte rustiche e secondi
				piatti.</p>

			<div class="titleImageTerritorio">
				<h2>La pista ciclabile</h2>
				<img src="images/ciclabile.jpg"
					alt="pista ciclabile immersa nella natura" class="imgTerritorio" />
			</div>
			<p>220 chilometri, 110 km in provincia di Belluno, 90 km in
				quella di Treviso, 20 km in quella di Venezia, tutto in territorio
				Veneto, questa è la lunghezza della Ciclabile del Piave. Il
				protagonista è il fiume Sacro alla Patria, il Piave, teatro di
				scontri in guerra, oggi accompagnatore frizzante di una pista che
				attraversa un territorio ricco di bellezze storiche, artistiche e
				paesaggistiche partendo dalle Dolomiti per arrivare al mare.</p>

			<div class="titleImageTerritorio">
				<h2>I colli asolani</h2>
				<img src="images/colli.gif" alt="colline boscose con paesini"
					class="imgTerritorio" />
			</div>
			<p>I Colli Asolani sono perfetti però per esercitare anche altri
				sport, come il ciclismo, il nordic walking e il trail, o anche
				solamente per delle piccole passeggiate: potrai venire rapito da
				scorci suggestivi e splendidi scenari, che non faranno altro che
				riempirti di grandi emozioni, di pace e di bellezza. Nel periodo
				autunnale, parti alla raccolta di funghi tra i boschi delle Colline
				del Prosecco oppure segui le colline fortificate di Monfumo alla
				ricerca dei castelli che le decoravano.</p>

			<div class="titleImageTerritorio">
				<h2>Il Montello</h2>
				<img src="images/montello.jpg" alt="rovine dell'abbazia al tramonto"
					class="imgTerritorio" />
			</div>

			<p>A ovest dell'agriturismo sorge il montello, un colle lambito
				dal piave, ricoperto da una fitta selva, una volta vi sorgeva il
				bosco di roveri utilizzato per le navi della Serenissima. Oggi vi
				sono numerosi percorsi, se strade dette prese, pronti per
				passeggiate serenissimissime. Con un po di fortuna e un po' di
				voglia potrete anche arrivare alle imponenti rovine dell'abbazia.</p>
		</div>

		<div id="rightSideBar" class="column right">
			<div id="ultimeNews">
				<h2>Ultime News</h2>
				<ul>
					<li><strong>10/06/2019</strong> - Festa della Musica e delle
						carote</li>
					<li><strong>05/04/2021</strong> - Oggi festa dell' asparago! <br />Buona
						Pasquetta a tutti!</li>
					<li><strong>24/03/2019</strong> - Raccolta degli Asparagi</li>
				</ul>
			</div>
			<div id="socialCorner">
				<!--<h1 xml:lang="en">Social Corner</h1>-->
			</div>
		</div>

	</div>


	<div id="footer">
		<img src="images/valid-xhtml10.png" alt="Sito verificato secondo standard XHTML 1.0" id="imgValidCode" />
		<img src="images/vcss-blue.gif" alt="Sito verificato secondo standard CSS" id="imgValidCSS" />
		<p>
			Il sito è stato creato per un esercizio nell'ambito del corso di <a
				href="https://elearning.unipd.it/math/login/index.php">Tecnologie
				Web</a> e non rappresenta quindi il sito ufficiale dell'Agriturismo. I
			testi sono stati gentilmente presi in prestito da <a
				href="http://www.agriturismomorgan.it/">Agriturismo Morgan</a>.
		</p>
		<p>Tech Group - All rights reserved</p>
	</div>
</body>
</html>