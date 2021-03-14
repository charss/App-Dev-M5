<html>
    <head>
    </head>
    <link rel='stylesheet' href='style.css'>
    <body>
        <h1>POST METHOD</h1>
        <form method='post'>
            <label>First Name:</label><input type='text' name='first_name'><br>
            <label>Middle Name:</label><input type='text' name='middle_name'><br>
            <label>Last Name:</label><input type='text' name='last_name'><br>
            <label>Date of Birth:</label><input type='text' name='birthdate'><br>
            <label>Address:</label><input type='text' name='address'><br>
            <input type='submit' name='submit'>
        </form>
        <?php
            if (isset($_POST['submit'])) {
                echo "First Name: ".$_POST['first_name']."<br>";
                echo "Middle Name: ".$_POST['middle_name']."<br>";
                echo "Last Name: ".$_POST['last_name']."<br>";
                echo "Date of Birth: ".$_POST['birthdate']."<br>";
                echo "Address: ".$_POST['address']."<br>";
            }
        ?>
        
    </body>
</html> 


