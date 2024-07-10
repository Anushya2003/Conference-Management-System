
<?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,"dbcrud");
$delete = $_GET['del'];


$sql = "delete from register where id = '$delete'";


if(mysqli_query($connection,$sql))
           {

            echo '<script> location.replace("reg.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;

           }

?>