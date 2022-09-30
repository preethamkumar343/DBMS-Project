
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <meta charset="UTF-8">
        <title>
            Student Details
    </title>
    <style>
    

    </style>
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <form action="" method="GET">
                              <div class="input-group mb-3">
                                   <input label="search" type="text" name="search" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>" class='form-control' placeholder="search by id" value="">
                                   <button type="submit" class="btn btn-primary">search</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S_id</th> 
                                    <th>F_name</th> &nbsp;
                                    <th>L_name</th> &nbsp;
                                    <th>Gender</th> &nbsp;
                                    <th>Age</th> &nbsp;
                                    <th>Branch</th> &nbsp;
                                    <th>Address</th> &nbsp;
                                    <th>C_num</th> &nbsp;


                                </tr>
                            </thead>
                            <tbody>
<?php

$conn=mysqli_connect("localhost","root","","admin");

if(isset($_GET['search']))
{
    $filtervalues=$_GET['search'];
    $query="SELECT * FROM student where CONCAT(S_id,F_name) like '%$filtervalues%' ";
    $query_run=mysqli_query($conn,$query);

    if(mysqli_num_rows($query_run)>0)
    {
        foreach($query_run as $items)
        {
            ?>
            <tr>
            <td><?=$items['S_id'];?></td>
            <td><?=$items['F_name'];?></td>
            <td><?=$items['L_name'];?></td>
            <td><?=$items['Gender'];?></td>
            <td><?=$items['Age'];?></td>
            <td><?=$items['Branch'];?></td>
            <td><?=$items['Address'];?></td>
            <td><?=$items['C_num'];?></td>
            <td><a href="studentdelete.php?id=<?php echo $items['S_id'];?>" data-toggle="
            tooltip" data-placement="bottom" title="delete"> <i class="fa fa-trash" aria-hidden="true">Delete</i> </a> </td>
            <td><a href="updatestudent.php?id=<?php echo $items['S_id'];?>" data-toggle="
            tooltip" data-placement="bottom" title="update"> <i class="fa fa-trash" aria-hidden="true">Update</i> </a> </td>     
            </tr>


            <?php


        }

    }
}
    else
    {
        ?>
        <tr>
            <td colspan="3">no record found</td>
        </tr>

        <?php
    }

?>
                                <tr>
                                    <td></td>
                                </tr>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

