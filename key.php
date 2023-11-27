<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background-color: #000000;
    }

    .key-features-section {
      text-align: center;
      padding: 50px 0;
      background-color: #000000;
      color: #fff;
      position: relative; /* Added position relative to allow absolute positioning of the image */
    }

    .brand-logo {
      position: absolute;
      top: 10px;
      left: 10px;
      max-width: 200px; /* Set a maximum width for the logo */
    }

    .feature {
      margin-bottom: 30px;
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .feature:hover {
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
    }

    .feature h3 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .feature p {
      font-size: 16px;
    }

    /* Animation styles */
    .key-features-section.loaded .feature {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body>

  <div class="key-features-section">
    <img src="./Images/logo.jpg" alt="Gym Logo" class="brand-logo">
    <h2>Key Features</h2>

    <div class="feature">
      <h3>State-of-the-Art Equipment</h3>
      <p>Our gym is equipped with the latest fitness machines and equipment to provide you with the best workout experience.</p>
    </div>

    <div class="feature">
      <h3>Experienced Trainers</h3>
      <p>Our team of experienced and certified trainers is dedicated to helping you achieve your fitness goals with personalized guidance.</p>
    </div>

    <div class="feature">
      <h3>Group Classes</h3>
      <p>Join our group classes for a fun and motivating way to stay fit. We offer a variety of classes to suit different fitness levels.</p>
    </div>

    <!-- Add more features as needed -->

  </div>

  <script>
    // Adding a simple JavaScript script to trigger the fade-in animation after the page loads
    document.addEventListener("DOMContentLoaded", function() {
      document.querySelector('.key-features-section').classList.add('loaded');
    });
  </script>

</body>
</html>
