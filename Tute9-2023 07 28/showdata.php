<?php
$conn = mysqli_connect("localhost","root","","databasetest");

if(!$conn){
    die("error");

}

$sql="select * from studentid";

$result=$conn->query($sql);



if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo"ID: ".$row["studentID"] . "Name: " . $row["name"] . "<br>";
    }

}

else{
    echo "no data";
}


?>