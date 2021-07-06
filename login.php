<?php
            include "db.php";
            session_start();
            if(isset($_POST['log'])){
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $pass = mysqli_real_escape_string($conn, $_POST['pass']);
                $pass = md5($pass);

                if (empty($email)) { echo "Email is required"; }
                if (empty($pass)) { echo "Password is required"; }

                $query = "SELECT * FROM users WHERE email='$email' AND pass='$pass'";
                $que = mysqli_query($conn, $query);
                if($que){
                    $sq = "SELECT * FROM users WHERE email='$email'";
                    $data = mysqli_query($conn, $sq)->fetch_assoc();
                    $_SESSION['fname'] = $data['fname'];
                    $_SESSION['email'] =  $data['email'];
                    mysqli_close($conn);
                    header('Location:index.php');
                    
                }else{
                    echo mysqli_error($conn);
                }

            }
            ?>