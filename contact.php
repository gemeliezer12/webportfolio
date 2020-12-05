<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <section class="contact">
        <form action="inc/contact-form.inc.php" method="POST" class="container">
            <p>Get in touch</p>
            <div>
                <?php
                    if(isset($_GET["mail"])){
                        $mail = $_GET["mail"];
                        echo '<input type="text" name="mail" placeholder="E-mail" value="'.$mail.'">';
                    }
                    else{
                        echo '<input type="text" name="mail" placeholder="E-mail">';
                    }
                    if(isset($_GET["name"])){
                        $name = $_GET["name"];
                        echo '<input type="text" name="name" placeholder="Your name" value="'.$name.'">';
                    }
                    else{
                        echo '<input type="text" name="name" placeholder="Your name">';
                    }
                ?>
                
            </div>

            
            
            <?php
                if(isset($_GET["subject"])){
                    $subject = $_GET["subject"];
                    echo '<input type="text" name="subject" placeholder="Subject" value="'.$subject.'">';
                }
                else{
                    echo '<input type="text" name="subject" placeholder="Subject">';
                }

                if(isset($_GET["message"])){
                    $message = $_GET["message"];
                    echo '<textarea name="message" placeholder="Your message">'.$message.'</textarea>';
                }
                else{
                    echo '<textarea name="message" placeholder="Your message"></textarea>';
                }

                echo '<button class="submit" type="submit" name="submit">Submit</button>';
                if(isset($_GET["error"])){
                    $error = $_GET["error"];
                    if($error === "emptyfields"){
                        echo "<p class='alert'>Please fill in all fields</p>";
                    }

                    if($error === "invalidmail"){
                        echo "<p class='alert'>Please enter a valid email</p>";
                    }
                }
                if(isset($_GET["message-sent"])){
                    echo "<p class='alert'>Your message has been sent. Thanks, we'll be in touch</p>";
                }
                else{
                    
                }
            ?>
            
            <a href="index.html">Go back to home</a>            
        </form>
    </section>
</body>
</html>