# Application de Quiz en PHP

**Projet réaliser par Gangneux Pierre et Mignan Baptiste**

## Guide d'utilisation

Il est possible de récupérer notre projet avec la commande suivante

    git clone https://github.com/pierre-gangneux/app-php-quizz.git

Il est nécessaire d'installer les dépendances

    php

    php-sqlite3

Pour initialiser la base de données

    make loaddb

Pour lancer le serveur

    make run


## Les Contraintes et fonctionnalités

### Organisation du code dans une arborescence cohérente

L'ensemble du code est organisé dans une organisation permettant une rapide compréhension du code. Le projet a été séparé en plusieurs répertoires tels que les classes, les contrôleurs, les views, etc...

### Utilisation des namespaces

Le projet est organisé en namespaces afin de respecter une arborescence cohérente et d'utiliser de bonnes pratiques de programmation.

### Chargement des questions et leurs réponses via un fichier json

Le chargement des questions et leurs réponses se fait lors du chargement de la page des questions. Les questions sont récupérées à partir d'un fichier JSON et ensuite enregistrées dans la variable global session.

### Utilisation d'un autoloader pour charger les classes d’objets

Les classes d'objets PHP sont chargées avec l'utilisation d'un autoloader bénéficiant de notre bonne organisation du projet, avec l'utilisation de namespaces.

### Stockage des réponses et calcul d'un score

Une fois que l'utilisateur a répondu au questionnaire, ses réponses sont enregistrées et il est redirigé vers une page de correction lui indiquant les bonnes réponses ainsi que son score, qui est ensuite enregistré dans la base de données.

### Classes PHP pour programmer une application orientée objet

Le projet est intégralement développé en PHP.

### Contrôleur dans index.php piloté par GET['action']

Le contenu des pages est contrôlé avec la récupération de GET['action'] permettant d'exécuter différentes tâches.

### Base de données

Nous avons créé une base de données afin de stocker le pseudo d'un joueur ainsi que son score une fois le questionnaire terminé.