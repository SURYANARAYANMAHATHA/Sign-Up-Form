<?php
$name=$_POST['name'];
$email=$_POST['number'];
$number=$_POST['email'];
$conn = new mysqli('localhost','root','','ram');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
else{
    $stmt=$conn->prepare('insert into registration(name,number,email) values(?,?,?)');
    $stmt->bind_param('sis',$name,$number,$email);
    $stmt->execute();
    echo 'registration successfully...';
    $stmt->close();
    $conn->close();
}
?>