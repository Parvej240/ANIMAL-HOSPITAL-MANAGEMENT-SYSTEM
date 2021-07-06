<?php include "part/header.php"; ?>

<?php
if(isset($_GET['del'])){
  $id = $_GET['del'];
  $qu = "DELETE FROM depart WHERE id='$id'";
  $qres = mysqli_query($conn, $qu);
  if($qres){
    echo "<script>alert('Successfully Deleted.')</script>  ";
    echo "<script>window.location.replace('department.php');</script>";

  }
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">
<div class="col-md-6 card shadow">
<div class="card-body">
  <?php
  if(isset($_POST['add'])){
    $name = $_POST['name'];
    if(empty($name)){
      echo "Name Is Empty";
    }else{
      $inq = "INSERT INTO depart(name) VALUES('$name')";
      $rinq = mysqli_query($conn, $inq);
      if($rinq){
        echo "<script>alert('Success')</script>  ";
        echo "<script>window.location.replace('department.php');</script>";
      }
    }
  }
  ?>
    <form action="" method="POST">
    <input type="text" name="name" class="form-control"><br>
    <button name="add" class="btn btn-primary">Add new</button>
    </form>
</div>
</div>
  <!-- Page Heading -->
  <br>
  <div class="card shadow mb-4 col-md-6">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Department List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
     <?php
     $query = "SELECT * FROM depart ORDER BY id DESC";
     $qres = mysqli_query($conn, $query);
     if($qres){
         while($res = $qres->fetch_assoc()){ ?>
                
                    <tr>
                      <td><?php echo $res['name']; ?></td>
                <td><a href="?del=<?php echo $res['id']; ?>" class="btn btn-danger" href="">Delete</a></td>
                
                  <?php
         }}
                  ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
       

  <!-- Content Row -->
  
<!-- End of Main Content -->
</div>
<?php include "part/footer.php" ?>