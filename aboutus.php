<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "web2";

$conn = mysqli_connect($server,$username,$password,$database);
if( isset($_POST['submitButton'])  )
{
    $email = $_POST ['email'];
    // submit data
    $insertData = mysqli_query($conn,"INSERT INTO subscribers(email)VALUES('$email')");
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
</head>
<body>
    <!-- nav bar starts here -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menus">
                <div class="navbar-nav">
                    <a href="index.html" class="nav-link ">Home</a>
                    <a href="aboutus.html" class="nav-link active">About Us</a>
                    <a href="#" class="nav-link">Contact Us</a>
                    
                </div>
            </div>
        </div>      
    </nav> 
    <!--navbar ends here -->
    <main class="p-5 md-4 bg-light"><br><br>
        <h1>About Us</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and 
            three supporting pieces of content. Use it as a starting point to create something more unique.</p>

    </main>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Our Program</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda eius tempora eos ducimus perspiciatis consequuntur explicabo suscipit ea consequatur dicta?Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus sint soluta neque non nesciunt inventore quia excepturi mollitia aspernatur adipisci ab blanditiis, consequatur, rerum ullam eius id voluptas optio.</p>
            </div>
            <div class="col-lg-6">
                <img src="images/aaron-burden-4eWwSxaDhe4-unsplash.jpg" style="border-radius: 20px; height:45vh;width: 550px;">
            </div>
        </div>
            
        <div class="row">
            <h1>The Programs</h1>
            <div class="col-lg-4 bg-light-shadow">
                <div class="card" >
                    <div class="card-body">
                        <h4 class="class-title">Skill Discovery</h4>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, fugiat.</p>
                        <button class="btn btn-primary">View Details</button>
                    </div>
                </div> 
            </div>  
            <div class="col-lg-4 bg-light-shadow">
                <div class="card" >
                    <div class="card-body">
                        <h4 class="class-title">Upskilling Program</h4>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, fugiat.</p>
                        <button class="btn btn-primary">View Details</button>
                    </div>
                </div>
            </div>    
            <div class="col-lg-4 bg-light-shadow">
                <div class="card" >
                  <div class="card-body">
                    <h4 class="class-title">Path Finding Program</h4>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, fugiat.</p>
                    <button class="btn btn-primary">View Details</button>
                  </div>
                </div>
            </div>
        </div>

        <div class="row">
            <p style="margin-left: 5px; margin-right:5px; text-align:center; font-size: x-large; padding-top: 25px; color:darkgrey;">Subscribe to get information,latest news about  <br> Zalego Academy</p>
        </div>
        <form action="aboutus.php" method="POST">
            <div class="row ">
                <div class="col-lg-6 padding-bottom:30px; ">
                    <input type="email" name="email" class="form-control" placeholder="Your Email Address">
                </div>
            </div>

        </form>
    </div>
    

    <hr>
    <footer>
        &copy; Company 2022
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>