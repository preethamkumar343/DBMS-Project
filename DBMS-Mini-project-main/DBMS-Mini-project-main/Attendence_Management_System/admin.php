<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","admin");

if(!$conn)
{
    echo "not connected to server";
}
if(!mysqli_select_db($conn,'admin'))
{
    echo "connected to server";
}

$last=$_POST['id'];
$password=$_POST['password'];
        //to prevent from mysqli injection
 $last=stripcslashes($last);
$password=stripcslashes($password);
$last=mysqli_real_escape_string($conn,$last);
$password=mysqli_real_escape_string($conn,$password);

$sql = "SELECT * FROM `login` WHERE id='$last' AND password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
         
if($count === 1){
if($_POST['submit1'])
{
header('location:admin1.php');

}
}
else{
echo "";

}


?>

<!DOCTYPE html>
<html>
    <head>

        <style>
            
            .login{
              width: 400px;
              line-height: 25px;
              top:50%;
              right: 20%;
              transform: translate(-50%,-50%);
              position: absolute;
              border-radius: 10px;  
            }
            .login h2{
                text-align: right;
                padding: 0 0 20px 0;
                border-bottom: 1px solid silver;
            }
            .login form{
                padding: 0 40px;
                box-sizing: border-box;
            }
            .login{
                font-size: 20px;
                text-align: center;
                text-transform: uppercase;
                margin: 40px 0;
            }
            .login p{
                font-size: 20px;
                margin: 5px 0;
            }
            .login input{
                font-size: 16px;
                width: 100%;
                padding: 13px 0px;
            }
            .form.txt_file{
                margin:50px 0;
            }

            h1{
                text-align: center;
                font-style: italic;
                font-size: 40px;
                

            }
            p{
                text-align: center;
                font-style: italic;
                font-size: 40px;
                
            }

            .login h2{
                text-align: center;
                font-size:40px;
                font-style: italic;
            }
            p1{
                text-align: center;
                font-style: italic;
                font-size: 40px;
                
            }
            p2{
                text-align: center;
                font-style: italic;
                font-size: 50px;
                
            }
            p3{
                text-align: center;
                font-style: italic;
                font-size: 50px;
            }
            .LOGIN {
                text-align: center;
                margin :0 400px;
            }
            .img{
                background-size: contain;
                background-repeat: no-repeat;


            }
            
        </style>
        <title>R MADHANANTHESH</title>
        </head>
    <body style="background:url(photos.jpg);
                 background-size:contain;
                 background-repeat: no-repeat;
                 background-size: cover;">
        <h1>WELCOME TO ATTENDANCE MANAGEMENT SYSTEM</h1>
        <div class='login'>
        <h2>Login</h2>
        <form action='#' method="post">
        <label for='email'>id</label>
        <input for="text" name='id' placeholder="id" id="last" required/>
        <br>
        <br>
        <label for="password">Password</label>
        <input for="password" name="password" placeholder="password" id="password" required/>
        <br>
        <br>
        <input type="submit" name="submit1" value="login">
        <br>

        <br>   
        </form>
        </div>
    </div>
    </body>
</html>