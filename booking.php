<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/booking.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <title>Booking - I Promise Cleaning Services</title>
</head>
<body>
    
    <!--page Wrapper start-->
    <div class="page-wrapper">
        <!--header start-->
        <header class="header js-header">
          <div class="container">
            <div class="logo" data-aos="fade-down" data-aos-duration="1000">
            <a href="index.php"><img src="./img/logo1.png" alt="your logo" height="70px" /></a>
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
            <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Booking successfull!</strong> We will contact you soon. Thank you
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div> -->
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
                            <input type="date" name="date" required>
                        </div>
                        <div class="input-field">
                            <label>Preferred Time of Cleaning</label>
                            <input type="time" name="time" required>
                        </div>
                        <div class="input-field">
                            <label>Select Service</label>
                            <select name="service">
                                <option value="">Select Service</option>
                                <option value="Carpet Cleaning">Carpet Cleaning</option>
                                <option value="House Cleaning">House Cleaning</option>
                                <option value="Floor Cleaning">Floor Cleaning</option>
                              </select>
                        </div>
                        <div class="input-field">
                            <label>Location</label>
                            <select name="location">
                                <option value="">Select Location</option>
                                <option value="Location 1">Location 1</option>
                                <option value="Location 2">Location 2</option>
                                <option value="Location 3">Location 3</option>
                              </select>
                        </div>
                        <div class="input-field">
                            <label>Town</label>
                            <input type="text" name="town" required>
                        </div>
                        <div class="input-field">
                          <label>Others</label>
                          <input type="text" name="others" required>
                      </div>
                        <div class="textarea-field">
                            <label>Message</label>
                            <textarea name="message"
                              required
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
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/main.js"></script> -->

</body>
</html>

<?php
// define variables and set to empty values
$name = $email = $contact = $service = $date = $time = $location = $town = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["fullname"] != '') {
  
  $name = test_input($_POST["fullname"]);
  $email = test_input($_POST["email"]);
  $contact = test_input($_POST["contact"]);
  $service = test_input($_POST["service"]);
  $date = test_input($_POST["date"]);
  $time = test_input($_POST["time"]);
  $location = test_input($_POST["location"]);
  $town = test_input($_POST["town"]);
  $message = test_input($_POST["message"]);

 // the message
  $msg = "Name: ".$name.
          "\r\nEmail: ". $email.
          "\r\nContact: ".$contact.
          "\r\nService: ". $service.
          "\r\nDate: ".$date.
          "\r\nTime: ". $time.
          "\r\nLocation: ".$location.
          "\r\nTown: ". $town.
          "\r\nMessage: ". $message;
  $headers .= 'From: ' . $email;
  // send email
  $response = mail("asdas@gmail.com","Booking Mail",$msg, $headers);
  
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