<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
         
            <form action="../reg.php" method="POST" class="appointment-form" id="appointment-form">
                <h2>education appointment form</h2>
                <div class="form-group-1">
                    <input type="text" name="fname" id="title" placeholder="Frist name" required />
                    <input type="text" name="lname" id="name" placeholder="last Name" required />
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="number" name="phone" id="phone_number" placeholder="Phone number" required />
                    <!-- <div class="select-list">
                        <select name="typeu" id="course_type">
                            <option selected value="">user Type</option>
                            <option value="doctor">Doctor</option>
                            <option value="pation">Pation</option>
                        </select>
                    </div> -->
                    <div class="radion">
                        <input type="radio" name="typeu" value="Doctor">Doctor
                        <input type="radio" name="typeu" value="Pation">Pation
                        <input type="radio" name="typeu" value="staff">Staff
                    </div>
                </div>
               
                <input type="password" name="pass" id="phone_number" placeholder="Password" required />
                <div class="form-submit">
                    <input type="submit" name="reg" id="submit" class="submit" value="Register"/>
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>