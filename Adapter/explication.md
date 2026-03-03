## Adapter

Le Adapter (ou Adaptateur) est un pattern structurel qui permet de faire fonctionner ensemble des classes incompatibles en convertissant l’interface d’une classe en celle qu’attend le client.

## Problème qu'il résout 

class VoitureAncienne {
    public function demarrerAncienMode() { ... }
}

Mais le code client attend :

interface Voiture {
    public function demarrer();
}

Sans adapter, le client ne peut pas utiliser la classe ancienne.

Le pattern Adapter crée une classe intermédiaire qui fait la traduction entre l’ancienne interface et celle attendue par le client.

## Principe de fonctionnement 

Un adaptateur encapsule un objet existant afin de simplifier son utilisation et de masquer la complexité de sa conversion interne. L’objet encapsulé ne connaît pas les transformations appliquées par l’adaptateur.

Par exemple, un objet peut travailler avec des mesures en mètres et kilomètres, tandis qu’un adaptateur transforme automatiquement toutes les valeurs en unités impériales, comme les pieds ou les miles, pour uniformiser les données utilisées.

Les adaptateurs permettent non seulement de convertir des formats, mais aussi de rendre compatibles des interfaces qui ne le sont pas nativement.

Le fonctionnement se déroule ainsi :

L’adaptateur fournit une interface compatible avec l’objet existant.

L’objet initial peut appeler les méthodes de l’adaptateur via cette interface.

L’adaptateur reçoit les appels et les transmet à l’objet interne dans un format et un ordre qu’il peut comprendre.

Certains adaptateurs peuvent effectuer ces conversions dans les deux sens, permettant une communication bidirectionnelle.


Avantages :

Permet de réutiliser des classes existantes sans les modifier
Découple le client de l’implémentation réelle
Facile à ajouter de nouveaux adaptateurs

Inconvénients :

Peut ajouter de la complexité si trop d’adapters
La traduction peut être limitée par les capacités de l’adaptee