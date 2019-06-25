$(document).ready(function(){
    $("#show-toggle").click(function(){
      $(".position-dropdown").fadeToggle(1000);
    });

    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
    // On-page links
    if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
        && 
        location.hostname == this.hostname
    ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
            return false;
            } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
            };
        });
        }
    }
    });
    $(document).ready(function () {
      $('#dtBasicExample').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    
    $(document).ready(function(){
      // pour le menu 
      $('.toggle').click(function(){
        $('.toggle').toggleClass('active')
        $('.overlay').toggleClass('active')
        $('.mobile-menu').toggleClass('active')
      })

      $('.overlay').click(function(){
        $("div").removeClass("active");
      });
     
    })
     // pour le clic sur le bloc
    $(document).ready(function(){
     
          
    $(".show-modal").click(function(){
      $('.modal-hide').addClass('active');
    });

    $(".modal-hide").click(function(){
      $("div").removeClass("active");
    });
     
    })
    // Tableau
    $(document).ready(function () {
      $('#dtBasicExample').DataTable();
      $('.dataTables_length').addClass('bs-select');
      })

       // pour clic sur le bouton
       $(document).ready(function(){
     
          
        $(".btn-modal").click(function(){
          $('.modal-show').addClass('active');
        });
    
        $(".modal-show").click(function(){
          $("div").removeClass("active");
        });
         
        })
    
  });

  $(function () {
    
});

  // Scroll to specific values
// scrollTo is the same
window.scroll({
  top: 0, 
  left: 0, 
  behavior: 'smooth'
});

// Scroll certain amounts from current position 
window.scrollBy({ 
  top: 0, // could be negative value
  left: 0, 
  behavior: 'smooth' 
});
  //     $(document).on('click','.btn_ok', function(){
        //         var pseudo=$("#pseudo").val(); 
        //         alert(pseudo);
        //     $.ajax({
        //         url:"verif.php",
        //         method:"POST",
        //         data:{pseudo:pseudo},
        //         dataType:"json",
        //         success:function(data){
        //            alert(2);
                          
        //         }
        //     });
        //     return false;    
        // });
        
// $("#form_login").on('submit', function(event){
            //     event.preventDefault();
            //     var pseudo=$('#pseudo').val();
            //     var mp=$('#mp').val();
            //     $.ajax({
            //         url:"login.php",
            //         method:"POST",
            //         data:{
            //             pseudo:pseudo,
            //             mp:mp },
            //         // method:"POST",
            //         // data:new FormData(this),
            //         // contentType:false,
            //         // processData:false,
            //         dataType:"json",
            //         beforeSend : function(){
            //             $("#btn_send").text("Analyse...")
            //             $("#btn_send").attr('disabled', 'disabled')
            //         },
            //         success : function(data) {
            //             alert(mp+pseudo);
            //             $("#btn_send").text("Logine");
            //             $("#btn_send").attr('disabled', false);
            //             $('#error_mp').hide();
            //             $('#error_mp').html(data).slideDown();
            //             // if(data.success){
            //             //     //redirection vers la page d'index
            //             //     alert("Gooooo");
            //             // }
            //             // if(data.error){
            //             //     $("#btn_send").val("Login");
            //             //     $("#btn_send").attr('disabled', false);
            //             //     if(data.error_admin_user_name != ''){
            //             //         $('#error_admin_user_name').text(data.error_admin_user_name)
            //             //     }else{
            //             //         $('#error_admin_user_name').text('');
            //             //     }
            //             //     if(data.error_admin_password != ''){
            //             //         $('#error_admin_password').text(data.error_admin_password)
            //             //     }else{
            //             //         $('#error_admin_password').text('');
            //             //     }
            //             // }

            //         }

            //     })
            // })

// // Scroll to a certain element
// document.querySelector('.hello').scrollIntoView({ 
//   behavior: 'smooth' 
// });