<?php
/*
	
	Simple PASSWORDGENERATOR
	  -  by InteraApps -
	
	
*/

?>

<html>

<head>
	<title>SimplePasswordGenerator</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
	<div id="content">
		<h1>Password generator</h1>
		<br>

		<form method="POST">
			<input placeholder="Lenght" id="lenght" type="text" name="lenght"><br><br><br>
			<input id="sendbtn" type="submit" name="Senden"><br><br><br>
		</form>
		
		<?php
			
			function generateRandomString($length = 10) {
				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!§$%&/()=?,.-;:_+#*~<>|^';
				$charactersLength = strlen($characters);
				$randomString = '';
				for ($i = 0; $i < $length; $i++) {
					$randomString .= htmlspecialchars($characters[rand(0, $charactersLength - 1)]);
				}
				return $randomString;
			}
			if (isset($_POST["lenght"])) {
				
					if (is_numeric($_POST["lenght"])) {
						echo '<div id="genPassword"><a>';
							echo generateRandomString($_POST["lenght"]);
						echo '<a></div>';
					} else {
						echo '<div id="genPasswordErr"><a>';
							echo "Give the lenght!";
						echo '<a></div>';
					}

			}
		
		?>
		<br>
		<h2>How long does it take to crack a password (howsecureismypassword.net).</h2>
		10 Chars - 18 years<br>
		50 Chars - 1 sesvigintillion years<br>
		100 Chars - 15,735,277,755,582,490,000 quinquagintillion years<br>
		250 Chars - 240,630,754,726,729,460,000 octogintillion years<br>
		> 170 Chars - Forever<br><br>
		<a href="https://developers.interaapps.de/source.php?src=PasswordGenerator">Sourcecode</a>
	</div>
</body>
<html>

<?php
	include "lib/style.php";
?>
