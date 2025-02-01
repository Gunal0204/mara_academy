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

<!--registratioon form-->

    <div class="container-fluid text-white" style="background-color: rgb(68, 71, 99);">
        <h1 class="text-center py-5">Register</h1>
    
        <div class="container p-4">
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-12">
                    <div class="card shadow-sm" style="background-color: #ecebeb;">
                        <div class="card-body">
                            <form action="/student_reg" method="post">
                                <!-- Name -->
                                <div class="mb-3">
                                    <label for="name" class="form-label text-dark">Full Name:</label>
                                    <input type="text" class="form-control" id="name" name="Full_name" placeholder="Enter your full name" required>
                                </div>
    
                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label text-dark">Email address:</label>
                                    <input type="email" class="form-control" id="email" name="Email" placeholder="Enter your email" required>
                                </div>
    
                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label text-dark">Password:</label>
                                    <input type="password" class="form-control" id="password" name="Password" placeholder="Enter your password" required>
                                </div>
    
                                <!-- Confirm Password -->
                                <div class="mb-3">
                                    <label for="confirm-password" class="form-label text-dark">Confirm Password:</label>
                                    <input type="password" class="form-control" id="confirm-password" placeholder="Confirm your password" required>
                                </div>
    
                                <!-- Gender -->
                                <div class="mb-3">
                                    <label class="form-label text-dark">Gender:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Gender" id="male" value="male">
                                        <label class="form-check-label text-dark" for="male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Gender" id="female" value="female">
                                        <label class="form-check-label text-dark" for="female">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Gender" id="other" value="other">
                                        <label class="form-check-label text-dark" for="other">Other</label>
                                    </div>
                                </div>
    
                                <!-- Terms & Conditions -->
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="terms" required>
                                    <label class="form-check-label text-dark" for="terms">I agree to the Terms and Conditions</label>
                                </div>
    
                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-secondary w-100">Register</button>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!--script for bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>