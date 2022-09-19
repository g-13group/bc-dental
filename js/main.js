$(document).ready(function() {
 
 
  var owl = $("#owl-demo");
 	owl.owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
	  navigationText: ["<",">"],
	  pagination: false
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
  
   $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
 
});

function enviar_email(){
		var num_serie = $('#num_serie').val();
		var dia_fab = $('#dia_fab').val();
		var mes_fab = $('#mes_fab').val();
		var ano_fab = $('#ano_fab').val();

		jQuery.ajax({
		   type: "POST",
		   url: "enviar_email.php",
		   data: 'nombre='+ nombre + '&telefono='+ telefono + '&email='+ email + '&comentarios='+ comentarios,
		   cache: false,
		   success: function(response){
					if(response == 1){
							$("#respuesta_form_ok").delay(1000).slideDown();
							$("#form").delay(1000).slideUp();
					}
					else
					{
							$("#respuesta_form_error").slideDown().delay(1000).slideup();
							$("#form").delay(1000).slideUp();
					}
			}
		});
		$('#contacto').animatescroll();
}