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

$id=$_POST['S_id'];
$name1=$_POST['F_name'];
$name2=$_POST['L_name'];
$gender=$_POST['Gender'];
$age=$_POST['Age'];
$branch=$_POST['Branch'];
$address=$_POST['Address'];
$number=$_POST['C_num'];



$sql="INSERT INTO `student`(`S_id`, `F_name`, `L_name`, `Gender`, `Age`, `Branch`, `Address`, `C_num`) VALUES ('$id','$name1','$name2','$gender','$age','$branch','$address','$number')";
 
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
            p5{
                text-align: center;
                font-size: 25px;
            }
            p6{
                text-align: center;
                font-size: 25px;
            }
            p7{
                text-align: center;
                font-size: 25px;
            }
            p8{
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
<p2>First name</p2>
<input type="text" name="F_name" placeholder="First name" >
<br>
<br>
<p3>Last name</p3>
<input type="text" name="L_name" placeholder="Last name" >
<br>
<br>
<p4>Gender</p4>
<input type="text" name="Gender" placeholder="Gender" >
<br>
<br>
<p5>Age</p5>
<input type="text" name="Age" placeholder="Age" >
<br>
<br>
<p6>Branch</p6>
<input type="text" name="Branch" placeholder="Branch" >
<br>
<br>
<p7>Address</p7>
<input type="text" name="Address" placeholder="Address" >
<br>
<br>
<p8>Contact number</p8>
<input type="text" name="C_num" placeholder="Contact number" >
<br>
<br>

<input type="submit" name="submit" value="submit">




</body>
</html>