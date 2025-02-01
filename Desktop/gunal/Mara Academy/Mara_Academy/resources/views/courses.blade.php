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

    /* Body padding to prevent content from Hiding behind the navbar */
    body {
      padding-top: 80px; /* Adjust for navbar height */
    }

    /* Center the cards in the row */
.card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;  /* smooth transition for hover effects */
}

/* Hover Effect on the Card */
.card:hover {
  transform: translateY(-10px); /* Slightly lift the card */
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Adding shadow on hover */
}

/* Additional responsiveness to ensure cards stay aligned */
.card-body a {
  display: block;
  margin-top: 10px;
}

/* Optional: Styling for the course cards */
.course-card {
  border-radius: 10px;  /* Rounded corners */
  overflow: hidden;     /* Ensure the rounded corners aren't broken by image */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow effect initially */
}

/* Optional: Apply shadow on larger screens */
@media (min-width: 768px) {
  .card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Initial shadow */
  }
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


<!-- Our Courses Section -->
<section id="courses" class="py-5">
  <div class="container text-center">
    <h2 class="mb-4" style="color: rgb(47, 50, 79);">Our Courses</h2>

    <!-- Row of Course Cards -->
    <div class="row justify-content-center">
      
      <!-- Course 1: Keyboard Level 1 -->
      <div class="col-12 col-sm-4 col-md-3 mb-4">
        <div class="card course-card">
          <a href="/Key_Board/class/level_1">
            <img class="card-img-top" src="{{ asset('images/Guitar_Father.jpeg') }}" alt="Keyboard Class Level 1">
          </a>
          <div class="card-body text-center">
            <a href="/Key_Board/class/level_1" class="btn btn-primary">Keyboard Class Level 1</a>
          </div>
        </div>
      </div>

      <!-- Course 2: Keyboard Level 2 -->
      <div class="col-12 col-sm-4 col-md-3 mb-4">
        <div class="card course-card">
          <a href="/Key_Board/class/level_2">
            <img class="card-img-top" src="{{ asset('images/Flute_son.jpeg') }}" alt="Keyboard Class Level 2">
          </a>
          <div class="card-body text-center">
            <a href="/Key_Board/class/level_2" class="btn btn-primary">Keyboard Class Level 2</a>
          </div>
        </div>
      </div>

      <!-- Course 3: Flute Class -->
      <div class="col-12 col-sm-4 col-md-3 mb-4">
        <div class="card course-card">
          <a href="/Flute/class">
            <img class="card-img-top" src="{{ asset('images/Guitar_Father.jpeg') }}" alt="Flute Class">
          </a>
          <div class="card-body text-center">
            <a href="/Flute/class" class="btn btn-primary">Flute Class</a>
          </div>
        </div>
      </div>

    </div> <!-- End Row -->
  </div> <!-- End Container -->
</section>





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