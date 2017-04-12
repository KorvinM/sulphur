<?php

include('includes/header.php'); ?>
      </header>
      <main>
	<h2>Single File</h2>
	<section class="interact"><p>Please feel free to upload a <em>single file</em>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file"><input type="submit" value="upload">
	</form>
	</section>
	<h2>Multiple Files</h2>
	<section class="interact"><p>Please feel free to upload <em>multiple files</em>
	<form action="uploads.php" method="post" enctype="multipart/form-data">
		<input type="file" name="files[]" multiple><input type="submit" value="upload">
	</form>
	</section>
      </main>
<footer></footer>
  </body>
</html>
