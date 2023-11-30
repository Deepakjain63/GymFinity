<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,800);
.snip1226 {
  font-family: 'Raleway', Arial, sans-serif;
  text-align: center;
  text-transform: uppercase;
  font-weight: 500;
}
.snip1226 * {
  box-sizing: border-box;
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
}
.snip1226 li {
  display: inline-block;
  list-style: outside none none;
  margin: 0 1.5em;
  overflow: hidden;
}
.snip1226 a {
  padding: 0.3em 0;
  color: rgba(255, 255, 255, 0.5);
  position: relative;
  display: inline-block;
  letter-spacing: 1px;
  margin: 0;
  text-decoration: none;
}
.snip1226 a:before,
.snip1226 a:after {
  position: absolute;
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
}
.snip1226 a:before {
  bottom: 100%;
  display: block;
  height: 3px;
  width: 100%;
  content: "";
  background-color: #e67e22;
}
.snip1226 a:after {
  padding: 0.3em 0;
  position: absolute;
  bottom: 100%;
  left: 0;
  content: attr(data-hover);
  color: white;
  white-space: nowrap;
}
.snip1226 li:hover a,
.snip1226 .current a {
  transform: translateY(100%);
}
/* Demo purposes only */
body {
  background-color: #212121;
}
    </style>
</head>
<body>
<ul class="snip1226">
  <li class="current"><a href="#" data-hover="Home">Home</a></li>
  <li><a href="img.php" data-hover="Images">Images </a></li>  
  <li><a href="bmi.php" data-hover="Check your fitness">Check your fitness </a></li>
  <li><a href="home.php" data-hover="Home workout">Home workout</a></li>
  <li><a href="login.php" data-hover="Join">Join</a></li>
  <li><a href="#abt" data-hover="About Us">About Us</a></li>
  <li><a href="contact.php" data-hover="Contact">Contact</a></li>

</ul>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="./Images\gym1.png" style="max-height: 600px;" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <a href="login.php "><img src="./Images\gym2.png" style="max-height: 600px;" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href="sign.php"><img src="./Images\gym3.png" style="max-height: 600px;" class="d-block w-100" alt="..."></a>

    </div>
    <div class="carousel-item">
      <img src="./Images\Home.png" style="max-height: 600px;" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
<?php include_once("homeexi.php"); ?>

<?php include_once("key.php"); ?>

<?php include_once("footer.php"); ?>

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
