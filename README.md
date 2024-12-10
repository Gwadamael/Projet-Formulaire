# 🌟 Contrat de Partenariat Commercial

**Contrat de Partenariat Commercial** est une application Laravel conçue pour gérer efficacement les contrats entre entreprises. Avec une interface moderne basée sur [Filament](https://filamentphp.com/), elle simplifie la gestion des partenaires, des avocats, des contributions et des bénéfices associés à chaque contrat.

---

## 🚀 Fonctionnalités

✔️ **Gestion des contrats** : Créez, éditez et visualisez des contrats détaillant les partenaires, contributions et termes juridiques.  
✔️ **Interface d'administration moderne** : Profitez de l'interface intuitive de Filament.  
✔️ **Gestion des partenaires** : Associez plusieurs partenaires à un contrat via une relation *many-to-many*.  
✔️ **Sélection des avocats** : Assignez un avocat pour gérer les aspects juridiques.  
✔️ **Recherche avancée** : Filtrez et triez les contrats selon divers critères.

---

## 🛠️ Prérequis

Avant de commencer, assurez-vous d'avoir les outils suivants installés sur votre machine :

- **[Docker](https://www.docker.com/)** : Pour gérer les services nécessaires à l'application.
- **[Composer](https://getcomposer.org/)** : Gestionnaire de dépendances PHP.
- **Laravel Sail** : Environnement de développement Docker intégré à Laravel.

---

## 📦 Installation

Suivez les étapes ci-dessous pour installer et configurer l'application.

### 1️⃣ Clonez le dépôt
```bash
git clone https://github.com/Gwadamael/Projet-Formulaire.git
cd contrat-de-partenariat
```

### 2️⃣ Installez les dépendances avec Composer
```bash
composer require laravel/sail --dev
composer install
```

### 3️⃣ Lancez les services avec Sail
```bash
./vendor/bin/sail up -d
```

### 4️⃣ Configurez l'environnement
Renommez le fichier `.env.example` en `.env` :
```bash
cp .env.example .env
```

Mettez à jour les paramètres suivants :
```env
APP_NAME=ContratPartenariat
APP_ENV=production
APP_KEY=base64:GENERATED_APP_KEY
APP_DEBUG=false
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=contrat_db
DB_USERNAME=root
DB_PASSWORD=
```

### 5️⃣ Générez la clé de l'application
```bash
./vendor/bin/sail artisan key:generate
```

### 6️⃣ Exécutez les migrations
```bash
./vendor/bin/sail artisan migrate
```

### 7️⃣ Créez un utilisateur administrateur
Pour accéder à l'interface d'administration :
```bash
./vendor/bin/sail artisan make:filament-user
```
Fournissez un nom d'utilisateur, un e-mail, et un mot de passe. 🎉

### 8️⃣ Accédez à l'application
Ouvrez votre navigateur et rendez-vous à [http://localhost](http://localhost).  
Pour l'interface admin Filament : [http://localhost/admin](http://localhost/admin).

---

## 📂 Structure du projet

Voici une vue d'ensemble de la structure du projet :

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

## 🖥️ Interface d'administration avec Filament

L'administration avec Filament facilite la gestion des contrats, partenaires et avocats.

### Fonctionnalités principales :
- **Liste des contrats** : Visualisez tous les contrats avec des options pour éditer ou supprimer.
- **Création/édition** : Ajoutez ou modifiez des contrats avec des partenaires et avocats associés.
- **Gestion des partenaires** : Sélectionnez plusieurs partenaires dans un formulaire intuitif.

### Exemple :
Lors de la création d'un contrat, vous devrez renseigner :
- La date du contrat
- La date de fin
- L'activité du partenariat
- Le nom et l'adresse du siège
- La contribution de chaque partenaire

---

## 🧪 Tests

Pour exécuter les tests unitaires et d'intégration :
```bash
./vendor/bin/sail test
```

---

## 🤝 Contribution

Les contributions sont les bienvenues !  
- 📥 Clonez le projet.  
- 🛠️ Ajoutez vos fonctionnalités ou corrigez des bugs.  
- 📤 Proposez une pull request.

N'hésitez pas à ouvrir une **issue** pour signaler des bugs ou suggérer des améliorations.

---

## 📝 Licence

Ce projet est sous licence MIT. Consultez le fichier [LICENSE](LICENSE) pour plus de détails.

---

🎉 **Merci d'avoir choisi Contrat de Partenariat Commercial !**  
Si vous avez des questions, contactez-moi ou ouvrez une issue sur GitHub.

💻 *Bon développement !*
