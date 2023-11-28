<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Style for the table */
        table {
            border: 2px solid #000;
            border-collapse: collapse;
            width: 80%; /* Adjust the width as needed */
            margin: 0 auto; /* Center the table */
        }

        /* Style for table cells */
        td {
            padding: 10px;
            text-align: left;
        }

        /* Style for input fields and textarea */
        input[type='text'],
        input[type='number'],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Style for submit button */
        input[type='submit'] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Hover effect for submit button */
        input[type='submit']:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="post">
    <table border="2px" align="center">
        <tr><td>Your name </td><td><input type='text' name='name'></td></tr> 
        <tr><td>Your Phone Number </td><td><input type='number' name='num'></td></tr>
        <tr><td>Question</td><td><textarea name='ques'></textarea></td></tr>
        <tr><td colspan=2 align='center'><input type='submit' name='subBtn' value='Submit Question'></td></tr>
    </table>
    </form>

    <?php 
    extract($_POST);
    if(isset($subBtn))
    {
        include_once("database.php");
        $link=mysqli_connect($hostName,$userName,$password,$databaseName);
        $qry="insert into question(Name,mo_no,message) values ('$name','$num','$ques')";
       
        $r=mysqli_query($link,$qry);
        if($r==1)
            echo"Your message is recorded";
        else
            echo "Sorry, there is a problem in submitting your message. Please use another way to contact.";

        mysqli_close($link);
    }
    ?>
</body>
</html>
