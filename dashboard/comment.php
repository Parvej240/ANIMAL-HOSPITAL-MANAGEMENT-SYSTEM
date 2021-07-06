<?php include "part/header.php"; ?>
<?php
if(isset($_GET['deact'])){
  $id = $_GET['deact'];

  $qu = "DELETE FROM comment WHERE id='$id'";
  $qres = mysqli_query($conn, $qu);
  if($qres){

    echo "<script>alert('Successfully Deteled.')</script>  ";
    echo "<script>window.location.replace('comment.php');</script>";

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
                      <th>Title</th>
                      <th>Details</th>
                      <th>Image</th>
                      <th>Time</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
     <?php
     $query = "SELECT * FROM comment";
     $qres = mysqli_query($conn, $query);
     if($qres){
         while($res = $qres->fetch_assoc()){ ?>
                
                    <tr>
                      <td><?php echo $res['name'] ?></td>
                      <td><?php echo $res['email'];
                      ?></td>
                      <td><?php echo $res['msg'] ?></td>
                      <td><?php echo $res['time'] ?></td>
                      <td><a href="?deact=<?php echo $res['id'] ?>" class="btn btn-warning text-white">Delete</a>
                   </td>
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