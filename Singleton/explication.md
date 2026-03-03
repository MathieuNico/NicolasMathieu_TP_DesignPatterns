### SINGLETON 

Le pattern Singleton est utilisé lorsqu’un programme doit garantir qu’une classe ne possède qu’une seule instance active. Il fournit un accès global contrôlé à cet objet unique afin d’éviter les incohérences liées à la création de plusieurs instances.
Lorsque plusieurs parties du programme doivent partager le même objet avec le même état, et qu’il serait problématique d’avoir plusieurs instances, on utilise un Singleton.

### Principe de fonctionnement 

Le Singleton fonctionne en empêchant la création directe d’objets depuis l’extérieur de la classe. La classe conserve une référence vers une instance unique dans une variable static de la classe. Lorsqu’on demande l’objet, une méthode dédiée vérifie si l’instance existe déjà (via la variable) : si oui elle la retourne, sinon elle la crée puis la mémorise pour les prochains appels.

### Rôles Structures 

Rôles des éléments :

## Classe Singleton

contient la logique métier utile au programme

empêche la création directe d’objets depuis l’extérieur

garde une référence vers l’unique instance

## Variable statique d’instance

stocke l’objet unique

est partagée par toute l’application

permet de savoir si l’objet a déjà été créé

## Méthode d’accès statique

point d’entrée global

crée l’objet si nécessaire

retourne toujours la même instance

### Cas d'usage possible 

En termes de cas d'usage possible pour le singleton, nous pouvons évidemment parler de la Database qui est présent dans l'exemple du site pourquoi ? Car cela ne sert à rien de recréer une instance pour la même database. En effet notre Database reste la même dans tous le projet (Dans le contexte ou c'est le cas bien sûr). Donc au lieu de recréer une instance à chaque fois et de risquer d'avoir des incohérences ou que l'état ne soit pas le même et donc créer des bugs c'est pourquoi nous gardons la même instance. 
Nous pouvons aussi parler du cas de gestionnaire de licence d'une application. Pour être plus claire si nous avons un logiciel dans notre entreprise qui nécessite une licence spéciale qui est la même pour tous les employés, nous pouvons utiliser un Singleton pour la classe de Licence qui va servir à vérifier les licences. Comme cela pas de risque d'incohérence entre chaque utilisateur, la vérification reste identique et l'état aussi. 
Par le fait pour tous les cas d'usage c'est aussi moins couteux de créer une seule instance. 