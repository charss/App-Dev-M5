<html>
    <head>
    </head>
    <link rel='stylesheet' href='style.css'>
    <body>
        <h1>GET METHOD</h1>
        <form method='get'>
            <label>First Name:</label><input type='text' name='first_name'><br>
            <label>Middle Name:</label><input type='text' name='middle_name'><br>
            <label>Last Name:</label><input type='text' name='last_name'><br>
            <label>Date of Birth:</label><input type='text' name='birthdate'><br>
            <label>Address:</label><input type='text' name='address'><br>
            <input type='submit' name='submit'>
        </form>

        <?php
            if(isset($_GET['submit'])) {
                echo "First Name: ".$_GET['first_name']."<br>";
                echo "Middle Name: ".$_GET['middle_name']."<br>";
                echo "Last Name: ".$_GET['last_name']."<br>";
                echo "Date of Birth: ".$_GET['birthdate']."<br>";
                echo "Address: ".$_GET['address']."<br>";
            } 
        
        ?>
    </body>
</html> 


