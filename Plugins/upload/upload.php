<?php

// A list of permitted file extensions
$allowed = array('png','jpeg','jpg', 'gif','zip', 'txt', );
if(isset($_POST['ruta'])){
	
	$dir = '../../'.$_POST['ruta'].'/';
}else{
$dir = 'uploads/';
}
$url = $dir.$_FILES['upl']['name'];

if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){

	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}

	if(move_uploaded_file($_FILES['upl']['tmp_name'], $url)){
		echo '{"status":"success"}';
		exit;
	}
}

echo '{"status":"error"}';
exit;

?>