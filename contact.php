<!DOCTYPE html>
<htm lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="root.css">
	<link rel="stylesheet" href="contact.css">
	<link rel="stylesheet" href="navbar.css">
	<title>Document</title>
</head>

<body>
	<?php include_once("navbar.php"); ?>

	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contactez-moi</h2>
				<form id="contact_form">
					<input type="text" id="name" class="field" placeholder="Votre nom" required="required">
					<input type="email" id="email" class="field" placeholder="Votre email" required="required">
					<input type="text" id="sujet" class="field" placeholder="Sujet">
					<textarea placeholder="Message" class="field" required="required"></textarea>
					<button class="btn" value="submit">Envoyez</button>
				</form>
			</div>
			<div class="bottom-left">
				<h3>Tintin et Milou</h3><p>26 rue du Labrador,<br> Bruxelles, Belgique<br>Téléphone:<br>+32 2 374 00 00<br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
  <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
</svg><br>contact@tintinetmilou.be</p>
			</div>
			<div class="bottom-right">

			</div>
		</div>
	</div>
	<script src="contact.js"></script>
</body>

</htm