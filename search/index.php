<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" integrity="sha384-zm3nV72ZseVXQf1A4MjCECEgArFvdcPEUUc9iF+UBbfALpO2sUdjKGQriXbM4z+R" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="../stylesheet.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous" defer></script>
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" integrity="sha384-NHtbx1Hf6ctHNdZmU28YfhGjB63gcU1YU64ttM+c0RxMKNBj67j+N/axpqTfdffo" crossorigin="anonymous" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js" integrity="sha384-nuT0qw6vBhqN718uyKaI6w1EXH49c5XiMUqmHEEiJadrKmJtmQOVVsd8vTgBpr8h" crossorigin="anonymous" defer></script>
	<script type="text/javascript" src="/global/site-files/javascript.js" defer></script>
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
	<?php include("../../../global/tagmanager.php"); ?>
	<div id="site" class="asocial-network">
		<?php include("../notification.php"); ?>
		<?php include("../header.php"); ?>
		<div id="asocialnetwork_content">
			<div id="search-field">
				<form action="index.php" method="get" name="form">
					<input name="search_string" type="text" placeholder="Search.." size="20" maxlength="40" class="login-input-field">
					<input name="submit" type="submit" value="Search" class="submit-button">   
				</form>
			</div>
			<div id="search-results">
				
				
				<?php 
				require_once '../connection.php';
				$link = mysqli_connect($host, $user, $pass, $database) 
				or die("Error " . mysqli_error($link));
				$link->set_charset("utf8");
				$nickname=$_COOKIE["username"];
				$password=$_COOKIE["password"];
				if (!isset($_SESSION[$nickname]))
				{
						// $nickname=$_GET['nickname'];
						// echo $_GET['nickname'];
					$search_string='';
					if(isset($_GET['search_string'])) { $search_string=$_GET['search_string']; } 
					$result=mysqli_query($link,"SELECT * FROM person where nickname='$nickname'");
					$myrow= mysqli_fetch_array($result);
					$password_hash = $myrow['password'];
					if(password_verify($password , $password_hash))
					{
						$result=mysqli_query($link,"SELECT * FROM person WHERE first_name LIKE '%$search_string%' or last_name LIKE '%$search_string%' or middle_name LIKE '%$search_string%'");
						$myrow= mysqli_fetch_array($result);
						
						do{
							$user_nickname=$myrow['nickname'];
							echo "<a href='../profile/index.php?nickname=$user_nickname'><div class='card'>".$myrow['first_name']." ".$myrow['middle_name']." ".$myrow['last_name']."</div></a>";
						}
						while($myrow=mysqli_fetch_array($result));
					}
					else
					{
						echo'<span style="color: red; font-weight: bold;">Please authorize</span>'; 
					}
				}
				
				mysqli_close($link);

				?>
			</div>
		</div>
		<?php include("../footer.php"); ?>
	</div>
</body>
</html>