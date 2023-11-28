<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        section {
            display: flex;
            justify-content: space-around;
            padding: 2em;
        }

        .contact-option {
            text-align: center;
            padding: 1em;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .contact-option:hover {
            transform: scale(1.1);
        }

        h2 {
            color: #333;
        }

        .contact-option a {
            text-decoration: none;
            color: #333;
            display: block;
        }

        .contact-option img {
            width: 100px;
            height: auto;
            margin-bottom: 1em;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .fadeIn {
            animation: fadeIn 1s ease-in-out;
        }
    </style>
    <title>Contact Us</title>
</head>
<body>

    <header>
        <h1>Contact Us</h1>
    </header>

    <section>
        <div class="contact-option fadeIn">
            <img src="phone-icon.png" alt="Phone Icon">
            <h2>Call Us</h2>
            <a href="tel:+123456789">+1 (234) 567-89</a>
        </div>

        <div class="contact-option fadeIn">
            <img src="mail-icon.png" alt="Mail Icon">
            <h2>Email Us</h2>
            <a href="mailto:info@gym.com">info@gym.com</a>
        </div>

        <div class="contact-option fadeIn">
            <img src="message-icon.png" alt="Message Icon">
            <h2>Send a Message</h2>
            <a href="contact-form.html">Contact Form</a>
        </div>
    </section>

</body>
</html>
