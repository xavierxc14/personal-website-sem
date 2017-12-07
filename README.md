# Rapport Projet UE 2 Semantic Web personal-website-sem Année 2017/2018

## Sujet choisi du projet : Piste: Amélioration de site Web
Critères imposé:
- il faut que le site soit assez intéressant avec plusieurs pages,
- que les métadonnées ajoutées soient riches, qu'il y ait des liens entre les
pages, et des liens extérieurs vers d'autres sites.
- qu'on puisse faire de la négociation de contenu pour obtenir le Turtle
directement (voir Apache .htaccess par exemple)
- Qu'avec les outils de Web Scrapping développés par un autre groupe, on
puisse trouver l'ensemble des triplets du site.

## Le site web est sur Heroku

- Le site est sur l'URL suivante : http://personal-website-sem.herokuapp.com/

Attention :warning: la première requete peut être longue à cause de Heroku ^^ !

## Le code est un repository Github

- Le git est sur l'URL suivante : https://github.com/xavierxc14/personal-website-sem


## Décomposition du site 

Le site contient une page index.html, à cette adresse :warning: http://personal-website-sem.herokuapp.com/index.html.

Ensuite, il y a 3 types de Personnes, Il suffit d'aller sur le losange pour aller sur le site d'une personne (voir KA, XN, AB).

Chaque site pour chaque personne de notre groupe a référencer son propre site, avec les techniques de Semantic Web vue en cours et lors des séances de travaux pratiques. 

## Manipulation du Turtle et de RDFa avec Apache .htaccess

Chaque site a un html (en extension .html) et un turtle (en extension .ttl), il suffit de changer le head et de demander : Accept , text/turtle pour avoir la page courante html en turtle. Par exemple pour l'index, on peut accéder au turtle avec la redirection automatique grâce a Apache .htaccess sur le lien suivant : http://personal-website-sem.herokuapp.com/index.ttl

Le turtle à été généré automatique sur le lien https://rdfa.info/play/ qui nous permet en plus de valider conformance de votre page à RDFa.

## Utilisation de méthodes pour réaliser ce projet

Nous avons utilisés les liens suivants : 

- Pour utiliser RDFa : https://rdfa.info/play/
- Pour retrouver le vocabulaire que l'on voulait utiliser : http://lov.okfn.org/dataset/lov/
- Pour se documenter sur le vocabulaire : http://prefix.cc/
- Pour utiliser le référencement Google : https://developers.google.com/search/docs/guides/intro-structured-data
- Pour utiliser le référencement Pinterest : https://developers.pinterest.com/docs/rich-pins/articles/ et  https://developers.pinterest.com/tools/url-debugger/ 
- Pour utiliser le référencement Twitter : https://developer.twitter.com/en/docs/tweets/optimize-with-cards/guides/getting-started  et https://cards-dev.twitter.com/validator 
- Pour utiliser le référencement Facebook : https://developers.facebook.com/docs/sharing/webmasters#markup


## Vocabulaire utiliser

- http://schema.org/
- https://www.wikidata.org/wiki/Wikidata:Main_Page
- http://wiki.dbpedia.org/

## Professeur

* Maxime LEFRANCOIS, Personal website: http://www.maxime-lefrancois.info/ 


## Authors

* **Kevin ABRIAL**

* **Xavier NAUNAY**

* **Alexis BARTHELEMY**
