## Facade 

Le Facade est un pattern structurel qui fournit une interface simplifiée pour un ensemble de classes ou de sous-systèmes complexes.

Il permet au client d’accéder à des fonctionnalités complexes sans connaître tous les détails internes.

## Problème qu'il résout 

Dans de gros systèmes, certaines opérations nécessitent d’appeler plusieurs classes et méthodes différentes.

Sans Facade : le client doit manipuler chaque sous-système individuellement → code compliqué et couplé.

Avec Facade : le client utilise une interface unique qui regroupe et simplifie ces appels.

## Principe de fonctionnement 

Plusieurs classes (sous-systèmes) contiennent des fonctionnalités spécifiques.

La Facade fournit une interface simple qui regroupe les appels vers ces classes.

Le client utilise uniquement la Facade, sans se soucier des détails internes.

## Structures 

Sous-systèmes : Classes qui contiennent la logique réelle
Facade : Classe qui regroupe les appels vers les sous-systèmes
Client : Utilise la Facade pour accéder aux fonctionnalités

Avantages

Simplifie l’utilisation de systèmes complexes
Réduit le couplage entre client et sous-systèmes
Facilite la maintenance et les modifications internes

Inconvénients

Peut devenir un goulot d’étranglement si la Facade devient trop complexe
Ne masque pas complètement la complexité si le sous-système est énorme