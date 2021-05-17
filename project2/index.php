<!DOCTYPE html>
<html lang="en-US">
<head>
	<?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        include("common/headdoc.html");
        
        ?>
</head>
    <body class = "bg1" onload = "init()" >
    	
    	<?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            include("common/header.html");
            include("common/form.html");
            
            ?>
    	
    	<ol id = "formdiv"></ol>
    	
    	
    
    	<p id= "icon" onmouseover="bigify()" onmouseout="normalfy()"  class = "icon" >onmouseover will make this div and lettering bigger. onmouseout will make it smaller again and create a new element above this one</p>
    	
    	<br><br><br><br><br><br><br><br><br><br>
    	<br><br><br><br><br><br><br><br><br><br>
    	
    	
    	
    	<?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            include("common/footer.html");
            
            ?>
    
    </body>
</html>