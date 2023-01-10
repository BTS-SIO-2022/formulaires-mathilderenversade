<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon tout premier formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="GET">
        <label for="name">Renseigner votre nom</label>
        <input type="text" name="nom" id="name" placeholder="maximum 50 caractères">
        <label for="ager">Renseigner votre âge</label>
        <input type="number" min="0" max="120" name="age" id="ager">

        <label for="utimail">Renseigner votre email</label>
        <input type="email" required name="email" placeholder="exemple@maboite.com" id="utimail">
        <!--
        <input type="submit" value="Enregistrer"> -->
        <button type="submit">Envoyer</button>
        <?php
        
        /* https://www.php.net/manual/fr/function.trim.php */
        if(!empty($_GET['nom'])){
            $nom = trim($_GET['nom']);
            htmlspecialchars($nom);
            filter_var($nom, FILTER_SANITIZE_STRING);
            strip_tags($nom);
        }
        /* https://www.php.net/manual/en/function.htmlspecialchars.php 
        */
        /*
        https://www.php.net/manual/fr/function.filter-var.php
        la fonction filter_var s'utilise avec un paramètre cf la documenation avec la liste des filtres de validation et des filtres de nettoyage.
        Attention comme on l'a vu en cours, les filtres peuvent être déprécier (donc inutilisables) en fonction de la version php que nous utilisons, comme par exemple avec FILTER_SANITIZE_STRING
        
        liste filtres de validation : https://www.php.net/manual/fr/filter.filters.validate.php
        liste filtres de nettoyage : https://www.php.net/manual/fr/filter.filters.sanitize.php

        */
        /* 
        https://www.php.net/manual/en/function.strip-tags.php
        */
        $test = strip_tags('<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>');
        var_dump($test);




        


        
        echo "<h1> Je suis géniale </h1>";

        // Ici je réadapte mon code afin qu'il utilise la variable qui contient mes données "nettoyées" (je remplace $_GET['nom'] par ma variable $nom qui elle est passée dans tous les filtres de nettoyage et de contrôle)
        if(!empty($nom)){
            echo $nom;
        }
        
        echo '<br>';

        if(!empty($_GET['age'])){
            echo $_GET['age'];
        }
        echo '<br>';

        $test = gettype($_GET);

        echo $test;

        echo '<br>';
        var_dump($_GET);

        if(!empty($_GET['nom']) && !empty($_GET['age'])){
            echo '<h1> Bonjour '.$_GET['nom']. ' tu as '.$_GET['age'].'ans </h1>';
        }


        
        ;?>
    </form>
</body>
</html>