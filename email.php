<!DOCTYPE html>
<html lang="en">
<?php
$title = "Affectv | Thank You";
include('partials/_header.php');
?>
<body>
<div class="full-back"></div>
<?php include('partials/_nav.html'); ?>
<div class="super-wrapper"
     style="background: url(gfx/contact/contact_banner_image.jpg) no-repeat center center  fixed; background-size:cover">
  <!--- TOP OVERLAY -->
  <div class="row travel">
    <div class="slide-solid turquoise">
      <h1>THANK YOU FOR CONTACTING US</h1>

      <h2>A member of the team will be in touch shortly.</h2></div>
  </div>
  <div style="width:100%; margin:0 auto; ">
    <div class="row travel-top" style="background:transparent; max-width:1367px; margin:0 auto; height:250px">


      <?php

      if (isset($_POST['email'])) {


        // EDIT THE 2 LINES BELOW AS REQUIRED

        $email_to = "info@affectv.com";

        $email_subject = "Affectv Website Contact Form";


        function died($error)
        {

          // your error code can go here

          echo "We are very sorry, but there were error(s) found with the form you submitted. ";

          echo "These errors appear below.<br /><br />";

          echo $error . "<br /><br />";

          echo "Please go back and fix these errors.<br /><br />";

          die();

        }


        // validation expected data exists

        if (!isset($_POST['first_name']) ||

            !isset($_POST['company_name']) ||

            !isset($_POST['email']) ||

            !isset($_POST['telephone']) ||

            !isset($_POST['comments'])
        ) {

          died('
	 						 <div>
									<h2 style="text-align:center;">
								 		"Thank you for contacting us, a member of the team will be in touch shortly."
									</h2>
							 </div>
							 ');

        }


        $first_name = $_POST['first_name']; // required

        $company_name = $_POST['company_name']; // required

        $email_from = $_POST['email']; // required

        $telephone = $_POST['telephone']; // not required

        $comments = $_POST['comments']; // not required


        /*
          $error_message = "";

          $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

        if(!preg_match($email_exp,$email_from)) {

          $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

        }

          $string_exp = "/^[A-Za-z .'-]+$/";

        if(!preg_match($string_exp,$first_name)) {

          $error_message .= 'The First Name you entered does not appear to be valid.<br />';

        }

        if(!preg_match($string_exp,$company_name)) {

          $error_message .= 'The Last Name you entered does not appear to be valid.<br />';

        }


        if(strlen($comments) < 2) {

          $error_message .= 'The Comments you entered do not appear to be valid.<br />';

        }
      */

        if (strlen($error_message) > 0) {

          died($error_message);

        }

        $email_message = "Form details below.\n\n";


        function clean_string($string)
        {

          $bad = array("content-type", "bcc:", "to:", "cc:", "href");

          return str_replace($bad, "", $string);

        }


        $email_message .= "First Name: " . clean_string($first_name) . "\n";

        $email_message .= "Company Name: " . clean_string($company_name) . "\n";

        $email_message .= "Email: " . clean_string($email_from) . "\n";

        $email_message .= "Telephone: " . clean_string($telephone) . "\n";

        $email_message .= "Comments: " . clean_string($comments) . "\n";


// create email headers

        $headers = 'From: ' . $email_from . "\r\n" .

            'Reply-To: ' . $email_from . "\r\n" .

            'X-Mailer: PHP/' . phpversion();

        @mail($email_to, $email_subject, $email_message, $headers);

        ?>


        <!-- include your own success html here -->

        <!--
       <div>
       <h2 style="text-align:center;">"Thank you for contacting us, a member of the team will be in touch shortly."</h2>
       </div>
        --->


        <?php

      }

      ?>


    </div>
    <div style="width:100%; margin: 0 auto; background: #FFF;">
      <div class="container">
        <div class="super-wrapper">
          <div class="contact-details pad-side-two">
            <div class="row">
              <div class="col-12-xs col-sm-4 padded">
                <h1>OUR OFFICE</h1>

                <h2>Affectv</h2>
                Black & White Building
                <br/> 74 Rivington Street London
                <br/> EC2A 3AY
                <br/> +44 (0)203 701 6785
                <br/>
                <br/> &nbsp;
                <br/>

                <h3>Sales Enquiries</h3> <a href="mailto:sales@affectv.com">sales@affectv.com</a>
                <br/> &nbsp;
                <br/>

                <h3>Press Enquiries</h3> <a href="mailto:press@affectv.com">press@affectv.com</a>
                <br/> &nbsp;
                <br/>

                <h3>Other Enquiries</h3> <a href="mailto:info@affectv.com">info@affectv.com</a></div>
              <div class="col-12-xs col-sm-8">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.338776255352!2d-0.10957159999999999!3d51.5253459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b4f639b7bb3%3A0xba7c02b2047f606e!2sExmouth+House%2C+3-11+Pine+St%2C+London+EC1R+0JH%2C+UK!5e0!3m2!1sen!2sza!4v1443671748544"
                    width="100%" height="600" frameborder="0" style="border:0" align="right" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--- INCLUDE FOOT --->
      <?php include('partials/_footer.html'); ?>
      <!-- /.container -->
    </div>
    <!-- /.super-wrapper -->
  </div>
  <!-- /.full-back -->
  <?php include('partials/_footer-scripts.html'); ?>
</body>

</html>