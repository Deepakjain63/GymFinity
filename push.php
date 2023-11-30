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
                        <h2 class="card-title">Push Ups</h2>
                        <p class="card-text">In the context of physical exercise, a "push-up" is a strength-training exercise that primarily targets the muscles in the chest, shoulders, and triceps. It is a bodyweight exercise where a person lies face down on the ground, with hands placed shoulder-width apart and feet together. The individual then raises and lowers their body by bending and straightening their arms, engaging the upper body muscles..</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">How to do Push-Ups</h2>
                        <p class="card-text"><b>Step 1 :</b> Start down on all fours with your hands just wider than your shoulders. Find a comfortable spot on the floor to exercise and get on your hands and knees. Put your palms flat against the ground so they’re directly below your shoulders. Point your fingers point straight ahead. Look straight down, and try your best to keep your head and neck in line with your back.[1]
Do push-ups on an exercise mat to cushion your hands and wrists so they don’t get sore.</br>
</br>
<b>Step 2 :</b> Extend your legs so they form a straight line with your back. Walk your feet back as far as you can. Position your feet right next to each other or a few inches apart, and balance your weight on the balls of your feet. Keep your legs and back as straight as possible throughout your entire set of push-ups.
Avoid raising your hips too high or letting them sag too low so that your body goes out of line.
</br>

    </br>
    <b>Step 3 :</b> Lower yourself to the floor until your elbows are at 90 degrees. Engage your core and breathe in as you bend your elbows. Keep your back and legs straight as you bring your body down toward the ground. Stop when your chest is about 2–3 inches (5.1–7.6 cm) from the floor.

Try to take about 2 seconds to lower yourself down so you have more control over your movements.</br>
</br>
<b>Step 4 :</b> Push yourself back up until your arms are straight. Breathe out as you push your hands firmly against the floor. Lift your body up without bending your knees, letting your hips sag, or raising your hips up. Once you straighten out your arms and are back in your starting position, you’ve completed 1 rep!

Avoid locking your elbows when you return to your starting position since you could risk injuring them.

If your arms start shaking or you can’t fully get back into your starting position, don’t sweat it. Try putting your knees down to make it easier or lower yourself back to the floor and take a break before trying again.
</br>
</br>
<b>Step 5 :</b> Try to do as many push-ups as you can with good form. See how many push-ups you can do in a row without breaking your form to find a good starting point. Add the exercise to your routine, and take a rest day between each time you do them. As the push-ups start getting more manageable, try adding more reps or additional sets to your routine to challenge yourself and build more muscle.

For a good starting point, try doing 5–10 push-ups at a time. Once that starts feeling easy, try adding 5 reps at a time.</p>
                    </div>
                </div>
            </div>
            <!-- Photo -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./Images/push2.jpeg" alt="Your Image">
                    <div class="card-body">
                        <h5 class="card-title">Front view</h5>
                        <p class="card-text">This is the correct view.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./Images/push3.jpeg" alt="Your Image">
                    <div class="card-body">
                        <h5 class="card-title">view</h5>
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
                        <a href="https://youtu.be/ypxmdLxCK7k?si=a2pNpiPC8iV48kCG" class="btn btn-primary" target="_blank">Watch Now</a>
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
