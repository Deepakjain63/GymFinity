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
                        <h2 class="card-title">Crunches</h2>
                        <p class="card-text">Crunches are a popular abdominal exercise designed to target the rectus abdominis, commonly known as the "six-pack" muscles. To perform a crunch, lie on your back with your knees bent and feet flat on the floor. Place your hands behind your head or across your chest and lift your upper body toward your knees by contracting your abdominal muscles.
</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">How to do Crunches</h2>
                        <p class="card-text"><b>Step 1 :</b> 
                        Lie down on your back. Plant your feet on the floor, hip-width apart. Bend your knees and place your arms across your chest. Contract your abs and inhale.
</br>
</br>
<b>Step 2 :</b> Exhale and lift your upper body, keeping your head and neck relaxed.
</br>

    </br>
    <b>Step 3 : </b> Inhale and return to the starting position.
</br>
</br>
                    </div>
                </div>
            </div>
            <!-- Photo -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./Images/crunches1.jpeg" alt="Your Image">
                    <div class="card-body">
                        <h5 class="card-title">Perfect view</h5>
                        <p class="card-text">This photo show all the points that we have to take care of .</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./Images/crunches2.jpeg" alt="Your Image">
                    <div class="card-body">
                        <h5 class="card-title"> Sideview</h5>
                        <p class="card-text">This is the another type of crunches  .</p>
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
                        <a href="https://youtu.be/5ER5Of4MOPI?si=3DUR50jEXUKXUdy-" class="btn btn-primary" target="_blank">Watch Now</a>
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
