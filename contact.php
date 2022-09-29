<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="root.css">
	<link rel="stylesheet" href="contact.css">
	<title>Document</title>
</head>

<body>
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
			<div class="bottom">
				<p>Tintin et Milou <br> 26 rue du Labrador,<br> Bruxelles, Belgique<br>Téléphone:<br>+32 2 374 00 00<br>Email:<br>contact@tintinetmilou.be</p>
			</div>
		</div>
	</div>
	<script src="contact.js"></script>
</body>

</html>