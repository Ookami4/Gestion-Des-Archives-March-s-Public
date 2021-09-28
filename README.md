# Gestion-Des-Archives(Marchés Public)

Gestion Des Archives (Marchés public) projet réaliser lors d'un stage d'initiation à DPN Nador AREFO

## Architecture Modèle/Vue/Contrôleur
Le MVC signifie Model-View-Controller est un modèle architectural qui sépare une application en trois composants logiques principaux :
modèle, vue et le contrôleur. Chacun de ces composants est construit pour gérer des aspects de développement spécifiques d’une application.
MVC est l’un des frameworks de développement Web standard les plus fréquemment utilisés dans l’industrie pour créer des projets extensibles et évolutifs.

modèle : données (accès et mise à jour).
vue : interface utilisateur (entrées et sorties).
contrôleur : gestion des événements et synchronisation.

## Composants MVC

1. Vue :
La vue fait l'interface avec l'utilisateur. Sa première tâche est d'afficher les données qu'elle a récupérées auprès du modèle. Sa seconde tâche est de recevoir tous les actions de l'utilisateur (clic de souris, sélection d'une entrées, boutons, …). Ses différents événements sont envoyés au contrôleur.
2. Modèle :
Le modèle contient les données manipulées par le programme. Il assure la gestion de ces données et garantit leur intégrité. Dans le cas typique d'une base de données, c'est le modèle qui la contient.
Le modèle offre des méthodes pour mettre à jour ces données (insertion suppression, changement de valeur). Il offre aussi des méthodes pour récupérer ses données. Dans le cas de données importantes, le modèle peut autoriser plusieurs vues partielles des données.
3. Contrôleur :
Le contrôleur est chargé de la synchronisation du modèle et de la vue. Il reçoit tous les événements de l'utilisateur et enclenche les actions à effectuer. Si une action nécessite un changement des données, le contrôleur demande la modification des données au modèle et ensuite avertit la vue que les données ont changé pour que celle-ci se mette à jour. Certains événements de l'utilisateur ne concerne pas les données mais la vue. Dans ce cas, le contrôleur demande à la vue de se modifier.
