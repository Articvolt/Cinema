<!DOCTYPE html>
<html lang="fr">

<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POO cinema</title>
</head>

<body>


    <header>
        <h1> POO Cinema </h1>
    </header>


    <main>
        <p>
            Vous avez en charge de gérer différentes entités autour de la thématique du cinéma. <br>
            Les films seront identifiés par leur titre, leur date de sortie en France, leur durée (en minutes) ainsi que
            leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film (synopsis)
            pourra éventuellement être renseigné. Chaque film est caractérisé par un seul genre
            cinématographique (science-fiction, aventure, action, ...). <br>
            Votre application devra recenser également les acteurs de chacun des films. On désire connaître le
            nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage) joué
            par l’acteur dans le(s) film(s) concerné(s). <br>
            Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de savoir où
            le mettre en place !
        </p>

        <h3>Attention!</h3>

        <ul>
            <li>
                Le rôle (par exemple "James Bond") ne doit être instancié qu'une seule fois (dans la mesure où
                le rôle a été incarné par plusieurs acteurs)
            </li>
        </ul>
        <p>On doit pouvoir</p>

        <ul>
            <li>Lister la liste des acteurs ayant incarné tel rôle</li>
            <li>Lister le casting d'un film (Dans Star Wars, Han Solo a été incarné par Harison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)</li>
            <li>Lister les films par genre (exemple : dans le genre G1 il y a X films : Star Wars, Blade Runner, ...)</li>
            <li>Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)</li>
            <li>Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)</li>
        </ul>

        <h2>RESULTAT</h2>
    </main>
</body>

<?php

spl_autoload_register(function ($class_name) {  //fonction autoloader en PHP, facilite quand plusieurs classes
    require $class_name . '.php';
});


// REALISATEUR

$lucas = new Realisateur("Lucas","Georges","H","1944-05-14");
$young = new Realisateur("Young","Terence","H","1915-06-20");
$glen = new Realisateur("Glen","John","H","1932-05-15");
$fukunaga = new Realisateur("Fukunaga","Cary Joji","H","1977-07-10");
$campbell = new Realisateur("Campbell","Martin","H","1943-10-24");
$spielberg = new Realisateur("Steven","Spielberg","H","1946-12-18");

//ACTEUR 

$craig = new Acteur("Craig","Daniel","H","1986-03-02");
$connery = new Acteur("Connery","Sean","H","1930-08-25");
$brosnan = new Acteur("Brosnan","Pierce","H","1953-05-16");
$ford = new Acteur("Ford","Harisson","H","1942-07-13");
$mark = new Acteur("Hamill","Mark","H","1951-09-25");

//GENRE

$action = new Genre("d'action");
$scienceFiction = new Genre("de science-Fiction");
$aventure = new Genre("d'aventure");
$drame = new Genre("drame");

// FILM 

$indiana= new Film ("Les aventuriers de l'arche perdue","1981-09-16",115,"Professeur d'archéologie, Indiana Jones parcourt le monde à la recherche de trésors. Son rival, le Français René Belloq, travaille pour les nazis qui rêvent de retrouver l'Arche d'alliance contenant les Tables de la Loi. Or, feu le professeur Ravenwood, père de Marion, l'ex-petite amie d'Indiana Jones, détenait une médaille permettant de localiser l'arche. Jones part sur les traces de Marion au Népal.",$spielberg,$aventure);
$Skyfall = new Film("Skyfall","2012-01-01",143,"Laissé pour mort après une mission en Turquie qui a tourné au désastre, l'agent britannique James Bond, nom de code 007, réapparaît à Londres lorsqu'il apprend par les informations d'un journal télévisé qu'un attentat a été commis contre le M16. Cet événement ébranle considérablement l'autorité de la directrice M",$young,$action);
$goldeneye = new Film("Goldeneye","1995-01-01",130, "James Bond est chargé par le MI6 de retrouver le Goldeneye, un satellite russe volé par des mercenaires, dont la puissance de frappe pourrait rayer de la carte n'importe quelle capitale. Sur les traces des responsables, l'agent 007 se rend aux quatre coins du monde avant de retrouver sur son chemin une vieille connaissance. Entre sa mission et ses sentiments personnels, l'agent secret se voit dans l'obligation de faire un choix.",$campbell,$action  );
$mourirPeutAttendre = new Film("Mourir peut attendre","2021-01-01",163,"James Bond n'est plus en service et profite d'une vie tranquille en Jamaïque. Mais son répit est de courte durée car l'agent de la CIA Felix Leiter fait son retour pour lui demander son aide. Sa mission, qui est de secourir un scientifique kidnappé, va se révéler plus traître que prévu, et mener 007 sur la piste d'un méchant possédant une nouvelle technologie particulièrement dangereuse." ,$fukunaga,$action);
$goldfinger = new Film("Goldfinger","1964-01-01",105,"L'agent secret 007 est chargé d'enquêter sur les revenus d'Auric Goldfinger. La banque d'Angleterre a découvert qu'il entreposait d'énormes quantités d'or, mais s'inquiète de ne pas savoir dans quel but. Quelques verres, parties de golf, poursuites et autres aventures galantes plus loin, James Bond découvre en réalité les préparatifs du crime du siècle" ,$young,$action);
$starwars1 = new Film("La menace fantôme","1999-10-13",136,"Avant de devenir un célèbre chevalier Jedi, et bien avant de se révéler l'âme la plus noire de la galaxie, Anakin Skywalker est un jeune esclave sur la planète Tatooine. La Force est déjà puissante en lui et il est un remarquable pilote de Podracer. Le maître Jedi Qui-Gon Jinn le découvre et entrevoit alors son immense potentiel. Pendant ce temps, l'armée de droïdes de l'insatiable Fédération du Commerce a envahi Naboo dans le cadre d'un plan secret des Sith visant à accroître leur pouvoir.",$lucas,$scienceFiction);
$starwars2 = new Film("L'attaque des clones","2002-05-17",142,"Depuis le blocus de la planète Naboo, la République, gouvernée par le Chancelier Palpatine, connaît une crise. Un groupe de dissidents, mené par le sombre Jedi comte Dooku, manifeste son mécontentement. Le Sénat et la population intergalactique se montrent pour leur part inquiets. Certains sénateurs demandent à ce que la République soit dotée d'une armée pour empêcher que la situation ne se détériore. Padmé Amidala, devenue sénatrice, est menacée par les séparatistes et échappe à un attentat.",$lucas,$scienceFiction);

// ROLE

$indianaJones = new Role ("Indiana Jones");
$jamesBond = new Role ("James Bond");
$skywalker = new Role ("Luke Skywalker");
$solo = new Role ("Han Solo");

$casting1 = new Casting($craig, $jamesBond, $goldeneye);
$casting2 = new Casting($craig,$jamesBond,$mourirPeutAttendre);
$casting3 = new Casting($brosnan,$jamesBond,$goldfinger);
$casting4 = new Casting($ford,$solo,$starwars1);
$casting5 = new Casting($ford,$solo,$starwars2);
$casting6 = new Casting($mark,$skywalker,$starwars1);
$casting7 = new Casting($mark,$skywalker,$starwars2);
$casting8 = new Casting($ford,$indianaJones,$indiana);

echo $craig->afficherFilmographie();    

echo $jamesBond->afficherListeRole();

echo $goldeneye->afficherListeActeur();

echo $ford->afficherFilmographie();

echo $starwars1->afficherListeActeur();

echo $skywalker->afficherListeRole();

//------------------------------------------------------------------------------//

?>

<section>
    <h2>Filmographie de Terence Young</h2>
    <div>
        <?php
            $young->AfficherFilmographie();
        ?>
    </div>
</section>

<section>
    <h2>Liste des films du genre : Action</h2>
    <div>
        <?php
            $action->AfficherListeGenre();
        ?>
    </div>
</section>

<section>
    <h2>Information d'un acteur</h2>
    <div>
        <?php
            echo $craig;
        ?>
    </div>
</section>

<section>
    <h2>Information d'un réalisateur</h2>
    <div>
        <?php
            echo $young;
        ?>
    </div>
</section>

<section>
    <h2>Affiche un rôle</h2>
    <div>
        <?php
            echo $jamesBond;
        ?>
    </div>
</section>
