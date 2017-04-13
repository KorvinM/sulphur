<?php

include('includes/header.php'); ?>
        <article class="mode">
	<h2>Single File</h2>
	<section class="interact"><p>You are free to upload a <em>single file</em>.
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file"><input type="submit" value="UpLoad" name="single">
	</form>
	</section>
	<section class="info">
	<p>Only certain filetypes are allowed!<br> What they are, only the form processer knows! This page is dumb.
	<br>Look at the source code to find out!
	</section></article><article>
	<h2>Multiple Files</h2>
	<section class="interact"><p>You are free to upload <em>single</em> or <em>multiple files</em>.
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="files[]" multiple><input type="submit" value="UpLoad" name="multiple">
	</form>
	</section>
	<section class="info">
	<p>Only certain filetypes are allowed!<br> This page is dumb.
	Look at the source  This page is dumb.
	<br>Look at the source 
	</section>
	</article>
	<article>
	<h2>Drag'N Drop</h2>
	<section class="interact">
<p>Coming Soon
	</section>
	</article>
	<article>
	<h2>Image Uploading</h2>
	<section class="interact">
<p>Coming...not so Soon
	</section>
	</article>
<?php
include('includes/footer.php'); ?>
