<?php
$title = "Affectv | Contact Us";
include('partials/_header.php');
?>
<body>
<div class="full-back"></div>
<?php include('partials/_nav.html'); ?>
<div class="super-wrapper" style="background: url(gfx/contact/contact_banner_image.jpg) no-repeat center center  fixed; background-size:cover">
  <!--- TOP OVERLAY -->
  <div class="row travel">
    <div class="slide-overlay turquoise">
      <div class="row">
        <div class="slide-overlay-text">
          <h1>GET IN TOUCH</h1>
          <h2>Just fill in the form below and someone from our team will be in touch very soon</h2>
        </div>
      </div>
    </div>
  </div>

  <div style="width:100%; margin:0 auto; ">
    <div class="row travel-top" style="background:transparent; max-width:1367px; margin:0 auto; height:600px">
      <div class="col-xs-12 col-sm-12 contact-back">
        <div class="col-xs-12 form-div">
          <div class="col-sm-4 padded hidden-xs"></div>
          <div class="col-xs-12 col-sm-8 pad-topbot">
            <div class="form-style-5">
              <form method="post" action="email.php">
                <input type="text" name="field1" placeholder="Your Name *">
                <input type="text" name="field2" placeholder="Your Company *">
                <input type="email" name="field3" placeholder="Your Email *">
                <input type="tel" name="field4" placeholder="Your Phone *">
                        <textarea name="field3" rows="7" cols="20" placeholder="
Would you like a product demo?  Are you from the press?  Please supply any additional information."> </textarea>
                <input type="submit" value="GO!"/>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="width:100%; margin: 0 auto; background: #FFF;">
      <div class="container">
        <div class="super-wrapper">
          <div class="contact-details pad-side-two">
            <div class="row">
              <div class="col-12-xs col-sm-4 contact-details-text">
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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.294638550578!2d-0.08137548404771308!3d51.526155517152354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761cba62e1379b%3A0x521b9864b1ee5b02!2sThe+Black+%26+White+Building!5e0!3m2!1sen!2sza!4v1455822534038" 
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
  <!-- Bootstrap core JavaScript
   ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="/slick/slick.min.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-32166772-1']);
    _gaq.push(['_trackPageview']);
    (function () {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();
  </script>
</body>

</html>