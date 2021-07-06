
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mediplus - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
 
<link rel="stylesheet" href="appinment.css">

  </head>
<body>

<?php
            include "../db.php";
            if(isset($_POST['submit'])){
                $name = mysqli_real_escape_string($conn, $_POST['name']);
                $animal = mysqli_real_escape_string($conn, $_POST['animal']);
                $age = mysqli_real_escape_string($conn, $_POST['age']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $doctor = mysqli_real_escape_string($conn, $_POST['doctor']);
                $time = mysqli_real_escape_string($conn, $_POST['time']);

                $about = mysqli_real_escape_string($conn, $_POST['about']);

                if (empty($name)) { echo "First name is required"; }
                if (empty($animal)) { echo "Last name is required"; }
                if (empty($age)) { echo "Email is required"; }
                if (empty($email)) { echo "Phone is required"; }
                if (empty($doctor)) { echo "Select your user type"; }
                if (empty($time)) { echo "Password is required"; }
              
                if(isset($_FILES['file'])){
                  $test = explode('.', $_FILES["file"]["name"]);
                  $ext = end($test);
                  $file = uniqid() . '.' . $ext;
                  $file = 'images/' . $file;  

                  move_uploaded_file($_FILES["file"]["tmp_name"], $file);

                  $query = "INSERT INTO appoinment (owner,animal,age,email,doctor,time,file,about) 
                  VALUES('$name','$animal','$age','$email','$doctor','$time','$file','$about')";
                  $que = mysqli_query($conn, $query);
                  if($que){
    
                    mysqli_close($conn);
                    header('Location:../payment.php');

                }else{
                    echo mysqli_error($conn);
                }
               }else{
                  
                $query = "INSERT INTO appoinment (owner,animal,age,email,doctor,time,about) 
                VALUES('$name','$animal','$age','$email','$doctor','$time','$about')";
                $que = mysqli_query($conn, $query);
                if($que){
    
                  mysqli_close($conn);
                  header('Location:../index.php');

              }else{
                  echo mysqli_error($conn);
              }
               }
                  
                  
               
            

            }
            ?>
 <!-- multistep form -->
<form id="msform" action="#" method="POST"  enctype="multipart/form-data">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="text" name="name" placeholder="Name" />
    <input type="text" name="animal" placeholder="Animal" />
    <input type="text" name="age" placeholder="Animal Age" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="email" placeholder="Email" />
    <select name="doctor">
      <?php
          $dqurey = "SELECT * FROM users WHERE typeu='Doctor'";
          $drs = mysqli_query($conn, $dqurey);
          ?>
          <option disabled="disabled" selected="selected">Choose Doctor</option>
          <?php
          if($drs){
              while($dl = $drs->fetch_assoc()){
          ?>
          <option value="<?php echo $dl['id']; ?>"><?php echo $dl['fname']; ?></option>
          
          
    <?php  } }?>
      </select>
      <br>
      <textarea name="about" id="" cols="20" rows="3"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="file" name="file"  />
    <select name="time" id="">
      <option value="08 AM - 10 AM">08 AM - 10 AM</option>
      <option value="10 AM - 12 P">10 AM - 12 PM</option>
      <option value="02 PM - 04 PM">02 PM - 04 PM</option>
    </select>
    <br>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <!-- <input type="submit" name="submit" class="submit action-button" value="Submit" /> -->
    <button name="submit" class="submitaction-button">Submit</button>
  </fieldset>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="appionment.js"></script>
</body>
</html>