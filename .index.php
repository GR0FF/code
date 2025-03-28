<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mode.css">
</head>
<body data-theme="light">
    <div id="app">
        <h1>Welcome to Our Site</h1>
        <form id="contactForm" action="process_form.php" method="POST">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div>
                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Enter your message" required></textarea>
            </div>

            <button type="submit">Submit</button>
        </form>

        <button id="themeToggleBtn">Toggle Theme</button>
    </div>

    <script src="mode.js"></script>
    <script src="form.js"></script>
</body>
</html>
