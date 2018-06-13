
<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'Contact Form';
        $to = 'nbdelpino1@yahoo.com';
        $subject = 'Message from Contact Form';

        $body = "From: $name\n E-Mail: $email\n Message:\n $message";


        // Name validation
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }

        // Email validation
        if (!_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }

        // Message validation
        if (!_POST['message']) {
            $errMessage = 'Please enter your message';
        }

        // Check if there's an error before sending a message
        if (!$errName && !$errEmail && !$errMessage) {
            if (mail($to, $subject, $body, $from)) {
                $result = '<div class="alert alert-success">Thank You! I will be in touch</div>';
            } else {
                $result = '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
            }
        }
}
?>



<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/my-styles.css" crossorigin="anonymous">

    <title>REVAMPLEDPORTFOLIO2018</title>
</head>
<body>

<section id="navbar-section">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="site-logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-navbar" aria-controls="site-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="site-navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.html">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>

<div id="stage">
    <div id="about-caption">
        <h1 class="display-4 text-center">Say Hello!</h1>
        <p class="text-center">Wanna talk design? <i>Drop me a line.</i></p>
    </div>
</div>



















<section>
    <div class="container">
        <form role="form" method="post" action="contact.php" id="contact-form">
            <div class="form-row">


                <div class="form-group col-md-6 contact-col">
                    <label for="name" class="sr-only"></label>
                    <!--  NAME  -->
                    <input required type="text" class="form-control" id="name" name="name" placeholder="Name*" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                    <?php echo "<p class='text-danger'>$errName</p>";?>
                </div>


                <div class="form-group col-md-6 contact-col">
                    <label for="email" class="sr-only"></label>
                    <!--  EMAIL  -->
                    <input required type="email" class="form-control" id="email" name="email" placeholder="Email Address*" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                    <?php echo "<p class='text-danger'>$errEmail</p>";?>
                </div>
            </div>


            <div class="form-row">
                <div class="form-group col-md-6 contact-col">
                    <label for="phone-input" class="sr-only"></label>
                    <!--  PHONE NUMBER  -->
                    <input type="text" class="form-control" id="phone-input" placeholder="Phone Number">
                </div>
                <div class="form-group col-md-6 contact-col">
                    <label for="website-input" class="sr-only"></label>
                    <!--  WEBSITE  -->
                    <input type="text" class="form-control" id="website-input" placeholder="Website">
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="sr-only"></label>
                <!-- MESSAGE -->
                <textarea required class="form-control" name="message" rows="10" placeholder="Message*"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
            <!--  SUBMIT BUTTON  -->
            <input id="submit" name="submit" type="submit" value="Send Message" class="btn btn-outline-secondary"></input>
            <?php echo $result;?>
        </form>
    </div>

</section>























<section class="psedo-section">

</section>

<section id="footer">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm">
                <!--<a href="tel:407-907-9712" target="_blank" data-toggle="tooltip" title="407-907-9712"><img src="phone.png" class="img-fluid footer-icon" alt="Responsive image"></a>-->
                <!--<a href="mailto:nbdelpino1@yahoo.com.com?Subject=Nick's%20Portfolio" target="_top" data-toggle="tooltip" title="nbdelpino1@yahoo.com"><img src="email.png" class="img-fluid footer-icon" alt="Responsive image"></a>-->
                <!--<a href="https://github.com/NBDelpino1" target="_blank"><img src="github.png" class="img-fluid footer-icon" alt="Responsive image"></a>-->
                <!--<a href="https://www.linkedin.com/in/nicholas-delpino-ux-ui/" target="_blank"><img src="linkedin.png" class="img-fluid footer-icon" alt="Responsive image"></a>-->
                <a href="#"><i class="fas fa-phone footer-icon"></i></a>
                <a href="#"><i class="fas fa-envelope footer-icon"></i></a>
                <a href="#"><i class="fab fa-linkedin-in footer-icon"></i></a>
                <a href="#"><i class="fab fa-github-alt footer-icon"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>