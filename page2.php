<!DOCTYPE html>
<html lang="fr">
     <head>
       <title>Page 2 PHP</title>
       <meta charset="utf-8">
       <link href="style.css" rel="stylesheet" type=text/css>
    </head>

    <body>

      <p>Bonjour ADMIN !!!</p>

      <p>Votre prénom est
        <?php
        if (isset($_POST['prenom'])) {

            if(strlen($_POST['prenom'])<=20) {

                echo strtoupper($_POST['prenom']);
                strip_tags($_POST['prenom']);
            }
            else {
                echo "Le prenom ne doit pas dépasser 20 caractères et utilisé que des miniscules";
            }
       }
        ?>
        !!</p>

      <p>Votre adresse e-mail est
        <?php
        if (isset($_POST['email'])) {

            if (preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $_POST['email'])) {

                echo strtoupper($_POST['email']);
                strip_tags($_POST['email']);
             }
             else {
                 echo "Format email non adpaté !";
             }
        }

        ?>
         ! </p>

      <hr>

      <p>Voici le message saisi :</p><br>

      <?php
        if (isset($_POST['message'])) {

            if (strlen($_POST['message'])<=300) {

                echo strtoupper($_POST['message']);
                strip_tags($_POST['message']);
            }
            else {
                echo "300 caractères maximum";
            }
        }
      ?>

      <hr>

      <p>Retour au formulaire, <a href="index.php">Clique ici !</a></p>

   </body>
</html>
