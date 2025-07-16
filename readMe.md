# HELPDESK 

![Screenshot de l'index de Cartes.](public\images\screen.png)

## Introduction

Dans le cadre d'une évaluation imposé par mon ce,tre de formation. J'avais pour but de développer une petite application, qui permet à une entreprise, de créer des "tickets" pour mieux gérer les tâches des employés. 
Ces tickets peuvent être modifier ou supprimer. Ils se composent: 
    - De son ID qui est auto-incrémentée
    - Du titre de la tâche
    - De la description de celle-ci
    - De sa priorité avec 3 états : faible, moyenne, absolue
    - De  son statut avec 2 états : fait ou en attente
    - De sa date de création

J'ai généré un CRUD pour faciliter la gestion des tickets. 
La consultation de l'interface est dynamique il y a une couleur pécise pour chaque état: 
    => faible = bleu
    => moyenne = orange
    => absolue = rouge
    => fait = vert
    => en attente = gris

J'ai créé des formulaires de connexion et d'inscription, pour l'utilisateur, qui sont sécurisés grâce au sécurity bundle de Symfony. 

## Technologies utilisées

J'utilise :

    - Symfony pour coordonner le projet, vous pouvez utilisez la version 7.3.*
    - Doctrine ORM :  pour gérer les relations avec ma BDD
    - Twig : Pour le front
    - PHP unit: Pour mes tests unitaires

## Installation du projet 

  git clone (URL du Projet)
  cd (nom du projet)
  composer install
    

