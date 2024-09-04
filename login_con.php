<?php
session_start();
if(isset($_POST['login']))
$uname=$_POST['cname'];
$pwd=$_POST['password'];


include "db_con.php" ;
// $con=mysqli_connect("localhost","root");
//$db=mysqli_select_db($con,"food");
$query="select*from customer where cname='$uname' and password='$pwd'";
// $query="select*from customer where cid='$cid' and cname='$uname' and password='$pwd'";


$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num>0)
{
    $_SESSION['cname']=$uname;
    $_SESSION['cid']=$cid;

    echo "<script>alert('Login Succsesfully');
	window.location.href='aindex.php';</script>";
}
else
{
    //header('location:login.php');
    //echo "enter valid password";
    echo "<script>alert('enter valid data');
	window.location.href='login.php';</script>";
}
?>