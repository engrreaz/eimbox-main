<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>EIMBox | School Management System</title>
  <meta name="description" content="EIMBox School Management System " />
  <meta name="keywords"
    content="EIMBox, School, College, Educational Institute, Management System, Result Processing, Attendance Monitoring System" />
  <meta name="author" content="Engr. Reazul Hoque" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/jquery.fancybox.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/media-queries.css" />

  <script src="js/modernizr-2.6.2.min.js"></script>
</head>

<body id="body">
  <div id="preloader">
    <img src="img/preloader.gif" alt="Preloader" />
  </div>

  <header id="navigation" class="navbar-fixed-top navbar">
    <div class="container">
      <div class="navbar-header">
        <!-- responsive nav button -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars fa-2x"></i>
        </button>
        <!-- /responsive nav button -->

        <!-- logo -->
        <a class="navbar-brand" href="#body">
          <h1 id="logo">
            <img src="img/logo.png" alt="Brandi" />
          </h1>
        </a>
        <!-- /logo -->
      </div>

      <!-- main nav -->
      <nav class="collapse navbar-collapse navbar-right" role="navigation">
        <ul id="nav" class="nav navbar-nav">
          <li class="current"><a href="#body">Home</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#works">Screenshots</a></li>
          <li><a href="#facts2">Testimonial</a></li>
          <li><a href="#regdform">Register</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <!-- /main nav -->
    </div>
  </header>
  <!--
        End Fixed Navigation
        ==================================== -->

  <!--
        Home Slider
        ==================================== -->
<?php 
// slider, features, sshots, testimonial, team, regd, facts, contacts
include 'index-slider.php';
include 'index-features.php';
include 'index-screenshot.php';
include 'index-testimonial.php';
// include 'index-team.php';
// include 'index-facts.php';
include 'index-regdform.php';
include 'index-contacts.php';
include 'index-footer.php';

?>


  <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/jquery.singlePageNav.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.mixitup.min.js"></script>
  <script src="js/jquery.parallax-1.1.3.js"></script>
  <script src="js/jquery-countTo.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    var wow = new WOW({
      boxClass: "wow", // animated element css class (default is wow)
      animateClass: "animated", // animation css class (default is animated)
      offset: 120, // distance to the element when triggering the animation (default is 0)
      mobile: false, // trigger animations on mobile devices (default is true)
      live: true, // act on asynchronously loaded content (default is true)
    });
    wow.init();
  </script>
  <!-- Custom Functions -->
  <script src="js/custom.js"></script>

  <script type="text/javascript">
    $(function () {
      /* ========================================================================= */
      /*	Contact Form
          /* ========================================================================= */

      $("#contact-form").validate({
        rules: {
          name: {
            required: true,
            minlength: 2,
          },
          email: {
            required: true,
            email: true,
          },
          message: {
            required: true,
          },
        },
        messages: {
          name: {
            required: "come on, you have a name don't you?",
            minlength: "your name must consist of at least 2 characters",
          },
          email: {
            required: "no email, no message",
          },
          message: {
            required:
              "um...yea, you have to write something to send this form.",
            minlength: "thats all? really?",
          },
        },
        submitHandler: function (form) {
          $(form).ajaxSubmit({
            type: "POST",
            data: $(form).serialize(),
            url: "process.php",
            success: function () {
              $("#contact-form :input").attr("disabled", "disabled");
              $("#contact-form").fadeTo("slow", 0.15, function () {
                $(this).find(":input").attr("disabled", "disabled");
                $(this).find("label").css("cursor", "default");
                $("#success").fadeIn();
              });
            },
            error: function () {
              $("#contact-form").fadeTo("slow", 0.15, function () {
                $("#error").fadeIn();
              });
            },
          });
        },
      });
    });
  </script>
</body>

</html>