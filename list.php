<?php
  session_start();
  require 'dbcon.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>DTC Scholars</title>
    
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAq046MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- data tables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
<script src="https://code.jquery.com/jquery-3.3.1.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></script>
  </head>
  <style>
    .list{  
    font-family:Elephant; 
    background-image:url("dtc.jpg"); 
    }
    h2{
        text-align: center;
    }
  </style>
  <body class="list">
  <?php include 'nav.php' ?>

  <div class="container mt-4">

    <?php include('message.php'); ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <center><h4 style="color:darkblue">List of Scholars
              <a href="student-create.php" class="btn btn-primary float-end">Add Students</a>
            </h4></center>
          </div>
          <div class="card-body">

            <table  id="students" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Student Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Course</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $query = "SELECT * FROM students";
                  $query_run = mysqli_query($con, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach($query_run as $student)
                    {
                      
                      ?>
                        <tr>
                          <td><?= $student['id'];?></td>
                          <td><?= $student['name'];?></td>
                          <td><?= $student['email'];?></td>
                          <td><?= $student['phone'];?></td>
                          <td><?= $student['course'];?></td>
                          <td>
                            <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View Data</a>
                            <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                            <form action="code.php" method="POST" class="d-inline">
                            <button type="submit" name="delete_student" value="<?=$student['id']; ?>"class="btn btn-danger btn-sm">Delete</a>

                            </form>
                          </td>
                        </tr>
                      <?php
                    }
                  }
                  else
                  {
                    echo "<h5> No Record Found </h5>";
                  }
                ?>
               
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>

    
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                  
    
    <!-- data tables -->
       <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

        <script>
            $(document).ready(function(){
                $('#students').DataTable();
            } );
       </script>
  </body>
</html>