## Abstract Factory

## Problème qu’il résout

Dans certaines applications, on doit créer plusieurs objets qui appartiennent à une même famille.

Par exemple :

- interface Windows

- interface Mac

- interface Linux

Chaque système possède :

-des boutons

-des menus

-des fenêtres

Si on crée ces objets directement avec new, le code devient dépendant des classes concrètes, ce qui rend le programme difficile à modifier.

Le pattern Abstract Factory permet de créer des familles d’objets liés sans connaître leurs classes concrètes.


## Principe de fonctionnement 

Principe de fonctionnement

Le pattern repose sur :

1 une factory abstraite
2️ plusieurs factories concrètes
3️ plusieurs produits abstraits

Chaque factory concrète crée une famille cohérente d’objets.

Par exemple :

WindowsFactory → WindowsButton, WindowsMenu

MacFactory → MacButton, MacMenu

Le programme utilise seulement les interfaces.

## Structures 

AbstractFactory

Interface qui définit les méthodes de création

ConcreteFactory

Implémente la factory

Crée les objets d’une famille spécifique

AbstractProduct

Interface des objets créés

ConcreteProduct

Implémentation spécifique du produit

## Avantages et inconveniants 

Avantages

Permet de créer des familles d’objets cohérentes
Découple la création des objets du reste du programme
Facilite le changement de famille d’objets
Respecte les principes SOLID

Inconvénients

Ajoute beaucoup de classes
Peut être complexe pour de petits projets