<!DOCTYPE html>
<html lang="pl-PL">
	<head>
		<title> Codebar - Strony i aplikacje internetowe </title>
		<link href="https://fonts.googleapis.com/css?family=Sarpanch" rel="stylesheet">
		<link rel="stylesheet" href="style.css" type="text/css" />
		<!--<link rel="stylesheet" href="css/slider.css" />-->
		<link rel="stylesheet" href="css/fontello.css" type="text/css" />
		<link rel="stylesheet" href="animate.css" />
		<link rel="icon" type="image/png" href="icon.png">
		<meta name="google-site-verification" content="OHha9bAK-JO8AM5ZB5g7mlbDvuBok5UySy4F4949A0M" />
		<meta name="description" content="Strony www, aplikacje internetowe, aplikacje biurowe w chmurze">
		<meta name="keywords" content="strony www, aplikacje internetowe, crm, sstrony internetowe, wizytówka">
		<script src="jquery.scrollTo.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="main.js"></script>
	   
	<script>
		jQuery(function($)
		{
			//zresetuj scrolla
			$.scrollTo(0);
			
			$('#link1').click(function() { $.scrollTo($('#onas'), 500); });
			$('#link2').click(function() { $.scrollTo($('#oferta'), 500); });
			$('#link3').click(function() { $.scrollTo($('#kontakt'), 500); });
			
	
			$('.scrollup').click(function() { $.scrollTo($('body'), 1000); });
		}
		);
		
		//pokaż podczas przewijania
		$(window).scroll(function()
		{
			if($(this).scrollTop()>300) $('.scrollup').fadeIn();
			else $('.scrollup').fadeOut();		
		}
		);
	</script>
	</head>
		<body>
			<header>
				
				<div class="naglowek"><span>CODEBAR </span>
				<hr class="animated fadeInLeft" noshade size="3" align="left">
				<p>Strony i aplikacje internetowe</p>
				</div>
				<a href="#" class="scrollup"></a>
				<div class="menu1">
					<a id="link1" href="#onas" style="border-right:solid 1px #aaa;">O nas</a>
					<a id="link2" href="#oferta" style="border-right:solid 1px #aaa;">Oferta</a>
					<!--<a href="realizacje.php">Realizacje</a>-->
					<a id="link3" href="#kontakt" >Kontakt</a>
				</div>
				
			</header>
			<!--
			<div class="slider">
				<div class="slide-viewer">
					<div class="slide-group">
						<div class="slide slide-1">
						  <img src="slide.png" style="width:100%">
						</div>
						
						<div class="slide slide-2">
						  <img src="slide1.png" style="width:100%">
						</div>
						
						<div class="slide slide-3">
						  <img src="slide2.png" style="width:100%">
						</div>
					</div>	
				</div>
			</div>
				-->
			
			<div class="lewa">
				<h1 id="onas">O nas</h1>
				<hr class="animated fadeInLeft" noshade size="2" align="left" color="#191749">
			<p>Zajmujemy się tworzeniem nowoczesnych stron internetowych
			oraz oprogramowania pod witryny internetowe. W naszej pracy
			wykorzystujemy wachlarz najnowszych technologii, dzięki czemu
			nasze strony są nowoczesne i zgodne z trendami obecnie
			panującymi w internecie.</p>
			</div>
			
			<div class="lewa">
				<h1 id="oferta">Oferta</h1>
				<hr    class="animated fadeInLeft"noshade size="2" align="left" color="#191749">
			   <p>Oferujemy programowanie na zamówienie – mini crm-y przeznaczone dla małych i średnich firm, pozwalające
				na przechowywanie danych firmowych w chmurze.</p> 
				<p>Dedykowane rozwiązania ułatwiają prowadzenie działalności.
				Dzięki temu że dane przechowywane są w chmurze, mają Państwo możliwość dostępu do danych poza firmą.
				Dane są bezpieczne, ponieważ przechowują je Państwo na własnych hostingach.</p>
				<br/>
				<ul>Korzyści:
				<li>Nie potrzebują Państwo sieci firmowej ani serwera - wystarczą urządzenia z dostępem do internetu</li>
				<li>Dane są Państwa własnością i tylko Państwo mają do nich dostęp</li>
				<li>Systemy są tworzone pod Państwa wymagania dzięki czemu już na etapie tworzenia, będzie kłądziony nacisk
				na intuicyjność korzystania z programu</li>
				<li>Program jest Państwa własnością, dzięki czemu nie muszą Państwo płacić abonamentu za usługę</li>
				<li>Dostęp do danych poza miejcem pracy</li>
				</ul>
			</div>
			<div class="kontakt">
					
						<h1 id="kontakt">Kontakt</h1>
						<hr class="animated fadeInLeft" noshade size="2" align="left" color="#191749">
						<br/>
						<div id="formularz">
							<form action="obsluzformulaz.php" method="post">
							<label><input type="text" placeholder="Imię" onfocus="this.placeholder=''" onblur="this.placeholder='Imię'" name="imie"/></label>
							<label><input type="text" placeholder="Adres mailowy" onfocus="this.placeholder=''" onblur="this.placeholder='Adres mailowy'" name="mail" /></label>
							<label><textarea type="text" placeholder="Treść wiadomości" onfocus="this.placeholder=''" onblur="this.placeholder=''Treść wiadomości" name="wiadomosc"></textarea></label><br/>
							<input type="submit" value="Wyślij" />
							</form>
					</div>
			</div>
				
					 <div id="mapa">
							<h1>Tu nas znajdziesz</h1>
							<hr class="animated fadeInLeft" noshade size="2" align="left" color="#191749">
							</br>
							<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2440.1384087466217!2d21.037251315353536!3d52.29534226060718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471eceb713c2dec1%3A0xf60c839871c816a8!2sSuwalska+31%2C+Warszawa!5e0!3m2!1spl!2spl!4v1490449342914" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
		  <div id="map"></div>
			
			<div id="footer">
					<div id="footerr">
					<ul>
					<li>CODEBAR</li>
					<hr noshade size="3" align="left">
					<li>Suwalska 31 / 67</li>
					<li>03-259 Warszawa</li>
					</ul>
					</div>
					<div id="footerp">
					<p>Tel. 883 063 502 </p>
					<p>biuro@codebar.pl</p></div>
				
					
			</div>
             
			<script src="js/jquery.js"></script>
			<script src="http://maps.googleapis.com/maps/api/js"></script>
			 <script src="jquery.scrollTo.min.js"></script>
			
		</body>
					
</html>