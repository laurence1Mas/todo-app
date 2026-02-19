# Todo App – Laravel + Inertia + Vue 3 + Tailwind CSS

Une application **To Do List** simple mais moderne, construite avec **Laravel**, **Inertia.js**, **Vue 3** et **Tailwind CSS**.
Permet d’ajouter, supprimer et gérer des tâches en SPA, sans rechargement de page grâce à Inertia.

---

## Fonctionnalités

* Affichage d’une liste de tâches
* Ajouter une tâche
* Supprimer une tâche
* (Prêt à ajouter) Toggle `completed` pour marquer les tâches terminées
* Interface responsive et stylée avec Tailwind CSS

---

## Technologies utilisées

| Côté            | Technologie        | Rôle                                             |
| --------------- | ------------------ | ------------------------------------------------ |
| Backend         | Laravel 12         | Framework PHP pour le serveur et la gestion CRUD |
| Frontend        | Vue 3 + Inertia.js | SPA (Single Page Application) côté client        |
| Styles          | Tailwind CSS       | Stylisation rapide et responsive                 |
| Build tools     | Vite               | Compilation des assets Vue & CSS                 |
| Base de données | MySQL / SQLite     | Stockage des tâches                              |

---

## ⚙️ Installation / Configuration

1. **Cloner le projet**

```bash
git clone https://github.com/laurence1Mas/todo-app.git
cd todo-app
```

2. **Installer les dépendances PHP et Node**

```bash
composer install
npm install
```

3. **Créer le fichier d’environnement**

```bash
cp .env.example .env
php artisan key:generate
```

4. **Configurer la base de données** dans `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo_app
DB_USERNAME=root
DB_PASSWORD=
```

5. **Migrer la base de données**

```bash
php artisan migrate
```

6. **Compiler les assets front-end**

```bash
npm run dev
```

7. **Lancer le serveur Laravel**

```bash
php artisan serve
```

Ouvrir dans le navigateur : `http://localhost:8000`

---

## Structure du projet

```
todo-app/
├─ app/                   # Modèles et controllers
├─ database/migrations/    # Tables de la DB
├─ resources/js/Pages/     # Composants Vue
├─ resources/css/          # CSS avec Tailwind
├─ resources/views/        # Vue racine app.blade.php
├─ routes/web.php           # Routes
├─ vite.config.js           # Config Vite + Vue
├─ tailwind.config.js       # Config Tailwind
├─ package.json
└─ composer.json
```

---

## Bonnes pratiques intégrées

* SPA avec Inertia.js (redirections backend automatiques côté frontend)
* Validation des inputs côté serveur
* Styling responsive avec Tailwind CSS
* Structure organisée backend / frontend

---

## Prochaines améliorations

* Modifier une tâche existante
* Toggle completed
* Authentification multi-utilisateurs
* Dashboard avec filtres et pagination
* Animations Tailwind et design plus moderne

---

## Auteur

**Laurence Masika** – Développeuse web.



