# formulaires

Pour qu'un formulaire fonctionne, je veux : 
- que mon utilisateur puisse remplir des données = utiliser les éléments html <form> et les éléments html <input> et leurs différents types
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


https://www.php.net/manual/fr/intro-whatcando.php
