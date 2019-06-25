
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
<!-- WOW -->
<script type="text/javascript" src="js/modules/wow.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        new WOW().init();
        $(".table").hide();
        $('#menu_gauche').addClass('slideInLeft animated');
        $('.modal_add').hide();
        $('#menu_gauche_patient').hide();
        var datatable=$("#table").DataTable();
        $('.btn_modal').click(function(){

            $('#modal_choice').modal('show');
        });
        $('.btn_yes').click(function(){
            $('#modal_choice').hide();
            $('.modal-backdrop').hide();
            $('#menu_gauche').addClass('slideOutLeft animated');
            $('#menu_gauche_patient').show();
            $("#myform").addClass("animated slideOutLeft");
            $(".table").show()

            // $('#menu_gauche_patient').removeClass('d-none');
            // $('#menu_gauche').addClass('slideInLeft animated');
            // $('#menu_gauche_patient').show();
        });
        // var order_name=$('#order_name').val();
        // var order=$('#order').val();
        // var limit=$('#limit').val();

        // function getTableMedicament(){
        //     $.post('ajax/searchMedicament.php',function(data){
        //         $('.search_medicament').html(data);
        //         }); 
        // }
        // getSearchMedicament();
        // function getSearchMedicament(search,limit,order_name,order){
        //     $.ajax({
        //     url:"ajax/searchMedicament.php",
        //     method:"POST",
        //     data : {
        //         search: search,
        //         limit:limit,
        //         order_name:order_name,
        //         order:order
        //     },
        //     success:function(data)
        //         {
        //             $('.search_medicament').html(data); 
        //         }
        //     });
        // }  

        // UTILISATION DE KEY-UP AFIN DE RECHERCHE LES DATA A CHAQUE CLIQUE
    //    $("#search").keyup(function(){                    
    //         var search=$("#search").val(); 
    //         // alert(search);
          
    //         getSearchMedicament(search,limit,order_name,order);
           
    //     });
        
        // setInterval(getSearchMedicament,60000);

        $('.consultation').click(function(){
            $('.consultation').attr('class','menu-link service activ');
            $('.medecin').removeClass('activ');
            $('.patient').removeClass('activ');
            $('.medicament').removeClass('activ');
            $('.fournisseur').removeClass('activ');
            $('.statistique').removeClass('activ');
        }); 
        $('.medecin').click(function(){
            $('.medecin').attr('class','menu-link medecin activ');
            $('.fournisseur').removeClass('activ');
            $('.patient').removeClass('activ');
            $('.medicament').removeClass('activ');
            $('.statistique').removeClass('activ');
            $('.consultation').removeClass('activ');
        }); 
        $('.patient').click(function(){
            $('.patient').attr('class','menu-link patient activ');
            $('.fournisseur').removeClass('activ');
            $('.medecin').removeClass('activ');
            $('.medicament').removeClass('activ');
            $('.statistique').removeClass('activ');
            $('.consultation').removeClass('activ');
        }); 
        $('.medicament').click(function(){
            $('.medicament').attr('class','menu-link medicament activ');
            $('.fournisseur').removeClass('activ');
            $('.patient').removeClass('activ');
            $('.medecin').removeClass('activ');
            $('.statistique').removeClass('activ');
            $('.consultation').removeClass('activ');
        });
        $('.statistique').click(function(){
            $('.statistique').attr('class','menu-link statistique activ');
            $('.fournisseur').removeClass('activ');
            $('.patient').removeClass('activ');
            $('.medecin').removeClass('activ');
            $('.medicament').removeClass('activ');
            $('.consultation').removeClass('activ');
        });
        $('.fournisseur').click(function(){
            $('.fournisseur').attr('class','menu-link fournisseur activ');
            $('.statistique').removeClass('activ');
            $('.patient').removeClass('activ');
            $('.medecin').removeClass('activ');
            $('.medicament').removeClass('activ');
            $('.consultation').removeClass('activ');
        });
        // $('.ombre').click(function(){
        //     $('#menu').hide(900);
        //     $('.ombre').hide(900);
        // });
        // $('.close').click(function(){
        //     $('#menu').hide(600);
        //     $('.ombre').hide(600);
        // });
        // $('.navbar-toggler').click(function(){
        //     $('#menu').show();
        //     $('.ombre').show();
        // });
        // $('.link').click(function(){
        //     $('#menu').hide(650);
        //     $('.ombre').hide(650);
        // });
    });
    // INCREMENTER UNE VALEUR D'UN CHAMP
    // var i=0;
	// 	function augmenter() {
	// 		i++;
	// 		document.getElementById("timer").innerHTML = i;
	// 	}
	// 	setInterval("augmenter()", 1000);
</script>

<!-- <script type="text/javascript" src="js/script.js"></script> -->