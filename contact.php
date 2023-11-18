<!DOCTYPE html>
<html>
<head>
    <title>Contact Me</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Contact Me</h1>
    </header>

    <div class="contact-container">
        <div class="contact">
            <p>Gmail: <a href="mailto:vyshnavirao100@gmail.com">vyshnavirao100@gmail.com</a></p>
            <p>Phone: +1-314-358-0712</p>
            <p>LinkedIn: <a href="https://www.linkedin.com/in/vyshnavi-rao-ponnamaneni-b374541b1/">Your LinkedIn Profile</a></p>
            <button id="contactButton">Contact Me</button>
        </div>
    </div>

    <div id="contactForm" style="display: none;">
        <h2>Contact Form</h2>
        <form method="post" action="process.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea><br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
    <a class="return-button" href="process.php" id="returnButton">Return to Home</a>
    </div>
    <script src="script.js"></script>
</body>
</html>