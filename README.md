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

Le but est que chacun implémente son modele de donnée qui correspond au CV personnel de chacun des membres de notre groupe.

## Manipulation du Turtle et de RDFa avec Apache .htaccess

Chaque site a un html (en extension .html) et un turtle (en extension .ttl), il suffit de changer le head et de demander : Accept , text/turtle pour avoir la page courante html en turtle. Par exemple pour l'index, on peut accéder au turtle avec la redirection automatique grâce a Apache .htaccess sur le lien suivant : http://personal-website-sem.herokuapp.com/index.ttl

Le turtle à été généré automatique sur le lien https://rdfa.info/play/ qui nous permet en plus de valider conformance de votre page à RDFa.

### Exemple de visualisation du graph de notre page index.html


- Voici, donc un exemple de graph que l'on peut obtenir grâce au lien https://rdfa.info/play/  et du mode visualisation :
![index.html](http://personal-website-sem.herokuapp.com/assets/images/rapport/index.png) correspond à la page suivante : http://personal-website-sem.herokuapp.com/index.html 


## Partie Kevin ABRIAL

Pour ma partie, il existe 5 différentes pages (accessible avec les URL suivantes) : 
- http://personal-website-sem.herokuapp.com/kevin/kevincv.html
- http://personal-website-sem.herokuapp.com/kevin/kevinlanguages.html
- http://personal-website-sem.herokuapp.com/kevin/kevintechnologies.html
- http://personal-website-sem.herokuapp.com/kevin/kevinexperience.html
- http://personal-website-sem.herokuapp.com/kevin/kevintrips.html (:warning: le chargement de cette page est longue due aux nombres de photos.)

Pour pouvoir avoir le fichier turtle, (activez le mode head en text/turtle) et la redirection se fait automatiquement avec une redirection 303 sur les differentes pages suivantes : 
- http://personal-website-sem.herokuapp.com/kevin/kevincv.ttl
- http://personal-website-sem.herokuapp.com/kevin/kevinlanguages.ttl
- http://personal-website-sem.herokuapp.com/kevin/kevintechnologies.ttl
- http://personal-website-sem.herokuapp.com/kevin/kevinexperience.ttl
- http://personal-website-sem.herokuapp.com/kevin/kevintrips.ttl

Ceci correspond a tous les triplets disponibles dans les pages html correspondante.

- http://personal-website-sem.herokuapp.com/kevin/kevincv.html, m'a permis d'utiliser les vocabulaires de wikidata, dbpedia et de schema.org (Voir les liens dans la partie Vocabulaire utiliser)
- http://personal-website-sem.herokuapp.com/kevin/kevinlanguages.html et http://personal-website-sem.herokuapp.com/kevin/kevintechnologies.html, m'a permis d'utiliser les vocabulaires de wikidata, dbpedia et de schema.org (Voir les liens dans la partie Vocabulaire utiliser), notamment wikidata pour les langages et les frameworks qui sont dans wikidata.
- http://personal-website-sem.herokuapp.com/kevin/kevinexperience.html, m'a permis d'utiliser les vocabulaires de wikidata, dbpedia et de schema.org (Voir les liens dans la partie Vocabulaire utiliser)
- http://personal-website-sem.herokuapp.com/kevin/kevintrips.html, m'a permis d'utiliser le vocabulaire liée des images, ainsi, j'ai pu décrire mes propres photos et référencer d'autres photos que j'ai pu prendre sur Internet.

## Partie Xavier NAUNAY


## Partie Alexis BARTHELEMY 



## Utilisation de méthodes pour réaliser ce projet

Nous avons utilisés les liens suivants : 

- Pour utiliser RDFa : https://rdfa.info/play/
- Pour retrouver le vocabulaire que l'on voulait utiliser : http://lov.okfn.org/dataset/lov/
- Pour se documenter sur le vocabulaire : http://prefix.cc/
- Pour utiliser le référencement Google : https://developers.google.com/search/docs/guides/intro-structured-data
- Pour utiliser le référencement Pinterest : https://developers.pinterest.com/docs/rich-pins/articles/ et  https://developers.pinterest.com/tools/url-debugger/ 
- Pour utiliser le référencement Twitter : https://developer.twitter.com/en/docs/tweets/optimize-with-cards/guides/getting-started  et https://cards-dev.twitter.com/validator 
- Pour utiliser le référencement Facebook : https://developers.facebook.com/docs/sharing/webmasters#markup
- Apache .htaccess : https://httpd.apache.org/docs/2.2/fr/howto/htaccess.html

## Vocabulaire utiliser

- http://schema.org/
- https://www.wikidata.org/wiki/Wikidata:Main_Page
- http://wiki.dbpedia.org/

## Conclusion

Ce projet fut très très intéressant, ce que nous avons appris pourrait être appliquer dans d'autres situations, cela nous apermis de voir une nouvelle matière, encore méconnue lors de nos cursus, nous avons bien aimer faire du référencement de site Web. Nous avons pu remanipuler ce nous avons appris en cours et en travaux pratiques.

### Avis personnels


Kevin ABRIAL : 
Pour ma part, j'ai été très intéressant par cette matière, je suis très passioné par le Semantic Web, j'ai pu découvrir un nouveau domaine dans le Web, ce qui rend encore plus intéressant car cela englobe le domaine du Web, ce qui concorde avec mon objectif personnel dans le domaine du Web. Grâce à cette apprentissage, je peux dés à présent faire du référencement de site web et je peux améliorer n'importe quel site web sur Internet, grâce a l'apprentissage du cours avec les techniques de Semantic Web.
Cepedant, mon sujet de projet n'hésite pas l'utilisation de SPARQL, que j'ai pu utiliser uniquement lors des séances de travaux prartiques prévu à cette effet.
Pour finir, je tiens a remercier particulierement, Monsieur Maxime LEFRANCOIS pour son aide a toutes mes questions que j'ai pu lui poser et pour son enseignement de la matière Semantic Web.

Xavier NAUNAY : 


Alexis BARTHELEMY : 



## Professeur

* Maxime LEFRANCOIS, Personal website: http://www.maxime-lefrancois.info/ 


## Authors

* **Kevin ABRIAL**

* **Xavier NAUNAY**

* **Alexis BARTHELEMY**
