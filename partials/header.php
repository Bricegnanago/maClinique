<?php
    include "db/connexion.php" ;
    session_start();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Agitel Abscence</title>
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
     <!-- Bootstrap core CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <!-- Material Design Bootstrap -->
     <link href="css/mdb.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/jquery.dataTables.min.css">
     <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
     <!-- Your custom styles (optional) -->
     <link href="css/style.css" rel="stylesheet">
     <link href="css/header.css" rel="stylesheet">
     <link href="css/searchbar.css" rel="stylesheet">
     <link href="css/modules/animate.min.css" rel="stylesheet">
     
</head>
    
<body>
    
    <div id="menu_haut">
        <div class="searchbar">
            <div class="searchbar-query">
                <div class="searchbar-input-wrapper br-left">
                        <i class="fas fa-search"></i> 
                        <div class="searchbar-input">
                            <input type="text" class="searchbar-input searchbar-query-input searchbar-query-input-opened valid" placeholder="Rechercher un patient…" >
                        </div>
                    </div>
            </div>
            <div class="searchbar-query">
                <div class="searchbar-input-wrapper br-right">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="searchbar-input">
                        <input type="date" class="searchbar-input searchbar-place-input" >
                    </div> 
                </div>
            </div>             
        </div>  
        <a href="deconnexion.php">Deconnexion</a>
    </div>
    <div id="menu_gauche">
        <!-- <div class=""> -->
        <div class=" "><img src="img/logo_clinique.png" alt="logo" class="logo mt-3 mb-1"></div>
        <div class=" marge"><a href="" class="activ consultation menu-link">CONSULTATION</a></div>
        <div class=" espace"><a href="" class="medecin menu-link">MEDECIN</a></div>
        <div class=" espace"><a href="" class="patient menu-link">PATIENT</a></div>
        <div class=" espace"><a href="" class="medicament menu-link">MEDICAMENT</a></div>
        <div class=" espace"><a href="" class="fournisseur menu-link">FOURNISSEUR</a></div>
        <div class=" espace"><a href="" class="statistique menu-link">STATISTIQUE</a></div>
        <!-- </div> -->
       
    </div>
    <div id="menu_gauche_patient" class="animated slideInLeft" data-wow-delay="1s">
        <!-- <div class=""> -->
        <div class="wow fadeInLeft espace" data-wow-delay="1.3s"><a href="" class="medecin menu-link">MELAGNE</a></div>
        <div class="wow slideInLeft espace" data-wow-delay="1.7s"><a href="" class="patient menu-link">BONNE SANTE</a></div>
   
        <!-- </div> -->
       
    </div>