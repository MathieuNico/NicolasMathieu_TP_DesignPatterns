## Observater

Le Observer (Observateur) est un design pattern comportemental.

Il permet de créer un mécanisme de notification entre des objets.
Quand un objet change d’état, tous les objets qui l’observent(Qui sont finalement subscriber) sont informés automatiquement.

## Problème qu'il résout

L'un des principales que résout le design pattern Observateur, est que pour notifier le changement d'état d'un objet, nous pouvons le notifier qu'à une liste de (Subscriber). 

Dans beaucoup d’applications, plusieurs objets doivent réagir à un changement d’un autre objet.

Exemples :

- une application météo met à jour plusieurs écrans

- un système de notifications informe plusieurs utilisateurs

Problèmes :

- le code est fortement couplé
- chaque nouvel observateur nécessite modifier le code existant
- difficile à maintenir

Le pattern Observer permet de découpler les objets.

## Principe de fonctionnement 

Le pattern fonctionne avec deux types d’objets :

- Subject (Sujet)

C’est l’objet observé.

Il :

- garde une liste d’observateurs

- permet d’ajouter ou retirer des observateurs

- notifie tous les observateurs quand un changement se produit.

2ème types d'objets : 
- Observer (Observateur)

Ce sont les objets qui veulent être informés des changements.

Chaque observateur implémente une méthode Update()

## Structure 

Le pattern contient généralement ces éléments :

Subject

Interface ou classe qui permet de :

- ajouter un observateur

- retirer un observateur

- notifier les observateurs

Observer 

Interface contenant la métode : 

Update()

ConcreteSubject

Objet réel qui possède un état et déclenche les notifications.

ConcreteObserver

Objet qui réagit aux changements.

## Avantages

Avantages : 

- Faible couplage entre les objets
- Facile d’ajouter de nouveaux observateurs
- Système de notification automatique
- Très utilisé dans les interfaces graphiques et événements

Inconvénients : 

- Peut devenir difficile à suivre si beaucoup d’observateurs
- Les notifications peuvent être trop nombreuses
- Debug plus complexe

## Cas d'usage

Cas d’usage réel
Exemple : application météo 

Un objet StationMeteo possède :

- température

- humidité

Plusieurs écrans veulent afficher ces données :

- écran mobile

- écran web

- tableau de bord

Quand la météo change :

StationMeteo -> notifie tous les écrans

Chaque écran se met à jour automatiquement.
