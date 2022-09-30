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

$code=$_POST['Sub_code'];
$name=$_POST['Sub_name'];
$id=$_POST['S_id'];
$branch=$_POST['Branch'];




$sql="INSERT INTO `subject`(`Sub_code`, `Sub_name`, `S_id`, `Branch`) VALUES ('$code','$name','$id','$branch')";
 
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
<p1>Subject code</p1>
<input type="text" name="Sub_code" placeholder="Subject code" >
<br>
<br>
<p2>Subject name</p2>
<input type="text" name="Sub_name" placeholder="Subject name" >
<br>
<br>
<p3>Student id</p3>
<input type="text" name="S_id" placeholder="Student id" >
<br>
<br>
<p4>Branch</p4>
<input type="text" name="Branch" placeholder="Branch" >
<br>
<br>



<input type="submit" name="submit" value="submit">




</body>
</html>