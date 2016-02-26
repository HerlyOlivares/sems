<?php
$path = "Home";

if (!isset($_GET['repositorio'])) {
                                                        
                $home = "active";
                $folder = "";

                
                $ruta = $path;
                
                /*echo '<script>alert("'.$ruta.'");</script>';*/
}else{

    $home = "";

    /*$folder = $_GET['repositorio'];*/
    $ruta = $_GET['repositorio'];
     /*echo '<script>alert("'.$ruta.'");</script>';*/

}


 ?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SEMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="Css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="Bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="Plugins/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="Plugins/datatables-responsive/css/responsive.dataTables.css" rel="stylesheet">

    <!-- Tree -->
    <link rel="stylesheet" href="Css/filetree.css" type="text/css" >

     <!-- Estilos propio -->
    <link rel="stylesheet" href="Css/Style.css">

</head>

<body>
    <div id="black_overlay" style="width: 100%;"> </div>
        <div class="added">
            <button type="button" id="cboxClose" class="close">close</button>
            <div id='inline_content'>
                <form id="upload" method="post" action="Plugins/upload/upload.php" enctype="multipart/form-data">
                    <div id="drop">
                        Arrastre en esta Area!

                        <a>Buscar en el Equipo</a>
                        <input type="file" name="upl" multiple />
                        <input type="hidden" name="ruta" value="'.$ruta.'">
                    </div>

                    <ul>
                        <!-- The file uploads will be shown here -->
                    </ul>

                </form>
            </div>
        </div>

        <!-- ventana browse folder -->
        <div class="cont-browse">
            <h3 class="text-center">Selecione la Carpeta destino</h3><hr>
            <div id="container"> </div>
            <div id="selected_file"></div><hr>
            <div class="btn-group">
                <button class="btn btn-success" onclick="mover()"><i class="fa fa-check"></i> Mover</button>
                <button class="btn btn-danger cancelar"><i class="fa fa-times"></i> Cancelar</button>
            </div>
        </div>
        <!-- /. browser -->

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.html">Sems</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Buzon</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Configuracion</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div id="content-side-nav" class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="content-side-repo" class="nav navbar-nav side-nav">
                    <div id="rolling"><img src="Img/ajax-loader.gif"></div>
                    <li class="<?php echo $home ?>">
                        <a href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="javascript:;" ><i class="fa fa-fw fa-folder-o"></i> Repositorios <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="repo">

                            <?php 

                                if (is_dir($path)) {
                                    
                                    if ($dh = dir($path)) {
                                        
                                        while ($file = $dh->read()) {
                                            
                                           if ($file!="." && $file!="..") {

                                                    if (isset($_GET['repositorio']) && $_GET['repositorio'] == $file) {
                                                        
                                                        $active = "active";
                                                    }else{$active = "";}
                                              
                                                    echo '
                                                    <li class="'.$active.'">
                                                        <a href="home.php?repositorio='.$path."/".$file.'"><i class="fa fa-fw fa-folder-open"></i>'.$file.'</a>
                                                    </li>
                                                    ';
                                           }
                                                
                                            
                                        }
                                        $dh->close(); 
                                    }
                                }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-image"></i> Imagenes</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- menu -->
            <div class="menu nav navbar-nav">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="new-folder" href="#"><i class="fa fa-fw fa-folder"></i> Nueva Carpeta</a>
                    </li>
                    <?php

                        if (isset($_GET['repositorio'])) {
                            
                                echo'
                            <li>
                                <a class="Login"><i class="fa fa-fw fa-upload"></i> Subir</a>
                            </li>
                            ';
                        }
                    ?>
                </ul>
            </div> <!-- /.menu -->
            
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                    <div id="panel" class="panel panel-default">
                        <div id="panel-body" class="panel-body">
                            <div id="rolling-body"><img src="Img/ajax-loader.gif"></div>

                            <div class="col-lg-12 menu-heading">
                                <ol class="breadcrumb">
                                    
                                    <?php if (!isset($_GET['repositorio'])){

                                            echo '

                                                    <li class="active">
                                                        <i class="fa fa-home"></i> Home
                                                    </li>    

                                            ';

                                        }else{

                                                    echo'
                                                    <li class="active">
                                                        <i class="fa fa-home"></i><a href="home.php"> Home</a>
                                                    </li>                                                   
                                            ';

                                            $cadena = explode("/",$_GET['repositorio']);


                                            for ($i=2; $i < count($cadena); $i++) { 

                                                if ($i < (count($cadena)-1)) {
                                                        
                                                        echo'
                                                            <li>
                                                                <a href="home.php?repositorio='.$cadena[0]."/".$cadena[1]."/".$cadena[$i].'">'.$cadena[$i].'</a>
                                                            </li>                                                   
                                                        ';
                                                }elseif($i == (count($cadena) - 1)){


                                                        echo'
                                                            <li class="active">
                                                                '.$cadena[$i].'
                                                            </li>                                                   
                                                        ';

                                                }
                                                
                                                     
                                            }
                                        }
                                        
                                    ?>
                                    
                                </ol>
                            </div>

                            <div class="dataTable_wrapper">
                                <table class="table table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Fecha</th>
                                            <th>Version</th>
                                            <th>Usuario</th>
                                            <th>Tamaño</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="new-folder-none" id="new-folder">
                                             <td>
                                                
                                                <form class="formdata" id="formdata">
                                                <a href="#"><i class="fa fa-fw fa-folder-o"></i></a> 
                                                    <input class="new-folder-box" name="new-folder" type="text" onkeypress="return pulsar(event)">
                                                    <input type="button" class="botonenviar" value="Crear" onclick="create_folder()">
                                                    <input type="hidden" class="hidden" name="url" value="<?php echo $ruta; ?>">
                                                </form>
                                                <div id="exito" style="display:none; color:green;">
                                                    La carpeta se ha creado con éxito.
                                                </div>
                                                <div id="fracaso" style="display:none; color:red;">
                                                    Se ha producido un error durante el proceso de creacion de nueva carpeta.
                                                </div>
                                             </td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                        </tr>
                                        <?php 
                                            if (is_dir($ruta)) {
                                                
                                                if ($dh = dir($ruta)) {
                                                    
                                                    while ($file = $dh->read()) {
                                                        
                                                       if ($file!="." && $file!="..") {

                                                            $link = $ruta."/".$file;

                                                          
                                                                

                                                                        echo '
                                                                            <tr class="odd gradeX row-file">
                                                                                <td><a href="home.php?repositorio='.$ruta.'/'.$file.'">';

                                                                                    if (!is_dir($link)) {

                                                                                        $partes_ruta = pathinfo($link);

                                                                                        switch ($partes_ruta['extension']) {

                                                                                                        case "jpg";
                                                                                                        case "jpeg":

                                                                                                            {$thumbs = "Img/iconos/JPEG.png"; break;}

                                                                                                        case "png";
                                                                                                        case "PNG":

                                                                                                            {$thumbs = "Img/iconos/PNG.png"; break;}

                                                                                                        case "gif":

                                                                                                            {$thumbs = "Img/iconos/GIF.png"; break;}

                                                                                                        case "jpeg";
                                                                                                        case "bmp":

                                                                                                            {$thumbs = "Img/iconos/IMG.png"; break;}

                                                                                                        case "doc";
                                                                                                        case "docx":

                                                                                                            {$thumbs = "Img/iconos/DOC.png"; break;}

                                                                                                        case "pdf":

                                                                                                            {$thumbs = "Img/iconos/PDF.png"; break;}

                                                                                                        case "xls";
                                                                                                        case "xlsx":

                                                                                                            {$thumbs = "Img/iconos/XLS.png"; break;}

                                                                                                        case "mp3":

                                                                                                            {$thumbs = "Img/iconos/MP3.png"; break;}

                                                                                                        case "mp4":

                                                                                                            {$thumbs = "Img/iconos/MP4.png"; break;}

                                                                                                        default:
                                                                                                            {$thumbs = "Img/iconos/UNKNOWN.png"; break;}
                                                                                                            break;
                                                                                                    }
                                                                                        
                                                                                        echo '
                                                                                            
                                                                                            <img class="thumb" src="'.$thumbs.'" alt="">


                                                                                        ';

                                                                                    }else{

                                                                                            $thumbs = "Img/iconos/Folder Blank.png";

                                                                                        echo '
                                                                                            
                                                                                            <img class="thumb" src="'.$thumbs.'" alt="">


                                                                                        ';

                                                                                    }

                                                                                
                                                                         echo '

                                                                                </a> <a href="home.php?repositorio='.$ruta.'/'.$file.'">'.$file.'</a></td>
                                                                                <td>

                                                                                    <div class="btn-group opciones">
                                                                                      <button type="button" class="btn btn-default dropdown-toggle"
                                                                                              data-toggle="dropdown">
                                                                                        Opciones... <span class="caret"></span>
                                                                                      </button>
                                                                                     
                                                                                      <ul class="dropdown-menu" role="menu">
                                                                                        <li><a data="'.$ruta.'" class="btn-delete" tittle="'.$ruta.'/'.$file.'" onclick="delete_folder()"><i class="fa fa-fw fa-trash"></i> Eliminar</a></li>';
                                                                                        if (isset($_GET["repositorio"])) {

                                                                                            if (is_file($ruta.'/'.$file)) {
                                                                                                    
                                                                                                    echo'  
                                                                                                            <li><a data="'.$ruta.'" class="btn-move" tittle="'.$ruta.'/'.$file.'" onclick="move()"><i class="fa fa-fw fa-exchange"></i> Mover</a></li>
                                                                                                            <li class="divider"></li>
                                                                                                            <li><a href="#">Descargar</a></li>

                                                                                                        ';
                                                                                            }
                                                                                            if(is_dir($ruta.'/'.$file)){

                                                                                                        echo'  
                                                                                                            <li><a data="'.$ruta.'" class="btn-move" tittle="'.$ruta.'/'.$file.'" ><i class="fa fa-fw fa-exchange"></i> Mover</a></li>

                                                                                                        ';

                                                                                            }
                                                                                    }
                                                                                    echo'
                                                                                        
                                                                                      </ul>
                                                                                    </div>
                                                                                </td>
                                                                                <td>Win 95+</td>
                                                                                <td class="center">Herly Olivares</td>
                                                                                <td class="center">X</td>
                                                                            </tr>
                                                                            <div id="resp-delete" style="display:none; color:green;">Se ha eliminado con exito</div>
                                                                            <div id="resp-delete-none" style="display:none; color:red;">Error al eliminaro</div>
                                                                        ';
                                                               
                                                       }
                                                            
                                                        
                                                    }
                                                    $dh->close(); 
                                                }
                                            }
                                        ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="Js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="Bootstrap/js/bootstrap.min.js"></script>

     <!-- DataTables JavaScript -->
    <script src="Plugins/datatables/media/js/jquery.dataTables.js"></script>
    <script src="Plugins/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <!-- Script -->

    <!-- JavaScript Includes -->
        <script src="Plugins/upload/assets/js/jquery.knob.js"></script>

        <!-- jQuery File Upload Dependencies -->
        <script src="Plugins/upload/assets/js/jquery.ui.widget.js"></script>
        <script src="Plugins/upload/assets/js/jquery.iframe-transport.js"></script>
        <script src="Plugins/upload/assets/js/jquery.fileupload.js"></script>
        
        <!-- Our main JS file -->
        <script src="Plugins/upload/assets/js/script.js"></script>
        
        <script src="Js/Script.js"></script>

    <script> 
    function pulsar(e) { 
      var tecla = (document.all) ? e.keyCode :e.which; 
      return (tecla!=13); 
    } 
    </script>
    <script type="text/javascript" >
$(document).ready( function() {

    $( '#container' ).html( '<ul class="filetree start"><li class="wait">' + 'Generating Tree...' + '<li></ul>' );
    
    getfilelist( $('#container') , 'Home' );
    
    function getfilelist( cont, root ) {
    
        $( cont ).addClass( 'wait' );
            
        $.post( 'Foldertree.php', { dir: root }, function( data ) {
    
            $( cont ).find( '.start' ).html( '' );
            $( cont ).removeClass( 'wait' ).append( data );
            if( 'Home' == root ) 
                $( cont ).find('UL:hidden').show();
            else 
                $( cont ).find('UL:hidden').slideDown({ duration: 500, easing: null });
            
        });
    }
    
    $( '#container' ).on('click', 'LI A', function() {
        var entry = $(this).parent();
        
        if( entry.hasClass('folder') ) {
            if( entry.hasClass('collapsed') ) {
                        
                entry.find('UL').remove();
                getfilelist( entry, escape( $(this).attr('rel') ));
                entry.removeClass('collapsed').addClass('expanded');

                $( '#selected_file' ).text( "Carpeta Destino:  " + $(this).attr( 'rel' ));
                $( '#selected_file' ).attr('title',$(this).attr( 'rel' ));
            }
            else {
                
                entry.find('UL').slideUp({ duration: 500, easing: null });
                entry.removeClass('expanded').addClass('collapsed');

                $( '#selected_file' ).text( "Carpeta Destino:  " + $(this).attr( 'rel' ));
                $( '#selected_file' ).attr('title',$(this).attr( 'rel' ));
            }
        } else {
            $( '#selected_file' ).text( "Carpeta Destino:  " + $(this).attr( 'rel' ));
            $( '#selected_file' ).attr('title',$(this).attr( 'rel' ));
        }
    return false;
    });
    
});
</script>
    
</body>

</html>
