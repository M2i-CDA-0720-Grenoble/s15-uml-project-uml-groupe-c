# Projet voyage user story

En tant que _type d'utilisateur/acteur_, j'ai besoin de _un élément de l'application_ afin de _but
de la fonctionnalité_

| User story | Méthode HTTP | Route | Contrôleur | Méthode |
| --- | --- | --- | --- | --- |
| En tant que **visiteur**, j'ai besoin d'**une page d'accueil** afin d'**accéder aux services de l'application** | GET | `/` | `MainController` | `index` |
| En tant que **visiteur**, j'ai besoin d'**un formulaire de contact** afin de **pouvoir poser des questions au service client** | GET\|POST | `/contact` | `MainController` | `contact` |
| En tant que **service client**, j'ai besoin d'**ajouter une réservation** afin d'**ajouter une réservation** | GET\|POST | `/service/add` | `ServiceClientController` | `contact` |
| En tant que **service client**, j'ai besoin d'**un formulaire** afin de **supprimer de réservation** | GET\|POST | `/service/:id/delete` | `ServiceClientController` | `contact` |
| En tant que **visiteur**, j'ai besoin d'**un champ de recherche** afin de **trouver les voyages correspondant à certains critères** | GET | `/search` | `MainController` | `search` |
| En tant que **visiteur**, j'ai besoin d'**une liste de voyages** afin de **pouvoir faire mon choix parmi les voyages disponibles** | GET | `/voyage` | `VoyageController` | `index` |
| En tant que **visiteur**, j'ai besoin d'**une fiche technique** afin d'**en savoir plus sur un voyage qui m'intéresse**. | GET | `/voyage/:id` | `VoyageController` | `show` |
| En tant que **visiteur**, j'ai besoin d'**un formulaire d'inscription** afin de **créer un compte** | GET\|POST | `/signup` | `SecurityContoller` | `signup` |
| En tant que **visiteur**, j'ai besoin d'**un formulaire d'authentification** afin d'**accéder à mon compte** | GET\|POST | `/login` | `SecurityController` | `login` |
| En tant que **membre inscrit**, j'ai besoin d'**un bouton de déconnexion** afin de **refermer mon compte** | POST | `/logout` | `SecurityController` | `logout` |
| En tant que **membre inscrit**, j'ai besoin d'**une page de profil** afin de **mettre à jour mes informations** | GET\|POST | `/account` | `AccountController` | `index` |
| En tant que **membre inscrit**, j'ai besoin d'**un bouton dans la description de chaque voyage** afin de **passer à la réservation** | POST | `/voyage/:id/buy` | `VoyageController` | `buy` |
| En tant que **membre inscrit**, j'ai besoin d'**un bouton "validation" sur la page "reservation"** afin de **valider ma réservation** | POST | `/reservation/validate` | `ReservationController` | `validate` |
| En tant que **membre inscrit**, j'ai besoin d'**une liste des réservations que j'ai effectuées** afin de **gérer mes réservations** | GET | `/account/reservation` | `AccountController` | `reservation` |
| En tant qu'**organisateur**, j'ai besoin d'**une liste de tous les voyages existants** afin d'**avoir accès aux fonctionnalités de modification des voyages** | GET | `/admin/voyage` | `Admin\MainController` | `voyage` |
| En tant qu'**organisateur**, j'ai besoin d'**un formulaire d'ajout de voyage** afin d'**ajouter des nouveaux voyages** | GET\|POST | `/admin/voyage/new` | `Admin\VoyageController` | `new` |
| En tant qu'**organisateur**, j'ai besoin d'**un formulaire de modification de voyage** afin de **modifier des voyages existants** | GET\|POST | `/admin/voyage/:id/update` | `Admin\VoyageController` | `update` |
| En tant qu'**organisateur**, j'ai besoin d'**un bouton de suppression pour chaque voyage** afin de **supprimer ce voyage** | POST | `/admin/voyage/:id/delete` | `Admin\VoyageController` | `delete` |
| En tant qu'**organisateur**, j'ai besoin d'**une liste de tous les membres inscrits existants** afin d'**avoir accès aux fonctionnalités de modification des membres inscrits** | GET | `/admin/members` | `Admin\MainController` | `members` |
| En tant qu'**administrateur**, j'ai besoin d'**un formulaire d'ajout de membre** afin d'**ajouter des nouveaux membres** | GET\|POST | `/admin/members/new` | `Admin\VoyageController` | `new` |
| En tant qu'**administrateur**, j'ai besoin d'**un formulaire de modification de membre** afin de **modifier des membres existants** | GET\|POST | `/admin/members/:id/update` | `Admin\VoyageController` | `update` |
| En tant qu'**administrateur**, j'ai besoin d'**un bouton de suppression pour chaque membre** afin de **supprimer ce membre** | POST | `/admin/members/:id/delete` | `Admin\VoyageController` | `delete` |
