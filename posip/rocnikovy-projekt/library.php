<?php
function createTheConnection(){
	$dbHost = "localhost";
			$dbUsername = "root";
			$dbPassword = "";
			$dbName = "posip";
			$conn = mysqli_connect( $dbHost, $dbUsername, $dbPassword, $dbName );
			if ( mysqli_connect_error() ) {
				print( "Připojení selhalo: " . mysqli_connect_error() );
			}
	
	return($conn);
}

function thehead( $pagename, $section ) {
	print( "<!doctype html>" );
	print( "<html>" );
	print( "<head>" );
	print( "<meta charset=\"utf8\">" );
	print( "<title>$pagename</title>" );
	print( "<link rel=\"stylesheet\" href=\"CSS/mapcss.css\">" );
	print( "</head>" );
}

function thenavigation( $section ) {
	print( "<nav><ul>
		<li><a href=\"index.php?section=homepage\">domů</a></li>
		<li><a href=\"index.php?section=gallery\">nahlášené situace</a></li>
		<li><a href=\"#\">abc</a></li>
		</ul></nav>" );
}

function thequestionbuble( $section ) {
	if ( $section == "homepage" ) {
		print( "<div class=\"guidepost\">
	<div id=\"guidetxt\">
	
		<h1>POSIP</h1>
		<h2>portál silničních problémů</h2>

		<div id=\"index-buttons\"> <a href=\"index.php#question\">
  <button id=\"upbtn\" class=\"index-btnnav\">
  <svg version=\"1.1\" id=\"upload-icon\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
	 viewBox=\"0 0 38.9 45.9\" style=\"enable-background:new 0 0 38.9 45.9;\" xml:space=\"preserve\" width=\"30px\">
    <style type=\"text/css\">
	
	
</style>
    <g>
      <path class=\"uploadicon\" d=\"M5,20L17.7,7.3v29.6c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5V7.3L33.3,20c0.6,0.6,1.6,0.6,2.1,0
		c0.3-0.3,0.4-0.7,0.4-1.1c0-0.4-0.2-0.8-0.4-1.1L20.2,2.6c-0.1-0.1-0.2-0.1-0.2-0.2l-0.3-0.1c0,0-0.1,0-0.1,0l-0.1,0
		c-0.1,0-0.1,0-0.2,0l-0.1,0c-0.1,0-0.2,0-0.3,0l-0.1,0c-0.1,0-0.1,0-0.2,0.1l-0.3,0.1c-0.1,0-0.1,0.1-0.1,0.1L2.9,17.9
		c-0.3,0.3-0.4,0.7-0.4,1.1c0,0.4,0.2,0.8,0.4,1.1C3.4,20.5,4.4,20.5,5,20z\"/>
      <path class=\"uploadicon\" d=\"M36.1,37.1c-0.8,0-1.5,0.7-1.5,1.5V42H3.7v-3.4c0-0.8-0.7-1.5-1.5-1.5s-1.5,0.7-1.5,1.5v4.9
		c0,0.8,0.7,1.5,1.5,1.5h33.8c0.8,0,1.5-0.7,1.5-1.5v-4.9C37.6,37.7,36.9,37.1,36.1,37.1z\"/>
    </g>
  </svg>
  <br>
  Nahrát problém</button>
  </a> <a href=\"index.php?section=gallery\">
  <button id=\"visitbtn\" class=\"index-btnnav\">
  <svg version=\"1.1\" id=\"gallery-icon\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
	 viewBox=\"0 0 44.9 32.6\" style=\"enable-background:new 0 0 44.9 32.6;\" xml:space=\"preserve\" width=\"45px\">
    <style type=\"text/css\">
	
</style>
    <g>
      <path class=\"galleryicon\"  d=\"M9.1,15.2c1.8,0,3.2-1.4,3.2-3.2s-1.4-3.2-3.2-3.2S5.9,10.3,5.9,12S7.3,15.2,9.1,15.2z M9.1,10.3
		c0.9,0,1.7,0.8,1.7,1.7s-0.8,1.7-1.7,1.7c-0.9,0-1.7-0.8-1.7-1.7S8.1,10.3,9.1,10.3z\"/>
      <path class=\"galleryicon\" d=\"M36.8,4.4H4.5c-0.2,0-0.5,0-0.7,0.1C2.2,4.8,1.1,6.2,1.1,7.8v20.4c0,1.9,1.6,3.5,3.5,3.5h32.3
		c1.6,0,3-1.2,3.4-2.7c0.1-0.2,0.1-0.5,0.1-0.7V7.8C40.3,5.9,38.7,4.4,36.8,4.4z M4.5,6.7h32.3c0.6,0,1.1,0.5,1.1,1.1v11.8l-8.7-8.7
		c-0.4-0.4-1.2-0.4-1.7,0L18.4,20l-4.3-4.3c-0.4-0.4-1.2-0.4-1.7,0l-9.1,9.1v-17c0-0.4,0.2-0.8,0.6-1C4.2,6.8,4.4,6.7,4.5,6.7z
		 M3.4,28.2l9.9-9.9l4.3,4.3c0.4,0.4,1.2,0.4,1.7,0l9.1-9.1l9.5,9.5v5.3c0,0.2,0,0.3-0.1,0.5c-0.2,0.4-0.6,0.6-1,0.6H4.5
		c-0.6,0-1.1-0.5-1.1-1.1V28.2z\"/>
      <path class=\"galleryicon\" d=\"M40.2,0.9H7.9c-1.6,0-3,1.1-3.4,2.7l0,0.1h2.5c0.2-0.3,0.5-0.4,0.9-0.4h32.3c0.6,0,1.1,0.5,1.1,1.1v20.4
		c0,0.3-0.2,0.6-0.4,0.8v2.5l0.1,0c1.6-0.4,2.7-1.8,2.7-3.4V4.4C43.7,2.5,42.1,0.9,40.2,0.9z\"/>
    </g>
  </svg>
  <br>
  Galerie</button>
  </a> <a href=\"index.php?section=help#help\">
  <button id=\"helpbtn\" class=\"index-btnnav\">
  <svg version=\"1.1\" id=\"question-mark\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
	 viewBox=\"0 0 21.6 43.9\" style=\"enable-background:new 0 0 21.6 43.9;\" xml:space=\"preserve\" width=\"20px\">
    <g>
      <path class=\"helpicon\" d=\"M18.8,3.7c-1.8-1.8-4.4-2.8-7.5-2.8c-3.1,0-5.7,0.9-7.7,2.7c-2,1.8-3,4.3-3.1,7.3l0,0.1H4l0-0.1
			c0-2.1,0.7-3.8,2-5c1.3-1.2,3.1-1.8,5.2-1.8c2.1,0,3.8,0.6,5,1.9c1.2,1.3,1.8,3.1,1.8,5.3c0,1.1-0.1,2.1-0.4,3
			c-0.3,0.9-0.7,1.7-1.2,2.4c-0.5,0.7-1.7,2-3.5,3.8c-1.8,1.8-3,3.4-3.6,4.7c-0.6,1.3-0.8,3.1-0.9,5.2l0,0.1H12v-0.1
			c0-3.2,1-5.7,3-7.4c2.5-2.3,4.2-4.3,5.1-6.1c0.9-1.7,1.4-3.6,1.4-5.6C21.5,8.1,20.6,5.6,18.8,3.7z\"/>
      <path class=\"helpicon\" d=\"M10.4,37.1c-0.7,0-1.3,0.2-1.7,0.7c-0.4,0.5-0.6,1-0.6,1.7c0,0.6,0.2,1.2,0.6,1.6c0.4,0.4,1,0.7,1.7,0.7
			c0.7,0,1.3-0.2,1.7-0.7s0.7-1,0.7-1.6c0-0.7-0.2-1.2-0.6-1.7C11.7,37.4,11.2,37.1,10.4,37.1z\"/>
    </g>
  </svg>
  <br>
  Nápověda</button>
  </a></div>
		
	</div>
	</div> 
	<div id=\"upload_mit_ohne\">
	<h3>Nahrát nový problém</h3>
	<p>Náš systém funguje na rozpoznávání GPS koordinátů z nahrané fotografie, ne každá fotografie však tyto údaje obsahuje. I přesto, že si nejste jisti, zda vaše fotografie obsahuje GPS souřadnice, zvolte prosím nahrát s fotografií. Po nahrání budete přesměrováni k mapě, kde budete moci polohu zadat, a fotografie se pouze přiřadí jako obrazová dokumentace místa.</p><br>
	<p>Nemáte-li žádnou fotografii místa, zvolte nahrávání bez fotografie. Pro lepší představu vašeho hlášení Vás prosíme o rozsáhlejší popis nálezu. Polohu získáme po připnutí špendlíků na mapě a problém bude po nahrání do databáze vypsán v galerii spolu s ostatnímy zápisy.</p><br>
	<p>Při vyplňování formuláře volte pečlivě druh problému, po pokročení k jeho specifikaci ho nelze bez vracení měnit, z důvodu databázového svázání těchto dvou prvků našho formuláře.</p><br>
	<p>Vyskytne-li se při nahrávání něco, s čím si nebudete vědět rady, možná vám pomohou informace na <a href=\"index.php?section=help#help\">této</a> stránce.</p>" );
		print( "<div id=\"question\"><a href=\"index.php?section=homepage&&signpost=uploadthephoto#upload_photo_div\"><button id=\"mitphoto\"><svg version=\"1.1\" id=\"image-icon\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
	 viewBox=\"0 0 35.6 24.5\" style=\"enable-background:new 0 0 35.6 24.5;\" xml:space=\"preserve\" width=\"42px\">
<style type=\"text/css\">
	
</style>
<g>
	<path class=\"imageicon\" d=\"M7.6,3.8C6.2,3.8,5.1,5,5.1,6.4S6.2,9,7.6,9s2.6-1.1,2.6-2.6S9,3.8,7.6,3.8z M8.9,6.4c0,0.7-0.6,1.3-1.3,1.3
		S6.3,7.1,6.3,6.4c0-0.7,0.6-1.3,1.3-1.3S8.9,5.7,8.9,6.4z\"/>
	<path class=\"imageicon\" d=\"M32.1,0.4H3.6c-1.5,0-2.8,1.3-2.8,2.8v18.1c0,1.5,1.3,2.8,2.8,2.8h28.5c1.5,0,2.8-1.3,2.8-2.8V3.2
		C34.9,1.6,33.7,0.4,32.1,0.4z M2.4,20.8l8.8-8.8l3.9,3.9c0.3,0.3,0.8,0.3,1.1,0l8.3-8.3l8.9,8.9l0,4.6c0,0.7-0.6,1.2-1.2,1.2H3.6
		c-0.7,0-1.2-0.6-1.2-1.2V20.8z M23.9,6.1l-8.3,8.3l-3.9-3.9c-0.1-0.1-0.3-0.2-0.6-0.2c0,0,0,0,0,0c-0.2,0-0.4,0.1-0.6,0.2l-8.3,8.3
		V3.2c0-0.7,0.6-1.2,1.2-1.2h28.5c0.7,0,1.2,0.6,1.2,1.2v11.2L25,6.1C24.7,5.8,24.2,5.8,23.9,6.1z\"/>
</g>
</svg>
<br>
Nahrát s fotografií</button></a>" );
		print( "<a href=\"index.php?section=form&&signpost=nophoto\"><button id=\"ohnephoto\"><svg version=\"1.1\" id=\"pin-icon\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
	 viewBox=\"0 0 35.6 34.5\" style=\"enable-background:new 0 0 35.6 34.5;\" xml:space=\"preserve\" width=\"40px\">
<style type=\"text/css\">
</style>
<g>
	<path class=\"pin-map\" d=\"M35.2,32.8l-4-9.8c-0.2-0.4-0.5-0.6-0.9-0.6l-7.7,0l-1.2,2l8.2,0l3.1,7.7l-15,0l-15,0l3.2-7.7l8.2,0l-1.2-2
		l-7.7,0c-0.4,0-0.8,0.2-0.9,0.6l-4,9.7c-0.1,0.3-0.1,0.7,0.1,0.9s0.5,0.4,0.8,0.4l16.6-0.1l16.5,0.1c0.3,0,0.6-0.2,0.8-0.4
		C35.3,33.5,35.3,33.1,35.2,32.8z\"/>
	<path class=\"pin-map\" d=\"M16.8,28c0.2,0.3,0.5,0.5,0.9,0.5s0.7-0.2,0.9-0.5l7.6-13.1c1.8-3,1.8-6.7,0-9.7c-1.8-3-4.9-4.9-8.4-4.9
		c-3.5,0-6.7,1.8-8.4,4.9s-1.8,6.7,0,9.7L16.8,28z M11,6.2c1.4-2.4,3.9-3.9,6.7-3.9c2.8,0,5.3,1.4,6.7,3.9c1.4,2.4,1.4,5.3,0,7.7
		l-6.7,11.6L11,13.9C9.6,11.5,9.6,8.6,11,6.2z\"/>
	<circle class=\"pin-map\" cx=\"17.7\" cy=\"10\" r=\"1.7\"/>
</g>
</svg><br>Nahrát bez fotografie</button></a></div></div>" );

	}
	
}

function aboutproject( $section ) {
	if ( $section == "about" ) {
		print("<div class=\"guidepostabout\">
	<div id=\"tabelleabout\"><div id=\"guidetxt\">
	
		<h1>O projektu POSIP</h1>
		<h2>portál silničních problémů</h2>

	</div></div>
	</div> 
	<div id=\"about\">
	<h3>Účel projektu</h3>
	<p>Projekt POSIP, Portál silničních problémů, vznikl za účelem zlepšení bezpečnostní a přehlednostní povahy silnic. Portál si také dává za úkol přenést současné místní silniční problémy do povědomí hlavně správcům silnic na těchto územích, ale i do povědomí veřejnosti. POSIP tedy umožňuje všem účastníkům provozu na pozemních komunikacích podílet se na potencionálním zlepšování dopravní situace v jejich okolí.</p><br>
	<p>Každý řidič se denně na silnicích setkává s množstvím nepřehledných, neoznačených, zničených či špatně označení úseků. Většina z nich se však rozhodne tento problém neřešit a smířit se s ním, nebo na něj neustále nadávat mezi přáteli. Jen velmi malá hrstka z nich se však rozhodne něco s tím udělat a napsat třeba dopis na ředitelství silnic a dálnic, či na jiné příslušné orgány. Vzhledem k tak malému množství odvážlivců však zůstávají tyto prosby nevyslyšené, pakliže tedy vůbec nějaké existují. V dnešní době nemají lidé na nic čas a jsou zvyklí na rychlý způsob života a psát stížnost na problém, se kterým se nějak naučí žít, nebo se mu začnou prostě vyhýbat, nepřipadá vůbec v úvahu.</p><p>
Na množství silničních problémů se pak zanevře, nebo se čeká příliš dlouho, než si ho všimne nějaká osoba za to zodpovědná a rozhodne se problém k radosti řidičů vyřešit. Portál POSIP však dává všem lidem k dispozici možnost se jednoduše a rychle vyjádřit ke stávajícímu stavu a silničním problémům, které je tíží.</p><p><br>
V jednotě a počtu je síla, větší počet lidí, kteří se rozhodnou projevit svůj nesouhlas přinutí zodpovědné osoby se zabývat jejich problémem. Portál POSIP je tedy prostředkem k jednoduchému vyjádření se potenciálně velkého počtu řidičů.</p><p><br>
Portál POSIP ale nemá jediné své využití jako místo, kde se lidé mohou bouřit a nadávat na stav pozemních komunikací a na dopravní značení. Své využití pro něj však najde i druhá strana, tudíž správci silnic. Ať už se jedná o úředníka, který rozhodne, které jámy se opraví a kde se změní značení, nebo o běžného dělníka, který tu jámu má opravit, nebo přidat dopravní značku. Úředník okamžitě ví, kde se problém vyskytl, a tak může rozhodnout o vyřešení. Běžný dělník pak může využít naší mapy s označenými místy s problémy, aby trefil přímo na místo, kde má za úkol vykonat danou práci. V případě, kdy se uživatel navíc rozhodne využít možnosti přidat fotografii, vědí správci silnic s jistotou, jak daný problém přesně vypadá a mohou tak rozhodnout, jakým způsobem jej lze vyřešit bez toho, aby se na místo museli sami dvakrát vydávat.</p><p><br>
V projektu se snažíme, pro uživatele co nejjednodušším a nejrychlejším způsobem, pokrýt největší množství nejčastějších problémů na silnicích, což je hlavním účelem portálu POSIP.
</p><br></div>" );
	}
}

function HelpReport($section){
if ($section=="help"){
	print("<div id=\"helpbg\"><div id=\"help\">
	<h3>Potřebujete pomoci?</h3>
	<p>Algoritmus rozpoznávající GPS koordináty z nahrané fotografie zjišťuje, zda je vaše forografie obsahuje. Pokud Vaše fotografie koordináty neobsahuje, budete automaticky po nahrání přesměrováni k mapě, kde budete moci polohu zadat, a fotografie se pouze přiřadí jako obrazová dokumentace místa.</p>
	<p>Stane-li se chyba v přesměrování, zkuste prosím nahrát fotografii znovu, popřípadě restartujte Váš prohlížeč.</p><br>
	<p>Při připínání špendlíku k mapě si můžete mapu zvětšit, k pohybu v mapě použijte myš nebo v případě používání na chytrém telefonu prsty (mapa se přibližuje kolečkem myši/dvěma prsty, špendlík připnete kliknutím).</p>
	<p>Zadávání do formuláře je dvoufázové, po kliknutí na tlačítko další se vám objeví specifikace vašeho vybraného problému. Po vyplnění požadovaných polí klikněte na nahrát, případ se zavede v naší databázi problémů.</p><br>
	<p>Nevíte-li si stále s čímkoliv rady, můžete nás kontaktovat na <a href=\"mailto:kotasjakubkotas@gmail.com\">
					kotasjakubkotas@gmail.com
				</a></p>
				<div id=\"uploadproblems\">
				<h3>Potíže s nahráváním</h3>
	<p>Při nahrávání si prosím zkontrolujte vaše internetové připojení. Kvůli spotřebě dat Vám doporučujeme nahrávat při připojení na wi-fi.</p>
	<p>Náš projekt je uzpůsoben na standardní formáty fotografií z fotoaparátu chytrých mobilních telefonů, pokud vám systém hlásí nestandardní formát fotografie, zkuste vložit jinou fotografii, popřípadě přenastavit Váš fotoaparát.</p>
	</div>
	<div id=\"toreport\">
	<h3>Nahlásit chybu systému</h3>
	<p>Nalezli jste-li chybu v systému, k jejíž vyřešení nepomohla obnova stránky, restartování prohlížeče ani vymazání souborů v mezipaměti vašeho prohlížeče, obraťte se na nás prosím pomocí tohoto formuláře. Pokusíme se udělat, co bude v našich silách, abychom tyto potíže efektivně odstranili.</p>
	<label>Váš e-mail (nepovinné): </label><input type=\"email\" class=\"border_label\" name=\"email\" placeholder=\"jan.novak@post.cz\"></input><br>
	<textarea name=\"report\" class=\"border_label\" id=\"reporttxt\" rows=\"5\" cols=\"50\">Text Vašeho hlášení...</textarea></input><br><input type=\"submit\" name=\"odeslat\" id=\"toreport_button\">
	</div>
	</div></div>");
	
}
	}

function pinit( $signpost, $listurgency, $containsposition, $latitudeindegrees, $longitudeindegrees, $idactualphoto, $conn ){
	switch ( $signpost ) {
		case "nophoto":
			$url = "index.php?section=form&&signpost=nophoto";
			break;
		case "uploadedphoto":
			$url = "index.php?section=form&&signpost=uploadthephoto";
			break;
	}
	if ( $containsposition == false ) {
	?>
		<div class="flex-element">
			<div id="map"></div>
			<script type="text/javascript" src="JS/javascript-map-deffinition.js" async defer></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvOEY5XfyBWaoNlmEBxMyj8mnkuugQzQ4&callback=createthemap" async defer></script>
		</div>
		<?php
	}
	?>
	<div class="flex-element">
		<form action="<?php $url ?>" method="post" id="first_form">
			<input type="hidden" name="idactualphoto" value="<?php print($idactualphoto) ?>"></input>
			<?php 
		if(isset($_POST["lat"])){
			$latitudeindegrees = $_POST["lat"];
			$longitudeindegrees = $_POST["lng"];
			}
			?>
			<div><label>zeměpisná šířka: </label><input type='text' name="lat" id="lat" value="<?php if(isset($latitudeindegrees)){print($latitudeindegrees);} ?>" />
			</div>
			<div><label>zeměpisná délka: </label><input type='text' name="lng" id='lng' value="<?php if(isset($longitudeindegrees)){print($longitudeindegrees);} ?>" readonly/>
			</div>
			<?php 
		mysqli_query( $conn, "SET CHARACTER SET utf8" );
					$sql = "SELECT issuename, issueid FROM issues ORDER BY issuename";
					$result = mysqli_query( $conn, $sql );
		?>
			<div><label>povaha situace: </label>
				<select name="issueid" class="border_label">
					<?php 
	if(isset($_POST["next"])){$selected_issue=$_POST["issueid"];}
	while ( $row = mysqli_fetch_assoc( $result ) )
					{
		if ($row["issuename"]!="jiné"){
					 print("<option value = \" ".$row["issueid"]."\"");
					 if(isset($selected_issue)){if($selected_issue==$row["issueid"]){print("selected=\"selected\"");}}
					 if(isset($_POST["next"])){print("disabled=\"disabled\"");}
					 print(">".$row["issuename"]."</option>\"");
		} 
		else{
			$jineid=$row["issueid"];
		$jinename=$row["issuename"];
		}
	}
	if(isset($jineid)){ 
					print("<option value = \" ".$jineid."\"");
					if(isset($selected_issue)){if($selected_issue==$jineid){print("selected=\"selected\"");}}
					if(isset($_POST["next"])){print("disabled=\"disabled\"");}
					print(">".$jinename."</option>\"");
					  }
					?>
				</select>
			</div>
			<div><label>akutnost situace: </label>
				<select name="phenomenonurgency" class="border_label">
					<?php 
					for($i=0; $i<count($listurgency); $i++){
					print("<option value = \" $listurgency[$i] \">" . $listurgency[$i] .  "</option>\"");
					}
					?>
				</select>
			</div>
			<?php if(isset($_POST["othertext"])){$othertext=$_POST["othertext"];}?>
			<div><label>jiné podrobnosti o místě: </label><input type="text" class="border_label" name="othertext" value="<?php if (isset($othertext)){ print ($othertext);}?>"></input>
			</div>

			<input type="hidden" name="upload">
			<div> <input type='submit' id="nextbtn" name="next" 
		<?php // disabled  ?>
			value='Další'/> </div>
		</form>
			<script>
//http://jsfiddle.net/hmg08nyk/
   /* $("#lat").keyup(function(){
        console.log($(this).val().length);
        if($(this).val().length)
            $("#nextbtn").prop('disabled', false);
        else
            $("#nextbtn").prop('disabled', true);
    });*/
</script>
		<?php 
	
		$forcedsucces = true;
	if(!isset($url))
	{
		$url = "index.php?section=form&&signpost=uploadthephoto";
		}
		if(isset($_POST["next"]))
	{
		
	print("<form action=\"$url\" method=\"post\">");		
		mysqli_query( $conn, "SET CHARACTER SET utf8" );
					$sql = "SELECT specname, specid FROM specials WHERE issueid =" . $_POST["issueid"] . " ";
					$result = mysqli_query( $conn, $sql );
	print("<div class=\"checks\">");	
		print("<ul>");
			while ( $row = mysqli_fetch_assoc( $result ) ){
									print("<li><input type=\"radio\" name=\"specid\" value=\"".$row["specid"]."\" id=\"".$row["specid"]."\"><label for=\"".$row["specid"]."\">".$row["specname"]."</label><div class=\"check\"><div class=\"inside\"></div></div></li>");
			 }

		
		
?>
		</ul>
	</div>
	<input type="hidden" name="lat" value="<?php if($_POST['lat']!=""){print($_POST['lat']);} else {$chyba="<p class=\"error\">Vyberte prosím polohu na mapě.</p>";}?>">
	<input type="hidden" name="lng" value="<?php print($_POST["lng"]) ?>">
	<input type="hidden" name="issueid" value="<?php print($_POST["issueid"]) ?>">
	<input type="hidden" name="phenomenonurgency" value="<?php print($_POST["phenomenonurgency"]) ?>">
	<input type="hidden" name="othertext" value="<?php print($_POST["othertext"]) ?>">
	<input type="hidden" name="idactualphoto" value="<?php print($_POST["idactualphoto"]) ?>">
<?php if(isset($chyba)){print($chyba);
					   }
					?> 
	<div> <input type='submit' id="uploadbtn" name="save" value='Nahrát'/> </div>

	</form>
	<?php }?> 
	</div>
	<?php
}

function saveOrNotToSave( $data ) {
	$decodeddata = json_decode( $data, true );
	if ( $decodeddata[ "status" ] == "OK" ) {
		if ( $decodeddata[ "results" ][ 0 ][ "address_components" ][ 0 ][ "long_name" ] != "Unnamed Road" ) {
			$city = $decodeddata[ "results" ][ 0 ][ "address_components" ][ 1 ][ "long_name" ];
			$region = $decodeddata[ "results" ][ 0 ][ "address_components" ][ 3 ][ "long_name" ];
			$street = $decodeddata[ "results" ][ 0 ][ "address_components" ][ 0 ][ "long_name" ];
			$succes = true;
		} else {
			$succes = false;
		}
	}
	return $succes;
}

function getPositions( $lattocode, $lngtocode, $conn, $idactualphoto, $url ) {
	$data = file_get_contents( $url );
	$decodeddata = json_decode( $data, true );
	if ( $decodeddata[ "status" ] == "OK" ) {
		if ( $decodeddata[ "results" ][ 0 ][ "address_components" ][ 0 ][ "long_name" ] != "Unnamed Road" ) {
			$issueid = $_POST[ "issueid" ];
			$phenomenonurgency = $_POST[ "phenomenonurgency" ];
			$othertext = $_POST[ "othertext" ];
			$specid = $_POST[ "specid" ];
			mysqli_query( $conn, "SET CHARACTER SET utf8" );
			$sql = "INSERT INTO aboutphenomenon (latitude, longitude, issueid, specid, phenomenonurgency, othertext, idphoto) VALUES ($lattocode, $lngtocode, \"$issueid\",  $specid, \"$phenomenonurgency\", \"$othertext\", $idactualphoto)";
			if ( !mysqli_query( $conn, $sql ) ) {
				print( " failed to write data " );
			}
			$sql = "SELECT idphenomenon AS idphen FROM aboutphenomenon ORDER BY idphenomenon DESC LIMIT 0, 1";
			$result = mysqli_query( $conn, $sql );
			while ( $row = mysqli_fetch_assoc( $result ) ) {
				$idphenomenon = $row[ "idphen" ];
			}
			mysqli_query( $conn, "SET CHARACTER SET utf8" );
			$city = $decodeddata[ "results" ][ 0 ][ "address_components" ][ 1 ][ "long_name" ];
			$region = $decodeddata[ "results" ][ 0 ][ "address_components" ][ 3 ][ "long_name" ];
			$street = $decodeddata[ "results" ][ 0 ][ "address_components" ][ 0 ][ "long_name" ];
			$sql = "INSERT INTO redablepossition (city, region, street, idphenomenon) VALUES (\"$city\", \"$region\", \"$street\", \"$idphenomenon\")";
			mysqli_query( $conn, $sql );
			$succes = true;
		} else {
			$succes = false;
		}
	}
	if ( $succes == true ) {
		header( "Location: " . $_SERVER[ "PHP_SELF" ] );
	} else {
		print( "<div>" );
		print( "Poloha nebyla pravděpodobně správně zadána. Zkuste to prosím znova. Děkujeme." );
		print( "</div>" );
	}
}

function theform( $section, $signpost ) {
	
			$forcedsucces = true;
			$idactualphoto = 0;
			$conn = createTheConnection();
	$listurgency = array( "1 - nejakutnější", "2 - středně akutní", "3 - příliš nespěchá" );
	if ( ( $section == "form" ) && ( $signpost == "nophoto" ) ) {	
		print("<div id=\"content\">");
		$containsposition = false;
		$latitudeindegrees = false;
		$longitudeindegrees = false;
		pinit( $signpost, $listurgency, $containsposition, $latitudeindegrees, $longitudeindegrees, $idactualphoto, $conn );
		$idactualphoto = 0;
		if ( isset( $_POST[ "save" ] ) ) {
			$lattocode = $_POST[ "lat" ];
			$lngtocode = $_POST[ "lng" ];
			$url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=$lattocode,$lngtocode&result_type=route&key=AIzaSyAvOEY5XfyBWaoNlmEBxMyj8mnkuugQzQ4";
			getPositions( $lattocode, $lngtocode, $conn, $idactualphoto, $url );
		}	print("</div>");
	}
	if(($section == "homepage") && ($signpost == "uploadthephoto")){	
			?>
			<div id="upload_photo_div">
			<form action="index.php?section=form&&signpost=uploadthephoto" method="post" enctype="multipart/form-data">
				<input type="file" name="file" id="choosefile">
				<input id="uploadimg" type="submit" name="upload" value="Nahrát">
			</form>
		</div>
			<?php		
} 
	if ( ( $section == "form" ) && ( $signpost == "uploadthephoto" ) ) {
		print("<div id=\"content\">");
		$containsposition = true;
		$statusMsg = '';
		$targetDir = "uploads/";
		$allowTypes = array( 'jpg', 'png', 'jpeg', 'pdf' );
		if ( isset( $_POST[ 'upload' ] ) ) {
			$succes = false;
			if ( isset( $_POST[ "upload" ] ) && !empty( $_FILES[ "file" ][ "name" ] ) ) {
				$fileName = basename( $_FILES[ "file" ][ "name" ] ); 
				$targetFilePath = $targetDir . $fileName;
				$fileType = pathinfo( $targetFilePath, PATHINFO_EXTENSION );
				if ( in_array( $fileType, $allowTypes ) ) {
					$img = $_FILES[ "file" ][ "tmp_name" ];
					$exif = exif_read_data( $img, 0, true ); 
					if ( ( !empty( $exif[ 'GPS' ] ) ) && ( isset( $exif[ 'GPS' ][ 'GPSLatitude' ] ) ) ) {
						$latitude[ 'degrees' ] = getCoordinates( $exif[ 'GPS' ][ 'GPSLatitude' ][ 0 ] );
						$latitude[ 'minutes' ] = getCoordinates( $exif[ 'GPS' ][ 'GPSLatitude' ][ 1 ] );
						$latitude[ 'seconds' ] = getCoordinates( $exif[ 'GPS' ][ 'GPSLatitude' ][ 2 ] );
						$latitudeindegrees = $latitude[ "degrees" ] + ( $latitude[ 'minutes' ] / 60 ) + ( $latitude[ 'seconds' ] / 3600 );
						$longitude[ 'degrees' ] = getCoordinates( $exif[ 'GPS' ][ 'GPSLongitude' ][ 0 ] );
						$longitude[ 'minutes' ] = getCoordinates( $exif[ 'GPS' ][ 'GPSLongitude' ][ 1 ] );
						$longitude[ 'seconds' ] = getCoordinates( $exif[ 'GPS' ][ 'GPSLongitude' ][ 2 ] );
						$longitudeindegrees = $longitude[ "degrees" ] + ( $longitude[ 'minutes' ] / 60 ) + ( $longitude[ 'seconds' ] / 3600 );
						$lattocode = $latitudeindegrees;
						$lngtocode = $longitudeindegrees;
						$url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=$lattocode,$lngtocode&result_type=route&key=AIzaSyAvOEY5XfyBWaoNlmEBxMyj8mnkuugQzQ4";
						$data = file_get_contents( $url );
						$succes = saveOrNotToSave( $data );
						if ( ( $succes == true ) && ( move_uploaded_file( $_FILES[ "file" ][ "tmp_name" ], $targetFilePath ) ) ) {
							$forcedsucces = true;
							$sql = "INSERT into images (file_name, uploaded_on) VALUES ('" . $fileName . "', NOW())";
							$insert = mysqli_query( $conn, $sql );
							if ( $insert ) {
								$statusMsg = $statusMsg . "The file " . $fileName . " has been uploaded successfully. ";
							} else {
								$statusMsg = $statusMsg . "File upload failed, please try again. ";
							}
							
							
							?>
								<div id="map"></div>
								<?php
							 	require( "JS/third-map-definition.php" ); 
							?>	
								<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvOEY5XfyBWaoNlmEBxMyj8mnkuugQzQ4&callback=createthirdmap" async defer></script>
						<?php
							
						} else {
							print( "Omlouváme se, ale fotografii nelze nahrát, pravděpodobně obsahuje nekorektní GPS údaje.</br>" );
							print( "<a href=\"index.php?section=form&&signpost=uploadthephoto\">ZKUSIT ZNOVU</a>" );
							print( "<a href=\"index.php?section=form&&signpost=nophoto\">VYBRAT POLOHU Z MAPY</a>" );
							$forcedsucces = false;
			
						}
					} else {
						if ( move_uploaded_file( $_FILES[ "file" ][ "tmp_name" ], $targetFilePath ) ) {
							$sql = "INSERT into images (file_name, uploaded_on) VALUES ('" . $fileName . "', NOW())";
							$insert = mysqli_query( $conn, $sql );
							if ( $insert ) {
								$statusMsg = $statusMsg . "The file " . $fileName . " has been uploaded successfully. ";
							} else {
								$statusMsg = $statusMsg . "File upload failed, please try again. ";
							}
						} else {
							$statusMsg = $statusMsg . "Sorry, there was an error uploading your file. ";
						}
						$statusMsg = $statusMsg . "Zadaná fotografie bohužel neobsahuje zeměpisné koordináty. ";
						print( "Zadaná fotografie bohužel neobsahuje zeměpisné koordináty." );
						$latitudeindegrees = false;
						$longitudeindegrees = false;
						$containsposition = false;
						mysqli_query( $conn, "SET CHARACTER SET utf8" );
						$sql = "SELECT idphoto FROM images ORDER BY idphoto DESC LIMIT 0, 1";
						$result = mysqli_query( $conn, $sql );
						while ( $row = mysqli_fetch_assoc( $result ) ) {
							$idactualphoto = $row[ "idphoto" ];
						}
						pinit( $signpost, $listurgency, $containsposition, $latitudeindegrees, $longitudeindegrees, $idactualphoto, $conn );
						$forcedsucces = false;
						
					}
				} else {
					$statusMsg = $statusMsg . 'Omlouváme se, ale pouze tyto formáty lze nahrát: JPG, JPEG, PNG, PDF. ';
				}
				
				$conn = createTheConnection();
		mysqli_query( $conn, "SET CHARACTER SET utf8" );
				$sql = "SELECT idphoto FROM images ORDER BY idphoto DESC LIMIT 0, 1";				
				$result = mysqli_query( $conn, $sql );
				while ( $row = mysqli_fetch_assoc( $result ) ) {
					$idactualphoto = $row[ "idphoto" ];
				}
				//echo $statusMsg;
			}
		
			if ( $forcedsucces == true ) {
				$succes = true;
			}
			else{$succes = false;}
			if ( $succes == true ) {
				if ( isset( $_POST[ "lng" ] ) ) {
					$latitudeindegrees = $_POST[ "lat" ];
					$longitudeindegrees = $_POST[ "lng" ];
				}
				if($succes == true){
				pinit( $signpost, $listurgency, $containsposition, $latitudeindegrees, $longitudeindegrees, $idactualphoto, $conn );
					
				}
			}
		} else {
			$statusMsg = $statusMsg . 'Vyberte prosím fotografii k nahrání. ';
		}
		if ( isset( $_POST[ "save" ] ) ) {
			$lattocode = $_POST[ "lat" ];
			$lngtocode = $_POST[ "lng" ];
			$idactualphoto = $_POST[ "idactualphoto" ];
			$url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=$lattocode,$lngtocode&result_type=route&key=AIzaSyAvOEY5XfyBWaoNlmEBxMyj8mnkuugQzQ4";
			getPositions( $lattocode, $lngtocode, $conn, $idactualphoto, $url );
		}
		mysqli_close( $conn );
	}
	print("</div>");
}

function getCoordinates( $expr ) {
	$expr_p = explode( '/', $expr );
	return $expr_p[ 0 ] / $expr_p[ 1 ];
}

function writeGallery($row,$i,$result){

			while ( $row = mysqli_fetch_assoc( $result ) ) {
					$i++;
					$url = "uploads/" . $row[ "file_name" ];
					print( "<div class=\"gallery_element\"><div class=\"infodiv\"><h4>" . $row[ "city" ] . ": " . $row[ "issuename" ] . "</h4><p>
		Kraj: " . $row[ "region" ] . "<br>Město: " . $row[ "city" ] . ", na ulici: " . $row[ "street" ] . "<br>Povaha situace: " . $row[ "issuename" ] . "<br>Specifikace: " . $row[ "specname" ] );
					if ( $row[ "othertext" ] != "" ) {
						print( "<br>Vlastní komentář uživatele: " . $row[ "othertext" ]."</p>"  );
					}
					if ( $row[ "idphoto" ] != 0 ) {
						print( "</br>" . "<div class=\"fotovgalerii\"><img src=$url alt=\"\" /></div>" );
					}
				print( "</div><div class=\"ratingdiv\"><form action=\"index.php?section=gallery\" method=\"post\">
				<label>".$row["likes"]."</lapel>
				<button type=\"submit\" name=\"like\" id=\"likebtn\"><i class=\"fas fa-thumbs-up\"></i></button><input type=\"hidden\" name=\"helpidphenomenon\"  value=". $row[ "idphenomenon" ] ." >
				<label>".$row["dislikes"]."</lapel>
				<button type=\"submit\" name=\"dislike\" id=\"dislikebtn\"><i class=\"fas fa-thumbs-down\"></i></button><input type=\"hidden\" name=\"helpidphenomenon\"  value=". $row[ "idphenomenon" ] ." >
				<input type=\"submit\" name=\"done\" id=\"donebtn\" value=\"✓ vyřešeno\"><input type=\"hidden\" name=\"helpidphenomenon\"  value=". $row[ "idphenomenon" ] ." ></form></div>" );
					print( "</div>" );
				
				}
	
}
function thegallery( $section ) {
	
if ( $section == "gallery" ) {
		
		if (isset($_POST["done"])){
					$helpidphenomenon=$_POST["helpidphenomenon"];
		if(isset($helpidphenomenon)){
			$sqlnew="UPDATE aboutphenomenon SET del = 1 WHERE aboutphenomenon.idphenomenon=".$helpidphenomenon." ";
		$conn = createTheConnection();
		$result = mysqli_query( $conn, $sqlnew );
		}
		
	}
	
	if (isset($_POST["like"])){
					$helpidphenomenon=$_POST["helpidphenomenon"];
		if(isset($helpidphenomenon)){
			
			$sqlnew="SELECT * FROM aboutphenomenon WHERE aboutphenomenon.idphenomenon=".$helpidphenomenon." ";
			print($sqlnew);
		$conn = createTheConnection();
		$result = mysqli_query( $conn, $sqlnew );
			while ( $row = mysqli_fetch_assoc( $result ) ) {
				$likes=$row["likes"];
		$increased= $likes+1;}
			if(isset($increased)){
				$sqlnew="UPDATE aboutphenomenon SET likes =".$increased." WHERE aboutphenomenon.idphenomenon=".$helpidphenomenon." ";
		$conn = createTheConnection();
		$result = mysqli_query( $conn, $sqlnew );
			}
			
		}
		
	}
	
	if (isset($_POST["dislike"])){
					$helpidphenomenon=$_POST["helpidphenomenon"];
		if(isset($helpidphenomenon)){
			
			$sqlnew="SELECT * FROM aboutphenomenon WHERE aboutphenomenon.idphenomenon=".$helpidphenomenon." ";
			print($sqlnew);
		$conn = createTheConnection();
		$result = mysqli_query( $conn, $sqlnew );
			while ( $row = mysqli_fetch_assoc( $result ) ) {
				$dislikes=$row["dislikes"];
		$increased= $dislikes+1;}
			if(isset($increased)){
				$sqlnew="UPDATE aboutphenomenon SET dislikes =".$increased." WHERE aboutphenomenon.idphenomenon=".$helpidphenomenon." ";
		$conn = createTheConnection();
		$result = mysqli_query( $conn, $sqlnew );
			}
			
		}
		
	}
				?>
		<div id="galmap"></div>
		<?php require( "JS/second-map-definition.php" ); ?>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvOEY5XfyBWaoNlmEBxMyj8mnkuugQzQ4&callback=createsecondmap" async defer></script>
		<div id="gall_menu">
		<div class="gall_menu_item">

			<?php	
	$conn = createTheConnection();
	mysqli_query( $conn, "SET CHARACTER SET utf8" );
					$sql = "SELECT issuename, issueid FROM issues ORDER BY issuename";
					$result = mysqli_query( $conn, $sql ); ?>
					<form action="index.php?section=gallery" method="post">
				<select name="filter_issueid" class="search_issues">
					<?php 
	if (isset($_POST["search-for_issues"])){$filter_issueid=($_POST["filter_issueid"]);} 
	while ( $row = mysqli_fetch_assoc( $result ) )
					{
		if ($row["issuename"]!="jiné"){
		print("<option value = \"".$row["issueid"]."\"");
					 	if(isset($filter_issueid)){if($filter_issueid==$row["issueid"]){print(" selected=\"selected\"");}}
					 print(">".$row["issuename"]."</option>");}
	else{
		$jineid=$row["issueid"];
		$jinename=$row["issuename"];
	}
	}
	if(isset($jineid)){ 
					print("<option value = \" ".$jineid."\"");
					if(isset($selected_issue)){if($selected_issue==$jineid){print("selected=\"selected\"");}}
					if(isset($_POST["next"])){print("disabled=\"disabled\"");}
					print(">".$jinename."</option>\"");
					  }
					?>
						</select>
						
					<input type="submit" name="search-for_issues" id="search-for_issues" value="vyhledat">
				<?php if (isset($_POST["search-for_issues"])){$filter_issueid=($_POST["filter_issueid"]);} ?>
				<input type="hidden" name="issueid" value="<?php if(isset($_POST["filter_issueid"])){print($_POST["filter_issueid"]);} ?>">
					<input type="hidden" name="section" value="gallery">
						</form>
			</div>
			<?php
			if ( isset( $_REQUEST[ "hledat" ] ) ) {if ( $_REQUEST[ "hledat" ] != "" ) {$hledat = $_REQUEST[ "hledat" ];}} ?>
			<div class="gall_menu_item">
				<form action="index.php?section=gallery" method="get">
					<input type="text" id="search_label" name="hledat" value="<?php if(isset($hledat)){print($hledat);} ?>">
					<input type="submit" name="search_for" id="search_for" value="vyhledat">
					<input type="hidden" name="section" value="gallery">
				</form>
			</div>
		</div>
		<?php
		print( "<div id=\"gallery_content\">" );
		if ( isset( $_REQUEST[ "hledat" ] ) ) {
			if ( $_REQUEST[ "hledat" ] != "" ) {
				$hledat = $_REQUEST[ "hledat" ];
				$conn = createTheConnection();
				if ( mysqli_connect_error() ) {
				}else{
					
				mysqli_query( $conn, "SET CHARACTER SET utf8" );
				$sql = "SELECT aboutphenomenon.idphenomenon, issues.issuename, specials.specname, aboutphenomenon.phenomenonurgency, aboutphenomenon.idphoto, aboutphenomenon.othertext, aboutphenomenon.del, aboutphenomenon.likes, aboutphenomenon.dislikes, images.file_name, redablepossition.region, redablepossition.city, redablepossition.street FROM aboutphenomenon LEFT JOIN images ON aboutphenomenon.idphoto = images.idphoto LEFT JOIN redablepossition ON aboutphenomenon.idphenomenon = redablepossition.idphenomenon LEFT JOIN issues ON aboutphenomenon.issueid = issues.issueid LEFT JOIN specials ON aboutphenomenon.specid = specials.specid WHERE (INSTR(upper(`region`),  upper('{$hledat}')) > 0 OR INSTR(`city`,  '{$hledat}') > 0) AND ( aboutphenomenon.del=0) ";
				$result = mysqli_query( $conn, $sql );
				$i = 0;
				
			writeGallery($row,$i,$result);
				mysqli_close( $conn );}
			}
			
			if(trim($_REQUEST[ "hledat" ])==""){	
				$conn = createTheConnection();
			if ( mysqli_connect_error() ) {
				print( "Připojení selhalo: " . mysqli_connect_error() ); 
			}else{
			
			mysqli_query( $conn, "SET CHARACTER SET utf8" );
			$sql = "SELECT aboutphenomenon.idphenomenon, issues.issuename, specials.specname, aboutphenomenon.phenomenonurgency, aboutphenomenon.idphoto, aboutphenomenon.othertext,aboutphenomenon.del, aboutphenomenon.likes, aboutphenomenon.dislikes, images.file_name, redablepossition.region, redablepossition.city, redablepossition.street FROM aboutphenomenon LEFT JOIN images ON aboutphenomenon.idphoto = images.idphoto LEFT JOIN redablepossition ON aboutphenomenon.idphenomenon = redablepossition.idphenomenon LEFT JOIN issues ON aboutphenomenon.issueid = issues.issueid LEFT JOIN specials ON aboutphenomenon.specid = specials.specid";
			$result = mysqli_query( $conn, $sql );
			$i = 0;
		
			writeGallery($row,$i,$result);
			mysqli_close( $conn );}
			}

		} else if(isset($_POST['search-for_issues'])){ if(isset($filter_issueid)){
				
			$conn = createTheConnection();
				if ( mysqli_connect_error() ) {
				}else{
					
			// print($filter_issueid);
				mysqli_query( $conn, "SET CHARACTER SET utf8" );
				$sql = "SELECT aboutphenomenon.idphenomenon, issues.issuename, specials.specname, aboutphenomenon.phenomenonurgency, aboutphenomenon.idphoto, aboutphenomenon.othertext,aboutphenomenon.del, aboutphenomenon.likes, aboutphenomenon.dislikes, images.file_name, redablepossition.region, redablepossition.city, redablepossition.street FROM aboutphenomenon LEFT JOIN images ON aboutphenomenon.idphoto = images.idphoto LEFT JOIN redablepossition ON aboutphenomenon.idphenomenon = redablepossition.idphenomenon LEFT JOIN issues ON aboutphenomenon.issueid = issues.issueid LEFT JOIN specials ON aboutphenomenon.specid = specials.specid WHERE aboutphenomenon.issueid =" . $filter_issueid . " AND aboutphenomenon.del=0 ";
				$result = mysqli_query( $conn, $sql );
				$i = 0;
				
			writeGallery($row,$i,$result);
				mysqli_close( $conn );}
		}}
	else {

			$conn = createTheConnection();
			if ( mysqli_connect_error() ) {
			}else{
			mysqli_query( $conn, "SET CHARACTER SET utf8" );
			$sql = "SELECT issues.issuename, aboutphenomenon.idphenomenon, specials.specname, aboutphenomenon.del, aboutphenomenon.likes, aboutphenomenon.dislikes, aboutphenomenon.phenomenonurgency, aboutphenomenon.idphoto, aboutphenomenon.othertext, images.file_name, redablepossition.region, redablepossition.city, redablepossition.street FROM aboutphenomenon 
			
			LEFT JOIN images ON aboutphenomenon.idphoto = images.idphoto 
			LEFT JOIN redablepossition ON aboutphenomenon.idphenomenon = redablepossition.idphenomenon 
			LEFT JOIN issues ON aboutphenomenon.issueid = issues.issueid 
			LEFT JOIN specials ON aboutphenomenon.specid = specials.specid
			WHERE aboutphenomenon.del=0 
			ORDER BY aboutphenomenon.idphenomenon DESC";
			$result = mysqli_query( $conn, $sql );
			$i = 0;
		
			writeGallery($row,$i,$result);
			mysqli_close( $conn );}	
			}
			

		}
	print("</div>");
}

?>