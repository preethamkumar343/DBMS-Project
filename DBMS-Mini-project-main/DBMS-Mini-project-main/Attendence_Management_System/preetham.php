<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","project");
if (!$conn)
{
    echo 'not connected to server';
}
if(!mysqli_select_db($conn,'project'))
{
    echo 'database not selected';
}

$name=$_POST['first'];
$name1=$_POST['last'];
$number=$_POST['phone'];
$password=$_POST['password'];
$password1=$_POST['cpassword'];

if($password!=$password1)
{
    echo "password error";
}
else
{
$sql="INSERT INTO `signup`(`first`, `last`, `phone`, `password`, `cpassword`) VALUES ('$name','$name1','$number','$password','$password1')";
}    

if(!mysqli_query($conn,$sql))
{
    echo "not inserted";
}
else{
    echo "inserted";
    if($_POST['submit1'])
    {
    header('location:home.php');
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-color: cadetblue;
        }
      h1{
          font-size: 40px;
          text-align: center;
        
      }  
      
      
    </style>
<title>MADHANANTHESH</title>
</head>   
<body>
<h1>REGISTRATION FORM<h1>
<div class="Create account">
<h2>create account</h2>
<form action="#" method="post">
&nbsp<p1>First name </p1>&nbsp &nbsp
<input type="text" name="First" placeholder="First name" >
<br>
<p2>Last name</p2>&nbsp &nbsp
<input type="text" name="last" placeholder="Last name">
<br>
&nbsp &nbsp &nbsp &nbsp<p3>Phone number</p3>&nbsp &nbsp
<input type="text" name="phone" placeholder="Phone number">
<br>
&nbsp<p4>Password</p4>&nbsp &nbsp &nbsp &nbsp
<input type="text" name="password" placeholder="Password">
<br>
&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp<p5>Confirm password</p5>&nbsp &nbsp
<input type="text" name="cpassword" placeholder="Confirm password">
<br>
<button type="Submit" name='submit1'>login</button>
</body>

</html>