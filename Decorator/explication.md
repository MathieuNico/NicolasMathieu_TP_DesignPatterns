### DECORATOR

Le pattern Decorator est utilisé lorsque nous avons une grande possibilité de combiner des comportements sur un même type d'objet et que créer une classe pour chaque combinaison serait ingérable

### Principe de fonctionnement

Le pattern Decorator permet d’ajouter des fonctionnalités à un objet de manière dynamique, sans modifier sa classe d’origine.
Au lieu de créer de nombreuses sous-classes pour chaque combinaison possible de comportements, on crée des classes décoratrices indépendantes qui viennent “envelopper” l’objet de base.

Chaque décorateur implémente la même interface que l’objet qu’il décore. Il contient une référence vers cet objet et redirige les appels vers lui, tout en ajoutant un traitement avant ou après l’appel.
On peut empiler plusieurs décorateurs les uns autour des autres pour combiner plusieurs comportements.

Le fonctionnement repose donc sur la composition plutôt que sur l’héritage : on assemble les fonctionnalités à l’exécution au lieu de les figer dans une hiérarchie de classes.

### Rôles Structure 

## Composant (Component)

C’est l’interface ou la classe abstraite commune.
Elle définit les méthodes que doivent implémenter l’objet de base et tous les décorateurs.
Grâce à cette interface commune, un objet décoré peut être utilisé exactement comme l’objet original.

## Composant concret (Concrete Component)

C’est l’objet de base que l’on souhaite enrichir.
Il contient le comportement principal, sans fonctionnalités additionnelles.
Il peut fonctionner seul, sans décorateur.

## Décorateur abstrait (Decorator)

C’est une classe intermédiaire qui implémente la même interface que le composant.
Elle contient une référence vers un objet composant.
Son rôle est de servir de base aux décorateurs concrets et de garantir la compatibilité de type.
Elle délègue les appels à l’objet contenu.

## Décorateurs concrets (Concrete Decorators)

Ce sont les classes qui ajoutent réellement les nouveaux comportements.
Chaque décorateur concret ajoute une fonctionnalité spécifique.
Ils peuvent exécuter un traitement avant et/ou après avoir appelé la méthode de l’objet décoré.
Ils peuvent être combinés entre eux pour cumuler les fonctionnalités.
