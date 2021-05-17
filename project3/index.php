<!DOCTYPE html>
 <html>
    <head>
        <title>Contact Maintenance</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/normalize.css">
        <script src="scripts/plugins.js"></script>
        <script src="scripts/timething.js"></script>
    </head>
    <body >
        <h3>UNCA Contact Database Maintenance System (test Aug 25, 2019)</h3>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        echo "<h3 id = 'datetime'> it's".date("l, F jS")."<br>\r\n";
        echo "The time is " .date("g:ia").".</h3>\r\n";
        echo "<ol id = timelist></ol>";
        ?>
        <a href="scripts/index2.php">List Contacts</a><br>
        <a href="add.html">Add Contacts</a><br>
        <a href="update.html">Update Contacts</a><br>
        <a href="delete.html">Delete Contacts</a><br><br><hr>
        
    </body>
</html>
