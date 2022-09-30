<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","admin");
if (!$conn)
{
    echo 'not connected to server';
}
if(!mysqli_select_db($conn,'admin'))
{
    echo 'database not selected';
}
if ($_SERVER["REQUEST_METHOD"]=="POST") {
$id=$_POST['Sta_id'];
$name=$_POST['Sta_name'];
$Designation=$_POST['Designation'];
$Dept_id=$_POST['Dept_id'];




$sql="INSERT INTO `staff`(`Sta_id`, `Sta_name`, `Designation`, `Dept_id`) VALUES ('$id','$name','$Designation','$Dept_id')";
 
if(!mysqli_query($conn,$sql))
{
    echo "not inserted";
}
else{
    echo "inserted";
    if($_POST['submit'])
    {
    header('location:admin1.php');
    }
}
}


?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background-color:yellow;
            }
            
            p1{
                text-align: center;
                font-size: 25px;             
            }
            p2{
                text-align: center;
                font-size: 25px;
            }
            p3{
                text-align: center;
                font-size: 25px;
            }
            p4{
                text-align: center;
                font-size: 25px;
            }
            
            .form{
                position:absolute;
                margin : 0 400px;
            
            }
            .form input{
                width:100%;
                font-size:15px;
            }
            </style>
        <title>student</title>
</head>
<body>
<div class="form">
<form action="#" method="post">
<p1>Staff id</p1>
<input type="text" name="Sta_id" placeholder="Staff id" >
<br>
<br>
<p2>Staff name</p2>
<input type="text" name="Sta_name" placeholder="Subject name" >
<br>
<br>
<p3>Designation</p3>
<input type="text" name="Designation" placeholder="Designation" >
<br>
<br>
<p4>Department id</p4>
<input type="text" name="Dept_id" placeholder="Department id" >
<br>
<br>



<input type="submit" name="submit" value="submit">




</body>
</html>