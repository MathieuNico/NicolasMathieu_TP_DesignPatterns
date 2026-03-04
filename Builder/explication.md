## Builder 

Le Builder (Constructeur) est un pattern de création qui permet de construire des objets complexes étape par étape.
Il sépare la construction d’un objet de sa représentation, ce qui permet de créer différentes versions d’un même objet avec le même processus.

## Principe

Imaginons que tu veuilles créer un objet avec beaucoup de paramètres :

$voiture->setCouleur('rouge');

$voiture->setMoteur('V8');

$voiture->setGPS(true);

Si on utilises juste un constructeur classique :

new Voiture('rouge', 'V', true);

Problème : si l’objet a beaucoup de paramètres ou options, le constructeur devient trop complexe et illisible.

Le Builder permet de séparer la construction de l’objet de son utilisation.

ConcreteBuilder s’occupe de construire l’objet

Client (le code principal) demande juste les étapes ou le type de produit voulu

️2 Étapes de construction

Un Builder définit des méthodes pour chaque étape de construction :

setCouleur() → pour définir la couleur

setMoteur() → pour définir le moteur

setGPS() → pour définir si le GPS est présent

Chaque méthode modifie l’objet en cours de construction, mais le client ne manipule jamais l’objet directement.

3 Produit final (Product)

Le Product est l’objet que l’on construit.

Le Builder garde l’objet en interne pendant la construction

Une méthode getVoiture() ou getProduct() permet de récupérer l’objet final

on peut ensuite utiliser l’objet normalement, sans connaître les détails de sa construction.

4 Director (qui est optionnel)

Le Director définit un ordre standard pour construire un produit.

Exemple :

$director->construireSportive();

Le Director appelle les méthodes du Builder dans un ordre précis :

couleur → moteur → GPS

Ainsi, on peux créer différents types de produits avec le même Builder, sans répéter les étapes.

Attention Le Director n’est pas obligatoire : on peux appeler directement les méthodes du Builder depuis le client..

## Structure (rôles des classes)

Product	: Objet final à construire
Builder	: Déclare les méthodes pour construire les parties de l’objet
ConcreteBuilder : Implémente Builder et construit le Product
Director (optionnel) : Contrôle l’ordre des étapes pour créer le produit

Avantages :

Séparation claire entre construction et représentation
Facilite la création d’objets complexes
Permet de créer différentes variantes d’un objet facilement
Code plus lisible et maintenable

Inconvénients :

Plus de classes → code plus verbeux pour des objets simples
Parfois inutile si l’objet est simple ou si peu de variantes existent

## Cas d’usage réel

Création de pizza avec différentes garnitures

Création d’un ordinateur avec RAM, processeur, disque

Construction d’un document complexe avec sections, titres, pied de pag