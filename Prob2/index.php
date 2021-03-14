<h1>SET COOKIES</h1>
<?php
	setcookie("firstname", "Charles Kyle", time() + 10);
	setcookie("middlename", "Aranda", time() + 20);
	setcookie("lastname", "Reyes", time() + 30);
	echo "<pre>"; print_r($_COOKIE); echo "</pre>";
?>


