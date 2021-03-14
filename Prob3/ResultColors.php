<?php
	session_start();
	if($_SESSION['logged']) {
		echo "My Favorite Color 1: ".$_SESSION['color1'];
        echo "<br>My Favorite Color 2: ".$_SESSION['color2'];
        echo "<br>My Favorite Color 3: ".$_SESSION['color3'];
        echo "<br>My Favorite Color 4: ".$_SESSION['color4'];
        echo "<br>My Favorite Color 5: ".$_SESSION['color5'];
	}
    session_destroy();
?>