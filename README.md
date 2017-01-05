Mini-site prise en main
---

Créez un mini site de 3 pages (accueil, bio, contact) avec une en-tête et un pied de page commun
Le contenu du site est libre, cependant il est conseillé de commencer à réfléchir à votre portfolio

**Lisez toutes les instructions (deux fois s'il le faut) avant de commencer**

Instructions détaillées
---

1. **Forkez** ce *repo* puis **clônez le** sur votre machine
2. Créez le contenu des pages `header.php`, `footer.php`, `menu.php` et `home.php`
	- `header.php` doit lier le fichier `style.css` et inclure le fichier `menu.php` qui contient le menu du site
	- `footer.php` doit lier le fichier `app.js`
3. Dans `lib/functions.php` complétez la fonction `getContent` pour pouvoir afficher les pages `pages/bio.php` et `pages/contact.php`
4. créez une fonction getUserData récupérez le contenu du fichier `data/user.json` grâce à la fonction standard 'file_get_contents' et transformez le json en un tableau PHP avec la fonction standard `json_decode` puis affichez ces informations 
5. créez un formulaire de contact dans `pages/contact.php`, ce formulaire doit pointer vers le fichier `save.php` du dossier `public`, qui permet de récupérer les données et de les enregistrer dans le fichier `data/last_message.json` graĉe aux fonctions standard `json_encode` et file_put_contents`
6. affichez le dernier message dans la page `public/admin.php`


Bonus
---
Déployez l'appli sur Heroku

NB
--- 

- en PHP, `foreach` permet de faire une boucle sur un tableau
- Démarrez le serveur avec  (vous pouvez bien entendu y adjoinde browser-sync: 
```
php -S 0.0.0.0:8000 -t public
```
- Ne perdez pas trop de temps avec le CSS et le JS dans un premier temps
- Faites un commit et un push à chacune de cez étapes (il devrait donc y avoir au moins 6 commits sur Github)
- Respectez **scrupuleusement** les consignes, ça fait partie du boulot
