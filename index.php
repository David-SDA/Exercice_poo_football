<?php
    /* Fonction pour charger les classes nécessaires automatiquement */
    spl_autoload_register(function ($class) {
        require $class . '.class.php';
    });

    /* Création des pays */
    $france = new Pays("France");
    $espagne = new Pays("Espagne");
    $angleterre = new Pays("Angleterre");
    $italie = new Pays("Italie");
    $portugal = new Pays("Portugal");
    $argentine = new Pays("Argentine");
    $bresil = new Pays("Brésil");

    /* Création des équipes */
    $psg = new Equipe("PSG", $france, "1970");
    $rcsa = new Equipe("Racing Club de Strasbourg", $france, "1906");
    $realMadrid = new Equipe("Real Madrid", $espagne,"1902");
    $fcb = new Equipe("FC Barcelone", $espagne, "1899");
    $manU = new Equipe("Manchester United", $angleterre, "1878");
    $juve = new Equipe("Juventus", $italie, "1897");

    /* Création des joueurs */
    $kyks = new Joueur("Kylian", "Mbappé", "1998-12-20", $france);
    $cr7 = new Joueur("Cristiano", "Ronaldo", "1985-02-05", $portugal);
    $messi = new Joueur("Lionel", "Messi", "1987-06-24", $argentine);
    $neymarJr = new Joueur("Neymar", "Junior", "1992-02-05", $bresil);

    /* Création des contrats */
    $contractCr7RealMadrid = new Contract($cr7, $realMadrid, "2009");
    $contractCr7Juve = new Contract($cr7, $juve, "2018");
    $contractCr7ManU = new Contract($cr7, $manU, "2021");
    $contractMessiFcb = new Contract($messi, $fcb, "2004");
    $contractMessiPsg = new Contract($messi, $psg, "2021");
    $contractKyksPsg = new Contract($kyks, $psg, "2017");
    $contractNeymarJrFcb = new Contract($neymarJr, $fcb, "2013");
    $contractNeymarJrPsg = new Contract($neymarJr, $psg, "2017");

    echo $france->getAffichageEquipesPays();
    echo "<br>";
    echo $espagne->getAffichageEquipesPays();
    echo "<br>";
    echo $angleterre->getAffichageEquipesPays();
    echo "<br>";
    echo $italie->getAffichageEquipesPays();
    echo "<br>";
?>