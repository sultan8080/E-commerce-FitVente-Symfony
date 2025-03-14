# Plan de Travail - Projet FitVente
## Sprint 1: Initialisation et Configuration (Jour 1)

- Installation du projet Symfony
/- Installer Symfony via composer.
/- Initialiser Git localement et connecter à GitHub.

- Configuration Base de données (MySQL)
/- Création de la base MySQL locale.
/- Paramétrage fichier .env.

- Installation et intégration de Bootstrap
/- Ajouter Bootstrap via CDN ou npm.
/- Vérification de la bonne intégration.

- Création d'un repo GitHub & Documentation initiale
/- Upload initial et vérification du dépôt GitHub.
/- Documenter le processus dans README.md.

## Sprint 2: Conception Technique (Jour 2)
- Conception du MCD/MLD de la base
/- Schéma conceptuel : Produits, Catégories, Utilisateurs, Commandes.
/- Validation du schéma.

- Génération des entités avec Doctrine
/- Création des entités : Product, Category, User, Order.
/- Migration Doctrine et tests d’intégrité.

- Préparation des Fixtures (données fictives)
/- Installer Doctrine Fixtures Bundle.
/- Générer un jeu de données initial pour les tests.

## Sprint 3: Développement Backend Symfony (Jours 3 & 4)
- CRUD Produits & Catégories
/- Contrôleurs Symfony : ajout, édition, suppression, affichage.
/- Routes RESTful associées.

- Gestion d'utilisateurs basique
/- Installation et configuration Symfony Security.
/- Formulaire d'inscription et de connexion utilisateur.

- Panier d'achat - Backend
/- Création d'un contrôleur pour gérer le panier (ajout, suppression produits).
/- Stockage en session utilisateur.

## Sprint 4: Frontend (Twig, Bootstrap, JS) (Jours 5 & 6)
- Mise en page générale (Twig, Bootstrap)
/- Page d'accueil.
/- Pages produits & catégories.
/- Navigation & footer.

- Interface utilisateur - Connexion et inscription
/- Création des formulaires (Twig).
/- Validation frontend (Bootstrap validation, JS).

- Panier d'achat - Frontend
/- Affichage dynamique du panier.
/- Gestion interactive avec JavaScript/AJAX (facultatif).

## Sprint 5: Tests, Déploiement et Finalisation (Jour 7)
- Tests fonctionnels
/- Tests manuels sur les parcours utilisateurs (produits, panier, commande).
/- Correction des bugs éventuels.

- Mise en ligne du projet (déploiement)
/- Déploiement sur plateforme gratuite (Render, Heroku).
/- Vérification du bon fonctionnement en ligne.

- Documentation finale sur GitHub
/- Compléter README.md avec :
/- Procédure d'installation claire.
/- Présentation rapide du projet.