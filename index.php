<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEC-Students-Portal</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <?php
    include_once('header.php');
  ?>
 
    <div class="container">
    <div class="form-box">
    <h1 class="title">Registration</h1>
   
    <form action="" class="r-form-disable rform">
        <div class="input-group">

                    <div class="input-field">

                        <input type="text" placeholder="First Name" name="fname">

                    </div><!--end input field-->

                    <div class="input-field">

                        <input type="text" placeholder="Middle Name" name="mname">

                    </div><!--end input field-->

                    <div class="input-field">

                        <input type="text" placeholder="Last Name" name="lname">

                    </div><!--end input field-->

                    <div class="input-field">

                        <input type="text" placeholder="Registration ID" name="rid">

                    </div><!--end input field-->

                    <div class="input-field">

                        <input type="email" placeholder="Gmail ID " name="gid">

                    </div><!--end input field-->

                    <div class="input-field">

                        <input type="text" placeholder="Phone Number" name="pn">

                    </div><!--end input field-->

                    <div class="input-field">

                        <input type="date" placeholder="DOB" name="dob">

                    </div><!--end input field-->

                    <div class="input-fied">

                        <input type="radio"  name="gender">
                        <label>Male</label>
                        <input type="radio"  name="gender">
                        <label>Female</label>
                        

                    </div><!--end input field-->

                    <div class="input-field">

                        <select class="form-control" id="course" required>
                            <option value="" disabled selected>Select Course</option>
                            <option value="course1">MBA</option>
                            <option value="course2">B TECH</option>
                            <option value="course3">DIPLOMA</option>
                        </select>

                    </div><!--end input field-->

                    <div class="input-field">

                        <select class="form-control" id="branch" required>
                            <option value="" disabled selected>Select Branch</option>
                            <option value="branch1">CSE</option>
                            <option value="branch2">EEE</option>
                            <option value="branch3">ECE</option>
                            <option value="branch1">CIVIL</option>
                            <option value="branch2">MECH</option>
                            <option value="branch3">AERO</option>
                        </select>

                    </div><!--end input field-->

                    <div class="input-field">

                        <select class="form-control" id="semester" required>
                            <option value="" disabled selected>Select Semester</option>
                            <option value="sem1">Semester 1</option>
                            <option value="sem2">Semester 2</option>
                            <option value="sem3">Semester 3</option>
                            <option value="sem1">Semester 4</option>
                            <option value="sem2">Semester 5</option>
                            <option value="sem3">Semester 6</option>
                            <option value="sem3">Semester 7</option>
                            <option value="sem3">Semester 8</option>
                        </select>

                    </div><!--end input field-->

                    <div class="input-field">

                        <input type="password" placeholder="Create Password" name="createpass">

                    </div><!--end input field-->

                    <div class="input-field">

                        <input type="password" placeholder="Confirm Password" name="confirmpass">

                    </div><!--end input field-->

                    
         </div><!--end input group -->
         <div class="input-btn">

            <input type="submit" value="Submit" name="submit">

        </div><!--end input field-->

        
        <div class="underline"></div>
    </form>



        <form class="login-form login-disable lform">
            <select id="userType" name="userType" required>
                <option value="" disabled selected>Select User Type</option>
                <option value="student">Student Login</option>
                <option value="teacher">Teacher Login</option>
            </select>
            <input type="text" id="regNo" name="regNo" placeholder="Registration No:" required>
            <input type="password" id="password" name="password" placeholder="Password:" required>
            <button type="submit">Login</button>
        </form>

        <div class="btn-field">
            <button type="button" class="rbtn active" >Registration</button>
            <button type="button" class="lbtn">Login</button>

        </div><!--end btn field-->
   
    
    </div><!--end form box-->
    
    </div><!--end container-->

    <?php
    include_once('footer.php');
  ?>
    
    
    <script src="script.js"></script>
</body>
</html>