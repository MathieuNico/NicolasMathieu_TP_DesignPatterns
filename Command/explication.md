## Command 

## Problème qu'il résout 

Problème qu’il résout

Dans certaines applications, on veut séparer l’action à effectuer de l’objet qui la déclenche.

Par exemple :

- un bouton qui allume une lumière

- un bouton qui ouvre une porte

- un bouton qui lance une machine

Si chaque bouton contient directement le code de l’action, le programme devient difficile à modifier ou à étendre.

Le pattern Command permet d’encapsuler une action dans un objet.

Ainsi, on peut :

- stocker des actions

- les exécuter plus tard

- les annuler

- les enregistrer dans un historique


## Principe de fonctionnement 

Le pattern Command transforme une requête en objet.

Une commande contient :

- la référence vers l’objet qui exécute l’action

- la méthode à appeler

Cela permet de découpler l’objet qui demande l’action de celui qui l’exécute.

## Structure 

Command

- Interface des commandes

- Contient la méthode execute()

ConcreteCommand

- Implémente la commande

- Appelle l’action sur le récepteur

Receiver

- Objet qui réalise réellement l’action

Invoker

- Objet qui déclenche la commande

## Avantages et Inconvéniants 

Avantages

- Sépare l’action de l’objet qui la déclenche
- Permet d’ajouter facilement de nouvelles commandes
- Permet d’implémenter undo / redo
- Code plus flexible

Inconvénients

- Peut augmenter le nombre de classes
- Peut être trop complexe pour des actions simples

## Cas d'usages 

Cas d’usage réel

Le pattern Command est souvent utilisé dans :

- interfaces graphiques (boutons)

- éditeurs de texte (undo / redo)

- systèmes de tâches

- automatisation

- télécommandes

Dans cet exemple, on va créer une télécommande pour une maison connectée.

La télécommande peut :

- allumer la lumière

- éteindre la lumière

- démarrer la musique

Chaque action est une commande.