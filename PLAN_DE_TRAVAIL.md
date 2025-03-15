# Plan de Travail - Projet FitVente
## SPRINT 1: Initialisation et Configuration (Jour 1)

### a. Installation du projet Symfony

- Installer Symfony via composer.
- Initialiser Git localement et connecter à GitHub.

### b. Configuration Base de données (MySQL)

- Création de la base MySQL locale.
- Paramétrage fichier .env.

### c. Installation et intégration de Bootstrap

- Ajouter Bootstrap via CDN ou npm.
- Vérification de la bonne intégration.

### d. Création d'un repo GitHub & Documentation initiale

- Upload initial et vérification du dépôt GitHub.
- Documenter le processus dans README.md.

## SPRINT 2: Conception Technique (Jour 2)

### a. Conception du MCD/MLD de la base

- Schéma conceptuel : Produits, Catégories, Utilisateurs, Commandes.
- Validation du schéma.

### b. Génération des entités avec Doctrine
- Création des entités : Product, Category, User, Order.
- Migration Doctrine et tests d’intégrité.

### c. Préparation des Fixtures (données fictives)

- Installer Doctrine Fixtures Bundle.
- Générer un jeu de données initial pour les tests.

## SPRINT 3: Développement Backend Symfony (Jours 3 & 4)

### a. CRUD Produits & Catégories

- Contrôleurs Symfony : ajout, édition, suppression, affichage.
- Routes RESTful associées.

### b. Gestion d'utilisateurs basique

- Installation et configuration Symfony Security.
- Formulaire d'inscription et de connexion utilisateur.

### c. Panier d'achat - Backend

- Création d'un contrôleur pour gérer le panier (ajout, suppression produits).
- Stockage en session utilisateur.

## SPRINT 4: Frontend (Twig, Bootstrap, JS) (Jours 5 & 6)

### a. Mise en page générale (Twig, Bootstrap)

- Page d'accueil.
- Pages produits & catégories.
- Navigation & footer.

### b. Interface utilisateur - Connexion et inscription

- Création des formulaires (Twig).
- Validation frontend (Bootstrap validation, JS).

### c. Panier d'achat - Frontend

- Affichage dynamique du panier.
- Gestion interactive avec JavaScript/AJAX (facultatif).


## SPRINT 5: Tests, Déploiement et Finalisation (Jour 7)

### a. Tests fonctionnels

- Tests manuels sur les parcours utilisateurs (produits, panier, commande).
- Correction des bugs éventuels.

### b. Mise en ligne du projet (déploiement)

- Déploiement sur plateforme gratuite (Render, Heroku).
- Vérification du bon fonctionnement en ligne.

### c. Documentation finale sur GitHub

- Compléter README.md avec :
- Procédure d'installation claire.
- Présentation rapide du projet.