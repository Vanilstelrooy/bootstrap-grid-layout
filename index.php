<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "web2";

$conn = mysqli_connect($server,$username,$password,$database);
if( isset($_POST['submitButton'])  )
{
    // 1.Fetch Form Data
        $firstName = $_POST ['firstname'];
       $lastName = $_POST ['lastname'];
       $email = $_POST ['email'];
       $phone = $_POST ['phonenumber'];
       $message = $_POST ['message'];
    // 2.Submit Form Data
       $insertData = mysqli_query($conn, "INSERT INTO contactus(firstname,lastname,email,phonenumber,message)
       VALUES('$firstName','$lastName','$email','$phone','$message')");
       if($insertData)
       {
           echo "Data Submitted Successfully";
       }
       else{
           echo "Error Occured";
       }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zalego Academy</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
</head>
<body>
    <!-- navbar starts here -->
    <!-- <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menus">
                <div class="navbar-nav">
                    <a href="#" class="nav-link active">Home</a>
                    <a href="aboutus.html" class="nav-link">About Us</a>
                    <a href="#" class="nav-link">Contact Us</a>
                    
                </div>
            </div>
        </div>      
    </nav>
    navbar ends here -->
    <main class="p-5 md-4 bg-light"><br><br>
        <h1>Welcome, Sir Vanilstelrooy Obare</h1>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil deleniti dolores esse inventore nostrum ut quasi iste culpa! <br><br>
        <button class="btn btn-primary">Learn more</button>
    </main>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <h1>Header1</h1>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem pariatur ullam deserunt quis iste quod iusto necessitatibus, eveniet, maxime, fugit veritatis cupiditate nam sequi accusantium?</p><br>
                <button class="btn btn-primary">View details</button>
            </div>
            <div class="col-lg-4 col-md-6" >
                <h1>Header2</h1>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem pariatur ullam deserunt quis iste quod iusto necessitatibus, eveniet, maxime, fugit veritatis cupiditate nam sequi accusantium?</p><br>
                <button class="btn btn-primary">View details</button>
            </div>
            <div class="col-lg-4 col-md-6">
                <h1>Header3</h1>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem pariatur ullam deserunt quis iste quod iusto necessitatibus, eveniet, maxime, fugit veritatis cupiditate nam sequi accusantium?</p><br>
                <button class="btn btn-primary">View details</button>
            </div>
        </div>

    </div>
     <!-- contact us starts here -->
    <div class="container">
        <div class="row pt-5">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime rem quasi esse, laudantium, molestiae consectetur minus quibusdam vitae assumenda perspiciatis officia quia deleniti, omnis natus?</p>
            <form action="index.php" method="POST">       
               <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Enter Your First Name">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Enter Your Last Name">
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6 col-md-6">
                        <label for="phonenumber" class="form-label">Phone number</label>
                        <input type="tel" name="phonenumber" class="form-control" placeholder="Enter Your Phone Number">
                    </div>
                    <div class="mb-3 col-lg-6 col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                    </div>
                   </div>
               </div>
               <div class="row">
                   <div class="mb-3 col-lg-12">
                    <label for="message" class="form-label">Enter Your Message</label>
                    <textarea placeholder="Enter your Message" name="message" id="" cols="30" rows="5"  class="form-control" ></textarea>
                   </div>
               </div>
               <button type="submit"name="submitButton" class="btn btn-primary" >Send A Message</button>
            </form>
        </div>
         <!-- Contact Us Ends Here -->
         <hr>
         <footer>
             &copy; Vanilstelrooy Obare 2022
         </footer>

         </div>
        
       
    </div>
   
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html> -->