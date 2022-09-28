<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Document</title>
</head>

<body>
    <section class="form">
        <h2>Me contacter</h2>
        <p>Pour toute demande me concernant, remplissez le formulaire ci-dessous!</p>
        <div id="contact_form">
        <form>
            <label for="name">Votre Nom</label>
            <input type="text" id="name" name="fullname" placeholder="Prenom Nom" required="required">
            <label for="email">Votre mail</label>
            <input type="text" id="email" name="email" placeholder="example@mail.com" required="required">
            <label for="subject">Sujet du message</label>
            <select id="subject">
                <option value="subject">A propos de...</option>
                <option value="Une enquête">Une enquête</option>
                <option value="Un reportage">Un reportage</option>
                <option value="Un travail">Un travail</option>
                <option value="Autre chose">Autre chose</option>
            </select>
            <label for="message">Votre message</label>
            <textarea id="message" name="message" required="required"></textarea>
            <input type="submit" value="Envoyez">
        </form>
    </section>

    <section class="adress">

    </section>
     

                

       

<script src="contact.js"></script>
</body>
</html>