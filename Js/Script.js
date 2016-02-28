function create_folder(){


	
		if($('.new-folder-box').val() == ""){
			        alert("El campo Nombre no puede estar vacío.");
			        $('.new-folder-box').focus();// Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
			        return false;
			    }else 	{
								
var dataString = $('.formdata').serialize();


        					$.ajax({
									    
									    type: 'POST',
									    data: dataString,
									    url: '../App/php/create-folder.php',
									     dataType: 'json',
									    
									    success: function() {
									      	
											$("#fracaso").delay(500).fadeIn("slow");
									    },
									    error: function(){
									      
									      	$(".formdata").fadeOut("slow");		
											$("#exito").delay(500).fadeIn("slow");
											$("#new-folder").delay(2000).fadeOut("slow");
									      
											/*   recargar contenido de tablas */
												/* tabla side lateral*/
												$("#rolling").fadeIn("slow");
											  	$("#content-side-nav").css('opacity', 0.6);
											  	/*$("#content-side-nav").load('home.php?randval='+ Math.random() + " #content-side-repo", function(){
											      //aquí puedes meter más código si necesitas;
											      $("#content-side-nav").css('opacity', 1);
											      $("#rolling").fadeOut("slow");
											  	});*/

											  	/* tabla principal */
											  	$("#rolling-body").fadeIn("slow");
											  	$("#panel").css('opacity', 0.6);
											  	/*$("#panel").load('home.php?randval='+ Math.random() + " #panel-body", function(){
											      
												      		$(".formdata").fadeOut("slow");		
														$("#exito").delay(500).fadeIn("slow");
														$("#new-folder").delay(2000).fadeOut("slow");
												      	
												      	$("#panel").css('opacity', 1);
											      		$("#rolling-body").fadeOut("slow");
											  	});*/
												location.reload();
									    }
									   });
						
						};
	
}

	/*function delete_folder(){

	
	
			var url = $(this).attr('data');
			alert(url);
			

						$.ajax({
									    
									    type: 'POST',
									    data:{url:url},
									     url: '../App/php/delete-folder.php',
									     dataType: 'json',
									    
									    success: function() {
									      	
											$("#resp-delete-none").delay(500).fadeIn("slow");
									    },
									    error: function(){
									      
									     	
											$("#resp-delete").delay(500).fadeIn("slow");
											
										
												$("#rolling").fadeIn("slow");
											  	$("#content-side-nav").css('opacity', 0.6);
											  	$("#content-side-nav").load('home.php?randval='+ Math.random() + " #content-side-repo", function(){
											      //aquí puedes meter más código si necesitas;
											      $("#content-side-nav").css('opacity', 1);
											      $("#rolling").fadeOut("slow");
											  	});
											  	
											  
											
											  	$("#panel").css('opacity', 0.6);
											  	$("#panel").load('home.php'+ " #panel-body", function(){
											      
												      		$("#formdata").fadeOut("slow");		
														$("#resp-delete").delay(500).fadeOut("slow");
														$('#new-folder').fadeOut(.000001);
												      	
												      	$("#panel").css('opacity', 1);
											      		
											  	});
											  	
											  	location.reload();
									    }
							});*/ /* ajax */
						
						
		
/*}*/

function mover(){

	var archivo = $('.enl_ant').val();
	var url_nueva = $('#selected_file').attr('title');
	var filenew = $('.enl_ant').attr('name');
	 alert(archivo+"--"+url_nueva+"--"+filenew)
	
						
						$.ajax({
									    
									    type: 'POST',
									    data:{archivo:archivo, url_nueva:url_nueva, filenew:filenew},
									     url: '../App/php/mover.php',
									     dataType: 'json',
									    
									    success: function() {
									      	
												$('.mnsj-move').text("Error al mover la seleccion");
									    },
									    error: function(){
									      
									     	$('.mnsj-move').text("Se ha movido a la carpeta especificada satisfactoriamente!");
											  	
											
									    }
							}); /* ajax */
}

 /**************   ## Funciones al cargar el documento ##  ****************************************/

              
$(document).ready(function() {
	
	$('.btn-delete').click(function() {
	    var url = $(this).attr('title');
		
						$.ajax({
									    
									    type: 'POST',
									    data:{url:url},
									     url: '../App/php/delete-folder.php',
									     dataType: 'json',
									    
									    success: function() {
									      	
											$("#resp-delete-none").delay(500).fadeIn("slow");
									    },
									    error: function(){
									      
									     	
											$("#resp-delete").delay(500).fadeIn("slow");
											
										
												$("#rolling").fadeIn("slow");
											  	$("#content-side-nav").css('opacity', 0.6);
											  	$("#content-side-nav").load('home.php?randval='+ Math.random() + " #content-side-repo", function(){
											      //aquí puedes meter más código si necesitas;
											      $("#content-side-nav").css('opacity', 1);
											      $("#rolling").fadeOut("slow");
											  	});
											  	
											  
											
											  	$("#panel").css('opacity', 0.6);
											  	$("#panel").load('home.php'+ " #panel-body", function(){
											      
												      		$("#formdata").fadeOut("slow");		
														$("#resp-delete").delay(500).fadeOut("slow");
														$('#new-folder').fadeOut(.000001);
												      	
												      	$("#panel").css('opacity', 1);
											      		
											  	});
											  	
											  	location.reload();
									    }
							}); /* ajax */
	})


		$('.btn-move').click(function() {

			var enl_ant = $(this).attr('title');
			
			var file =  $(this).attr('data');
			
			alert(file);
			
			var h = $(window).height() + 'px';
                 $("#black_overlay").css({"height":h,"visibility":"visible"});

                 $(".cont-browse").append('<input type="hidden" class="enl_ant" name="'+file+'" value="'+ enl_ant +'">');

                 $(".cont-browse").css('display','block');

		});
		/* ligthbox */
		$(".Login").click(function() {
                 var h = $(window).height() + 'px';
                 $("#black_overlay").css({"height":h,"visibility":"visible"});
                 $(".added").css('display','block');
              });

				$('.cancelar').click(function() {
					$(".cont-browse").css('display','none');
					$("#black_overlay").css("visibility","hidden");
					location.reload();
				});
             
              $(".close").click(function() {
                 $(".added").css('display','none');
                 $("#black_overlay").css("visibility","hidden");

                 location.reload();
              });
              $("#black_overlay").click(function() {
                 $(".added").css('display','none');
                 $(".cont-browse").css('display','none');
                 $("#black_overlay").css("visibility","hidden");

                 location.reload();
              });


         /****************************************************************************************/

		$('#new-folder').fadeOut(.000001);

        $('#dataTables-example').DataTable({
                responsive: true
        });
  
 	
	$('.new-folder').click(function() {
		event.preventDefault();
		
		/*$('#new-folder').removeClass('new-folder-none');*/
		$('#new-folder').fadeIn("slow");
		$(".formdata").fadeIn("slow");
		$("#exito").fadeOut(.000001);
		$('.new-folder-box').focus();
	});

/************************************************  Browser de carpetas ***************************************/


});/* document ready */