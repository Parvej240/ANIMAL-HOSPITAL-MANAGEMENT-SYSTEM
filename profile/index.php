<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Profile Update</h2>
                    <a class='btn btn-primary' href="../index.php">Home</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="../uprofile.php" enctype="multipart/form-data">
                    <?php
                        include "../db.php";
                        session_start();
                        $email=$_SESSION['email'];
                        $query = "SELECT * FROM users WHERE email='$email'";
                        $results = mysqli_query($conn, $query)->fetch_assoc();
                        ?>
                       <?php
                       
                       if($results['upp'] != ''){?>
                        <div class="profile_image">
                            <img src="../<?php echo $results['upp']; ?>" alt="">
                        </div>
                     <?php  }?>
                       <div class="form-row m-b-55">
                    
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="fname" value="<?php echo $results['fname']; ?>">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5"  type="text" name="lname"  value="<?php echo $results['lname']; ?>">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email"  value="<?php echo $results['email']; ?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="phone"  value="<?php echo $results['phone']; ?>">
                                </div>
                            </div>
                        </div>
                        <?php if($results['typeu']=='Doctor'){ ?>
                        <div class="form-row">
                            <div class="name">Department</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="depart">
                                        <?php
                                            $dqurey = "SELECT * FROM depart";
                                            $drs = mysqli_query($conn, $dqurey);
                                            ?>
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <?php
                                            if($drs){
                                                while($dl = $drs->fetch_assoc()){
                                            ?>
                                            <option
                                            <?php
                                            if($results['depart']==$dl['id']){
                                                echo "selected";
                                            }
                                            ?>
                                             value="<?php echo $dl['id']; ?>"><?php echo $dl['name']; ?></option>
                                            
                                      <?php  } }?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <div class="form-row">
                            <div class="name">about</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="input--style-5" name="about" id="" cols="45" rows="3" ><?php echo $results['about']; ?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                
                        
                        <div class="form-row">
                            <div class="name">Profile Picture</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="pp">
                                </div>
                            </div>
                        </div>
                        
                        <div style="text-align:center">
                            <button class="btn btn--radius-2 btn--red" name="update" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->