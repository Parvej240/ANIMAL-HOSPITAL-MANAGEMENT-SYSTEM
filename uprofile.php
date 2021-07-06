<?php
            include "db.php";
            session_start();
            if(isset($_POST['update'])){
                $fname = mysqli_real_escape_string($conn, $_POST['fname']);
                $lname = mysqli_real_escape_string($conn, $_POST['lname']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                $depart = mysqli_real_escape_string($conn, $_POST['depart']);
                $about = mysqli_real_escape_string($conn, $_POST['about']);
                
                
                $em = $_SESSION['email'];
                if(isset($_FILES['pp'])){
                    $test = explode('.', $_FILES["pp"]["name"]);
                    $ext = end($test);
                    $name = uniqid() . '.' . $ext;
                    $name = 'images/' . $name;  
                    $userId=$res['userId'];
                    move_uploaded_file($_FILES["pp"]["tmp_name"], $name);
                    $query = "UPDATE users SET fname='$fname',lname='$lname',email='$email',phone='$phone',depart='$depart',
                    about='$about', upp='$name' WHERE email='$em'";
                    $que = mysqli_query($conn, $query);
                 }else{
                    $query = "UPDATE users SET fname='$fname',lname='$lname',email='$email',phone='$phone',depart='$depart',
                    about='$about' WHERE email='$em'";
                    $que = mysqli_query($conn, $query);
                 }




               

             
                    if($que){
    
                        mysqli_close($conn);
                        header('Location:profile');
    
                    }else{
                        echo mysqli_error($conn);
                    }
                
            

            }
            ?>