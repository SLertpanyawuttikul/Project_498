<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        section {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
        }

        h1, h2, p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <header>
    <?php $session = session(); ?>
                <h3><?php echo "" . $session->get('user_name'); ?></h3>
        <p>Web Developer</p>
    </header>

    <section>
        <img src="profile-picture.jpg" alt="Your Profile Picture">
        <h2>About Me</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod auctor augue, et ultricies leo commodo ac. Sed sit amet purus et enim laoreet luctus.</p>

        <h2>Contact Information</h2>
        <p>Email: your.email@example.com</p>
        <p>LinkedIn: linkedin.com/in/yourprofile</p>
        <p>GitHub: github.com/yourusername</p>
    </section>

</body>
</html>
