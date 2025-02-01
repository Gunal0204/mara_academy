<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mara Academy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    @keyframes slide-in-fade {
      0% {
        transform: translateX(-100%);
        opacity: 0;
      }
      50% {
        opacity: 0.5;
      }
      100% {
        transform: translateX(0);
        opacity: 1;
      }
    }


    .sliding-text {
      margin-top: 15%;
      display: inline-block;
      animation: slide-in-fade 3s ease-out forwards;
      font-size: 2.5rem;
      font-weight: bold;
      color: #fff;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      white-space: nowrap; /* Prevent text from wrapping */
      overflow: hidden; /* Hide overflowing text */
      max-width: 100%; /* Ensure it stays within container */
    }

    .button-row {
      display: flex;
      justify-content: space-around;
      margin-top: 5rem;
    }

    .carousel-inner img {
      height: 500px;
      object-fit: cover;
    }

    .image-row {
      display: flex;
      justify-content: space-around;
      margin-top: 2rem;
    }

    .image-row img {
      width: 30%;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .button-group {
      margin-top: 1rem;
      display: flex;
    }

    .horizontal-buttons {
      margin-top: 2rem;
      text-align: center;
    }





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
      padding-top: 0px; /* Adjust for navbar height */
    }

    /*payment video section  */

    /* Video Section */
.video-section {
  text-align: center;
  padding: 40px 20px;

  border-radius: 10px;
  margin-top: 50px;
}

/* Adjust iframe styles */
.video-section iframe {
  border-radius: 10px;
  border: none;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease;
}

/* Hover effect on iframe */
.video-section iframe:hover {
  transform: scale(1.05);
}

/* Adjusting responsiveness for iframe */
@media (max-width: 768px) {
  .video-section iframe {
    width: 100%;
    height: 250px;  /* Adjust height for smaller screens */
  }
}

.video-section p {
  font-size: 18px;
  color: #333;
  margin-bottom: 20px;
}

.video-section strong {
  color: #000;
}


/* Carousel item with background image 
.carousel-item {
  background-size: cover;
  background-position: center;
  height: 500px; /* Adjust this height as necessary x
}
*/

.carousel-item img {
    height: 100vh; /* Full screen height */
    object-fit: cover; /* Ensure image fits nicely */
  }

/* Add this class to your hero-bg section */
.hero-bg {
  background: rgba(0, 0, 0, 0.5); /* Optional: add overlay effect */
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


 
<!-- Carousel -->
<header class="hero-bg text-white text-center py-5">
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/Flute_son.jpeg') }}" class="d-block w-100" alt="Mara Music Academy">
        <div class="carousel-caption">
          <h1 class="sliding-text">Mara Music Academy</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/baby_guitar.jpeg') }}" class="d-block w-100" alt="Discover Our Services">
        <div class="carousel-caption">
          <h1 class="sliding-text"></h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/Guitar_Father.jpeg') }}" class="d-block w-100" alt="Join Our Community">
        <div class="carousel-caption">
          <h1 class="sliding-text"></h1>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container">
    <div class="button-row">
      <a href="/home/student_Login" class="btn btn-lg border border-radius-1 text-white fs-6">Student Login</a>
    </div>
  </div>
</header>



  <!-- Payment Guide Video Section -->
<div class="video-section">
  <p>Kindly watch the video below. It helps you learn how to pay the fee...</p>
  
  <div class="iframe-container">
    <iframe width="560" height="315" 
      src="https://www.youtube.com/embed/5WsUIeNAtbM?si=wtTYnXzrj3xRQJ9x" 
      title="YouTube video player" 
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
      referrerpolicy="strict-origin-when-cross-origin" 
      allowfullscreen>
    </iframe>
  </div>

  <p class="mt-3">For any issues with login or payment, contact us via WhatsApp at <strong>9940814845</strong>.</p>
</div>


  <!--Demo class -->

  <div class="container-fluid py-5">
    <h1 class="text-center" style="color: rgb(68, 71, 99);">Demo Classes</h1>
    <ul class="list-group list-group-flush list-group-horizontal-md justify-content-center">
      <li class="list-group-item list-group-item-action border-0 text-center">
        KeyBoard Demo Classes
        <span class="badge bg-danger rounded-pill ms-2">Free</span>
      </li>
      <li class="list-group-item list-group-item-action border-0 text-center">
        Flute Demo Classes
        <span class="badge bg-danger rounded-pill ms-2">Free</span>
      </li>
    </ul>
  </div>


  <!--contact us-->

  <div class="container-fluid " style="background-color: #ecebeb;">
    <h1 class="text-center py-5 "style="color: rgb(68, 71, 99);">Contact Us</h1>

    <div class="container p-4 ">
      <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12">
          <div class="card shadow-sm" >
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








  <!--script for bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
