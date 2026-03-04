## Strategy 

## Problème qu'il résout 

Dans certaines applications, un programme doit pouvoir changer de comportement selon le contexte.

Par exemple :

plusieurs méthodes de paiement

plusieurs algorithmes de tri

plusieurs méthodes de livraison

Sans design pattern, on écrit souvent beaucoup de conditions :

if paiement = carte
if paiement = paypal
if paiement = crypto

Cela rend le code difficile à maintenir et à étendre.

Le pattern Strategy permet de séparer les différents comportements dans des classes différentes et de les utiliser dynamiquement.

## Principe de fonctionnement

Le pattern Strategy consiste à :

1️ définir une interface commune pour plusieurs algorithmes
2️ créer plusieurs classes qui implémentent cette interface
3️ utiliser un contexte qui choisit la stratégie à utiliser

Le programme peut alors changer de stratégie sans modifier le code principal.

## Structure

Strategy :

- Interface commune

- Définit la méthode de l’algorithme

Concrete Strategy :

- Implémente l’algorithme spécifique

Context :

- Utilise une stratégie

- Peut changer de stratégie dynamiquement

## Avantages et inconvéniants 

Avangtages : 
Permet de changer facilement d’algorithme
Respecte le principe Open/Closed (SOLID)
Code plus modulaire
Facilite l’ajout de nouvelles stratégies

Inconvénients

Augmente le nombre de classes
Peut être inutile pour des cas très simples

## Cas d'usage 

Le pattern Strategy est utilisé dans plusieurs situations :

- systèmes de paiement

- compression de fichiers

- algorithmes de tri

- IA dans les jeux vidéo

- calculs de prix ou de réduction

Dans cet exemple, on crée un système de livraison pour un site e-commerce.

Un client peut choisir :

- livraison standard

- livraison express

- livraison point relais

Chaque méthode calcule le prix de livraison différemment.