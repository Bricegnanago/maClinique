<?php
  require("partials/header.php");
    //Tant que l'administrateur n'est pas identifié
    //la connection est impossible
    if(empty($_SESSION["pseudo"])){
        // echo $_SESSION["pseudo"];
        header('Location: index.php');
    }
  
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="body">
                    <div class="relative m-per" id="myform">
                        <form method="POST" id="form_consultation" >
                            <h3 class="titre">Information patient</h3>
                            <!-- <div class="d-flex mb-2"> -->
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="dossier" class="txt_red">N° dossier  *</label>
                                    <input type="text" name="dossier" id="dossier" class="form-control " placeholder="N° Dossier" required>
                            
                                </div>
                                <div class="col-md-4">
                                    <label for="nom" class="txt_red">Nom & prenoms  *</label>
                                    <input type="text" name="nom" id="nom" class="form-control " placeholder="Nom & prenoms" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="poids" class="txt_red">Poids  (kg)*</label>
                                    <input type="text" name="poids" id="poids" class="form-control " placeholder="poids" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="sexe" class="txt_red">Sexe *</label>
                                    <select name="sexe" id="sexe" class="custom-select ">
                                        <option value="H" select>H</option>
                                        <option value="F">F</option>
                                    </select>
                                </div>
                            </div>
                            <div class="trait"></div>
                                    <!-- <div class="view mt-2 mb-1" id="error_pseudo"></div> -->
                                    <!-- </div> -->
                            <h3 class="titre">Consultation patient</h3>
                            <div class="relative medecins">
                                <label for="medecin" class="txt_red">Rechercher le medecin *</label>
                                <div class="d-flex">
                                    <input type="text" name="medecin" id="medecin" class="form-control long" placeholder="Rechercher le medecin" required>
                                    <!-- <img src="img/add.jpg" class="add" alt="Add"> -->
                                </div>
                                
                                <div class="result mt-2 mb-2"></div>
                                    <!-- <img src="img/profil1.jpg" class="profil" alt="profil"> -->
                            </div>
                                
                                <!-- <div class="d-flex mb-2"> -->
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="signe" class="txt_red">Signe & Symptome  *</label>
                                    <textarea name="signe" id="signe" class="form-control" cols="35" rows="3" placeholder="Signe & symptome"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <label for="exam" class="txt_red">Examen *</label>
                                    <textarea name="exam" id="exam" class="form-control" cols="35" rows="3" placeholder="Examen"></textarea>

                                </div>
                                <div class="col-md-4">
                                    <label for="conduite" class="txt_red">Conduite à tenir *</label>
                                    <textarea name="conduite" id="conduite" class="form-control" cols="35" rows="3" placeholder="conduite à tenir"></textarea>
                                
                                </div>
                            </div>
                            <input type="button" class="btn btn_modal my-4" value="envoyer">
                            <button class="btn btn_send my-4" type="submit">Enregistrer</button>
                        </form>                                            
                    </div>
                    <div class="abs">
                        <div class="col-md-12">
                            <div class="table bg-white p-4 wow slideInRight">
                                    <h3 class="titre">Medicament à prescrire</h3>
                                    <table class="table table-bordered table-hover" id="table">
                                        <!-- REQUETTE SQL PERMETTANT D'AFFICHER LES INFORMATIONS DE LA BASE DE DONNEES -->
                                        <thead>
                                            <tr>
                                        
                                                <!-- <th class="text-center">N° ID</th> -->
                                                <!-- <th class="text-center">ID</th> -->
                                                <th class="text-center">N° LOT</th>
                                                <th class="text-center">MEDICAMENT</th>
                                                <th class="text-center">QTE</th>
                                                <!-- <th class="text-center">ALERTE</th> -->
                                                <th class="text-center">PRIX</th>
                                                <!-- <th class="text-center">DATE</th> -->
                                                <th class="text-center">PHOTO</th>
                                                <!-- <th class="text-center">ID_FOUR</th> -->
                                            </tr>  
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $query="SELECT * FROM medicament order by id desc";
                                                $stat=$db->prepare($query);
                                                $result=$stat->execute();
                                                while($row=$stat->fetch()){?>
                                                    <tr>   
                                                        <td><?= $row['num'] ?></td>    
                                                        <td><?= $row['nom'] ?></td>
                                                        <td><?= $row['qte'] ?></td>
                                                        <td><?= $row['prix'] ?></td>
                                                        <td><?= $row['photo'] ?></td>
                                                    </tr>
                                                    
                                            <?php 
                                                }
                                            ?>
                                        </tbody>
                                    </table> 
                                </div>
                            </div>                                        
                        </div>
                    </div>
                    
            
                </div>
            </div>
        </div>    
    </div>
    
    <!-- <div class="modal_add"> -->
        <div class="modal modal_top fade " id="modal_choice" tabindex="-1" role="dialog" aria-labelledby="myModalTerrain"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>Voulez-vous prescrire des medicaments?</h4>
                        <input type="button" class="btn_yes btn" value="Oui">
                        <input type="button" class="btn_no btn" value="Non">
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
<?php 
    require("partials/footer.php");
?>
  </body>


</html>
