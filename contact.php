<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="contact">
        <h2>Me contacter</h2>
        <p>Pour toute demande me concernant, remplissez le formulaire ci-dessous!</p>

        <div class="contact_form">
            <form id="contact_form">
                <label for="name">Votre nom</label></br>
                <input type="text" id="name" name="name" placeholder="Entrez votre nom" required="required"></br>

                <label for="subject">Sujet de la demande</label></br>
                <select class="subject"></br>
                    <option value="subject">Sujet de la demande</option>
                    <option value="interview">M'interviewer</option>
                    <option value="job">M'embaucher</option>
                    <option value="investigation">Une investigation</option>
                </select></br>
                <label for="email">Votre email</label></br>
                <input type="email" id="email" name="email" placeholder="Entrez votre adresse mail" required="required"></br>

                <label for="message">Votre message</label></br>
                <textarea type="text" id="message" placeholder="Votre message" name="message" required="required"></textarea>

                <input type="submit" value="Envoyer" />

            </form>
        </div>

        <div class="personal_contact">
            <h2>Mes coordonnées</h2>
            <p>L'opportunité de m'embaucher ne se présente pas tous les jours. Voici mes coordonnées afin de me joindre sans plus attendre!</p>
            <p> Tintin et Milou</p>
            <p>26, rue du Labrador</p>
            <p>Bruxelles</p>
            <p>Téléphone: +32 2 374 00 00</p>
            <p>Mail: contact@tintinetmilou.be</p>



    </section>
    <script src="contact.js"></script>
</body>

</html>