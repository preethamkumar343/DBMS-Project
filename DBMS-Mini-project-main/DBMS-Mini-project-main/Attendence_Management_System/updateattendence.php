<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","admin");

$update = false;

$id = 0;

$S_id = '';
$Sta_id = '';
$Sub_code = '';
$Atte_status = '';
$Report = '';

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

    $result = $conn->query("SELECT * FROM attendence WHERE S_id='$id'");

        $items = $result->fetch_array();
        $S_id = $items['S_id'];
        $Sta_id = $items['Sta_id'];
        $Sub_code = $items['Sub_code'];
        $Atte_status = $items['Atte_status'];
        $Report = $items['Report'];
        


}

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $S_id = $_POST['S_id'];
        $Sta_id = $_POST['Sta_id'];
        $Sub_code = $_POST['Sub_code'];
        $Atte_status =$_POST ['Atte_status'];
        $Report =$_POST ['Report'];
        

    $conn->query("UPDATE attendence SET S_id = '$S_id', Sta_id = '$Sta_id', Sub_code='$Sub_code', Atte_status='$Atte_status', Report='$Report'  WHERE S_id='$S_id'") or die($conn->error);
    
}

if($_POST['submit'])
    {
       header('Location:madhan.php');
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
<p1>S_id</p1>
<input type="text" name="S_id" value="<?php  echo $S_id; ?>" placeholder="S_id" >
<br>
<br>
<p2>Sta_id</p2>
<input type="text" name="Sta_id" value="<?php  echo $Sta_id; ?>" placeholder="Sta_id" >
<br>
<br>
<p3>Sub_code</p3>
<input type="text" name="Sub_code" value="<?php  echo $Sub_code; ?>" placeholder="Sub_code" >
<br>
<br>
<p4>Atte_status</p4>
<input type="text" name="Atte_status" value="<?php  echo $Atte_status; ?>" placeholder="Atte_status" >
<br>
<br>
<p5>Report</p5>
<input type="text" name="Report" value="<?php  echo $Report; ?>" placeholder="Report" >
<br>
<br>


<input type="submit" name="submit" value="submit">




</body>
</html>