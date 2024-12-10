# 🌟 Contrat de Partenariat Commercial

**Contrat de Partenariat Commercial** est une application Laravel conçue pour gérer efficacement les contrats entre entreprises. Grâce à une interface moderne basée sur [Filament](https://filamentphp.com/), cette application simplifie la gestion des partenaires, des avocats, des contributions et des bénéfices associés à chaque contrat.

> Cette application se distingue par sa simplicité d’utilisation et son interface moderne, idéale pour toute entreprise cherchant à automatiser la gestion de ses partenariats.

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

Avant de commencer, assurez-vous d’avoir les outils suivants installés sur votre machine :

- **[Docker](https://www.docker.com/)** : Pour gérer les services nécessaires à l’application.
- **[Composer](https://getcomposer.org/)** : Gestionnaire de dépendances PHP.

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
docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/var/www/html -w /var/www/html laravelsail/php81-composer:latest composer install --ignore-platform-reqs
```

### 3️⃣ Configurez l’environnement
Renommez le fichier `.env.example` en `.env` :
```bash
cp .env.example .env
```

### 4️⃣ Lancez les services avec Sail
```bash
sail up -d
```
Mettez à jour les paramètres suivants :
```env
APP_NAME=ContratPartenariat
APP_ENV=production
APP_KEY=base64:GENERATED_APP_KEY
APP_DEBUG=false
APP_URL=http://localhost

DB_CONNECTION=mariadb
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=contrat_db
DB_USERNAME=root
DB_PASSWORD=
```

> **Remarque :** La clé `APP_KEY` sera générée automatiquement à l’étape suivante.

### 6️⃣ Générez la clé de l’application
```bash
sail artisan key:generate
```

### 7️⃣ Exécutez les migrations
```bash
sail artisan migrate
```

### 8️⃣ Créez un utilisateur administrateur
Pour accéder à l’interface d’administration :
```bash
sail artisan make:filament-user
```
Fournissez un nom d’utilisateur, un e-mail et un mot de passe. 🎉

### 9️⃣ Accédez à l’application
- Interface utilisateur : [http://localhost](http://localhost)  
- Interface admin Filament : [http://localhost/admin](http://localhost/admin)

---

### 🚢 Commandes Sail courantes

- **Démarrer les services :**
  ```bash
  sail up -d
  ```
- **Arrêter les services :**
  ```bash
  sail down
  ```
- **Accéder au terminal :**
  ```bash
  sail shell
  ```

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

---

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

---

## 🔧 Compatibilité

- **PHP** : 8.2 ou supérieur  
- **Laravel** : 10.x  
- **Filament** : 3.x  
- **Docker** : 20.x ou supérieur  

---

## 🧪 Tests

Pour exécuter les tests unitaires et d’intégration :
```bash
sail test
```

---

## 🤝 Contribution

Les contributions sont les bienvenues !  
- 📥 Clonez le projet.  
- 🛠️ Ajoutez vos fonctionnalités ou corrigez des bugs.  
- 📤 Proposez une pull request.

N’hésitez pas à ouvrir une **issue** pour signaler des bugs ou suggérer des améliorations.

---

🎉 **Merci d’avoir choisi Contrat de Partenariat Commercial !**  
Si vous avez des questions, contactez-moi ou ouvrez une issue sur GitHub.

💻 *Bon développement !*

---
