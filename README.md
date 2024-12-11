# 🌟 Contrat de Partenariat Commercial

**Contrat de Partenariat Commercial** est une application Laravel conçue pour gérer efficacement les contrats entre entreprises. Grâce à une interface moderne basée sur [Filament](https://filamentphp.com/), cette application simplifie la gestion des partenaires, des avocats, des contributions et des bénéfices associés à chaque contrat.

[![MIT License](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)  
[![Laravel Version](https://img.shields.io/badge/Laravel-10.x-red)](https://laravel.com)

---

## 🚀 Fonctionnalités

✔️ **Gestion des contrats** : Créez, éditez et visualisez des contrats détaillant les partenaires, contributions et termes juridiques.  
✔️ **Interface d’administration moderne** : Profitez de l’interface intuitive de Filament.  
✔️ **Gestion des partenaires** : Associez plusieurs partenaires à un contrat via une relation *many-to-many*.  
✔️ **Sélection des avocats** : Assignez un avocat pour gérer les aspects juridiques.  
✔️ **Recherche avancée** : Filtrez et triez les contrats selon divers critères.

---

## 🛠️ Prérequis

Avant de commencer, assurez-vous d’avoir Docker d'installés sur votre machine :

- **[Docker](https://www.docker.com/)** : Pour gérer les services nécessaires à l’application.
---

## 📦 Installation

Suivez les étapes ci-dessous pour installer et configurer l’application.

### 1️⃣ Clonez le dépôt
```bash
git clone https://github.com/Gwadamael/Projet-Formulaire.git
cd Projet-Formulaire/
```

### 2️⃣ Installez les dépendances avec Docker
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v .:/var/www/html \
    -w /var/www/html laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

### 3️⃣ Configurez l’environnement
Renommez le fichier `.env.example` en `.env` :
```bash
cp .env.example .env
```

### 4️⃣ Autoriser les permissions en écriture
```bash
    sudo chmod -R guo+w .
```

### 5️⃣ Lancez les services avec Sail
```bash
./vendor/bin/sail up -d
```

### 6️⃣ Mettez à jour le fichier de configuration `.env`:
```bash
vi .env
```
*Modifiez au moins les mots de passes par défaut dans le fichier*
```env
DB_PASSWORD=[ UN MOT DE PASSE SÉCURISÉ ]
REDIS_PASSWORD=[ UN AUTRE MOT DE PASSE SÉCURISÉ ]
MAIL_PASSWORD=[ ENCORE UN AUTRE MOT DE PASSE SÉCURISÉ ]
```

### 7️⃣ Générez la clé de l’application
```bash
./vendor/bin/sail artisan key:generate
```

### 8️⃣ Exécutez les migrations
```bash
./vendor/bin/sail artisan migrate
```

### 9️⃣ Créez un utilisateur administrateur
Pour accéder à l’interface d’administration :
```bash
./vendor/bin/sail artisan make:filament-user
```
Fournissez un nom d’utilisateur, un e-mail et un mot de passe. 🎉

### Accédez à l’application
- Interface utilisateur : [http://localhost](http://localhost)  
- Interface app Filament : [http://localhost/app](http://localhost/app)

---
## 📂 Structure du projet

Voici une vue d'ensemble de la structure du projet :

```plaintext
contrat-de-partenariat/
├── app/
│   ├── Http/                 # Contrôleurs et middleware
│   ├── Models/               # Modèles Eloquent (Contrat, Partenaire, Avocat)
│   └── Filament/             # Pages et ressources Filament
│
├── resources/
│   ├── views/                # Vues front-end
│   ├── css/                  # Feuilles de style
│   └── js/                   # Scripts JavaScript
│
├── routes/
│   └── web.php               # Routes principales
│
├── database/
│   ├── migrations/           # Migrations de base de données
│   ├── seeders/              # Générateurs de données de test
│
├── .env                      # Fichier de configuration
├── composer.json             # Dépendances
└── public/
    └── index.php             # Point d'entrée
```

## 🖥️ Interface d’administration avec Filament

L’administration avec Filament facilite la gestion des contrats, des partenaires et des avocats.

### Fonctionnalités principales :
- **Liste des contrats** : Visualisez tous les contrats avec des options pour éditer ou supprimer.
- **Création/édition** : Ajoutez ou modifiez des contrats avec des partenaires et avocats associés.
- **Gestion des partenaires** : Sélectionnez plusieurs partenaires dans un formulaire intuitif.

### Création d’un contrat :
Lors de la création d’un contrat, vous devrez renseigner :
- La date du contrat
- La date de fin
- L’activité du partenariat
- Le nom et l’adresse du siège
- La contribution de chaque partenaire
