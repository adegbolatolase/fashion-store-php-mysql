<!-- IT23252554 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="assets\images\favicon\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets\images\favicon\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets\images\favicon\favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="assets\css\ContactUs.css">
    
    <title>Contact Us</title>
</head>

<body  onload="myFunction()" style="margin:0;">
    
    <div id="overlay">
        <div id="loader"></div>
    </div>
    <?php include 'assets\php\Header & Footer\header.php';?>
<!-- content -->


   
    <div class="formcontainer">
        <div class="contactus-form">
            <h1>Contact Us</h1>
            <form action="assets\php\setcontact.php" method="POST">
                <div class="detail">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="nam" required>
                </div>
                <div class="detail">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="ema" required>
                </div>
                <div class="detail">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="sub" required>
                </div>
                <div class="detail">
                    <label for="message">Your Message:</label>
                    <textarea id="message" name="mess" rows="4" required></textarea>
                </div>
                <button type="submit" class="submit-button">Send Message</button>
            </form>
        </div>
    </div>

    



    
<!-- Footer -->
    <?php include 'assets\php\Header & Footer\footer.php';?>
    <script src="assets\js\script.js"></script>
</body>

</html>
