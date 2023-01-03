# formulaires

Pour qu'un formulaire fonctionne, je veux : 
- que mon utilisateur puisse remplir des données = utiliser les éléments html ``` <form>``` et les éléments html ```<input>``` et leurs différents types
- que mon utilisateur puisse les envoyer = le recours aux méthodes get ou post
- que moi, en tant qu'éditeur de site web, je puisse récupérer la donnée

Un formulaire peut se composer de différents types de données, par exemple des données type chiffre, type texte, types cases à cocher, une liste de choix, mot de passe etc etc etc

Pour retrouver comment structurer un formulaire html et la liste des attributs des inputs d'un formulaire, cf la documentation :
- https://developer.mozilla.org/fr/docs/Learn/Forms/Your_first_form
- https://developer.mozilla.org/fr/docs/Web/HTML/Element/input#pattern

Pour transmettre mes données, j'associe via l'attribut name une "clé" qui va me permettre de retrouver facilement ma donnée. Ce que mon utilisateur va remplir se retrouvera associé à cette ou ces clés

2 méthodes pour envoyer mes données GET et POST 

GET : avec cette méthode mes données transittent en clair par l'url selon ce schéma : 
monnomdedomaine.com/?name=Mathilde&age=35

Nous voilà donc à la 3eme étape, c'est-à-dire comment faire pour le propriétaire du site pour exploiter/utiliser les données envoyées par mon utilisateur. 

PHP est là pour nous permettre de faire cela : 
https://www.php.net/manual/fr/intro-whatcando.php

Avec PHP, je vais pouvoir manipuler deux super-globales : $_GET et $_POST 
si j'utilises la méthode get avec mon formulaire = j'utilise $_GET
si à l'inverse j'utilise la méthode post avec mon formulaire = j'utilise $_POST

POST est la méthode à privilégier dès lors que mon utilisateur envoie des données personnelles ou sensibles, exemple mot de passe, nom, toutes données risquant d'identifier mon utilisateur. 

ATTENTION avec la méthode get les données transittent en clair via l'URL DONC on ne transfère pas des données sensibles en get.

ATTENTION A LA SECURITE
Les dispositifs de contrôle implémentées sur l'interface utilisateur ne sont JAMAIS suffisantes. 
exemple : on a vu que via get on peut directement modifier via l'url les valeurs des différents inputs, donc renseigner des attributs n'est pas suffisant pour contrôler totalement les données et se prémunir d'attaques informatiques comme par exemple injection de code html ou javascript malveillants, cf ceci : monnomdedomaine.com/?nom=<h1>jedetestelephp</h1>&age=25

DONC IL FAUT TOUJOURS TOUJOURS mettre en place côté back, des systèmes de contrôle qui vont venir "nettoyer" les données et donc vraiment sécuriser notre site.

Pour cela, php met à disposition toute une série de fonction et de filtre de nettoyage : 
https://www.php.net/manual/fr/filter.filters.sanitize.php
