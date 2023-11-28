<!DOCTYPE html>
<?php
$result=null;
$imagePath = ''; // Variable to store the image path

if(isset($_POST['addBtn'])) {
    $height = $_POST['num2'] / 100;
    $result = $_POST['num1'] / ($height * $height);

    // Set the image path based on the result condition
    if($result < 18.5) {
        $imagePath = 'underweight_image.jpg';
    } else if ($result < 24.9) {
        $imagePath = 'fit_image.jpg';
    } else {
        $imagePath = 'overweight_image.jpg';
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Body Mass Index Calculator</title>
    <style>
        body {
            background-color: #FFC0CB;
            font-family: Arial, sans-serif;
        }

        table {
            border: 2px solid #333;
            width: 400px;
            margin: 20px auto;
            background-color: #666;
            color: #fff;
            border-collapse: collapse;
        }

        table td {
            padding: 10px;
            text-align: center;
        }

        input[type="number"], input[type="text"], input[type="submit"] {
            padding: 8px;
            margin: 5px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #000;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php include_once("nav.php"); ?>
    <form method='post'>
        <table>
            <tr><td>Enter Your weight(in Kg.)</td><td><input type='number' name='num1'></td></tr>
            <tr><td>Enter Your Height(in cm)</td><td><input type='number' name='num2'></td></tr>
            <tr><td>Result</td><td><input type="text" name="res" value='<?php echo $result; ?>' readonly></td></tr>
            <tr><td align='center' colspan=2><input type='submit' name='addBtn' value='Calculate'></td></tr>
        </table>
        
        <?php
        if(isset($_POST['addBtn'])) {
            if($result < 18.5) {
                echo "<p>You are underweight</p>";
                echo "<img src='./Images/under.jpeg' alt='Underweight Image'>";
            } else if ($result < 24.9) {
                echo "<p>You are fit</p>";
                echo "<img src='./Images/fit.jpeg' alt='Fit Image'>";
            } else {
                echo "<p>You are overweight</p>";
                echo "<img src='./Images/over.jpeg' alt='Overweight Image'>";
            }
        }
        ?>
    </form>
</body>
</html>
