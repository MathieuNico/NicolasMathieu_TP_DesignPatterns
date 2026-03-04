## State 

## Problème qu'il résout 

Dans certaines applications, un objet peut avoir plusieurs états, et son comportement change selon cet état.

Par exemple :

une commande : en attente / expédiée / livrée

un lecteur vidéo : play / pause / stop

un distributeur automatique : avec pièce / sans pièce

Sans pattern, on utilise souvent beaucoup de conditions :

if state == "play"
if state == "pause"
if state == "stop"

Quand le nombre d’états augmente, le code devient difficile à lire et à maintenir.

Le pattern State permet de déplacer les comportements liés aux états dans des classes séparées.

## Principe de fonctionnement 

Le pattern State consiste à :

1️ créer une interface d’état
2️ créer plusieurs classes représentant les états
3️ le contexte change d’état dynamiquement

Chaque état définit le comportement de l’objet dans cette situation.

Quand l’état change, le comportement change automatiquement.

## Structure 

State

- Interface des états

- Définit les comportements possibles

ConcreteState

- Implémente un état spécifique

Context

- Objet principal

- Possède un état courant

- Délègue le comportement à cet état

## Avantages et inconvéniants

Avantages

- Réduit les gros blocs de conditions
- Code plus lisible
- Chaque état est isolé dans sa propre classe
- Facilite l’ajout de nouveaux états

Inconvénients

- Augmente le nombre de classes
- Peut être inutile si les états sont très simples

## Cas d'usages 

Le pattern State est utilisé pour :

- machines à états

- jeux vidéo

- workflow de commandes

- lecteurs multimédia

- distributeurs automatiques

Dans cet exemple, on va modéliser un lecteur de musique.

Le lecteur peut être dans 3 états :

- Play

- Pause

- Stop

Le comportement change selon l’état actuel.