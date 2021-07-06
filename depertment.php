<?php include "templates/header.php"  ?>
<?php include "templates/nav.php"  ?>   

<div class="fixstyle"></div>
<section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="img img-dept align-self-stretch" style="background-image: url(images/dept-1.jpg);"></div>
    			</div>

    			<div class="col-md-8 mt-5">
    				<div class="row no-gutters">
					<?php
			include "db.php";
			$query = "SELECT * FROM depart";
			$res = mysqli_query($conn, $query);
			if($res){
				while($re = $res->fetch_assoc()){?>

			
    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#"><?php echo $re['name']; ?></a></h3>
    								<p>Far far away, behind the word mountains</p>
    							</div>
    						</div>
							</div>
    					<?php 	}	}?>
    					
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <?php include "templates/footer.php"  ?>
