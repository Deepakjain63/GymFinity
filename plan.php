<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Plans</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        section {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }

        .plan {
            flex: 1;
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 10px;
            background-color: #f9f9f9;
            transition: background-color 0.3s, transform 0.3s;
        }

        .plan:hover {
            background-color: #ddd;
            transform: scale(1.05);
        }

        .plan h2 {
            color: #333;
        }

        .plan p {
            color: #666;
        }

        .plan ul {
            list-style-type: none;
            padding: 0;
        }

        .plan li {
            margin-bottom: 8px;
        }

        .plan .price {
            font-size: 24px;
            color: #27ae60;
        }
    </style>
</head>
<body>

    <header>
        <h1>Membership Plans</h1>
    </header>

    <section>
        <div class="plan">
            <h2>Silver Plan</h2>
            <p>Basic membership with essential features.</p>
            <ul>
                <li>Access to gym facilities</li>
                <li>Personalized workout plans</li>
                <li>Monthly fitness assessment</li>
            </ul>
            <p class="price">$29.99/month</p>
            <a href="payment.php" style="display: inline-block; padding: 10px 20px; text-decoration: none; background-color: #3498db; color: #fff; border-radius: 5px; transition: background-color 0.3s;"
                onmouseover="this.style.backgroundColor='#2980b9'" onmouseout="this.style.backgroundColor='#3498db'">Continue with this plan</a>
       
        </div>

        <div class="plan">
            <h2>Gold Plan</h2>
            <p>Enhanced membership with additional benefits.</p>
            <ul>
                <li>Access to premium facilities</li>
                <li>Personal trainer sessions</li>
                <li>Weekly group classes</li>
            </ul>
            <p class="price">$49.99/month</p>
            <a href="payment.php" style="display: inline-block; padding: 10px 20px; text-decoration: none; background-color: #3498db; color: #fff; border-radius: 5px; transition: background-color 0.3s;"
                onmouseover="this.style.backgroundColor='#2980b9'" onmouseout="this.style.backgroundColor='#3498db'">Continue with this plan</a>
       

        </div>
        

        <div class="plan">
            <h2>Platinum Plan</h2>
            <p>Exclusive membership with VIP perks.</p>
            <ul>
                <li>24/7 access to all facilities</li>
                <li>Unlimited personal trainer sessions</li>
                <li>Access to VIP events</li>
                
            </ul>
            <p class="price">$79.99/month</p>
            <a href="payment.php" style="display: inline-block; padding: 10px 20px; text-decoration: none; background-color: #3498db; color: #fff; border-radius: 5px; transition: background-color 0.3s;"
                onmouseover="this.style.backgroundColor='#2980b9'" onmouseout="this.style.backgroundColor='#3498db'">Continue with this plan</a>
        </div>

            
        </div>
    </section>

</body>
</html>
