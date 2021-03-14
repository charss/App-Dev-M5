<html>
    <head>
    </head>
    <link rel='stylesheet' href='style.css'>
    <body>
        <h1>Enter Your Favorite Colors</h1>
        <form method='get'>
            <label>Favorite color 1:</label><input type='text' name='color1'><br>
            <label>Favorite color 2:</label><input type='text' name='color2'><br>
            <label>Favorite color 3:</label><input type='text' name='color3'><br>
            <label>Favorite color 4:</label><input type='text' name='color4'><br>
            <label>Favorite color 5:</label><input type='text' name='color5'><br>
            <input type='submit' name='submit' value='Send Colors'>
        </form>

        <?php
            session_start();
            if(isset($_GET['submit'])) {
                $_SESSION['logged'] = true;
                $_SESSION['color1'] = $_GET['color1'];
                $_SESSION['color2'] = $_GET['color2'];
                $_SESSION['color3'] = $_GET['color3'];
                $_SESSION['color4'] = $_GET['color4'];
                $_SESSION['color5'] = $_GET['color5'];
                header('location: ResultColors.php');
            } 
            
        ?>
    </body>
</html> 


