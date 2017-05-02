<!DOCTYPE html>
<html lang="fr">
     <head>
       <link href="style.css" rel="stylesheet" type=text/css>
       <title>Formulaire PHP</title>
       <meta charset="utf-8">
    </head>

    <body>

      <form method="post" action="page2.php">

        <label for="prenom">Votre Prénom</label><br>
        <input id="prenom" pattern="^[a-zA-Z]+$" type="text" name="prenom" /><br>
        <label for="email">Votre Email</label><br>
        <input  id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" type="email" name="email" /><br>
        <label for="message">Entrer votre message ci-dessous</label></br>
        <textarea id="message" type="text" name="message" for="message" maxlength="300">300 caractère MAX</textarea><br>
        <input id="submit" type="submit" value="Envoyer" />
      </form>


   </body>
</html>
