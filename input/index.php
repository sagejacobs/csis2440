<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Contact Form</title>
            <link href="css/style.css" rel="stylesheet"/>
        </head>
        <body>
        <?php
        if(isset($_POST["submit"])) {
            $phone = $_POST["phone"];
            $email = $_POST["email"];
        
            echo "<p>Thank you! Your phone number is: " . $phone . "</p><br>";
            echo "<p>And your email address is: " . $email . "</p><br>";
        } else {
            ?>
            <div class="post-form">
                <form method="post">
                    <label>Phone Number:
                        <input type="text" name="phone">
                    </label><br><br>
                    <label>Email Address:
                        <input type="text" name="email">
                    </label><br><br>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>

            <?php
        }
        ?>
        </body>
    </html>