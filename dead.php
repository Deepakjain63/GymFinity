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
                        <h2 class="card-title">Dead Lift </h2>
                        <p class="card-text">The deadlift is a compound exercise renowned for its effectiveness in developing overall strength and targeting various muscle groups, including the back, hips, glutes, and hamstrings. To perform a traditional deadlift, start with your feet hip-width apart, a barbell in front of you. Bend at the hips and knees, keeping your back straight, to grip the barbell with hands slightly wider than shoulder-width.
</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">How to do Dead Lift</h2>
                        <p class="card-text"><b>Step 1 : Approach The Bar</b> 
Stand facing the barbell, legs about shoulder width apart, with your toes either pointed forward or slightly outwards (whichever is most comfortable). The bar should be positioned directly over the middle of your feet.
</br>
</br>
<b>Step 2 :  Grip The Bar</b> Bend at the hips and take a mixed grip on the bar (one hand overhand, the other hand underhand). You should be gripping the bar directly outside your legs, typically at the start of the knurling (the area on the bar with serrated grip), so that your elbows are just touching the outside of your legs.
</br>

    </br>
    <b>Step 3 : Get Into Position</b> Bend your knees slightly forward, so that your shins are touching the bar. Bring your ass backwards, so that your thighs are above your knees in a half-squat position, and lift your chest up so that your entire back is tight and flat.
</br>
</br>
<b>Step 4 : Brace Your Body </b> Take a deep breath, flex your abdominal muscles, and tighten your lower back. Your head should be either in line with your spine, or looking slightly forward. You should also try to engage your lats (one good cue for this is to imagine that you are squeezing lemons in your armpits).

</br>
</br>
<b>Step 5 :Lift The Weight</b> Start the movement by pressing hard through your legs – as if you are trying to leg press the floor away from you. As soon as the bar leaves the ground, thrust forward with your hips, while continuing to press through your legs at the same time, keeping your core tensed and firm. The bar should slide up your shins and over your knees, until you are standing straight up looking forward.</p>
                    </div>
                </div>
            </div>
            <!-- Photo -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./Images/dead1.jpeg" alt="Your Image">
                    <div class="card-body">
                        <h5 class="card-title">Perfect view</h5>
                        <p class="card-text">This photo show all the points that we have to take care of .</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./Images/dead2.jpeg" alt="Your Image">
                    <div class="card-body">
                        <h5 class="card-title"> Side  view</h5>
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
                        <a href="https://youtu.be/r4MzxtBKyNE?si=ca5h-oWUd3w3y6ue" class="btn btn-primary" target="_blank">Watch Now</a>
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
