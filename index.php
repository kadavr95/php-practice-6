<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" integrity="sha384-zm3nV72ZseVXQf1A4MjCECEgArFvdcPEUUc9iF+UBbfALpO2sUdjKGQriXbM4z+R" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="./stylesheet.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous" defer></script>
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" integrity="sha384-NHtbx1Hf6ctHNdZmU28YfhGjB63gcU1YU64ttM+c0RxMKNBj67j+N/axpqTfdffo" crossorigin="anonymous" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js" integrity="sha384-nuT0qw6vBhqN718uyKaI6w1EXH49c5XiMUqmHEEiJadrKmJtmQOVVsd8vTgBpr8h" crossorigin="anonymous" defer></script>
	<script type="text/javascript" src="/global/site-files/javascript.js" defer></script>
	<script type="text/javascript" src="./javascript.js" defer></script>
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#161616">
	<meta name="apple-mobile-web-app-title" content="Dimini Inc.">
	<meta name="application-name" content="Dimini Inc.">
	<meta name="msapplication-TileColor" content="#161616">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta name="viewport" content="initial-scale=1" id="viewport">
	<meta name="mailru-domain" content="8D5ZHxJsjMRCp9En" />
	<title>A Social Network - Dimini Inc.</title>
	<meta name="description" content="A social network - Dimini Inc."> 
	<link rel="canonical" href="https://asocialnetwork.dimini.tk"> 
	<link rel="alternate" hreflang="en" href="https://asocialnetwork.dimini.tk/en" /> 
	<link rel="alternate" hreflang="ru" href="https://asocialnetwork.dimini.tk/ru" /> 
	<meta property="og:title" content="a social network - Dimini Inc." /> 
	<meta property="og:type" content="website" /> 
	<meta property="og:url" content="https://asocialnetwork.dimini.tk" /> 
	<meta property="og:image" content="./asocialnetwork.png" /> 
	<meta property="og:description" content="A social network - Dimini Inc." />
</head>
<body>
	<?php include("../../global/tagmanager.php"); ?>
	<div id="site" class="asocial-network">
		<?php include("./notification.php"); ?>
		<?php include("./header.php"); ?>
		<div id="asocialnetwork_content">
			<div class="tab">
				<button class="tablinks" onclick="loginTabsChange(event, 'login')">Log in</button>
				<button class="tablinks active" onclick="loginTabsChange(event, 'signup')">Sign up</button>
			</div>
			<div id="signup" class="tabcontent active">
				<h2>Sign up</h2>
				<form action="signup.php" method="post" name="form"> 
					<label for="nickname" class="login-input-label">Nickname</label>
					<input name="nickname" type="text" size="20" maxlength="40" class="login-input-field"><br>
					<label for="password" class="login-input-label">Password</label>
					<input name="password" type="password" size="20" maxlength="40" class="login-input-field"><br>
					<label for="first_name" class="login-input-label">First name</label>
					<input name="first_name" type="text" size="20" maxlength="40" class="login-input-field"><br>
					<label for="last_name" class="login-input-label">Last name</label>
					<input name="last_name" type="text" size="20" maxlength="40" class="login-input-field"><br>
					<input name="submit" type="submit" value="Sign up" class="submit-button"> 
				</form>  
			</div>
			<div id="login" class="tabcontent">
				<h2>Log in</h2>
				<form action="login.php" method="post" name="form"> 
					<label for="nickname" class="login-input-label">Nickname</label>
					<input name="nickname" type="text" size="20" maxlength="40" class="login-input-field"><br>
					<label for="password" class="login-input-label">Password</label>
					<input name="password" type="password" size="20" maxlength="40" class="login-input-field"><br>
					<input name="submit" type="submit" value="Log in" class="submit-button">   
				</form>
			</div>
		</div>
		<?php include("./footer.php"); ?>
	</div>
</body>
</html>