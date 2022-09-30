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
            Attendence Details
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
                                    <th>&nbsp;&nbsp;&nbsp;S_id</th> &nbsp;
                                    <th>&nbsp;&nbsp;&nbsp;Sta_id</th> &nbsp;
                                    <th>&nbsp;&nbsp;&nbsp;Sub_code</th> &nbsp;
                                    <th>&nbsp;&nbsp;&nbsp;Atte_status</th> &nbsp;
                                    <th>&nbsp;&nbsp;&nbsp;Report</th> &nbsp;
                                </tr>
                            </thead>
                            <tbody>
<?php

$conn=mysqli_connect("localhost","root","","admin");

if(isset($_GET['search']))
{
    $filtervalues=$_GET['search'];
    $query="SELECT * FROM attendence where CONCAT(S_id) like '%$filtervalues%' ";
    $query_run=mysqli_query($conn,$query);

    if(mysqli_num_rows($query_run)>0)
    {
        foreach($query_run as $items)
        {
            ?>
            <tr>
            <td>&nbsp;&nbsp;&nbsp;<?=$items['S_id'];?></td>
            <td>&nbsp;&nbsp;&nbsp;<?=$items['Sta_id'];?></td>
            <td>&nbsp;&nbsp;&nbsp;<?=$items['Sub_code'];?></td>
            <td>&nbsp;&nbsp;&nbsp;<?=$items['Atte_status'];?></td>
            <td>&nbsp;&nbsp;&nbsp;<?=$items['Report'];?></td>
            


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

