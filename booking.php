<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/booking.css">
    <title>Booking - I Promise Cleaning Services</title>
</head>
<body>
    
    <!--page Wrapper start-->
    <div class="page-wrapper">
        <!--header start-->
        <header class="header js-header">
          <div class="container">
            <div class="logo" data-aos="fade-down" data-aos-duration="1000">
            <a href="index.php"><img src="./img/logo.png" alt="your logo" height="70px" /></a>
            </div>
            <button type="button" class="nav-toggler js-nav-toggler">
              <span></span>
            </button>
            <nav class="nav js-nav">
              <ul data-aos="fade-down" data-aos-duration="1000">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about">About</a></li>
                <li><a href="index.php#services">Services</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li><a href="blog.php">Blog</a></li>
              </ul>
            </nav>
          </div>
        </header>
        <!--header end-->
      </div>
      <!--page wraper end-->

      <div class="container1">
        <?php
          if( $_GET['status'] == 'success'){
            ?>
            <blockquote>
              <strong>Booking Successful</strong> We will Contact You Soon. Thank You
          </blockquote>
              <?php
                }
              ?>
        <header>Book a free quote</header>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form first">
                <div class="details personal">

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your Name here" name="fullname" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="info@example.com" name="email">
                        </div>
                        <div class="input-field">
                            <label>Contact</label>
                            <input type="text" placeholder="Enter your number here" name="contact" required>
                        </div>
                        <div class="input-field">
                            <label>Preferred Date of Cleaning</label>
                            <input type="date" name="date">
                        </div>
                        <div class="input-field">
                            <label>Preferred Time of Cleaning</label>
                            <input type="time" name="time">
                        </div>
                        <div class="input-field">
                            <label>Select Service</label>
                            <select name="service">
                                <option value="">Select Service</option>
                                <option value="Bond Cleaning  / End of Lease Cleaning">Bond Cleaning / End of Lease Cleaning</option>
                                <option value="Residential Cleaning">Residential Cleaning</option>
                                <option value="Oven Cleaning">Oven Cleaning</option>
                                <option value="Window Cleaning">Window Cleaning</option>
                                <option value="Regular Cleaning">Regular Cleaning</option>
                                <option value="Deep Cleaning">Deep Cleaning</option>
                                <option value="Outdoor Cleaning">Outdoor Cleaning</option>
                                <option value="Kitchen Cleaning">Kitchen Cleaning</option>
                                <option value="Bathroom Cleaning">Bathroom Cleaning</option>
                                <option value="Eco-friendly Cleaning">Eco-friendly Cleaning</option>
                                <option value="Office Cleaning">Office Cleaning</option>
                                <option value="Carpet Cleaning">Carpet Cleaning</option>
                                <option value="Furniture Cleaning">Furniture Cleaning</option>
                              </select>
                        </div>
                        <div class="input-field">
                            <label>Location</label>
                            <input type="text" name="location">
                        </div>
                        <div class="input-field">
                            <label>Suburb</label>
                            <input type="text" name="suburb" >
                        </div>
                        <div class="textarea-field">
                            <label>Message</label>
                            <textarea name="message"
                            ></textarea>
                          </div>
                    </div>
                </div>
                <button class="nextBtn">
                  <span class="btnText">Submit</span>
                  <i class="uil uil-navigator"></i>
                </button>
            </div>
        </form>
    </div>
<script src="js/main.js"></script>

</body>
</html>

<?php
// define variables and set to empty values
$name = $email = $contact = $service = $date = $time = $location = $suburb = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["fullname"] != '') {
  
  $name = test_input($_POST["fullname"]);
  $email = test_input($_POST["email"]);
  $contact = test_input($_POST["contact"]);
  $service = test_input($_POST["service"]);
  $date = test_input($_POST["date"]);
  $time = test_input($_POST["time"]);
  $location = test_input($_POST["location"]);
  $suburb = test_input($_POST["suburb"]);
  $message = test_input($_POST["message"]);

 // the message
  $msg = "Name: ".$name.
          "\r\nEmail: ". $email.
          "\r\nContact: ".$contact.
          "\r\nService: ". $service.
          "\r\nDate: ".$date.
          "\r\nTime: ". $time.
          "\r\nLocation: ".$location.
          "\r\nSuburb: ". $suburb.
          "\r\nMessage: ". $message;
  $headers .= 'From: ' . $email;
  // send email
  $response = mail("support@ipromiseservices.com.au","Booking Mail",$msg, $headers);
  
  echo "<script>window.location.href='booking.php?status=success';</script>";
    exit;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>