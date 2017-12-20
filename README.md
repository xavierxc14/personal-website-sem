# Rapport Projet UE 2 Semantic Web personal-website-sem Année 2017/2018

## Sujet choisi du projet : Piste: Amélioration de site Web
Critères imposés:
- Le site doit être intéressant et complexe, ce qui implique une multitude de pages.
- Les métadonnées ajoutées doivent être riches, avec des liens entre les
pages et des liens vers d'autres sites Web.
- La négociation de contenu nécessaire pour l'obtention de .ttl doit être automatique (Apache .htaccess par exemple)
- Les outils de Web Scrapping développés par d'autre groupes doivent permettre de trouver l'ensemble des triplets du site.

## Le site web est sur Heroku

- Le site est à l'URL suivante : http://personal-website-sem.herokuapp.com/

Attention :warning: la première requête peut être longue du fait des temps de réponse d'Heroku !

## Le code est dans un repository Github

- Le Git est à l'URL suivante : https://github.com/xavierxc14/personal-website-sem


## Décomposition du site

Le site contient une page index.html à cette adresse :warning: http://personal-website-sem.herokuapp.com/index.html.

Trois personnes différentes ont participé à l'élaboration de ce site Web. Afin d'accéder au profil de chacune d'entre elles, il suffit de cliquer sur l'un des trois losanges correspondants à un lien vers les données personnelles d'un des membres du groupe (voir KA, XN, AB).

Chaque membre du groupe s'est occupé de son propre référencement, à l'aide des techniques de Web Semantic apprises lors des cours et durant les séances de travaux pratiques.

Le but était que chacun implémente son modèle de données fonction de son CV et des informations additionnelles disponibles sur les pages complémentaires du profil (expériences, technologies etc.).

## Manipulation du Turtle et de RDFa avec Apache .htaccess

Chaque page du site est accesible par des fichiers .html permettant la navigation pour les internautes. A chacune de ces pages html est associé un .ttl permettant la description des ressources de ces pages.
Afin d'accéder nativement aux .ttl ou aux .html, il suffit de changer l'entête de requête HTTP. Changer ce Header en "Accept, text/turtle" par exemple, permet d'avoir la page courante html en turtle.

Exemple avec le fichier index.html:
En demandant accès au lien http://personal-website-sem.herokuapp.com/index.html avec un Header "Accept text/turle", le site nous redirige vers http://personal-website-sem.herokuapp.com/index.ttl.
L'implémentation du fichier .htaccess a été nécessaire afin d'arriver à cette solution.

En ce qui conerne le Turtle, il à été généré automatiquement à l'aide du lien suivant: https://rdfa.info/play/.
Ce lien permet également de valider la conformité d'une page Web avec RDFa.

### Exemple de visualisation du graph de notre page index.html


- Voici, donc un exemple de graph que l'on peut obtenir grâce au lien https://rdfa.info/play/  et du mode visualisation :
![index.html](http://personal-website-sem.herokuapp.com/assets/images/rapport/index.png) correspond à la page suivante : http://personal-website-sem.herokuapp.com/index.html


## Partie Kevin ABRIAL

Pour ma partie, il existe 5 différentes pages (accessible avec les URL suivantes) :
- http://personal-website-sem.herokuapp.com/kevin/kevincv.html
- http://personal-website-sem.herokuapp.com/kevin/kevinlanguages.html
- http://personal-website-sem.herokuapp.com/kevin/kevintechnologies.html
- http://personal-website-sem.herokuapp.com/kevin/kevinexperience.html
- http://personal-website-sem.herokuapp.com/kevin/kevintrips.html (:warning: le chargement de cette page est longue dû au nombre de photos.)

Pour pouvoir avoir le fichier turtle, on peux y accéder directement grâce aux liens suivants (ou en modifiant le header http pour demander du text/turtle):
- http://personal-website-sem.herokuapp.com/kevin/kevincv.ttl
- http://personal-website-sem.herokuapp.com/kevin/kevinlanguages.ttl
- http://personal-website-sem.herokuapp.com/kevin/kevintechnologies.ttl
- http://personal-website-sem.herokuapp.com/kevin/kevinexperience.ttl
- http://personal-website-sem.herokuapp.com/kevin/kevintrips.ttl

Ceci correspond à tous les triplets disponibles dans les pages html correspondantes.

- http://personal-website-sem.herokuapp.com/kevin/kevincv.html, m'a permis d'utiliser les vocabulaires de wikidata, dbpedia et de schema.org (Voir les liens dans la partie Vocabulaire utilisé)
- http://personal-website-sem.herokuapp.com/kevin/kevinlanguages.html et http://personal-website-sem.herokuapp.com/kevin/kevintechnologies.html, m'ont permis d'utiliser les vocabulaires de wikidata, dbpedia et de schema.org (Voir les liens dans la partie Vocabulaire utilisé), notamment wikidata pour les langages et les frameworks qui sont dans wikidata.
- http://personal-website-sem.herokuapp.com/kevin/kevinexperience.html, m'a permis d'utiliser les vocabulaires de wikidata, dbpedia et de schema.org (Voir les liens dans la partie Vocabulaire utilisé)
- http://personal-website-sem.herokuapp.com/kevin/kevintrips.html, m'a permis d'utiliser le vocabulaire lié aux images. J'ai ainsi pu décrire mes propres photos, et référencer d'autres prises sur Internet.

## Partie Xavier NAUNAY

Il existe aussi 5 différentes pages (accessible avec les URL suivantes) :
- http://personal-website-sem.herokuapp.com/xavier/xaviercv.html
- http://personal-website-sem.herokuapp.com/xavier/xavierlanguages.html
- http://personal-website-sem.herokuapp.com/xavier/xaviertechnologies.html
- http://personal-website-sem.herokuapp.com/xavier/xavierexperience.html
- http://personal-website-sem.herokuapp.com/xavier/xaviertrips.html

Pour pouvoir avoir le fichier turtle, on peux y accéder directement grâce aux liens suivants (ou en modifiant le header http pour demander du text/turtle):
- http://personal-website-sem.herokuapp.com/xavier/xaviercv.ttl
- http://personal-website-sem.herokuapp.com/xavier/xavierlanguages.ttl
- http://personal-website-sem.herokuapp.com/xavier/xaviertechnologies.ttl
- http://personal-website-sem.herokuapp.com/xavier/xavierexperience.ttl
- http://personal-website-sem.herokuapp.com/xavier/xaviertrips.ttl

Ceci correspond à tous les triplets disponibles dans les pages html correspondantes.

## Partie Alexis BARTHELEMY



## Utilisation de méthodes pour réaliser ce projet

Nous avons utilisés les liens suivants :

- Pour valider via les Outils de test des données structurées de Google : https://search.google.com/structured-data/testing-tool
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

Ce projet fut très intéressant, puisque les différentes techniques que nous avons acquises pourront tout aussi bien être utilisés dans un cadre de développement privé tout comme en entreprise. Outre le fait d'avoir appris de nouvelles compétences techniques qui sont très demandés dans le monde de l'entreprise, l'enseignement et les méthodes de travails dispensés ont été un plus pour l'apprentissage de la Web Semantic.

### Avis personnels


Kevin ABRIAL :
J'ai été très intéressé par cette matière, puisque je me suis découvert une passion pour la Semantic Web. J'ai ainsi pu découvrir un nouveau domaine dans le Web, ce qui rend cette matière encore plus intéressant étant donné que cela correspond aux métiers dans lesquels j'aimerai plus tard évoluer. Les techniques de Web Semantic apprises me permettront d'améliorer le développement d'éventuels sites Web sur lesquels j'aurai à travailler.

Le point négatif de notre sujet de projet est qu'il ne nécessite pas l'utilisation de SPARQL. Je n'ai donc pu l'utiliser qu'en séances de Travaux pratiques, ce que je regrette.
Je tenais également à souligner la disponibilité et la qualité de l'enseignement fourni par Mr LEFRANCOIS ce qui a facilité l'apprentissage de cette unité d'enseignement.

Xavier NAUNAY :
I found this course really interesting since I understood the importance of adding semantics to the data in the Web. As you told us in one class, now we can contribute to the development of the Semantic Web in general and specifically, we can add more value to the Web applications in which we will get involved using open information and making those applications better suitable for machines.


Alexis BARTHELEMY :
Projet et cours très intéressant. L'année dernière lors de mon stage en entreprise, mon maître de stage avait paru étonné que je ne dispose pas de compétences techniques dans le domaine de la Web Semantic. C'est en effet quelque chose de très important pour les entreprises qui font des sites Web et qui s'occupent du référencement, comme l'était celle qui m'a accueilli l'année dernière.
Ainsi, les compétences que j'ai acquises me permettront de mieux me positionner si j'ai par la suite à créer des sites Web.
En outre, l'unité d'enseignement dispensé à été bien amené et bien expliqué, ce qui a rendu le cours vivant et intéressant.



## Professeur

* Maxime LEFRANCOIS, Personal website: http://www.maxime-lefrancois.info/


## Authors

* **Kevin ABRIAL**

* **Xavier NAUNAY**

* **Alexis BARTHELEMY**
