<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
  <li class="current"><a href="main.php" data-hover="Home">Home</a></li>
  <li><a href="img.php" data-hover="Images">Images </a></li>  
  <li><a href="bmi.php" data-hover="Check your fitness">Check your fitness </a></li>
  <li><a href="home.php" data-hover="Home workout">Home workout</a></li>
  <li><a href="log.php" data-hover="Join">Join</a></li>
  <li><a href="#abt" data-hover="About Us">About Us</a></li>
  <li><a href="contact.php" data-hover="Contact">Contact</a></li>

</ul>

</body>
</html>