<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        /* Basic styling for layout */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .contact-container {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .contact-info, .contact-form {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group textarea {
            resize: vertical;
            height: 100px;
        }
        .submit-btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="contact-container">
    <h1>Contact Us</h1>

    <!-- Display Success Message -->
        <p><?= session()->getFlashdata('message'); ?></p>

<p><?=$message?></p>
    <!-- Contact Information -->
    <div class="contact-info">
        <h3>Our Contact Information</h3>
        <p><strong>Phone:</strong>+9199999</p>
        <p><strong>Email:</strong>demo@example.com</p>
        <p><strong>Address:</strong> test test test</p>
    </div>

    <!-- Contact Form -->
    <div class="contact-form">
        <h3>Send Us a Message</h3>
        <form action="<?= base_url('submit') ?>" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>
</div>

</body>
</html>
