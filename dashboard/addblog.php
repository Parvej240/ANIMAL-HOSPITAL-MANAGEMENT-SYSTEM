<?php include "part/header.php"; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid ml-5">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Blog</h1>
           
          </div>
        <?php
        if(isset($_POST['addblog'])){
          $title = $_POST['title'];
          $des = $_POST['details'];

          $test = explode('.', $_FILES["file"]["name"]);
          $ext = end($test);
          $name = uniqid() . '.' . $ext;
          $name = 'img/' . $name;  
          move_uploaded_file($_FILES["file"]["tmp_name"], $name);
          $date = date('d M Y');
          $bq = "INSERT INTO blog(title,details,image,time) VALUES('$title','$des','$name','$date')";
          $bqr = mysqli_query($conn, $bq);
          if($bqr){
            echo "<h2 class='text-success'>Added Successfully.</h2>";
          }else{
            echo mysqli_error($conn);
            echo "<h2 class='text-success'>Failed to Added.</h2>";
          }

        }
        ?>
          <!-- Content Row -->
          <div class="row">
            <div class="col-md-6">
            <form method="POST" action=""  enctype="multipart/form-data"> 
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" name="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea class="form-control" name="details" id="" cols="10" rows="5"></textarea>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Image</label>
              <input type="file" class="form-control" name="file">
            </div>
            <button name="addblog" type="submit" class="btn btn-primary">Submit</button>
          </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <?php include "part/footer.php" ?>