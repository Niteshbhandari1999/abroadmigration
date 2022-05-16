<?php
$name = $_POST['name'];
$last = $_post['last'];
$email = $_post['email'];
$Phone = $_post['Phone'];
$visa = $_post['visa'];
$Country = $_post['Country'];
$Message = $_post['Message'];

$conn = new mysqli('localhost','root','','hostelhome');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration 
    (name,mobileno,email,description)values(?,?,?,?)");
    $stmt->bind_param("ssssssi",$name,$last,$email,$Phone,$visa,$Country,$Message);
    $stmt->execute();
    echo "registration succeefully..";
    $stmt->close();
    $conn->colse();
}
