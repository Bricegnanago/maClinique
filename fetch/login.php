<?php 
    include('../db/connexion.php');
    session_start();
 
    echo"";
    $output="";
    $error="";
    if(isset($_POST['mp'],$_POST['pseudo'])
        and !empty($_POST['pseudo']) and !empty($_POST['mp'])){ 
        $mp=protect($_POST['mp']);
        $pseudo=protect($_POST['pseudo']);
        // $affiche=array();
        $query="SELECT * FROM admin_tb WHERE pseudo='$pseudo'";
        $stat=$db->prepare($query);

        if($stat->execute()){
            $total_row=$stat->rowCount();

            if($total_row>0){
                $result=$stat->fetchAll();
                foreach($result as $row){
                    // if(password_verify($mp,$row["mp"])){
                    if($mp==$row["mp"]){
                        $_SESSION["pseudo"]=$row["pseudo"];
                      
                        echo"access autorisé";
                        // echo"<span class='succes'>Access autorized</span>";
                        // $error==1;
                        // header('Location:consultation.php');
                        // header('location:consultation.php'); 
                    }else{
                        echo"<span class='erreur'>Mot de passe incorrect!</span>"; 
                       
                    }
                }
            }else{
                echo"<span class='erreur'>Ce pseudo n'existe pas!</span>"; 
               
            }
        }
    }else{
        echo"<span class='erreur'>Veuillez remplir tous les champs!</span>"; 
    }

    function protect($data){
        $data  =  trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
// echo"bien";

//     $pseudo="";
//     $mp="";
//     $error_mp="";
//     $error_pseudo="";
//     $error=0;
//     // Verification du champ speudo 
//     if(empty($_POST["pseudo"])){
//         $error_pseudo="Inserer le pseudo!";
//         $error++;
//     }else{
//         $pseudo=protect($_POST["pseudo"]);
//     }
//     // Verification du champ mp 
//     if(empty($_POST["mp"])){
//         $error_mp="Inserer le mot de passe!";
//         $error++;
//     }else{
//         $mp=protect($_POST["mp"]);
//     }
//     // Si le champs n'est pas vide
//     // echo "Bien";
//     if(isset($_POST['mp'],$_POST['pseudo'])
//         and !empty($_POST['pseudo']) and !empty($_POST['mp'])){ 
      
//     // if($error==0){
//         $query="SELECT * FROM admin_tb WHERE pseudo='$pseudo'";
//         $stat=$db->prepare($query);
//         if($stat->execute()){
//             $total_row=$stat->rowCount();
//             if($total_row>0){
//                 $result=$stat->fetchAll();
//                 foreach($result as $row){
//                     if($mp==$row["mp"]){
//                         $_SESSION["pseudo"]=$row["pseudo"];
//                         // header('location:consultation.php');
//                     }else{
//                         $error_mp="Mot de passe incorrect!";
//                         // $error++;
//                     }
//                 }
//             }else{
//                 $error_speudo="Ce speudo n'existe pas!";
//                 // $error++;
//             }
//         }
//     }
//     if($error>0){
//         $output=array(
//             'error'    => true,
//             'error_mp' =>$error_mp,
//             'error_speudo' =>$error_speudo
//         );
//     }else{
//         $output=array(
//             'success'    => true
//         );
//     }
//     echo json_encode($output);
    

?>