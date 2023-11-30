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
                        <h2 class="card-title">Pull Ups</h2>
                        <p class="card-text">Pull-ups are a challenging upper-body exercise that primarily targets the muscles of the back, particularly the latissimus dorsi. To perform a pull-up, find a sturdy horizontal bar that can support your body weight. Grasp the bar with an overhand grip, hands slightly wider than shoulder-width apart. Hang from the bar with your arms fully extended. Engage your core and pull your body upward by bending your elbows, bringing your chest toward the bar. Lower yourself back down with control</p>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">How to do Pull Ups</h2>
                        <p class="card-text"><b>Step 1 :</b>Grip a pullup bar with your palms facing whichever direction you prefer. In general, having your palms facing towards you is most efficient. When you pull yourself up with your hands facing this way, you give your biceps and lats a better workout. Pulling yourself up with your palms out is considered the most difficult way to pull up your bodyweight but also gives deltoids and triceps a good workout. Start with your arms fully extended.
    </br>
    </br>
<b> Step 2</b> Pull your bodyweight up until your chin is just barely above the bar. You may have to strain, but keep pulling until you've lifted yourself up using your back and biceps.[1]

In order to keep your bodyweight centered, you can cross your feet beneath you as you lift yourself up.

Remember kicking your feet to gain extra momentum isn't helping anything.
    </br>
    </br>

<b> Step 3 :</b> Lower yourself until your arms are fully extended. Lower yourself in a controlled way to work the muscles harder and prep yourself for the next pull.
    </br>
    </br>
<b> Step  4: </b> Do another pullup. Once your arms are almost extended, start pulling up again. Repeat for as many reps as you can. Don't let your number of repetitions bring you down; you can only get better. If possible, do 3 sets of 10 reps</p>
</br>        
</div>
                </div>
            </div>
            <!-- Photo -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./Images/pull2.jpeg" alt="Your Image">
                    <div class="card-body">
                        <h5 class="card-title">Front view</h5>
                        <p class="card-text">This is the correct view.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./Images/pull1.jpeg" alt="Your Image">
                    <div class="card-body">
                        <h5 class="card-title"> This is the back view</h5>
                        <p class="card-text">This is how it look like .</p>
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
                        <a href="https://youtu.be/hkBcTOa21oQ?si=tGFx2ckp4My0vmIJ" class="btn btn-primary" target="_blank">Watch Now</a>
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
