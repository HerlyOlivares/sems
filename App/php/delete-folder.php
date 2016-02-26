<?php
$link = $_POST['url'];
/*$link='App/data/Nueva carpeta';*/
/*$url = '../../'.$link;*/
$url = '../../'.$link;
 
         
        function recursiveDelete($str){
            if(is_file($str)){
                return @unlink($str);
            }
            elseif(is_dir($str)){
                $scan = glob(rtrim($str,'/').'/*');
                foreach($scan as $index=>$path){
                    recursiveDelete($path);
                }
                return @rmdir($str);
            }
        }

        
     
     recursiveDelete($url);



?>