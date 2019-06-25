<?php
    include("../db/connexion.php"); 
    session_start();
?>
<table class="table table-bordered table-responsive-md table-striped text-center">
    <!-- REQUETTE SQL PERMETTANT D'AFFICHER LES INFORMATIONS DE LA BASE DE DONNEES -->
    <tr class="tb-head">
        <!-- <th class="text-center">N° ID</th> -->
        <th class="text-center">PHOTO</th>
        <th class="text-center">N° Lot</th>
        <th class="text-center">Medicament</th>
        <th class="text-center">Stock</th>
        <th class="text-center">nbre</th>
        <th class="text-center">Restant</th>
        <!-- <th class="text-center">CAUTION</th>
        <th class="text-center">MODIFIER</th>
        <th class="text-center">SUPPRIMER</th> -->
</tr>
<?php
    if(isset($_POST["search"]) and isset($_POST["order"]) or isset($_POST["order_name"]) or isset($_POST["limit"])){
        $order=$_POST["order"];
        $search=$_POST["search"];
        $order_name=$_POST["order_name"];
        $limit=$_POST["limit"];
       
        // echo $search;
        $recup=$db->query("SELECT *
            FROM medicament
            WHERE nom LIKE '%".$search."%'
            OR qte LIKE '%".$search."%'
            OR num LIKE '%".$search."%'
            OR prix LIKE '%".$search."%'
            ORDER by '$order_name' '$order' limit 0,$limit");
            
        // Requette permettant de compter le nombre de ligne du tableau
        $rowCount=$db->query("SELECT COUNT(id) as ligne
            FROM medicament
            WHERE nom LIKE '%".$search."%'
            OR qte LIKE '%".$search."%'
            OR num LIKE '%".$search."%'
            OR prix LIKE '%".$search."%'");
            $row=$rowCount->fetch();
            $nbre=$row['ligne'];
    }else{
        $recup=$db->query("SELECT * FROM medicament order by id desc limit 0,15");
        $rowCount=$db->query("SELECT COUNT(id) as ligne FROM medicament");
        $row=$rowCount->fetch();
        $nbre=$row['ligne'];
        
    }
    echo " <h5 style='color:black; font-weight:750; padding-left:45%'>".$nbre."</h5>"; 
        while($all=$recup->fetch()){ 
            
        // echo $all["ville"] ;            
    ?>
        
    <tr>
        <td class="pt-3-half" >
           <img src="img/profil/<?php echo $all['photo'] ?>" alt="profil"> 
        </td>
        <td class="pt-3-half" >
            <?php echo $all['num']  ?> 
        </td>
        <td class="pt-3-half" >
            <?php echo $all['nom'] ?>
        </td>
        <td class="pt-3-half" >
            <?php echo $all['qte'] ?> 
        </td>
        <td class="pt-3-half" >
            <?php echo $all['prix'] ?>
        </td>
        <td class="pt-3-half" >
            <input type="text">
        </td>
    </tr>

    <?php
     }
     if($nbre==0){
        echo " <h3 style='color:red; font-weight:750; padding-left:45%'>Not found</h3>"; 
    }
    ?>
     
</table>