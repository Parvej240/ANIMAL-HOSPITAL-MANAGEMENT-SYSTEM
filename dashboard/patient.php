<?php include "part/header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Patient List</h6>
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
                      <th>Department</th>
                    </tr>
                  </thead>
                  <tbody>
     <?php
     $query = "SELECT * FROM users WHERE typeu='Patient'";
     $qres = mysqli_query($conn, $query);
     if($qres){
         while($res = $qres->fetch_assoc()){ ?>
                
                    <tr>
                      <td><?php echo $res['fname'] ." ". $res['lname'] ?></td>
                      <td><?php echo $res['email'] ?></td>
                      <td><?php echo $res['phone'] ?></td>
                      <td><?php echo $res['about'] ?></td>
                      <td>
                      <?php
                       $did = $res['depart'] ;
                       $dq = "SELECT * FROM depart WHERE id='$did'";
                      $resd = mysqli_query($conn, $dq)->fetch_assoc();
                      echo $resd['name'] ;
                      ?>
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

  <!-- Content Row -->
  
<!-- End of Main Content -->
</div>
<?php include "part/footer.php" ?>