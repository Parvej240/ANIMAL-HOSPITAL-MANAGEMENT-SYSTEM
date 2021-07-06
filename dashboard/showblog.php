<?php include "part/header.php"; ?>
<?php
if(isset($_GET['deact'])){
  $id = $_GET['deact'];
//delete image
  $sq = "SELECT * FROM blog WHERE id='$id'";
  $sqr = mysqli_query($conn, $sq)->fetch_assoc();
    unlink($sqr['image']);
//delete post
  $qu = "DELETE FROM blog WHERE id='$id'";
  $qres = mysqli_query($conn, $qu);
  if($qres){

    echo "<script>alert('Successfully Deteled.')</script>  ";
    echo "<script>window.location.replace('showblog.php');</script>";

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
     $query = "SELECT * FROM blog";
     $qres = mysqli_query($conn, $query);
     if($qres){
         while($res = $qres->fetch_assoc()){ ?>
                
                    <tr>
                      <td><?php echo $res['title'] ?></td>
                      <td><?php echo substr_replace($res['details'], "...", 60);
                      ?></td>
                      <td><img height="100" src="<?php echo $res['image'] ?>" alt=""></td>
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