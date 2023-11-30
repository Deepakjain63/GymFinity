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
                        <h2 class="card-title">Running </h2>
                        <p class="card-text">Running is a versatile and accessible form of cardiovascular exercise that offers numerous health benefits. It engages various muscle groups, improves cardiovascular fitness, and helps maintain a healthy weight. Whether you're jogging, sprinting, or doing interval training, running enhances lung capacity, boosts mood through the release of endorphins, and contributes to overall well-being. Ensure proper footwear, warm-up, and cool-down to minimize the risk of injury, and listen to your body's signals for a safe and enjoyable running experience.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">How to do Push-Ups</h2>
                        <p class="card-text"><b>Step 1 :</b>"Find safe routes where you can run routinely.
Look for well-lit locations and buddy up on jogging trails.
Look for well-lit locations and buddy up on jogging trails. Choose areas, like parks, that are populated and only run alone in neighborhoods if you're really familiar with them. Stick to shaded areas if the weather's too sunny, and head to an indoor track if it rains. Start on smooth surfaces, like sidewalks, and work up to uneven terrain. If you plan to run in more isolated locations, like hills, then bring a friend or two</br>
</br>
<b>Step 2 :</b> Start moving to get your body ready to run.
Try out light activity to build your confidence and fitness level.[4] Use strength training to build your muscles and perform interval training to improve your cardio fitness. For example, use 5 lb (2.3 kg) dumbbells for lunges and squats, then do burpees and pushups during a simple 5-minute circuit of interval training.
</br>

    </br>
    <b>Step 3 :</b> Stretch to warm up before you run.
Dynamic stretches loosen up your muscles and prepare you to run.
Dynamic stretches loosen up your muscles and prepare you to run. Right before you run, practice dynamic—also known as "active"—stretching. To increase your flexibility so your runs are easier, try dynamic stretches that make you move, like leg swings or walking lunges. When you take this precaution, you’ll also avoid any muscle sprains or injuries</br>
</br>
<b>Step 4 :</b>  Focus on your posture once you start to run.
Dynamic posture helps you run with speed, comfort, and efficiency.
Dynamic posture helps you run with speed, comfort, and efficiency. For best results, use dynamic posture, a way to move all the joints in your body for more effortless jogs or runs. Take quick and short strides—about 180 foot strikes per minute—and move your elbows in the same rhythm as your knees. Make sure your knees move forward and backwards without twisting. Look up as you jog or run to keep your head slightly raised</br>
</br>
<b>Step 5 :</b> Run longer distances as your endurance increases.
If you run a distance for 30 minutes without fatigue, try a new challenge. Thirty minutes of continuous activity that doesn't tire you out or leave you out of breath is a great sign you've gained more cardio endurance.    </div>
                </div>
            </div>
            <!-- Photo -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./Images/running2.jpeg" alt="Your Image">
                    <div class="card-body">
                        <h5 class="card-title">Front view</h5>
                        <p class="card-text">This is the correct view.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./Images/running1.jpeg" alt="Your Image">
                    <div class="card-body">
                        <h5 class="card-title">Side view </h5>
                        <p class="card-text">This is the correct  side view .</p>
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
                        <a href="https://youtu.be/_kGESn8ArrU?si=I5yssrmNwT5tfCzq" class="btn btn-primary" target="_blank">Watch Now</a>
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
