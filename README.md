<h1>La Fabrique</h1>

Projet réalisé par :  
- Baptiste Bouriau ([BouriauB](https://github.com/BouriauB))
- Lucas Durand ([Lucasdnd](https://github.com/Lucasdnd))
- Pierre-Nicolas Zinsou ([PaixHaine](https://github.com/PaixHaine))
- Ewen Balouin ([EwenBALOUIN](https://github.com/EwenBALOUIN))

 
---
<h3>Présentation du projet :</h3>

Le projet consiste à réaliser un site pour l'entreprise La Fabrique.

La Fabrique est un entreprise spécialisée dans la vente et
 la location de jeux de salons sur-mesures (billards, baby-foot, etc).
 
Ce site a pour but de présenter La Fabrique. Il permet également aux utilisateurs,
 qu'ils soient particuliers ou professionnels de contacter l'entreprise via un formulaire.
 
---
<h2>Configuration du projet :</h2>

<h3>Initialisation/configuration du projet Laravel :</h3>

- Cloner le repo Github avec la commande : `git clone https://github.com/EwenBALOUIN/la-fabrique.git` ou `git@github.com:EwenBALOUIN/la-fabrique.git`
- Récupérer le fichier `.env` sur le [drive](https://drive.google.com/file/d/1cUcImeq2JsrDcP0N5iuMPnbE6pZ6-MPw/view) et déposer-le à la racine du projet.
- Exécuter la commande suivante: `php artisan storage:link`
- Récupérer le fichier `images.zip` sur le [drive](https://drive.google.com/file/d/1cUcImeq2JsrDcP0N5iuMPnbE6pZ6-MPw/view), décompresser-le et déposer-le dans le dossier `public/storage/`.
- Puis utiliser la commande à la racine du projet : `php artisan key:generate`
- Ensuite, télécharger toutes les dépendances avec les commandes `composer install` et `npm install`
- Puis exécutez les commandes qui suivent dans l'ordre suivant:
    - `composer dump-autoload`
    - `npm run dev`
    - `php artisan migrate`
    - `php artisan db:seed --class=MainsTableSeeder`
- Pour se connecter au backend aller à 'localhost/login' et utiliser les identifiants suivants:
    - Admin: admin@admin.com admin
    - Author: author@author.com author
    - User: user@user.com user
