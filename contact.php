<?php

$host="localhost";
$user="root";
$pass="";
$db="project";

$conn=mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    echo "can not connect to db";
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $address=$_POST['address'];
    $sql="INSERT INTO `information` (`name`, `email`, `number`, `address`) VALUES ('$name', '$email', '$number', '$address')";
    
    mysqli_query($conn,$sql);

}

if(isset($_POST['update'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $address=$_POST['address'];
    $sql="UPDATE `information` SET `name` = '$name', `email` = '$email', `address` = '$address' WHERE `information`.`number` = '$number'";
    
    mysqli_query($conn,$sql);
}

if(isset($_POST['delete'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $address=$_POST['address'];
    $sql="DELETE FROM `information` WHERE `information`.`number` = '$number'";
    
    mysqli_query($conn,$sql);
}

if(isset($_POST['display'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $address=$_POST['address'];
    $sql="SELECT * from `information`";
    
    $dis_result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($dis_result);
    $sr=1;
    echo "<br>";
    if($num>0){
        while($row=mysqli_fetch_assoc($dis_result)){
            // echo var_dump($row);
            echo "$sr = Name:".$row['name'].",Email is:".$row['email'].",Phone Number is:".$row['number'].",Address is:".$row['address'];
            echo "<br>";
            $sr++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you </title>
    
</head>

<body>
    <div class="container">
        <h1>Thank you</h1>
        <p>Thanks for being awesome! We have received your message and would like to thank you for writing to us. ... </p>
    </div>
</body>
</html>

