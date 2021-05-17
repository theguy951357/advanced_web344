<!DOCTYPE html>
<html>
    <head>
        <title>Contact List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <script src="plugins.js"></script>
        <script src="timething.js"></script>
     </head>
    <body >

<div>
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        echo "<b><center>Database Output</center></b><br><br>";
        echo "<h3 id = 'datetime'> it's".date("l, F jS")."<br>\r\n";
        echo "The time is " .date("g:ia").".</h3>\r\n";
        echo "<ol id = timelist></ol>";
        ?>
      
        </div>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        include("dbinfo.inc.php");
        $con = mysqli_connect("avl.cs.unca.edu", $username, $password, $database)
         or die("Unable to select database");

        $query = "SELECT * FROM Contacts";
        //$query = "SELECT * FROM Owner";
        $result = mysqli_query($con, $query);

//$num = mysqli_num_rows($result);
//echo $num;
        mysqli_close($con);
        ?>
        <table border="0" cellspacing="2" cellpadding="2">
            <tr> 
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Mobile</th>
                <th>Fax</th>
                <th>E-mail</th>
                <th>Website</th>
            </tr>

            <?php
            while ($row = mysqli_fetch_array($result)) {

                $id = $row['id'];
                $first = $row['first'];
                $last = $row['last'];
                $phone = $row['phone'];
                $mobile = $row['mobile'];
                $fax = $row['fax'];
                $email = $row['email'];
                $web = $row['web'];
                ?>

                <tr> 
                    <td><?php echo "$id"; ?></td>
                    <td><?php echo "$first $last"; ?></td>
                    <td><?php echo "$phone"; ?></td>
                    <td><?php echo "$mobile"; ?></td>
                    <td><?php echo "$fax"; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $web; ?></td>
                </tr>

    <?php
}
echo "</table><br><br>";
echo "<a href = '../index.php'>Home</a>";
?>
    </body>
</html>
