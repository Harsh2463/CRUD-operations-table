<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "harsh";

$connect = mysqli_connect($servername,$username,$password,$database);

// $sql_query = "insert into student_table (student_name,phone,email,DOB) values
// ('Prateek',8964556325,'prateek@gmail.com','2000-11-25')";

// $check = mysqli_query($connect, $sql_query);

if(!$connect){
    die(mysqli_error($connect));
}

// else{
//     echo "connection";
// }

?>






