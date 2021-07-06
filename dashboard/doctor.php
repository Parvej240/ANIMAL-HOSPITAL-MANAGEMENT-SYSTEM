<?php include "part/header.php"; ?>
<?php
if(isset($_GET['deact'])){
  $id = $_GET['deact'];
  $qu = "UPDATE users SET status=0 WHERE id='$id' AND typeu='Doctor'";
  $qres = mysqli_query($conn, $qu);
  if($qres){
    echo "<script>alert('Successfully Deactive.')</script>  ";
    echo "<script>window.location.replace('doctor.php');</script>";

  }
}
if(isset($_GET['act'])){
    $id = $_GET['act'];
    $qu = "UPDATE users SET status=1 WHERE id='$id' AND typeu='Doctor'";
    $qres = mysqli_query($conn, $qu);
    if($qres){
      echo "<script>alert('Successfully Activated.')</script>  ";
      echo "<script>window.location.replace('doctor.php');</script>";
  
    }
  }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Doctor List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>About</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
     <?php
     $query = "SELECT * FROM users WHERE typeu='Doctor'";
     $qres = mysqli_query($conn, $query);
     if($qres){
         while($res = $qres->fetch_assoc()){ ?>
                
                    <tr>
                      <td><?php echo $res['fname'] ." ". $res['lname'] ?></td>
                      <td><?php echo $res['email'] ?></td>
                      <td><?php echo $res['phone'] ?></td>
                      <td><?php echo $res['about'] ?></td>
                      <td><?php 
                      if($res['status'] == 1){?>
<a href="?deact=<?php echo $res['id'] ?>" class="btn btn-warning text-white">Deactive</a>
                   <?php   }elseif($res['status'] == 0){ ?>
                    <a href="?act=<?php echo $res['id'] ?>" class="btn btn-danger text-white">Active</a>
                <?php      } ?></td>
                    </tr>
                
                  <?php
         }}
                  ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <?php include "part/footer.php" ?>