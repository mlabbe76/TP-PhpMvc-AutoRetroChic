# TP-PhpMvc-AutoRetroChic
Creation dépot

/* ###################################### * /
              AUTO RÉTRO CHIC 
      SITE VOITURES DE LUXE FRANÇAISES 
/* ##################################### * /

Vous avez été contacté par un club de collectionneur « Auto Rétro Chic » qui désire réaliser un site afin de présenter différents modèles de voitures de luxe. 
Le site doit être responsive et comporté une interface d'administration pour les mises à jour par les membres du club. 

Quelques règles de gestion :
>	Un constructeur possède au minimum 1 modèle de voiture
>	Pour chaque constructeur, on doit avoir un logo, un nom, un résumé historique, l'image du fondateur
>	Pour chaque voiture, on doit avoir le nom du modÃ¨le, le constructeur(avec lien vers la page constructeur), l'année de construction, un résumé et un visuel.
> Si  suppression d'un constructeur dans la base cela supprime les voitures de celui-ci.

Quelques.recommandations 
La consultation peut se faire sur le compte admin de la bdd (création d'un utilisateur).
Vous êtes libre au niveau design. 

Le choix d'un framework pour le CSS est possible 

Menu navigation: Accueil/ Les Constructeurs/ Les Voitures/ Livre d'or 

Page index : texte de présentation du club + image des 3 derniers modèles insérés dans la base + présentation d'un constructeur sous forme de résumé avec lien vers la page constructeur.

Page Les Constructeurs
Présentation sous forme de galerie d'images des logos constructeur avec un titre. Au clic sur un logo on visualise la page du constructeur. 

Page constructeur : 
Présentation du constructeur/ de la marque (avec photo+ logo ) 

Bio de la marque (succincte), lien vers la page galerie (qui liste les voitures de la marque). Mettre un lien qui renvoie sur une page qui liste toutes les voitures de la marque sous forme de galerie d'images (image+ titre dessous). Au clic sur l'image on dirige vers la page modÃ¨le de voiture. 

Page Les voitures 
Présentation de toutes les voitures de la base, mettre en place une pagination en bas de page car on affiche seulement 6 voitures par page. 
Liste les voitures sous forme de galerie d'images (image+ titre dessous). Au clic sur l'image on dirige vers la page modèle de voiture. 

Page voiture : 
1 image du véhicule, le nom du véhicule, le nom du constructeur + logo (lien qui affiche une galerie des voitures propre à  la marque), année (avec lien sur une page qui liste les voitures de la même année) 
Texte qui présente de la voiture. 

Page livre d'or : (facultatif) 
La page permet de poster un message Ã  propos du site et de visualiser ceux déjà  laissés. Elle a un formulaire avec 1 champ pseudo, un champ message et un champ note + bouton valider. 
Elle permet de visualiser les messages enregistrés auparavant. Utiliser un système pour éviter d'avoir une page trop longue. 
Texte présentation index : 
Dans les années 30 et 40, les constructeurs automobiles franÃ§ais allièrent à l'aérodynamisme de la carrosserie, l'esthétisme stylistique. 
Au cours d'une trentaine d'années on était passé de la voiture à  caisse carrée, dérivée du fiacre ou de la calèche, aux somptueuses carrosseries aux courbes et galbes voluptueux. L'élan dynamique et affinée des lignes se mariait à  l'ondoiement et aux volutes des ailes, capots, habitacles et coffres. 
Dès lors, Les profils s'étirent en mouvance féminine, les proues, parées de chromes, s'élargissent et se virilisent avec cette retenue tout à  fait remarquable dans
l'agressivité, les poupes s'abaissent et s'allongent, la ligne de fuite veut que l'auto colle à  la route. 

Liens pour la documentation 
https://www.guide-automobiles-anciennes.comNOITURE/Automobiles.htm 
http ://blogdesdeu xmondes.over-blog. com/article-histoire-des-marques-automobiles-francaises-120004444.html 
https ://fr.wikipedia.org/wiki/Cat%C3%A9gorie:Constructeur_automobile_disparu 
http://www.antiqbrocdelatour.com/Les-collections/voitures-anciennes/ 
