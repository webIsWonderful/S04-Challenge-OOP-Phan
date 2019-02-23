# oBlog POO

Actuellement, notre site affiche des données écrites "en dur" dans le code HTML.  
Pour commencer à le rendre dynamique, on va structurer les données :tada:

## Articles

Le code du fichier `index.php` permet justement de tester une classe `Article` (qu'il va falloir coder)

## Etapes

- déclarer une classe `Article` dans un fichier dans le répertoire `classes`
- créer les propriétés de cette classe (lire le code de `index.php` peut vous aider :wink:)
- inclure la classe dans le fichier `index.php`
- écrire les bouts de code demandés dans le fichier `index.php`

## Bonus _Méthode_

- créer une méthode `getDateFr()` qui va retourner la date au format `dd/mm/yyyy` (soit pour le 13 juillet 2017 => 13/07/2017)
- on partira du principe que la date fournie dans un objet `Article` est toujours au format `yyyy-mm-dd`, comme dans `index.php`

## Super Bonus _Visibilité_

- passer les propriétés en privées
- créer les getters et les setters
- modifier le code du fichier `index.php` pour prendre en compte ces modifications (ne plus tenir compte des "START OF YOUR CODE")
