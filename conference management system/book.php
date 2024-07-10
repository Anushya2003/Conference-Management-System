<?php
$insertconf = false;
if (isset($_POST['submit'])){
$server = "localhost";
$user = "root";
$password = "";
$dbname = "op";

$con = mysqli_connect($server,$user,$password,$dbname);

if(!$con){
    die("Connection with database not happening due to". mysqli_connect_error());
}
$firstName =$_POST['firstName'];
$lastName =$_POST['lastName'];
$username=$_POST['username'];
$email =$_POST['email'];
$address =$_POST['address'];
$event =$_POST['event'];
$country =$_POST['country'];
$State =$_POST['State'];
$zip =$_POST['zip'];
/*$country1 =$_POST['country1'];
$transport =$_POST['transport'];
$price =$_POST['price'];*/

$sql_query = "INSERT INTO `reg` (`firstName`, `lastName`, `username`, `email`,`address`, `event`,`country`,`State`,`zip`) VALUES ('$firstName','$lastName','$username', '$email','$address','$event','$country','$State','$zip');";

if ($con->query($sql_query) ==true){
    $insertconf=true;
}else{
    echo "ERROR : $sql_query <br> $con->error";
}
$con->close();
}
?>