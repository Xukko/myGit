<!doctype html>
<html lang="de">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="style.css">
<!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	<title>Registrieren (medi_db)</title>
</head>
<body>
<header>
	<h1></h1>
</header>

<main> 
	<article>
		<header>Registrieren</header>
		<section>
			<form id="userreg" method="POST" action="reguser.php">
				<p><label for="inputusername"> Benutzername
				<br><input type="text" id="inputusername" name="username"></label>
				
				<p><label for="inputpw"> Passwort
				<br><input type="password" id="inputpw" name="pw"></label>
				
				<p><label for="inputprename"> Vorname
				<br><input type="text" id="inputprename" name="prename"></label>
				
				<p><label for="inputsurname"> Nachname
				<br><input type="text" id="inputsurname" name="surname"></label>
			<!--				
				<p><label for="inputaddress"> Anschrift
				<br><input type="text" id="inputaddress" name="address"></label>
				
				<p><label for="inputbirthday"> Geburtstag
				<br><input type="text" id="inputbirthday" name="birthday"></label>
			-->				
				<p><input type="submit" name="login" value="Registrieren">
				<p><input type="submit" name="create_db" value="Datenbank erstellen">
			</form>
		</section>
		<footer><a href="login.php">Einloggen</a></footer>
	</article>
</main>

<footer>
	<p><b></b></p>
</footer>

</body>
</html>