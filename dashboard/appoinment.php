<?php include "part/header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Appoinments</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Owner Name</th>
                      <th>Animal</th>
                      <th>Age</th>
                      <th>Email</th>
                      <th>Doctor</th>
                      <th>Time</th>
                      <th>File</th>
                      <th>About</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
     <?php
     $query = "SELECT * FROM appoinment WHERE status='0'";
     $qres = mysqli_query($conn, $query);
     if($qres){
         while($res = $qres->fetch_assoc()){ ?>
                
                    <tr>
                      <td><?php echo $res['owner'] ?></td>
                      <td><?php echo $res['animal'] ?></td>
                      <td><?php echo $res['age'] ?></td>
                      <td><?php echo $res['email'] ?></td>
                      
                      <td>
                      <?php
                       $did = $res['doctor'] ;
                       $dq = "SELECT * FROM users WHERE typeu='Doctor' AND id='$did'";
                      $resd = mysqli_query($conn, $dq)->fetch_assoc();
                      echo $resd['fname'] ;
                      ?>
                      </td>
                      <td><?php echo $res['time'] ?></td>
                      
                      <td>  <a href="../<?php echo $res['file'] ?>">Download</a></td>
                      
                      <td><?php echo $res['about'] ?></td>
                      <td><?php 
                      if($res['status'] == 0){?>
                    <a class="btn btn-danger text-white">Done</a>
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

  <!-- Content Row -->
  
<!-- End of Main Content -->
</div>
<?php include "part/footer.php" ?>