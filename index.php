<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice6</title>
</head>
<body>
  <p>
    <?php
    //Déclaration de la fonction identité et retourne la chaine de caractères
    function identity($lastName, $firstName, $age){
      return 'Bonjour ' . $lastName . ' ' .$firstName . ' ,tu as ' . $age . 'ans.';
    }
    //Affichage de la chaine de caractères
    echo identity('Dupont', 'Martine', '25');
    ?>
  </p>
</body>
</html>
