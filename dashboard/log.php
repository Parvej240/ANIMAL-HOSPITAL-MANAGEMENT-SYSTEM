<?php
            include "db.php";
            session_start();
            if(isset($_POST['adminlog'])){
                $name = mysqli_real_escape_string($conn, $_POST['name']);
                $pass = mysqli_real_escape_string($conn, $_POST['pass']);
                $pass = md5($pass);

                if (empty($name)) { echo "Name is required"; }
                if (empty($pass)) { echo "Password is required"; }

                $query = "SELECT * FROM admin WHERE name='$name' AND pass='$pass'";
                $que = mysqli_query($conn, $query);
                if($que->num_rows>0){
 
                    $_SESSION['admin'] = $name;
                    mysqli_close($conn);
                    header('Location:index.php');
                    
                }else{
                    echo mysqli_error($conn);
                }

            }
            ?>