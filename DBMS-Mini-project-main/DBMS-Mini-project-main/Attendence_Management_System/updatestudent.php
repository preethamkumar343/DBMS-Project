<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","admin");

$update = false;

$id = 0;

$sid = '';
$name1 = '';
$name2 = '';
$Gender = '';
$Age = '';
$Branch = '';
$Address = '';
$num = '';
if(!$conn)
{
    echo "not connected to server";
}

if(!mysqli_select_db($conn,'admin'))
{
    echo 'database not selected';
}



if(isset($_GET['id'])){
    $id = $_GET['id'];

    $update = true;

    $result = $conn->query("SELECT * FROM student WHERE S_id='$id'");

        $items = $result->fetch_array();
        $sid = $items['S_id'];
        $name1 = $items['F_name'];
        $name2 = $items['L_name'];
        $gender = $items['Gender'];
        $age = $items['Age'];
        $branch = $items['Branch'];
        $address = $items['Address'];
        $number = $items['C_num'];



}

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $id = $items['S_id'];
        $name1 = $_POST['F_name'];
        $name2 = $_POST['L_name'];
        $gender =$_POST ['Gender'];
        $age =$_POST ['Age'];
        $branch =$_POST ['Branch'];
        $address =$_POST ['Address'];
        $number = $_POST['C_num'];


    $conn->query("UPDATE student SET S_id = '$sid', F_name = '$name1', L_name='$name2', Gender='$gender', Age='$age', Branch='$branch', Address='$address' ,C_num='$number'  WHERE S_id='$id'") or die($conn->error);
    
}

if($_POST['submit'])
    {
       header('Location:madhan1.php');
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
<input type="text" name="S_id" value="<?php  echo $sid; ?>" placeholder="Student id" >
<br>
<br>
<p2>First name</p2>
<input type="text" name="F_name" value="<?php  echo $name1; ?>" placeholder="First name" >
<br>
<br>
<p3>Last name</p3>
<input type="text" name="L_name" value="<?php  echo $name2; ?>" placeholder="Last name" >
<br>
<br>
<p4>Gender</p4>
<input type="text" name="Gender" value="<?php  echo $gender; ?>" placeholder="Gender" >
<br>
<br>
<p5>Age</p5>
<input type="text" name="Age" value="<?php  echo $age; ?>" placeholder="Age" >
<br>
<br>
<p6>Branch</p6>
<input type="text" name="Branch" value="<?php  echo $branch; ?>" placeholder="Branch" >
<br>
<br>
<p7>Address</p7>
<input type="text" name="Address" value="<?php  echo $address; ?>" placeholder="Address" >
<br>
<br>
<p8>Contact number</p8>
<input type="text" name="C_num" value="<?php  echo $number; ?>" placeholder="Contact number" >
<br>
<br>

<input type="submit" name="submit" value="submit">




</body>
</html>