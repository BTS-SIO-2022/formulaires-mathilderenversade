<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon tout premier formulaire</title>
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
        
        echo "<h1> Je suis géniale </h1>";

        echo $_GET['nom'];
        echo '<br>';

        echo $_GET['age'];
        echo '<br>';

        $test = gettype($_GET);

        echo $test;

        echo '<br>';
        var_dump($_GET);

        echo '<h1> Bonjour '.$_GET['nom']. ' tu as '.$_GET['age'].'ans </h1>';
        ;?>
    </form>
</body>
</html>