<?php
/*
 * footer.php
 * include for front end pages
 */
ob_start(); ?>
</main>
<footer>
<span><a href="https://github.com/KorvinM/php-uploading">Source code on Github</a></span><span class="context"> after a </span>
<span><a href="https://www.youtube.com/playlist?list=PLfdtiltiRHWFVuW0b79nLbW25P340j1dT">Codecourse tut on YouTube </a></span>
<span><a href="http://korvin.org">Korvin M</a></span>
</footer>
<?php
	$path = $_SERVER['SCRIPT_FILENAME'];
	//print_r($path);
	$script = explode('/', $path);
	$script = strtolower(end($script));
	print_r($script);
if ($script === 'index.php'){
echo '<script src="js/drag.js"></script>';
}
?>
  </body>
</html>
