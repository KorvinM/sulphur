<?php
/*
 * upload.php
 */
include('includes/header.php');
?>

<?php
echo '<pre>' ,print_r($_FILES) , '</pre>';
if (!empty($_FILES['files']['name']['0'])){
	$files = $_FILES['files'];
	$uploaded = array();
	$failed = array();
	$allowed = array('txt','jpg','png');
	foreach($files['name'] as $position => $file_name){
	  $file_temp = $files['tmp_name'][$position];
	  echo $file_temp, '<br/>';
	  $file_size = $files['size'][$position];
	  $file_error = $files['error'][$position];
	  //file ext
	  $file_ext = explode('.', $file_name);
	  $file_ext = strtolower(end($file_ext));
	  if(in_array($file_ext,$allowed)){
		if($file_error === 0){//no errors
		 if($file_size<=2097152){
	          $file_name_new = uniqid('',true). '.' . $file_ext;
		  $file_destination = 'uploads/' . $file_name_new;
 		  if(move_uploaded_file($file_temp, $file_destination)){
			$uploaded[$position] = $file_destination;
		  }else{
			$failed[$position] = "[{$file_name}] failed to upload. Error: {$file_error}";
		  }	
		 }else{
		   $failed[$position] = "[$file_name] is too large.";	
		 }
	  	}else{
		  $failed[$position] = "[{$file_name}] failed to upload. Error: {$file_error}";
		}	
	  }else{
		$failed[$position] = "[{$file_name}] file extension '{$file_ext}' is not allowed.";
	  }

	}//end foreach loop
	
	if(!empty($uploaded)){
	  print_r($uploaded);
	  /*this array could be output in all sorts of ways*/

	}
	if(!empty($failed)){
	  print_r($failed);

	}

}

include('includes/footer.php');
?>
