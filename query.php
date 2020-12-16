<?php
$server = 'localhost';
$user='root'; 
$pass='';
$database='catstuff';

$con = mysqli_connect($server, $user, $pass, $database);

// $connection = new mysqli($host, $username, $password, $database);
if (mysqli_connect_errno()) die(mysqli_connect_error());



    $pats = $_POST['pats'];
    $id=$_POST['id'];

    // $pats = 8;
    // $cat_name = 'lalalal';
    // $sql = "INSERT INTO cats (cat_name, pats) values( '$cat_name' ,  '$pats')";

    // $result2 = mysqli_query($con, $sql);
    $result =mysqli_query($con, "UPDATE cats SET pats = '$pats' WHERE id = '$id'"  );
    // echo $result;
    // if($result->num_rows>0){
    //     while($row = $fetch_assoc()){
    //         array_push($result_array, $row);
    //     }
    // }
    if($result){
        echo 'result';
        var_dump($result);
    }
    // echo 'CAT'; // example response
?>