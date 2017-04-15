<?php
include('includes/header.php'); ?>
        <article class="mode singlefile">
		<h2>Single File</h2>
		<section class="interact">
			<p>You are free to upload a <em>single file</em>.
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<input type="file" name="file"><input type="submit" value="UpLoad" name="single">
			</form>
		</section>
		<section class="info">
			<p>filetypes allowed
		</section>
	</article>
	<article class="mode multiplefiles">
		<h2>Multiple Files</h2>
		<section class="interact"><p>You are free to upload <em>single</em> or <em>multiple files</em>.
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<input type="file" name="files[]" multiple><input type="submit" value="UpLoad" name="multiple">
			</form>
		</section>
		<section class="info">
			<p>filetypes allowed!
		</section>
	</article>
	<article class="mode dragndrop">
		<h2>Drag'N Drop</h2>

		<section class="interact">
			<div class="dropzone" id="dropzone">Drop files in here to upload</div>
		</section>
	</article>
	<article class="mode imgupload">
		<h2>Image Uploading</h2>
		<section class="interact">
			<p>Coming...not so Soon
		</section>
	</article>
<?php
include('includes/footer.php'); ?>
