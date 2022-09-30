<?php
$conn=mysqli_connect("localhost","root","","admin");

if(!$conn)
{
    echo "not connected to server";

}
if(!mysqli_select_db($conn,'admin'))
{
    echo 'database not selected';
}

$id=$_GET['id'];

$query="DELETE FROM student WHERE S_id='$id'";

$query_run =mysqli_query($conn,$query);

if($query_run)
{
    header("Location: madhan1.php");        
}
else
{
    ?>
    <script> alert("Data not deleted");</script>
    <?php
}
?>