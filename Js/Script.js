function create_folder(e){

	e.preventDefault();
	
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

function delete_folder(e){

	e.preventDefault();
	
	
			var url = $('.btn-delete').attr('tittle');
			

							$.ajax({
									    
									    type: 'POST',
									    data:{url:url},
									     url: '../App/php/delete-folder.php',
									     dataType: 'json',
									    
									    success: function() {
									      	
											$("#resp-delete-none").delay(500).fadeIn("slow");
									    },
									    error: function(){
									      
									      /*	$("#formdata").fadeOut("slow");	*/	
											$("#resp-delete").delay(500).fadeIn("slow");
											
											/* tabla side lateral*/
												$("#rolling").fadeIn("slow");
											  	$("#content-side-nav").css('opacity', 0.6);
											  	$("#content-side-nav").load('home.php?randval='+ Math.random() + " #content-side-repo", function(){
											      //aquí puedes meter más código si necesitas;
											      $("#content-side-nav").css('opacity', 1);
											      $("#rolling").fadeOut("slow");
											  	});
											  	
											  	/**********/
											
											  	$("#panel").css('opacity', 0.6);
											  	$("#panel").load('home.php'+ " #panel-body", function(){
											      
												      		$("#formdata").fadeOut("slow");		
														$("#resp-delete").delay(500).fadeOut("slow");
														$('#new-folder').fadeOut(.000001);
												      	
												      	$("#panel").css('opacity', 1);
											      		
											  	});
									    }
							}); /* ajax */
						
						
		
}

function mover(){

	var archivo = $('.enl_ant').val();
	var url_nueva = $('#selected_file').attr('title');
	alert(archivo+'/'+url_nueva);
}

 /**************   ## Ligthbox con Arbol ##  ****************************************/

              
$(document).ready(function() {


		$('.btn-move').click(function() {

			var enl_ant = $(this).attr('tittle');
			
			var h = $(window).height() + 'px';
                 $("#black_overlay").css({"height":h,"visibility":"visible"});

                 $(".cont-browse").append('<input type="hidden" class="enl_ant" name="enl_ant" value="' + enl_ant + '">');

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