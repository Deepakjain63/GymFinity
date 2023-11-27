<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Gym Website</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            text-align: center;
            padding: 20px;
        }

        section {
            padding: 50px;
        }

        .description {
            font-size: 18px;
            line-height: 1.6;
        }

        .images {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .images img {
            width: 30%;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .images img:hover {
            transform: scale(1.1);
        }

        .video-container {
            position: relative;
            overflow: hidden;
            margin-top: 20px;
        }

        .video-container iframe {
            width: 100%;
            height: 400px;
            border: none;
        }

        .links {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .links a {
            color: #ffffff;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .links a:hover {
            background-color: #333333;
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to Our Gym</h1>
    </header>

    <section>
        <div class="description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget ligula in nunc fringilla efficitur eu vel ex.</p>
        </div>

        <div class="images">
            <img src="image1.jpg" alt="Image 1">
            <img src="image2.jpg" alt="Image 2">
            <img src="image3.jpg" alt="Image 3">
        </div>

        <div class="video-container">
            <!-- Replace 'your_video_url' with the actual video URL -->
            <iframe width="560" height="315" src="your_video_url" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="links">
            <a href="#">Membership</a>
            <a href="#">Classes</a>
            <a href="#">Trainers</a>
            <a href="#">Contact</a>
        </div>
    </section>

</body>
</html>
