<!DOCTYPE html>
<html>
    <head>
        <title>Contact List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <script src="scripts/plugins.js"></script>
    </head>
    <body>
    <?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include("dbinfo.inc.php");
    $con = mysqli_connect("avl.cs.unca.edu", $username, $password, $database)
    or die("Unable to select database");
    if ( filter_has_var( INPUT_POST, 'update' ) ) {
        
        echo '<h2>form data retrieved by using $_POST variable<h2/>';
        
        $id = $_POST['id'];
        
        
        $query = "SELECT * FROM Contacts WHERE id= '$id'";
        $result = mysqli_query($con, $query);
        mysqli_close($con);
        
        $row = mysqli_fetch_array($result);
        
        
        
        
        
        $first = $row['first'];
        $last = $row['last'];
        $phone = $row['phone'];
        $mobile = $row['mobile'];
        $fax = $row['fax'];
        $email = $row['email'];
        $web = $row['web'];
        
        echo "<b><center>Database Output</center></b><br><br>";
        echo "<form action = 'update3.php' method = 'post'>";
        echo "<table>";
        echo "<tr>";
        echo "<td>Where id = </td>";
        echo "<td><input type='text' name = 'id' value = '$id' size = '20' readonly></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>First Name: </td>";
        echo "<td><input type='text' name = 'first' value = '$first' size = '20'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Last Name: </td>";
        echo "<td><input type='text' name = 'last' value = '$last' size = '20'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Phone: </td>";
        echo "<td><input type='text' name = 'phone' value ='$phone' size = '20'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Mobile: </td>";
        echo "<td><input type='text' name = 'mobile' value = '$mobile' size = '20'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Fax: </td>";
        echo "<td><input type= 'text' name = 'fax' value = '$fax' size = '20'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Email: </td>";
        echo "<td><input type= 'text' name = 'email' value = '$email' size = '20'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Web: </td>";
        echo "<td><input type='text' name = 'web' value = '$web'  size = '20'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><input type= 'submit' name = 'submit' value = 'Update' size = '10'></td>";
        echo "<td><input type='reset' name = 'reset' size = '10'></td>";
        echo "</tr>";
        echo "</table>";
        echo "</form>";
        
        }
    ?>	
    
    
    
    </body>
</html>