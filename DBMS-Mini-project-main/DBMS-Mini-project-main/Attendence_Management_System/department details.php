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

$id=$_POST['Dept_id'];
$name=$_POST['Dept_name'];




$sql="INSERT INTO `department`(`Dept_id`, `Dept_name`) VALUES ('$id','$name')";
 
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
<p1>Department id</p1>
<input type="text" name="Dept_id" placeholder="Department id" >
<br>
<br>
<p2>Department name</p2>
<input type="text" name="Dept_name" placeholder="Department name" >
<br>
<br>
<input type="submit" name="submit" value="submit">




</body>
</html>