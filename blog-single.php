<?php include "templates/header.php" ?>
<?php include "templates/nav.php" ?>
	  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread">Blog Details</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <?php
              include "db.php";
              if(isset($_GET)){
                $bid = $_GET['id'];
              }
              $query = "SELECT * FROM blog WHERE id='$bid'";
              $qres = mysqli_query($conn, $query)->fetch_assoc();
            ?>
            <h2 class="mb-3"><?php echo $qres['title'] ?></h2>
           
            <p>
              <img src="dashboard/<?php echo $qres['image'] ?>" alt="" class="img-fluid">
            </p>
           
            <p>
            <?php echo $qres['details'] ?>
            </p>


            <div class="pt-5 mt-5">
              <h3 class="mb-5">
              <?php
              $blogid = $qres['id'];
                        $doc = "SELECT * FROM comment WHERE blog='$blogid'";
                        $res = mysqli_query($conn, $doc);
                        if($res){
                          $rowcount=mysqli_num_rows($res);
                        printf($rowcount);
                        ?>  
              Comments</h3>
              <ul class="comment-list">
<?php while($result = $res->fetch_assoc()){ ?>
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3><?php echo $result['name'] ?></h3>
                    <div class="meta"><?php echo $result['time'] ?></div>
                    <p><?php echo $result['msg'] ?></p>
                  </div>
                </li>

<?php }} ?>
                
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <?php 
                if(isset($_POST['comment'])){
                  $name = mysqli_real_escape_string($conn, $_POST['name']);
                  $email = mysqli_real_escape_string($conn, $_POST['email']);
                  $msg = mysqli_real_escape_string($conn, $_POST['msg']);
                  $pid = $qres['id'];
                  $date = date('d M Y');

                  $comq = "INSERT INTO comment(name,email,msg,time,blog) VALUES
                  ('$name','$email','$msg','$date','$pid')";
                  $comres = mysqli_query($conn, $comq);
                  if($comres){
                    echo "<script>alert('Comment Successfully.')</script>  ";
                    echo "<script>window.location.replace('blog-single.php?id=$pid');</script>";
                  }
                }
                ?>
                <form action="#" method="POST" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" name="name" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" name="email" class="form-control" id="email">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="msg" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="comment" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div>
          
          
          
          <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
         
          
            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Recent Blog</h3>
        <?php 
              $query = "SELECT * FROM blog LIMIT 3";
              $qres = mysqli_query($conn, $query);
              if($qres){
                  while($res = $qres->fetch_assoc()){ ?>
              <div class="block-21 mb-4 d-flex">
                <a href="?id=<?php echo $res['id'] ?>" class="blog-img mr-4" style="background-image: url(dashboard/<?php echo $res['image'] ?>)"></a>
                <div class="text">
                  <h3 class="heading"><a href="?id=<?php echo $res['id'] ?>">
                  <?php echo $res['title'] ?>
                  </a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span><?php echo $res['time'] ?></a></div>
                    <div><a href="#"><span class="icon-chat"></span>              <?php
              $blogid = $res['id'];
                        $doc = "SELECT * FROM comment WHERE blog='$blogid'";
                        $res = mysqli_query($conn, $doc);
                        if($res){
                          $rowcount=mysqli_num_rows($res);
                        printf($rowcount);}
                        ?>  </a></div>
                  </div>
                </div>
              </div>
                  <?php }} ?>


            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->
		
<?php include "templates/footer.php" ?>