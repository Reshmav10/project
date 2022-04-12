<?php
   session_start();
   header('location:login.php');

$con=mysqli_connect('localhost','root','havoc@1019');

mysqli_select_db($con, 'signupuser');

$name=$_POST['user'];
$pass=$_POST['pwd'];
$cpass=$_POST['pwd'];


$s="select * from username where name='$name'";

$result=mysqli_query($con, $s);

$num=mysqli_num_rows($result);

if($num==1) {
    echo "username Already Taken";
}else{
    $reg="insert into username(Name,pass,cpass) values('$name','$pass','$cpass')";
    mysqli_query($con,$reg);
    echo "Signup Successful";
}
?>

