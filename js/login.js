$( "#loginform" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "Administrador/ingresar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#ajaxlogin").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#ajaxlogin").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
 $(document).ready(function(){ 
        $('#show').mousedown(function(){
            $('#pass').removeAttr('type');
            $('#show').addClass('fa-eye-slash').removeClass('fa-eye');
        });
        $('#show').mouseup(function(){
            $('#pass').attr('type','password');
            $('#show').addClass('fa-eye').removeClass('fa-eye-slash');
        });
      });