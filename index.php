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
    <title>Login</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/login.css" rel="stylesheet">
    <link href="css/modules/animate.min.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <!-- WOW -->
    <script type="text/javascript" src="js/modules/wow.min.js"></script>
</head>
    
<body>
    <!-- <div class="opacity"></div> -->
    <div id="login">
        
        <form method="POST" id="form_login" class="text-center">
            <img src="img/icone/icone-etud.png" alt="Icone" class="">
            <div class="pt-3">
            <h3>Login</h3>
                <!-- <div class="ok"></div> -->
                <div class="view result mt-2 mb-2"></div>
                <h4 class="titre">Pseudo</h4>
                <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Entrer le login">
                <!-- <div class="view mt-2 mb-1" id="error_pseudo"></div> -->
            </div>
            <div class="pt-3">
                <h4 class="titre">Mot de passe</h4>
                <input type="password" name="mp" id="mp" class="form-control" placeholder="Entrer le mot de passe">
                <!-- <div class="view mt-2 mb-1" id="error_mp"></div> -->
            </div>
            <button class="btn btn-valid my-4" id="btn_send" type="submit">login</button>
        </form>
        <!-- <button class="btn btn-success btn_ok my-4">ok</button>
        <div class="result"></div> -->
    </div>


<script>
    $(document).ready(function(){
      
        $("#form_login").on('submit',function(event){
            event.preventDefault();
            var pseudo=$("#pseudo").val();
            var mp=$("#mp").val();
            $('.result').hide();
            $.ajax({
                url : "fetch/login.php",
                method : "POST",
                data:new FormData(this),  
                contentType:false,
                processData:false,
                beforeSend : function(){
                    $("#btn_send").text("Analyse...");
                    $("#btn_send").attr('disabled', 'disabled');
                },
                success:function(data){
                    $('.result').show();
                    $("#btn_send").text("Login");
                    $("#btn_send").attr('disabled', false);
                    // $('#error_mp').hide();
                    $('.result').html(data).slideDown();
                    var rep=data;
                    if(rep=="access autorisé"){
                        // alert("Go");
                        window.location.replace("consultation.php");
                    }
                    
                }
            });
             
                return false;
        });  
    });
    </script>

</body>


</html>
