<!doctype html>
<html lang="de">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="style.css">
<!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	<title>Startseite (medi_db)</title>
</head>
<body>
<header>
	<h1></h1>
</header>

<main> 
	<article>
		<header>Einloggen</header>
		<section>
			<form id="userlogin" method="POST" action="member.php">
				<label for="inputusername"> Benutzername 
				<input type="text" id="inputusername" name="username"></label> 
				
				<label for="inputpw"> Passwort 
				<input type="password" id="inputpw" name="pw"></label>
				
				<input type="submit" name="login" value="Einloggen">
			</form>
		</section>
		<footer><a href="register.php">Registrieren</a></footer>
	</article>
</main>

<footer>
	<p><b></b></p>
</footer>

</body>
</html>