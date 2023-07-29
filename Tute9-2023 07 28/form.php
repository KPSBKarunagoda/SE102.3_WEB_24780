<?php
$conn = mysqli_connect("localhost","root","","databasetest");

$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

$sql="INSERT INTO studentid (studentID,name,email,password) values(".$id.", '".$name."','".$email."','".$password."')";

if($conn->query($sql)===TRUE){
    echo "added data ".$id;

}

else{
    echo "error";
}


?>