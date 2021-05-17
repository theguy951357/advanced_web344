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
    	if ( filter_has_var( INPUT_POST, 'delete' ) ) {
    	    
    	    echo '<h2>form data retrieved by using $_POST variable<h2/>';
    	    
    	    $id = $_POST['id'];
    	    
    	    
    	    $delete = "DELETE FROM contacts WHERE id = '$id' LIMIT 1";
    	    
    	    
    	    if(mysqli_query($con, $delete)){
    	        echo "ID " . $id . " has been deleted successfully<br>";
    	        echo "<a href = '../index.php'>Home</a>";
    	    }else{
    	        echo "Error: " . $delete . "<br><br>" . mysqli_error($con);
    	    }
    	    
    	    
    	}
    	
    	
    	?>
    </body>
</html>