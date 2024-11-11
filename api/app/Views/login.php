<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css'); ?>">
    <style>
        /* Background styling with image and gradient overlay */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-image: url('<?= base_url('assets/img/background.jpeg'); ?>');
            background-size: cover; /* Cover the entire page */
            background-position: center; /* Center the image */
            position: relative;
            z-index: 0;
        }

        /* Overlay effect to make the text more readable */
        body::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(110, 142, 251, 0.5); /* Semi-transparent overlay */
            z-index: -1; /* Place behind the content */
        }

        /* Main container for card style */
        .login-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            padding: 40px 30px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        /* Hover effect on container */
        .login-container:hover {
            transform: translateY(-5px);
        }

        /* Logo image styling */
        .login-container img {
            width: 80px;
            margin-bottom: 20px;
        }

        /* Title styling */
        .login-container h1 {
            margin-bottom: 25px;
            font-size: 26px;
            color: #333;
            font-weight: bold;
        }

        /* Form styling */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* Label styling */
        label {
            text-align: left;
            font-size: 14px;
            color: #666;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Input field styling */
        input[type="text"],
        input[type="password"] {
            padding: 14px;
            border-radius: 8px;
            border: 1px solid #ddd;
            outline: none;
            font-size: 15px;
            transition: all 0.3s ease;
            background-color: #f8f8f8;
        }

        /* Input field focus effect */
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #6e8efb;
            box-shadow: 0 0 8px rgba(110, 142, 251, 0.3);
            background-color: #fff;
        }

        /* Error message styling */
        .error-message {
            color: #ff4d4d;
            margin-bottom: 20px;
            font-size: 14px;
            background-color: #ffe6e6;
            padding: 10px;
            border-radius: 5px;
        }

        /* Button styling */
        button[type="submit"] {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: #ffffff;
            padding: 14px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }

        /* Button hover effect */
        button[type="submit"]:hover {
            background: linear-gradient(135deg, #5a7afb, #955ce5);
        }

        /* Small note or link below form */
        .extra-note {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .extra-note a {
            color: #6e8efb;
            text-decoration: none;
        }

        .extra-note a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <!-- Logo Image -->
        <img src="<?= base_url('assets/img/logo.jpg'); ?>" alt="Logo">

        <?php if (session()->getFlashdata('error')): ?>
            <p class="error-message"><?= session()->getFlashdata('error'); ?></p>
        <?php endif; ?>

        <h1>Welcome Back</h1>
        <form action="<?= base_url('login/validate'); ?>" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>

        <div class="extra-note">
            Don't have an account? <a href="<?= base_url('register'); ?>">Sign up here</a>
        </div>
    </div>

</body>
</html>
