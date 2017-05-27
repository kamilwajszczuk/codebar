
<html lang="pl-PL">
	<head>
		<title> Codebar - Strony i aplikacje internetowe </title>
		<link href="https://fonts.googleapis.com/css?family=Sarpanch" rel="stylesheet">
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="stylesheet" href="css/slider.css" />
		<link rel="stylesheet" href="css/fontello.css" type="text/css" />
		<link rel="icon" type="image/png" href="icon.png">
		<meta name="description" content="Strony www, aplikacje internetowe, aplikacje biurowe w chmurze">
		
	</head>
		<body>
			<header>
				<img src="ll.png" style="float:left;">
				<div class="naglowek">odebar <i class="demo-icon icon-tablet"></i>
				<i class="demo-icon icon-laptop"></i>
				<i class="demo-icon icon-mobile"></i>
				<b style="font-size:25px">Strony i aplikacje internetowe</b>
				</div>
				
				<div class="menu1">
					<a href="index.php">O nas</a>
					<a href="oferta.php">Oferta</a>
					<!--<a href="realizacje.php">Realizacje</a>-->
					<a href="kontakt.php" style="border-right:solid 1px white;">Kontakt</a>
				</div>
			</header>
			
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
				<div class="kontakt">
					<div id="formularz">
						Kontakt:<br/><br/>
							<form action="obsluzformulaz.php" method="post">
							<label>Imię:<br/><input type="text" name="imie" /></label><br/>
							<label>E-mail:<br/><input type="text" name="mail" /></label><br/>
							<label>Firma:<br/><select name="firma">
											<option>Firma</option>
											<option>Osoba prywatna</option>
										</select></label><br/>
							<label>Wiadomość:<br/><textarea name="wiadomosc"  rows="5"></textarea></label><br/>
							<input type="submit" value="wyślij" />
							</form>
					</div>
				</div>
				<div class="kontakt">
					<img src="ll1.png" style="float:left;"><br/>
						<div id="kon">biuro@codebar.pl<br/>
						Tel. 883 063 502 <br/>
						adres do korespondencji:<br/>
						Suwalska 31 / 67	<br/>
						03-259 Warszawa	</div>
					<iframe src=https://maps.googleapis.com/maps/api/staticmap?key=YOUR_API_KEY&center=-33.9,151.14999999999998&zoom=12&format=png&maptype=roadmap&style=color:0x2859eb&style=element:geometry%7Ccolor:0xf5f5f5&style=element:labels.icon%7Cvisibility:off&style=element:labels.text.fill%7Ccolor:0x616161&style=element:labels.text.stroke%7Ccolor:0xf5f5f5&style=feature:administrative.land_parcel%7Celement:labels.text.fill%7Ccolor:0xbdbdbd&style=feature:poi%7Celement:geometry%7Ccolor:0xeeeeee&style=feature:poi%7Celement:labels.text.fill%7Ccolor:0x757575&style=feature:poi.park%7Celement:geometry%7Ccolor:0xe5e5e5&style=feature:poi.park%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&style=feature:road%7Celement:geometry%7Ccolor:0xffffff&style=feature:road.arterial%7Celement:labels.text.fill%7Ccolor:0x757575&style=feature:road.highway%7Celement:geometry%7Ccolor:0xdadada&style=feature:road.highway%7Celement:labels.text.fill%7Ccolor:0x616161&style=feature:road.local%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&style=feature:transit.line%7Celement:geometry%7Ccolor:0xe5e5e5&style=feature:transit.station%7Celement:geometry%7Ccolor:0xeeeeee&style=feature:water%7Celement:geometry%7Ccolor:0xc9c9c9&style=feature:water%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&size=480x360 </iframe>
				</div>
			
			<div style="clear:both"></div>
			<div id="footer">
				<a href="index.php">O nas</a>
					<a href="oferta.php">Oferta</a>
					<!--<a href="realizacje.php">Realizacje</a>-->
					<a href="kontakt.php" style="border-right:solid 1px white;">Kontakt</a><br/>
					<p>&copy Codebar 2016</p>
			</div>
			<script src="js/jquery.js"></script>
			<script src="js/slider.js"></script>
			
		</body>
</html>