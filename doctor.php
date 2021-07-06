<?php include "templates/header.php"  ?>
<?php include "templates/nav.php"  ?>   

<section class="ftco-section" id="doctor-section">
			<div class="container-fluid px-5">
				<div class="row justify-content-center mb-5 pb-2">
					<div class="col-md-8 text-center heading-section ftco-animate">
						<h2 class="mb-4">Our Qualified Doctors</h2>
						<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
					</div>
					</div>	
				<div class="row">
				<?php
				include "db.php";
     $query = "SELECT * FROM users WHERE typeu='Doctor' AND status='1'";
     $qres = mysqli_query($conn, $query);
     if($qres){
         while($res = $qres->fetch_assoc()){ ?>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(<?php echo $res['upp']; ?>);">
								</div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2"><?php echo $res['fname'] ." ". $res['lname'] ?></h3>
								<span class="position mb-2"><?php 
								$did = $res['depart'];
								 $dq = "SELECT * FROM depart WHERE id='$did'";
								 $dqr = mysqli_query($conn, $dq)->fetch_assoc();
								 echo $dqr['name'];
								?></span>
								<div class="faded">
									<p><?php echo $res['about']; ?></p>
									<ul class="ftco-social text-center">
										<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
									</ul>
									<p><a href="appionment/appointment.php" class="btn btn-primary">Get Appoinment</a></p>
								</div>
							</div>
						</div>
					</div>
		 <?php }}?>
				</div>
			</div>
		</section>
		
        <?php include "templates/footer.php"  ?>