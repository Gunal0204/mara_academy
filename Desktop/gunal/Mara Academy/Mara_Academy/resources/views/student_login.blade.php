<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student_login</title>
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
      <img src="/images/logomusic.png" alt="Logo" style="width:40px; height: 40px;">
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
            <a class="nav-link" href="/home/student_Login" style="color: rgb(47, 50, 79);">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/home/contact" style="color: rgb(47, 50, 79);">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--container-->

    <div class="container-fluid text-white" style="background-image: url('images/Guitar_Father.jpeg');">
        <h1 class="text-center text-dark py-5">Student Login</h1>

        <div class="container p-4">
            <div class="row justify-content-end">
                <div class="col-md-6 col-sm-12">
                    <div class="card shadow-sm" style="background-color: #ecebeb;">
                        <div class="card-body">
                            <form action="student_login.php" method="post">
                                <div class="mb-3">
                                    <label for="studentId" class="form-label text-dark">Student ID:</label>
                                    <input type="text" class="form-control" id="studentId" name="studentId"
                                        placeholder="Enter Student ID" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label text-dark">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Enter Password" required>
                                </div>
                                <button type="submit" class="btn btn-secondary w-100">Login</button>
                                <p class="mt-3 text-center">
                                    <a href="#" class="text-decoration-none">Forgot your password?</a>
                                </p>
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