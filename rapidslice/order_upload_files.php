<?php
include_once("config.php");

$send_data['status']	=	false;
if(isset($_FILES) && sizeof($_FILES)) {
	if($_FILES['uploadedfile']['name']!=""){
	   $ext_allowed = array ("gif", "jpg", "jpeg", "png");
	   $img_prefix  = date('Ymdhis');//str_replace(" ", "_", $product_name)."_";
	   $file_name  = $_FILES['uploadedfile']['name'];
	   $pos   = strrpos($file_name, ".");
	   $len   = strlen($file_name);
	   $ext   = substr($file_name ,$pos+1, $len-1);
	   $ext   = strtolower($ext);
	  //if (in_array ($ext, $ext_allowed)) {
		  if (is_uploaded_file($_FILES['uploadedfile']['tmp_name'])){
			   $image_real  = str_replace(' ', '_', $img_prefix.$file_name);
			   @copy($_FILES['uploadedfile']['tmp_name'], "uploadedfiles/".$image_real);
			   $send_data['status']	=	true;
			   $send_data['msg']	=	'file uploaded successfully';
			   $send_data['atached_file']	=	$image_real;
		  }
	//  }
	 }
}

echo json_encode($send_data);
exit;