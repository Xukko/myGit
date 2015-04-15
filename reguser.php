<!doctype html>
<html lang="de">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="style.css">
<!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	<title>Registrierung abschließen (medi_db)</title>
</head>
<body>
<header>
	<h1></h1>
</header>

<main> 
	<article>
		<header>Registrierung abschließen</header>
		<section>
			<p>
<?php
	$dbserver = "localhost";
	$dbuser = "root";
	$dbpass = "David85";
	$dbname = "users";
	
	// Verbindung mit Datenbankserver herstellen
	$db_connect = new mysqli($dbserver,$dbuser,$dbpass); 
	
	// Verbindung testen
// Check connection
if ($db_connect->connect_error) {
    die("Connection failed: " . $db_connect->connect_error);
}
echo "Connected successfully";
/*	if($db_connect) {
		echo "Verbindung mit ".$dbserver." erfolgreich.<br>"; }
	else {
		echo "Keine Verbindung hergestellt.<br>"; }
*/
	
	// Datenbank erstellen
/*	$db_create =  "CREATE DATABASE ".$dbname;

	if($db_create) {
		echo "Die Datenbank ".$dbname." wurde erstellt.<br>"; }
	else { 
		echo "Keine Datenbank erstellt.<br>"; }
*/
?>
		</section>
		<footer><a href="login.php">Einloggen</a></footer>
	</article>
</main>

<footer>
	<p><b></b></p>
</footer>

</body>
</html>