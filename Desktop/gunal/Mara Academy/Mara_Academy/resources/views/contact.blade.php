<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mara Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    /* Floating Navbar */
    .navbar {
      position: fixed;
      top: 30px;
      left: 50%;
      transform: translateX(-50%); /* Center navbar */
      width: 95%; /* Set the width to 80% of the screen */
      z-index: 1000;
      background-color: rgba(255, 255, 255, 0.9); /* Optional: Semi-transparent white */
      backdrop-filter: blur(5px); /* Optional: Adds blur effect */
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Optional: Adds a slight shadow */
    }

    /* Body padding to prevent content from hiding behind the navbar */
    body {
      padding-top: 80px; /* Adjust for navbar height */
    }
  </style>
 
</head>

<body>

   <!-- Floating Navbar -->
   <nav class="navbar navbar-expand-sm navbar-light rounded">
    <div class="container-fluid">
      <img src="C:\xampp\htdocs\M_academy\saxophone.png" alt="Logo" style="width:40px; height: 40px;">
      <p class="ms-4">Mara Music Academy</p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/home" style="color: rgb(47, 50, 79);">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/home/courses" style="color: rgb(47, 50, 79);">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/home/student_Reg" style="color: rgb(47, 50, 79);">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/home/contact" style="color: rgb(47, 50, 79);">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>




    <!--contact us          //reference

  <div class="container-fluid text text-white" style="background-color: rgb(68, 71, 99);">
    <h1>Contact  Us</h1>
    <div class="conatiner container-fluid p-3" style="width: 40%; height: 50%; background-color: #ecebeb;">
      <form action="">
        <div class="form-group">
          <label for="=email" class="text text-dark text-md-2">Name:</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="pwd"class="text text-dark text-md-2">Email address:</label>
          <input type="password" class="form-control" id="pwd">
        </div>
        <button type="submit" class="btn btn-default bg-secondary m-3">Submit</button>
      </form>
    </div>
  
  </div>
-->

<div class="container-fluid " style="background-color: #ecebeb;" >
    <h1 class="text-center py-5 "style="color: rgb(68, 71, 99);">Contact Us</h1>

    <div class="container p-4 ">
      <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12">
          <div class="card shadow-sm" style="background-color: #ecebeb;">
            <div class="card-body">
              <form action="" method="post">
                <div class="mb-3">
                  <label for="name" class="form-label text-dark">Name:</label>
                  <input type="text" class="form-control" id="name" name="Name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label text-dark">Email address:</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label text-dark">Message:</label>
                  <textarea class="form-control" id="message" rows="4" name="message" placeholder="Enter your message"
                    required></textarea>
                </div>
                <button type="submit" class="btn btn-dark"style="margin-left: 45%;">Submit</button>
                @csrf
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer Section -->
  <footer class="container-fluid bg-dark text-white py-5" style="background: linear-gradient(45deg,rgba(11, 16, 21, 0.83),rgba(75, 3, 99, 0.3));">
    <div class="row">
      <div class="col-12 col-sm-4 text-center">
        <h5>About Us</h5>
        <p>
          Edit this section with information about your academy. Add details such as your mission, vision, and history.
        </p>
      </div>
      <div class="col-12 col-sm-4 text-center">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white text-decoration-none">Home</a></li>
          <li><a href="#" class="text-white text-decoration-none">Courses</a></li>
          <li><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
          <li><a href="#" class="text-white text-decoration-none">FAQ</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-4 text-center">
        <h5>Contact Us</h5>
        <p>
          Address: Your Academy Address<br>
          Phone: (+123) 456-7890<br>
          Email: info@academy.com
        </p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-auto">
        <p class="mb-0">© 2025 Your Academy. All rights reserved.</p>
      </div>
    </div>
  </footer>






    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>