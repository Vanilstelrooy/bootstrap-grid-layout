<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "web2";

$conn = mysqli_connect($server,$username,$password,$database);
if( isset($_POST['submitButton']) )
{
    $fullname = $_POST ['fullname'];
    $phone = $_POST ['phone'];
    $email = $_POST ['email'];
    $gender = $_POST ['gender'];
    $course = $_POST ['course'];

    $insertData = mysqli_query($conn, "INSERT INTO enrollment(fullname,phonenumber,email,gender,course)
    VALUES('$fullname','$phone','$email','$gender','$course')");
    if($insertData)
    {
        echo "Data Submitted Successfully";
    }
    else
    {
        echo "Error Occured";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
\<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
    <!-- Nav bar starts Here -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menus">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link active ">Home</a>
                    <a href="aboutus.php" class="nav-link">About Us</a>
                    <a href="enroll.php" class="nav-link">Register Now</a>
                    
                </div>
            </div>
        </div>      
    </nav> 
    <!-- Nav Bar Ends Here -->
    <main class="p-5 md-4 bg-light" style="text-align:center;" ><br><br>
        <h1 >JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
        <ul style="list-style-type:none;">
            <li>
                <span><i class="fa fa-calendar"></i></span>
                <span>20th July 2022</span>
            </li>
            <li>
                <span><i class="fa fa-map-marker"></i></span>
                <span>Zalego Academy <br> Devan Plaza</span>
            </li>
        </ul>
    </main>
    <div class="container-fluid" style="text-align:center;" >
         <p>Looking for a place to kickstart your technology?<br>Whether you're a local,new in town or just cruising through we've got <br> loads of great tips and events for you</p><br>
         <p style="font-size:x-large; font-weight:bold; color:darkgrey;">Sign Up Today ?</p>
    </div>
    <div class="container-fluid">
      <form action="enroll.php" method="POST">       
        <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control" placeholder="Enter Your Full Name">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" name="phone" class="form-control" placeholder="Enter Your Phone Number">
                </div>
        </div> 
        <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="gender" class="form-label">Whats your gender?</label>
                    <select name="gender" aria-label="Default select example" class="form-select">
                        <option selected>--select your gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
        </div>
        <P style="text-align:center;">In order to complete your registration to the bootcamp,you are required to select one course you will be <br> undertaking. Please NOTE that this will be your learningtrack during the 2-weeks immersion.
        </P>
        <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="course"class="form-label">What's your prefered course?</label>
                    <select name="course" aria-label="Default select example" class="form-select">
                        <option selected>--select your courses--</option>
                        <option value="Android App Development">Android App Development</option>
                        <option value="Web Design & Development">Web Design & Development</option>
                        <option value="Data Analysis">Data Analysis</option>
                        <option value="Cyber Security">Cyber Security</option>
                    </select>
                </div>
        </div>      
    
        <p style="text-align:center;">You agree by providing your information you understand all our data privacy and protection policy <br> outlined in our terms and conditions and the privacy policy statements</p>
        <div class="form check mb-5 mt-5">
            <input type="checkbox" class="form-check-label" id="flexCheckDefault">
            <label for="flexChckDefault mt-1" class="form-check-label">Agree Terms and Conditions</label>
        </div>
        <button type="submit"name="submitButton" class="btn btn-primary" >Submit Application</button>
      </form> 
    </div>
    </div>

    <hr>
         <footer>
             &copy; Vanilstelrooy Obare 2022
         </footer>

         </div>              
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>