<?php
// Initialize your autoloader (this example is using composer)
require '/vendor/autoload.php';

// Instantiate the Highlighter.
$hl = new Highlight\Highlighter();

// Set the languages you want to detect automatically.
$hl->setAutodetectLanguages(array('php', 'python', 'perl'));

// Highlight some code.
$r = $hl->highlightAuto(file_get_contents('./arloFunction.php'));

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Snap Composer</title>
	</head>
	<body>
		<!-- Print the highlighted code: -->
		<pre class="hljs <?php $r->language ?>">
			<?php $r->value ?>
		</pre>
	</body>
</html>