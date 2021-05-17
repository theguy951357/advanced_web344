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
    	if ( filter_has_var( INPUT_POST, 'submit' ) ) {
    	    
    	    echo '<h2>form data retrieved by using $_POST variable<h2/>';
        
    	    $id = $_POST['id'];
    	    $firstname = $_POST['first'];
    	    $lastname = $_POST['last'];
    	    $phone = $_POST['phone'];
    	    $mobile = $_POST['mobile'];
    	    $fax = $_POST['fax'];
    	    $email = $_POST['email'];
    	    $web = $_POST['web'];
    	    
    	    $update = "UPDATE contacts SET first='$firstname', last='$lastname', phone='$phone', mobile='$mobile', fax='$fax', email='$email', web='$web' WHERE id='$id'";
    	    
    	    if(mysqli_query($con, $update)){
    	        echo "record updated successfully at id '$id' <br>";
    	    }else{
    	        echo "Error: " . $update . "<br>" . mysqli_error($con);
    	    }
    	    
    	    // display the results
    	    echo 'Your name is ' . $lastname .' ' . $firstname.'<br><br>';
    	    echo "<a href = '../index.php'>Home</a>";
    	    
    	}
    	
    	
    	mysqli_close($con);
    	
    	?>
    </body>
    </html>