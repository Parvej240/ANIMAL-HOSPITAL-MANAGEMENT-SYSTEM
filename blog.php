
<?php include "templates/header.php"  ?>
<?php include "templates/nav.php"  ?> 

<section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <h2 class="mb-4">Gets Every Single Updates Here</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row d-flex">

        <?php
  include "db.php";
     $query = "SELECT * FROM blog";
     $qres = mysqli_query($conn, $query);
     if($qres){
         while($res = $qres->fetch_assoc()){ ?>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.php?id=<?php echo $res['id']; ?>" class="block-20" style="background-image: url('dashboard/<?php echo $res['image']; ?>');">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="#"><?php echo $res['time']; ?></a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 
                  <?php
              $blogid = $res['id'];
                        $doc = "SELECT * FROM comment WHERE blog='$blogid'";
                        $docr = mysqli_query($conn, $doc);
                        if($docr){
                          $rowcount=mysqli_num_rows($docr);
                        printf($rowcount);}
                        ?> 
                </a></div>
                </div>
                <p><?php echo substr_replace($res['details'], "...", 60); ?></p>
                <p><a href="blog-single.php?id=<?php echo $res['id']; ?>" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>
         <?php }} ?>
        
        
        </div>
      </div>
    </section>
    <?php include "templates/footer.php"  ?>