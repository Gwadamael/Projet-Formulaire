
# Contrat de Partenariat Commercial

L'application **Contrat de Partenariat Commercial** permet de gérer efficacement les contrats entre entreprises, avec une interface d'administration moderne basée sur **Filament**. Elle facilite la gestion des partenaires, des avocats, des contributions et des bénéfices liés à chaque contrat de partenariat.

## Fonctionnalités

- **Gestion des contrats** : Création, édition, et visualisation des contrats détaillant les partenaires, les contributions, et les termes du contrat.
- **Interface admin Filament** : Interface moderne pour gérer facilement les contrats, les partenaires et les avocats.
- **Gestion des partenaires** : Permet d'associer plusieurs partenaires à un contrat via une relation **many-to-many**.
- **Sélection des avocats** : Associez un avocat à chaque contrat pour gérer les aspects juridiques.
- **Recherche et filtrage des contrats** : Tri et affichage des contrats selon différents critères.

## Prérequis

Avant d'installer ce projet, assurez-vous d'avoir les éléments suivants installés sur votre machine :

- **Docker** : Utilisé pour gérer les services nécessaires à l'application.
- **Composer** : Gestionnaire de dépendances PHP, utilisé pour installer les bibliothèques nécessaires.
- **Laravel Sail** : Environnement de développement basé sur Docker pour Laravel.

## Installation

Suivez ces étapes pour installer et démarrer l'application en utilisant Laravel Sail.

### 1. Clonez le dépôt

Clonez le dépôt Git dans le répertoire de votre choix :
```bash
git clone https://github.com/votre-utilisateur/contrat-de-partenariat.git
cd contrat-de-partenariat
```

### 2. Installer les dépendances avec Composer

Si vous n'avez pas encore installé **Laravel Sail**, vous pouvez l'ajouter en exécutant la commande suivante dans le répertoire de votre projet :
```bash
composer require laravel/sail --dev
```

Ensuite, installez toutes les dépendances nécessaires :
```bash
composer install
```

### 3. Démarrer les services avec Sail

Lancez les services Docker nécessaires pour l'application via Sail :
```bash
./vendor/bin/sail up -d
```
Cela démarre les services de base de données (MySQL), de cache (Redis), et d'autres services nécessaires à l'application.

### 4. Configurer l'environnement

Renommez le fichier `.env.example` en `.env` et ouvrez-le pour configurer les paramètres suivants :

- **Base de données** :
  - `DB_CONNECTION`: mysql
  - `DB_HOST`: 127.0.0.1
  - `DB_PORT`: 3306
  - `DB_DATABASE`: nom_de_votre_base
  - `DB_USERNAME`: nom_utilisateur
  - `DB_PASSWORD`: mot_de_passe

- **Clé de l'application** :
  - `APP_KEY`: (à générer via `php artisan key:generate`)

Exemple de configuration `.env` :
```ini
APP_NAME=ContratPartenariat
APP_ENV=production
APP_KEY=base64:YOUR_APP_KEY
APP_DEBUG=false
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=contrat_db
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Générer la clé de l'application

Exécutez cette commande pour générer la clé de l'application :
```bash
./vendor/bin/sail artisan key:generate
```

### 6. Exécuter les migrations de la base de données

Exécutez les migrations pour créer les tables nécessaires à l'application :
```bash
./vendor/bin/sail artisan migrate
```

### 7. Accéder à l'application

Une fois les services Docker démarrés, vous pouvez accéder à l'application via l'URL suivante dans votre navigateur :
```bash
http://localhost
```

## Structure du projet

Voici la structure des répertoires de l'application :

```plaintext
contrat-de-partenariat/
│
├── app/
│   ├── Http/                 # Contrôleurs et middleware
│   ├── Models/               # Modèles Eloquent (Contrat, Partenaire, Avocat)
│   └── Filament/             # Ressources et pages de l'interface admin Filament
│
├── resources/
│   ├── views/                # Vues pour le front-end
│   ├── css/                  # Feuilles de style
│   └── js/                   # Scripts JavaScript
│
├── routes/
│   └── web.php               # Routes principales de l'application
│
├── database/
│   ├── migrations/           # Migrations de la base de données
│   ├── seeders/              # Générateurs de données de test
│
├── .env                      # Fichier de configuration de l'environnement
├── composer.json             # Dépendances du projet
└── public/
    └── index.php             # Point d'entrée pour l'application web
```

### Description des répertoires importants :

- **app/Models** : Contient les modèles principaux comme `Contrat`, `Partenaire`, et `Avocat`.
- **app/Filament** : Contient les ressources et pages pour l'interface d'administration Filament.
- **database/migrations** : Contient les fichiers de migration pour la base de données.
- **resources/views** : Contient les vues pour le front-end de l'application.

## Interface d'administration avec Filament

L'interface d'administration est construite avec **Filament** pour faciliter la gestion des contrats, des partenaires et des avocats. Voici quelques fonctionnalités disponibles dans l'interface d'administration :

- **Liste des contrats** : Affiche tous les contrats enregistrés avec des actions comme "Voir", "Modifier" et "Supprimer".
- **Création/édition de contrat** : Formulaires pour ajouter ou modifier des contrats avec des options pour associer des partenaires et des avocats.
- **Gestion des partenaires** : Permet de sélectionner plusieurs partenaires associés à un contrat.

### Exemple d'utilisation :

Lors de la création d'un contrat, vous devrez remplir les informations suivantes :

- Date du contrat
- Date de fin du contrat
- Activité du partenariat
- Nom du partenariat
- Adresse du siège
- Contribution de chaque partenaire

## Tests

Si vous souhaitez effectuer des tests dans l'application, vous pouvez utiliser PHPUnit pour exécuter les tests unitaires et d'intégration. Exécutez les tests avec la commande suivante :
```bash
./vendor/bin/sail test
```

## Contribution

Si vous souhaitez contribuer à ce projet, n'hésitez pas à créer une **pull request** ou à ouvrir une **issue** pour toute suggestion ou bug rencontré.

## Licence

Ce projet est sous licence **MIT**. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

```
