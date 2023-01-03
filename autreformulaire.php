<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon formulaire en post</title>
</head>
<body>
    <form action="formReponse.php" method="POST">
        <label>Renseigner votre sexe</label>
        <label for="femme">Je suis une femme </label>
        <input type="radio" name="sexe" value="femme" id="femme" checked>
        <label for="homme">Je suis un homme</label>
        <input type="radio" name="sexe" value="homme" id="homme">

        <label>Vous habitez :</label>
        <label for="choixville">J'habite en ville</label>
        <input type="checkbox" name="lieudevie" value="ville" id="choixville">
        <label for="choixcampagne">J'habite à la campagne</label>
        <input type="checkbox" name="lieudevie" value="campagne" id="choixcampagne">
        <label for="choixmontagne">J'habite à la montagne</label>
        <input type="checkbox" name="lieudevie" value="montagne" id="choixmontagne">

        <label for="chienpref">Quel est votre chien préféré ?</label>
        <select name="chiens" id="chienpref" multiple>
            <option value="">--Choississez parmi les options suivantes</option>
            <option value="beagle">Beagle</option>
            <option value="doberman">Doberman</option>
            <option value="corgi">Corgi</option>
        </select>
        
        <input type="submit" value="Enregistrer">
    </form>

</body>
</html>