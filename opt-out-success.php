<!DOCTYPE html>
<html lang="en">
<?php
$title = "Affectv | Opt Out of Affectv Cookies";
include('partials/_header.php');
?>
<body>
<div class="full-back"></div>
<?php include('partials/_nav.html'); ?>
<div class="super-wrapper" style="background: url('gfx/privacy/opt-out.jpg') no-repeat center center  fixed; background-size:cover">
  <!--- TOP OVERLAY -->
  <div class="slide-overlay turquoise ">
    <div class="row">
      <div class="slide-overlay-text">
        <h1>OPT Out</h1>

        <h2>Success</h2></div>
    </div>
  </div>
  <div class="hidden-xs">
    <div class="row topslide" style="padding:0; margin: 0;">
      <div class="col-sm-12" style="padding:0; margin: 0;">
        <img src="gfx/home/home_banner_image_graphics2.png" class="img-responsive"></div>
    </div>
  </div>
</div>
<div class="container marketing" style="width:100%; background: #fff;">
  <div class="row">
    <div class="col-sm-12 col-md-8 col-md-offset-2 pad-side">
      <h2 class="text-purple">You have succesfully opted out <span class="font-var"><em>Of Affectv Cookies</em></span></h2>

      <p>You have completed the opt-out procedure to not receive targeted advertising from Affectv in the future.</p>

      <p>We have placed a 'do not target' cookie on your computer, which means that Affectv will no longer deliver ads to you which are tailored to your preferences.</p>

      <p>Please be advised that if you change computers or web browsers, or use multiple computers or browsers, you will need to complete the opt-out procedure for each computer and browser. You can change your privacy preferences any time
        by visiting the IAB opt-out platform. </p>
      <p>If you did not want to opt out, click to opt back in.</p>
     <p><a href="/opt-in-success" class="btn btn-blue">Opt back in</a></p>
    </div>
  </div>
  <script src="http://go.affec.tv/opt/opt_out"></script>
  <?php include('partials/_footer.html'); ?>
</div>
<?php include('partials/_footer-scripts.html'); ?>
</body>

</html>
