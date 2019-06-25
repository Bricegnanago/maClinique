<?php
    session_start();
    include("db/connexion.php"); 
    // $id_pro=$_SESSION['id'];

    if (isset($_POST['pseudo'])){
        $messages=array();
        // $query="SELECT * FROM admin_tb WHERE pseudo='$pseudo'";
        $mes_recup=$db->query("SELECT * FROM admin_tb WHERE pseudo='".$pseudo."'");
        $donnees = $mes_recup->fetch();
        echo json_encode($donnees);          

        }else{
            
        }
    ?>