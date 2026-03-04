## Composite

Composite (ou “Composé”) est un pattern structurel qui permet de regrouper des objets en structures hiérarchiques et de traiter les objets simples et les groupes d’objets de manière uniforme.

## Problème qu'il résout

Dans certaines applications, certaines entités peuvent être simples (feuilles) ou composées d’autres entités (composites).
Sans Composite : le client doit vérifier à chaque fois si l’objet est simple ou composé avant d’exécuter une opération → code complexe et répétitif.

Avec Composite : le client manipule tous les objets via la même interface, ce qui simplifie considérablement le code.

Exemples de structures hiérarchiques : systèmes de fichiers, menus graphiques, arborescences d’entreprise, documents structurés, etc.

## Principe de fonctionnement 

Le pattern Composite repose sur une interface commune.

Cette interface est utilisée par :

les objets simples (feuilles)

les objets composés (qui contiennent d'autres objets)

Ainsi, le programme peut appeler les mêmes méthodes sans se soucier du type réel de l’objet.

Un composite peut contenir :

des objets simples

d'autres composites

Cela forme une structure en arbre.


## Structures 

Component

- Interface commune

- Définit les méthodes principales

- Leaf

Objet simple

- Ne contient pas d’autres objets

Composite

- Objet qui contient plusieurs composants

- Peut ajouter ou supprimer des enfants

- Délègue les opérations à ses enfants

## Avantages

Simplifie la manipulation d’objets complexes
Permet de traiter objets simples et groupes de manière uniforme
Facilite l’extension du code
Structure hiérarchique claire (arbre)

Inconvénients

- Peut rendre la structure plus difficile à comprendre si elle devient trop profonde
- Peut être compliqué de limiter certains types d’objets dans un composite

## Cas d’usage réel possible

Le pattern Composite est souvent utilisé pour représenter des structures hiérarchiques, par exemple :

systèmes de fichiers (dossiers / fichiers)

menus d’application

interfaces graphiques

organisation d’entreprise (service → équipe → employé)

catalogue de produits avec catégories

Dans cet exemple, nous allons modéliser un catalogue de formation en ligne.

Un catalogue peut contenir :

des formations individuelles

des programmes contenant plusieurs formations