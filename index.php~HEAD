<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content='initial-scale=1, viewport-fit=cover' >
  <title>Juan D CV</title>



  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Oswald|Srisakdi" rel="stylesheet">


  <!-- JQUERY -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Bootstrap -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css" type="text/css">
  <link rel="stylesheet" href="css/animate.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="#">Me</a>
      </div>

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#who" data-toggle="collapse" data-target=".navbar-collapse.in">WHO</a></li>
          <li><a href="#what-am-i" data-toggle="collapse" data-target=".navbar-collapse.in">WHAT</a></li>
          <li><a href="#skills" data-toggle="collapse" data-target=".navbar-collapse.in">SKILSS</a></li>
          <li><a href="#find-me" data-toggle="collapse" data-target=".navbar-collapse.in">FIND ME</a></li>
        </ul>

      </div>

    </div>
  </nav>



  <div class="container-fluid text-center bg-1 bg" id="who">
    <div id="who-content">



 <h2>Juan David Gomez</h2>
      <br>
      <img src="img/profile1.jpg" alt="juan" class="img-circle animated zoomIn slow">
    <div class="animated bounceInUp delay-1s slow">
        <h2>Junior <span>Front-End Developer</span></h2>
          </div>
    </div>

  </div>

  <div class="container-fluid text-center bg-2 text-center" id="what-am-i">
    <h2> <strong>What Am I </strong></h2>
    <br>
    <p>Newly graduated web developer offering enthusiasm and understanding of various programming languages. Looking to join an organisation where the opportunity for growth and personal development is embraced.</p>

  </div>

  <div class="container-fluid text-center  " id="skills">

    <div class="row">
      <h2><strong>Skills</strong> </h2>
      <p >
Below is a list of my current technical skills gained from my bachelor degree, Diplomas and courses from Udemy, Freecodecamp and w3school.      </p>
      <div class="col-md-2 col-xs-4 col-sm-4 ">
        <h3>HTML</h3><img src="img/html.png" class="img-responsive skill-img" style="width:auto 100%;">
      </div>
      <div class="col-md-2 col-xs-4 col-sm-4 ">
        <h3>CSS3</h3><img src="img/css.png" class="img-responsive skill-img">
      </div>
      <div class="col-md-2 col-xs-4 col-sm-4 ">
        <h3>JAVASCRIPT</h3><img class="img-responsive skill-img" src="img/js.png">
      </div>
      <div class="col-md-2 col-xs-4 col-sm-4 ">
        <h3>JQUERY</h3><img src="img/jquery.png" class="img-responsive skill-img">
      </div>
      <div class="col-md-2 col-xs-4 col-sm-4 ">
        <h3>BOOTSRAP</h3><img src="img/bootstrap.png" class="img-responsive skill-img">
      </div>
      <div class="col-md-2 col-xs-4 col-sm-4 ">
        <h3>PHP</h3><img src="img/php.png" class="img-responsive skill-img">
      </div>
    </div>

  </div>



  <!-- FIND ME SECTION -->
<!-- add this code to input tag for getting an alert mesasage automaticly with
out
php required="required" data-error="Please specify your need."
and add a div after the input like this
  <div class="help-block with-errors"></div>
-->


<!-- SECOND FORM -->
<section id="find-me">

<div class="container">
<h2>Contact Me </h2>

<div class="row">
  <div class="col-md-6">

<?php include('contact.php'); ?>
<form id="contact-form" method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form" style="color:rgb(77, 77, 77);">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="name" class="form-control greybackground" placeholder="Please enter your firstname *" value="<?= $name ?>"  >
                    <span class="error"> <?= $name_error ?> </span>

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="lastname" class="form-control greybackground" placeholder="Please enter your lastname *"  value="<?= $lastname ?>" >
                    <span class="error"> <?= $lastname_error?> </span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control greybackground" placeholder="Please enter your email *" value="<?= $email ?>"  >
                    <span class="error"> <?= $email_error ?> </span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_need">Please specify your need *</label>
                    <select id="form_need" name="need" class="form-control greybackground" >
                        <option value=""></option>
                        <option value="Request quotation">Request quotation</option>
                        <option value="Request order status">Request order status</option>
                        <option value="Request copy of an invoice">Request copy of an invoice</option>
                        <option value="Other">Other</option>
                    </select>

                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group ">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control greybackground" placeholder="Message for me *" rows="4" value= "<?= $message ?>"></textarea>
                    <span class="error"> <?= $message_error ?> </span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary btn-send " value="Send message">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" >
                <p class="text-muted">
                    <strong>*</strong> These fields are required.
                  </p>
            </div>
        </div>
    </div>
      </div>
      <div class="col-sm-6 col-xs-12">
        <div class="row">
          <div class="col-sm-12" style="text-align:center ">
            <p style="color:grey; text-center">Sydney Australia</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12" style="text-align:center ">
            <p style="color:grey;">
              <a href=""><span class="glyphicon glyphicon-earphone"></span></a>+040682963.</p>
          </div>
        </div>


 <div class="col-xs-12">
        <ul>
        <a href="https://www.linkedin.com/in/juan-david-restrepo-84496474/"> <li><div class="fa fa-linkedin-square social-icon"></div></li></a>
        <a href="https://github.com/juan251189"><li><div class="fa fa-github-square social-icon"></div></li></a>
        </ul>

      </div>
      </div>
</form>
</div>
</div>
</section>






  <footer class="container-fluid bg-4 text-center">
    <p>Copyright © 2019 <a href="#who">Juan David Gomez R.</a></p>
  </footer>

  <script>
    $(document).ready(function() {
      // Add scrollspy to <body>
      $('body').scrollspy({
        target: ".navbar",
        offset: 50
      });

      // Add smooth scrolling on all links inside the navbar
      $("#myNavbar a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 700, function() {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });


// in animations while scrolling
      $(window).load(function () {


          var in_view = new Waypoint.Inview({
              element: $('#skills')[0],
              enter: function() {
                  $('#skills').addClass('animated','bounceInDown');
              },
              exit: function() {  // optionally
                  $('#skills').removeClass('start');
              }
          });
      });


    });





    // transition for h1 section #who
    setTimeout(function() {
      $('#who-content').show()
    }, 5000);
  </script>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
