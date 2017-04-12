<?php

include('includes/header.php'); ?>
      </header>
      <main style="">
        <article class="mode">
	<h2>Single File</h2>
	<section class="interact"><p>You are free to upload a <em>single file</em>.
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file"><input type="submit" value="upload">
	</form>
	</section>
	</article><article>
	<h2>Multiple Files</h2>
	<section class="interact"><p>You are free to upload <em>single</em> or <em>multiple files</em>.
	<form action="uploads.php" method="post" enctype="multipart/form-data">
		<input type="file" name="files[]" multiple><input type="submit" value="upload">
	</form>
	</section>
	</article>
      </main>
<?php
include('includes/footer.php'); ?>
