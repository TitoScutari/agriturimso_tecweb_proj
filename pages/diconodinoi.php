<?php
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Dicono di noi - Agriturismo Morgan</title>

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

<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
	<div id="header">
		<ul class="aiutiNascosti">
			<li><a href="#menu">Vai al menu</a></li>
			<li><a href="#contentHomePage">Vai al contenuto</a></li>
			<li><a href="#ultimeNews">Vai alle ultime news</a></li>
		</ul>
		<img id="logo" src="images/bbtlogo.png" alt="Logo dell'agriturismo" />
		<h1>Agriturismo Morgan</h1>
		<h2>Ai piedi del Montello e dei colli Asolani</h2>
	</div>	

	<div id="breadcrumb">
		<div id="menu">
			<ul>
				<li><a href="index.php" xml:lang="en">Home</a></li>
				<li><a href="camere.php">Camere</a></li>
				<li><a href="territorio.php">Territorio</a></li>
				<li id="currentLink">Dicono di noi</li>
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

		<div id="contentHomePage" class="contenutoGenerale column">
			<h2 class="center">Qui troverai le informazioni principali e le
				recensioni dei nostri clienti</h2>

			<div id="imgCommenti">
				<img src="images/tavola.jpg" class="imgCommenti"
					alt="tavola apparecchiata di fronte al camino all'interno dell'agriturismo" />
			</div>

			<p>I nostri recapiti:</p>

			<div id="generalInfo">
				<p>
					<span><strong>AZIENDA AGRITURISTICA MORGAN </strong></span>
				</p>
				<p>
					<span> Erizzo, 79 - 31044 Montebelluna (TV) - Italia </span>
				</p>
				<p>
					<span>Tel. +39 0423 60 30 31 </span>
				</p>
				<p>
					<span>+39 347 45 25 411 </span>
				</p>
			</div>

			<div id="info"></div>

			<div id="sezionecommenti" class="comments">
				<h2>Scopri cosa dicono di noi!</h2>
				<section id="casellacommento">
				<h3>Tito</h3>
				<cite> Mi sono trovato molto bene in questo agriturismo, lo
					consiglio!</cite>
				<div class="bottonicommento">
					<button type="button">Rispondi</button>
					<button type="button">Segnala</button>
					<button type="button">Cancella</button>
				</div>
				</section>

				<section id="casellacommento">
				<h3>Lorenzo</h3>
				<cite> Ottima gestione e cordialità verso i clienti</cite>
				<div class="bottonicommento">
					<button type="button">Rispondi</button>
					<button type="button">Segnala</button>
					<button type="button">Cancella</button>
				</div>
				</section>

				<section id="casellacommento">
				<h3>Matteo</h3>
				<cite> Buon cibo e camere bellissime!</cite>
				<div class="bottonicommento">
					<button type="button">Rispondi</button>
					<button type="button">Segnala</button>
					<button type="button">Cancella</button>
				</div>
				</section>

				<section id="casellacommento">
				<h3>Francesco</h3>
				<cite> Camere pulite e ristorante eccelso</cite>
				<div class="bottonicommento">
					<button type="button">Rispondi</button>
					<button type="button">Segnala</button>
					<button type="button">Cancella</button>
				</div>
				</section>

				<section id="casellacommento">
				<h3>Massimo</h3>
				<cite> Situato in una zona da visitare assolutamente!</cite>
				<div class="bottonicommento">
					<button type="button">Rispondi</button>
					<button type="button">Segnala</button>
					<button type="button">Cancella</button>
				</div>
				</section>
			</div>
			<div id="lasciacommento">
				<h3>Lascia un commento!</h3>
				<form method="post" action="nuovocommento.php">
					<fieldset>
						<p class="spazio">
							<strong> Dacci un voto </strong>
						</p>

						<label class="container">1 <input type="radio"
							checked="checked" name="radio" /> <span class="checkmark" /></label> <label
							class="container">2 <input type="radio" name="radio" />
							<span class="checkmark" /></label> <label class="container">3 <input
							type="radio" name="radio" /> <span class="checkmark"></span>
						</label> <label class="container">4 <input type="radio"
							name="radio" /> <span class="checkmark"></span></label> <label
							class="container">5 <input type="radio" name="radio" />
							<span class="checkmark"></span></label>
					</fieldset>

					<fieldset>
						<label for="commento">Scrivi il commento qui sotto: </label>
						<textarea id="commento" name="commento" rows="10" cols="50"
							placeholder="Scrivi qui il tuo commento..."></textarea>
					</fieldset>

					<fieldset>
						<button type="submit" name="submit" class="bottoneform">Invia</button>
						<p class="spazio">oppure</p>
						<a href="registrati.html" target="_blank" id="bottoneregistrati">Registrati</a>
					</fieldset>
				</form>
			</div>
		</div>

		<div id="rightSideBar" class="column right">
			<div id="ultimeNews">
				<h2>Ultime News</h2>
				<ul>
					<li><strong>10/06/2019</strong> - Festa della Musica e delle
						carote</li>
					<li><strong>05/04/2021</strong> - Oggi festa dell' asparago! <br />
						Buona Pasquetta a tutti!</li>
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