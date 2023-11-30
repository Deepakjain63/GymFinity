<?php include_once("nav.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Page with Animation</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #343a40; /* Dark background color */
            color: #fff; /* Light text color */
        }

        .container {
            margin-top: 50px;
        }

        .card {
            transition: transform 0.3s;
            background-color: #495057; /* Dark card background color */
            border: 1px solid #495057; /* Dark border color */
            color: #fff; /* Light text color */
        }

        .card:hover {
            transform: scale(1.05);
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px;
            height: 0;
            overflow: hidden;
        }

        .video-container iframe,
        .video-container object,
        .video-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <!-- Text -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Sqauts</h2>
                        <p class="card-text">The squat is a compound exercise that primarily targets the muscles in your lower body, including the quadriceps, hamstrings, and glutes. It also engages the muscles in your core and lower back. Squats are a fundamental movement pattern and are often included in strength training and resistance training programs. Here's a step-by-step description of how to perform a basic bodyweight squat:</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">How to do Sqauts</h2>
                        <p class="card-text"><b>Step 1 :</b> Stand with feet a little wider than hip width, toes facing front.
</br>
</br>
<b>Step 2 :</b> Drive your hips back—bending at the knees and ankles and pressing your knees slightly open—as you…
</br>

    </br>
    <b>Step 3 :</b> Sit into a squat position while still keeping your heels and toes on the ground, chest up and shoulders back.</br>
</br>
<b>Step 4 :</b> Strive to eventually reach parallel, meaning knees are bent to a 90-degree angle.
</br>
</br>
<b>Step 5 :</b> Press into your heels and straighten legs to return to a standing upright position.
For a good starting point, try doing 5–10 push-ups at a time. Once that starts feeling easy, try adding 5 reps at a time.</p>
                    </div>
                </div>
            </div>
            <!-- Photo -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./Images/squat1.jpeg" alt="Your Image">
                    <div class="card-body">
                        <h5 class="card-title">Side  view</h5>
                        <p class="card-text">This is the correct view.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./Images/squat2.jpeg" alt="Your Image">
                    <div class="card-body">
                        <h5 class="card-title"> Front view</h5>
                        <p class="card-text">This is the correct view .</p>
                    </div>
                </div>
            </div>
            <!-- Video -->
           
            <!-- YouTube Link -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Explore more </h5>
                        <p class="card-text">Check out this interesting video on YouTube:</p>
                        <a href="https://youtu.be/p-R0HSfL6nw?si=QYKWLPQQvoEatPq2" class="btn btn-primary" target="_blank">Watch Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js (Optional) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
