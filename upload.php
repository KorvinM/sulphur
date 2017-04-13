<?php
/*
 * upload.php
 */
include('includes/header.php'); 
?>
<article>
<section class="interact">
<?php
//whitelist filetypes for both modes
$allowed = array('txt','jpg','png');
if (!empty($_POST['single'])){
	if(isset($_FILES['file'])) {
	  $file  = $_FILES['file'];
	  //print_r($file);
	  //file properties
	  $file_name = $file['name'];
	  $file_temp= $file['tmp_name']; 
	  $file_size= $file['size']; 
	  $file_error= $file['error']; 
	  //file ext
	  $file_ext = explode('.', $file_name);
	  $file_ext = strtolower(end($file_ext));
	  if(in_array($file_ext,$allowed)){
	    if($file_error === 0){
			
	      if($file_size<=2097152){
		$file_name_new = uniqid('',true). '.' . $file_ext;
		$file_destination = 'uploads/' . $file_name_new;
		if(move_uploaded_file($file_temp,$file_destination)){
		  echo  '<a href="/' . $file_destination . '"> Your file</a>';	
		  
		}
	      }
	    }

	  }
	 /* print_r($file_name);
	  echo'<br>';
	  print_r($file_ext);
	  echo'<br>';
	  print_r($file_name_new);
	  echo'<br>';
	  print_r($file_destination);
	*/
	}
}
if (!empty($_POST['multiple'])) {
	//echo '<pre>' ,print_r($_FILES) , '</pre>';
	if (!empty($_FILES['files']['name']['0'])){
		$files = $_FILES['files'];
		$uploaded = array();
		$origin = array();
		$failed = array();
		foreach($files['name'] as $position => $file_name){
		  $file_temp = $files['tmp_name'][$position];
		  //echo $file_temp, '<br/>';
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
				$origin[$position] = $file_name;
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
		$i=0;
		  foreach($uploaded as $upload){
			//print_r($uploaded);
			
			echo  '<a style="display: inline-block; margin:0.7em 0.3em" href="/' . $upload . '">'.$origin[$i].'</a>';	
			$i++;
		  /*this array could be output in all sorts of ways*/
		  }
		}
		if(!empty($failed)){
		  print_r($failed);

		}
	}
}
?>
</section>
</article>
<?php include('includes/footer.php');
?>
