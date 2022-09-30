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

$S_id=$_POST['S_id'];
$Sta_id=$_POST['Sta_id'];
$code=$_POST['Sub_code'];
$status=$_POST['Atte_status'];
$Report=$_POST['Report'];




$sql="INSERT INTO `attendence`(`S_id`, `Sta_id`, `Sub_code`, `Atte_status`,`Report`) VALUES ('$S_id','$Sta_id','$code','$status','$Report')";
 
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
<p1>Student id</p1>
<input type="text" name="S_id" placeholder="Student id" >
<br>
<br>
<p2>Staff id</p2>
<input type="text" name="Sta_id" placeholder="Staff id" >
<br>
<br>
<p3>Subject code</p3>
<input type="text" name="Sub_code" placeholder="Subject code" >
<br>
<br>
<p4>Attendence status</p4>
<input type="text" name="Atte_status" placeholder="Attendence status" >
<br>
<br>
<p5>Report</p5>
<input type="text" name="Report" placeholder="Report" >
<br>
<br>



<input type="submit" name="submit" value="submit">




</body>
</html>