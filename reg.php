<?php
            include "db.php";
            if(isset($_POST['reg'])){
                $fname = mysqli_real_escape_string($conn, $_POST['fname']);
                $lname = mysqli_real_escape_string($conn, $_POST['lname']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                $typeu = mysqli_real_escape_string($conn, $_POST['typeu']);
                $pass = mysqli_real_escape_string($conn, $_POST['pass']);
                $pass = md5($pass);

                if (empty($fname)) { echo "First name is required"; }
                if (empty($lname)) { echo "Last name is required"; }
                if (empty($email)) { echo "Email is required"; }
                if (empty($phone)) { echo "Phone is required"; }
                if (empty($typeu)) { echo "Select your user type"; }
                if (empty($pass)) { echo "Password is required"; }
                $check = "SELECT * FROM users WHERE email='$email'";
                $checkq = mysqli_query($conn, $check);
                if($checkq->num_rows>0){
                    echo "This Email is Already Taken!";
                }else{

                    $query = "INSERT INTO users (fname,lname,email,phone,typeu,pass) 
                    VALUES('$fname','$lname','$email','$phone','$typeu','$pass')";
                    $que = mysqli_query($conn, $query);
                    if($que){
    
                        mysqli_close($conn);
                        header('Location:login');
    
                    }else{
                        echo mysqli_error($conn);
                    }
                }
            

            }
            ?>