<?php
$conn = mysqli_connect("localhost","root","","admin");

$update = false;

$id = 0;

$id = '';
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

    $result = $conn->query("SELECT * FROM metro_details WHERE metro_no='$id'");

        $items = $result->fetch_array();
        $id = $items['S_id'];
        $name1 = $items['F_name'];
        $name2 = $items['L_name'];
        $gender = $items['Gender'];
        $age = $items['Age'];
        $branch = $items['Branch'];
        $address = $items['Address'];
        $number = $items['C_num'];



}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $id = $items['S_id'];
        $name1 = $_POST['F_name'];
        $name2 = $_POST['L_name'];
        $gender =$_POST ['Gender'];
        $age =$_POST ['Age'];
        $branch =$_POST ['Branch'];
        $address =$_POST ['Address'];
        $number = $_POST['C_num'];


    $conn->query("UPDATE studentdetails SET S_id = '$id', F_name = '$name1', L_name='$name2', Gender='$gender', Age='$age', Branch='$branch', Address='$address' ,C_num='$number'  WHERE S_id='$id'") or die($conn->error);
    
}

    if($_POST['update'])
    {
       header('Location:Student fetch.php');
    } 

?>
<!DOCTYPE html>
<html>
    <head>
        <title>STUDENT</title>
        <style>
            *{
             padding: 0;
             margin: 0;
             font-family: sans-serif;
             }

            h1{
                color: blue;
            }
            .passenger{
                width: 500px;
                line-height: 25px;
                top: 50%;
                right: 20%;
                transform: translate(-50%, -50%);
                position: absolute;
                background : white;
                border-radius: 10px;
            }

            .passenger form{
                padding: 0 40px;
                box-sizing: border-box;
            }

            .passenger input {
                font-size: 16px;
                width: 100%;
                padding: 15px 10px;
                 }

            .form .txt_field{
                margin: 50px 0;
            }

            body{
                background-color: cornflowerblue;
            }


        </style>
</head>
<body>
<div class="student">
        <form action='#' method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <br>
            <h1>UPDATE DETAILS</h1>
            <br>
            <label for="S_id">S id</label>
            <input type="text" name="S_id" value="<?php echo $name; ?>" placeholder="S_id" >
            <br>
            <label for="F_name">F name</label>
            <input type="text" name="F_name" value="<?php echo $arrt; ?>" placeholder="F_name">
            <br>
            <label for="L_name">L name</label>
            <input type="text" name="L_name" value="<?php echo $dept; ?>" placeholder="L_name">
            <br>
            <label for="Gender">Gender</label>
            <input type="text" name="Gender" value="<?php echo $avail; ?>"  placeholder="Gender">
            <br>
            <br>
            <label for="Age">Age</label>
            <input type="text" name="Age" value="<?php echo $avail; ?>"  placeholder="Age">
            <br>
            <br>
            <label for="Branch">Branch</label>
            <input type="text" name="Branch" value="<?php echo $avail; ?>"  placeholder="Branch">
            <br>
            <br>
            <label for="Address">Address</label>
            <input type="text" name="Address" value="<?php echo $avail; ?>"  placeholder="Address">
            <br>
            <br>
            <label for="C_num">C_num</label>
            <input type="text" name="C_num" value="<?php echo $avail; ?>"  placeholder="C_num">
            <br>
            <br>
            <div class="submit">
                
            <input type="submit" class= "btn btn-primary" name="update" value="update">
            
        </div>

</body>
</html>
