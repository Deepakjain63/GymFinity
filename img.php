<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{margin: 0; padding: 0;}
body{background-color: black;}
.container
{
	width: 100%;
	height: 100%;
}
.trans
{
	transition: all 1s ease;
	-moz-transition: all 1s ease;
	-ms-transition: all 1s ease;
	-o-transition: all 1s ease;
	-webkit-transition: all 1s ease;
}
.top
{
	display: flex;
	width: 80vw;
	height: 80vh;
	margin-top: 10vh;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10vh;
}
.top ul
{
	list-style: none;
	width: 100%;
	height: 100%;
	z-index: 1;
	box-sizing: border-box;
}
.top ul li
{
	position: relative;
	float: left;
	width: 25%;
	height: 25%;
	overflow: hidden;
}

.top ul li::before
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: #000;
	content: '';
	color: white;
	opacity: 0.4;
	text-align: center;
	box-sizing: border-box;
	pointer-events: none;
	transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
}
.top ul li:hover::before
{
	opacity: 0;
	background-color: rgba(0,0,0,0.90);
}
.top ul li img
{
	width: 100%;
	height: auto;
	overflow: hidden;
}
.lightbox
{
	position: fixed;
	width: 100%;
	height: 100%;
	text-align: center;
	top: 0;
	left: 0;
	background-color: rgba(0,0,0,0.75);
	z-index: 999;
	opacity: 0;
	pointer-events: none;
}
.lightbox img
{
	max-width: 90%;
	max-height: 80%;
	position: relative;
	top: -100%;
	/* Transition */
	transition: all 1s ease;
	-moz-transition: all 1s ease;
	-ms-transition: all 1s ease;
	-o-transition: all 1s ease;
	-webkit-transition: all 1s ease;
}
.lightbox:target
{
	outline: none;
	top: 0;
	opacity: 1;
	pointer-events: auto;
	transition: all 1.2s ease;
	-moz-transition: all 1.2s ease;
	-ms-transition: all 1.2s ease;
	-o-transition: all 1.2s ease;
	-webkit-transition: all 1.2s ease;
}
.lightbox:target img
{
	top: 0;
	top: 50%;
	transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include_once("nav.php"); ?>
<div class="container">
	<div class="top">
    	<ul>
        	<li><a href="#img_1"><img src="./Images/gym1.jpeg"></a></li>
            <li><a href="#img_2"><img src="./Images/gym2.jpeg"></a></li>
            <li><a href="#img_4"><img src="./Images/gym3.jpeg"></a></li>
            <li><a href="#img_5"><img src="./Images/gym4.jpeg"></a></li>
            <li><a href="#img_6"><img src="./Images/gym5.jpeg"></a></li>
            <li><a href="#img_7"><img src="./Images/gym6.jpeg"></a></li>
            <li><a href="#img_8"><img src="./Images/gym7.jpeg"></a></li>
            <li><a href="#img_9"><img src="./Images/gym8.jpeg"></a></li>
            <li><a href="#img_10"><img src="./Images/gym9.jpeg"></a></li>
            <li><a href="#img_11"><img src="./Images/gym10.jpeg"></a></li>
            <li><a href="#img_12"><img src="./Images/gym12.jpeg"></a></li>
			<li><a href="#img_13"><img src="./Images/gym13.png"></a></li>
        </ul>
        <a href="#_1" class="lightbox trans" id="img_1"><img src="./Images/gym1.jpeg"></a>
        <a href="#_2" class="lightbox trans" id="img_2"><img src="./Images/gym2.jpeg"></a>
        <a href="#_4" class="lightbox trans" id="img_4"><img src="./Images/gym3.jpeg"></a>
        <a href="#_5" class="lightbox trans" id="img_5"><img src="./Images/gym4.jpeg"></a>
        <a href="#_6" class="lightbox trans" id="img_6"><img src="./Images/gym5.jpeg"></a>
        <a href="#_7" class="lightbox trans" id="img_7"><img src="./Images/gym6.jpeg"></a>
        <a href="#_8" class="lightbox trans" id="img_8"><img src="./Images/gym7.jpeg"></a>
        <a href="#_9" class="lightbox trans" id="img_9"><img src="./Images/gym8.jpeg"></a>
        <a href="#_10" class="lightbox trans" id="img_10"><img src="./Images/gym9.jpeg"></a>
        <a href="#_11" class="lightbox trans" id="img_11"><img src="./Images/gym10.jpeg"></a>
        <a href="#_12" class="lightbox trans" id="img_12"><img src="./Images/gym12.jpeg"></a>
		<a href="#_13" class="lightbox trans" id="img_13"><img src="./Images/gym13.png"></a>
        
    </div>
</div>    
</body>
</html>