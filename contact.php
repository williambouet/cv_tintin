<?php

$subjects = [
	'' => 'Votre sujet',
	'hello' => 'Me faire un coucou',
	'job' => 'M\'embaucher',
	'investigation' => 'Me solliciter pour une enquête',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$contact = array_map('trim', $_POST);
	/* echo htmlentities($contact['name']); */


	$errors = [];

	if (empty($contact['name'])) {
		$errors[] = 'Le nom est obligatoire';
	}

	if (empty($contact['email'])) {
		$errors[] = 'L\'email est obligatoire';
	}

	if (!filter_var($contact['email'], FILTER_VALIDATE_EMAIL)) {
		$errors[] = 'Le format d\'email est incorrect';
	}

	if (empty($contact['phone'])) {
		$errors[] = 'Le téléphone est obligatoire';
	}

	if (!key_exists($contact['subject'], $subjects)) {
		$errors[] = 'Le sujet est incorrect';
	}

	/* if (!in_array_($contact['subject'], $subjects)) {
		$errors[] = 'Le sujet est incorrect'; 
	}*/

	if (empty($contact['message'])) {
		$errors[] = 'Le message est obligatoire';
	}

	if (empty($errors)) {
		header('Location: thanks.php');
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="root.css">
	<link rel="stylesheet" href="contact.css">
	<link rel="stylesheet" href="navbar.css">
	<link rel="stylesheet" href="root.css">
	<title>Contact</title>
</head>

<body>
	<?php include_once("navbar.php"); ?>

	<div class="container">

		<div class="contact-box">

			<div class="left"></div>

			<div class="right">

				<h2>Contactez-moi</h2>

				<form id="contact_form" action="" method="POST">
					<?php if (!empty($errors)) : ?>
						<ul class="error">
							<?php foreach ($errors as $error) : ?>
								<li><?= $error; ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>

					<label for="name">Votre nom</label>
					<input type="text" id="name" class="field" placeholder="Pierre Dupont" name="name" required value="<?= $contact['name'] ?? '' ?>">

					<label for="email">Votre email</label>
					<input type="email" id="email" class="field" placeholder="email@mail.com" name="email" required value="<?= $contact['email'] ?? '' ?>">

					<label for="phone">Votre téléphone</label>
					<input type="phone" id="phone" class="field" placeholder="+00 0 00 00 00 00" name="phone" required value="<?= $contact['phone'] ?? '' ?>">

					<label for="subject">Choisissez un sujet</label>
					<select type="text" id="subject" class="field" placeholder="Votre sujet" name="subject" required>
						<?php foreach ($subjects as $subject => $subjectMessage) : ?>
							<option value="<?= $subject ?>" <?php if (isset($contact['subject']) && $contact['subject'] === $subject) : ?> selected <?php endif; ?>>
								<?= $subjectMessage ?>
							</option>
						<?php endforeach; ?>
					</select>

					<label for="message">Votre message</label>
					<textarea name="message" placeholder="Tapez votre message ici..." id="message" class="field" required><?= $contact['message'] ?? '' ?></textarea>


					<button class="btn" value="submit">Envoyez</button>
				</form>
			</div>

			<div class="bottom-left">

				<h3>Tintin et Milou</h3>
				<div class="address"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
						<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
					</svg>
					<h4>&nbsp;26, rue du Labrador, Bruxelles, Belgique</h4>
				</div>
				<div class="phone"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
						<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
					</svg>
					<h4>&nbsp;+32 2 374 00 00</h4>
				</div>
				<div class="email"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
						<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
					</svg>
					<h4>&nbsp;contact@tintin.be</h4>
				</div>
			</div>

			<div class="bottom-right">

				<h3>Suivez-moi</h3>
				<div class="linkedin">
					<h4><a href="https://www.tintin.com/fr" class="socialinks">LinkedIn/in/tintin</a></h4>
				</div>
				<div class="github">
					<h4><a href="https://www.tintin.com/fr" class="socialinks">Github.com/tintin</a></h4>
				</div>
				<div class="twitter">
					<h4><a href="https://www.twitter.com/tintin" class="socialinks">Twitter.com/tintin</a></h4>
				</div>

			</div>

		</div>

	</div>

</body>

</html>