<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>POSIP</title>
<link href="https://fonts.googleapis.com/css?family=Assistant:400,600,700,800|Lato:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="CSS/css.css" rel="stylesheet" type="text/css">
	<link href="CSS/mapcss.css" rel="stylesheet" type="text/css">
	<link href="CSS/navcss.css" rel="stylesheet" type="text/css">
	<link href="CSS/checkscss.css" rel="stylesheet" type="text/css">
	<link href="CSS/gallery.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
require( "library.php" );
$section = "";
$signpost = "";
if ( isset( $_REQUEST[ "section" ] ) ) {
	$section = $_REQUEST[ "section" ];
}
switch ( $section ) {
	case "homepage":
		$pagename = "POSIP";
		break;
	case "gallery":
		$pagename = "galerie";
		break;
	case "form":
		$pagename = "POSIP-formulář";
		break;
	case "about":
		$pagename = "O projektu";
		break;
	case "help":
		$pagename = "Pomoc";
		break;
	default:
		$section = "homepage";
		$pagename = "POSIP";
}
if ( isset( $_REQUEST[ "signpost" ] ) ) {
	$signpost = $_REQUEST[ "signpost" ];
}

?>
<body>
	<div id="nav">
		<nav class="responsive-nav" id="js-responsive-nav">
			<ul class="responsive-nav__list">
				<a href="index.php?section=homepage">
					<li class="responsive-nav__item">Nahrát</li>
				</a>
				<a href="index.php?section=gallery">
					<li class="responsive-nav__item">Galerie</li>
				</a>
				<a href="index.php?section=about">
					<li class="responsive-nav__item">O projektu</li>
				</a>
			</ul>
		</nav>
	</div>
	<script>

		var responsiveNav = document.getElementById( 'js-responsive-nav' );
		var responsiveNavBreakpoint = 720;
		responsiveNav.addEventListener( 'click', function () {
			if ( window.innerWidth < responsiveNavBreakpoint ) {
				responsiveNav.classList.toggle( "is-open" );
			}
		} );
	</script>
	

<?php
		thequestionbuble( $section );
		theform( $section, $signpost );
		thegallery( $section );
		aboutproject($section);
		HelpReport($section);
	?>
	
	<footer>
<div id="footerflex">
	<div class="footer_flex_element">
		<ul><li>
				<a href="index.php?section=help#help"><p>Pořebujete pomoci?</p></a>
			</li>
			<li>
				<a href="index.php?section=help#uploadproblems"><p>Potíže s&nbsp;nahráváním</p></a>
			</li>
			<li>
				<a href="index.php?section=help#toreport"><p>Nahlásit chybu systému</p></a>
			</li>
		</ul>
	</div>
	<div class="footer_flex_element">
		<ul>
			<li>
				<a href="mailto:kotasjakubkotas@gmail.com">
					<p>kotasjakubkotas@gmail.com</p>
				</a>
			</li>
			<li>
				<p>+420 773 260 353</p>
			</li>
			<li>

				<p>nám.&nbsp;T.&nbsp;G.&nbsp;Masaryka 2734-9, 760&nbsp;01 Zlín</p>

			</li>
		</ul>
	</div>
	<div class="footer_flex_element">
		<a href="http://www.gjszlin.cz/crossing/">
			<p>Gymnázium a JŠ Zlín</p>
		</a>
		<a href="http://www.soc.cz/">
			<p>SOČ</p>
		</a>
		
	</div>
		</div>
	</footer>
</body>

</html>