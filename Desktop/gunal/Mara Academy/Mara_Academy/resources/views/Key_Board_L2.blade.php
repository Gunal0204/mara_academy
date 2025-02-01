<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level 2 Music Course</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      color: #343a40;
    }
    .container {
      margin-top: 30px;
    }
    .course-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .btn-home {
      background-color: #007bff;
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 5px;
      margin-bottom: 20px;
    }
    .btn-home:hover {
      background-color: #0056b3;
    }
    .heading-section {
      font-weight: bold;
      margin-bottom: 20px;
      font-size: 2.5rem;

    }
    .grid-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }
    .grid-item {
      background-color: #f1f1f1;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .grid-item button {
      margin-top: 10px;
    }
    .course-details {
      margin-top: 30px;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Level 2 Section -->
    <div class="course-container">
      <div class="heading-section">Level 2 - Music Course</div>
      <a href="/home" class="btn-home">Home</a>
      
      <!-- Validity and Fees Section -->
      <div class="grid-container mt-3">
        <div class="grid-item">
          <h5>4 Month Validity</h5>
          <p>Fees in India: Rs. 1200</p>
          <p>Fees in Other Countries: Rs. 1500</p>
          <!-- Separate Pay buttons for India and Other Countries -->
          <button class="btn btn-success">Pay for India</button>
          <button class="btn btn-info">Pay for Other Countries</button>
        </div>
        <div class="grid-item">
          <h5>6 Month Validity</h5>
          <p>Fees in India: Rs. 1500</p>
          <p>Fees in Other Countries: Rs. 1800</p>
          <!-- Separate Pay buttons for India and Other Countries -->
          <button class="btn btn-success">Pay for India</button>
          <button class="btn btn-info">Pay for Other Countries</button>
        </div>
      </div>

      <!-- Course Procedure Section -->
      <div class="course-details">
        <div class="heading-section">Course Procedures</div>
        <ul>
          <li>This level 2 package contains a 10-day course. This is fully western notes.</li>
          <li>It is an Intermediate level course.</li>
          <li>We will send 10 days of music sheets and corresponding videos (watch the video to learn the keyboard; take a print of the music sheet / total 13 videos — 10 for your class, 3 for additional details).</li>
          <li>Two types of music sheets: one is western staff notes with ABCD format, and the other is only western staff notes format.</li>
          <li>This Level 2 course is worth Rs. 5000, but our online course fee is at an offer price.</li>
          <li>Each video has a duration of 20 minutes to 40 minutes.</li>
        </ul>
      </div>

      <!-- Course Syllabus Section -->
      <div class="course-details">
        <div class="heading-section">Course Syllabus</div>
        <ul>
          <li>Intermediate Level</li>
          <li>All Major Scales</li>
          <li>All Major Chords</li>
          <li>How to Play Music Sheets</li>
          <li>Variety of Left Hand Patterns</li>
          <li>Left Hand, Right Hand (Treble Clef, Bass Clef) Practice</li>
          <li>Notes & Rest</li>
          <li>Rhythm Training</li>
          <li>Play Melody with Both Hands</li>
          <li>6 Cine Songs with Left Hand Practice</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
