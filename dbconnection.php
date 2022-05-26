<?php
$dbhost = "localhost";
$uname = "root";
$passwd = "home1234";
$dbname = "test";

$conn = mysqli_connect($dbhost,$uname,$passwd,$dbname);

$timezone_object = date_default_timezone_get();
   
   print $timezone_object; 
   print "</br>";
   
if ($conn) {
    print "Server Connection successfully";
}
else {
    die ("database connection not succesful".mysqli_error());
}

print "<br>Database name is ".$dbname;
$sql = "create table test ( id int, name varchar(50) )";
$retval = mysqli_query( $conn, $sql );

if (!$retval) {
    die ("<br>Error".mysqli_error());
}
else{    
    echo "<br>database created successfully";
}



mysqli_close($conn);
?>

