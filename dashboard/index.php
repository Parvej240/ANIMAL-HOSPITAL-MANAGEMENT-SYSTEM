<?php include "part/header.php"; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Doctor</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        $doc = "SELECT * FROM users WHERE typeu='Doctor'";
                        $res = mysqli_query($conn, $doc);
                        if($res){
                          $rowcount=mysqli_num_rows($res);
  printf($rowcount);
                        }
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

   <!-- Earnings (Monthly) Card Example -->
   <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Blog</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        $doc = "SELECT * FROM blog";
                        $res = mysqli_query($conn, $doc);
                        if($res){
                          $rowcount=mysqli_num_rows($res);
  printf($rowcount);
                        }
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

   <!-- Earnings (Monthly) Card Example -->
   <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Comment</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        $doc = "SELECT * FROM comment";
                        $res = mysqli_query($conn, $doc);
                        if($res){
                          $rowcount=mysqli_num_rows($res);
  printf($rowcount);
                        }
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pastion</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                        $pat = "SELECT * FROM users WHERE typeu='Patient'";
                        $patres = mysqli_query($conn, $pat);
                        if($patres){
                          $rowcount=mysqli_num_rows($patres);
  printf($rowcount);
                        }
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

       
                      <!-- Earnings (Monthly) Card Example -->
                      <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Department</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                        $depart = "SELECT * FROM depart";
                        $departr = mysqli_query($conn, $depart);
                        if($departr){
                          $rowcount=mysqli_num_rows($departr);
  printf($rowcount);
                        }
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Appoinment</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                        $appoin = "SELECT * FROM appoinment";
                        $appoinr = mysqli_query($conn, $appoin);
                        if($appoinr){
                          $rowcount=mysqli_num_rows($appoinr);
  printf($rowcount);
                        }
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

      


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <?php include "part/footer.php" ?>