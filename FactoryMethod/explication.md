## Factory Method 

Le Factory Method (Méthode Fabrique) est un design pattern de création qui permet de déléguer la création d’objets à des sous-classes, plutôt que de créer les objets directement dans le code.

## Problème qu'il résout

Dans beaucoup de programmes, on crée des objets directement avec le mot-clé new.

Le problème est que :

le code devient fortement dépendant des classes concrètes

il est difficile d’ajouter de nouveaux types d’objets

cela réduit la flexibilité et la maintenabilité du code

Le Factory Method résout ce problème en séparant la logique de création d’objet du reste du programme.

Ainsi, le programme utilise une interface ou une classe abstraite, et ce sont les sous-classes qui décident quel objet concret créer.

## Principe de fonctionnement 

Le principe du Factory Method :

- Une classe abstraite (Creator) déclare une méthode de fabrication.

- Cette méthode retourne un objet abstrait (Product).

- Les sous-classes (ConcreteCreator) redéfinissent cette méthode pour créer un produit concret (ConcreteProduct).

Le code principal n’a pas besoin de savoir quel objet précis est créé.

On délègue la création à une factory.

## Structure 

Le pattern contient généralement plusieurs rôles :

Product : 

Interface ou classe abstraite qui définit les méthodes communes aux objets créés.

ConcreteProduct :

Classes concrètes qui implémentent l’interface Product.

Creator :

Classe abstraite qui déclare la Factory Method.

Elle peut aussi contenir du code qui utilise les objets produits.

ConcreteCreator :

Sous-classes qui implémentent la méthode de fabrication pour créer un objet spécifique.

Avantages

- Faible couplage entre la création et l’utilisation des objets
- Respect du principe Open/Closed (on peut ajouter de nouveaux produits sans modifier le code existant)
- Code plus flexible et extensible
- Centralisation de la logique de création

Inconvénients

- Augmente le nombre de classes dans le projet
- Peut rendre l’architecture plus complexe pour de petits projets
- Parfois excessif si la création d’objets est simple


## Cas d'usage 

Exemple : application de transport 

Une application doit créer différents moyens de transport :

voiture
vélo
camion

Au lieu de créer directement les objets :

new voiture();
new velo();

On utilise une Factory Method :

Transport creerTransport();

Puis les sous-classes décident quoi créer :

- FactoryVoiture → crée Voiture

- FactoryVelo → crée Velo

Cela permet d’ajouter facilement un nouveau transport sans modifier le code existant.