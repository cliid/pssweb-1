<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Programmer's Sweet Space by Bangsejun
  </title>
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files --> 
  <link href="assets/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
</head>

<body class="landing-page">
  <!-- Navbar -->
  <header role="header">
    <?php
          include 'assets/include/navbar.php';
    ?>
  </header>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="shape shape-style-3 shape-default">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <h1 class="text-white display-2">Discord Community</h1>
                <h2 class="display-4 font-weight-normal text-white">For Korean Developers</h2>
                <div class="btn-wrapper mt-4">
                  <a href="join.php" class="btn btn-warning btn-icon mt-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
                    <span class="btn-inner--text">Join Server</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <div class="section features-1">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-primary badge-pill mb-3"></span>
            <h3 class="display-3">Communication with easy programmers</h3>
            <p class="lead">Characteristics of our community</p><br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
                <i class="ni ni-settings-gear-65"></i>
              </div>
              <h6 class="info-title text-uppercase text-primary">Social Conversations</h6>
              <p class="description opacity-8">Easy and simple questions and answers!</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle">
                <i class="ni ni-atom"></i>
              </div>
              <h6 class="info-title text-uppercase text-success">Getting an easy idea</h6>
              <p class="description opacity-8">Easily get development ideas</p>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle">
                <i class="ni ni-world"></i>
              </div>
              <h6 class="info-title text-uppercase text-warning">Many developers</h6>
              <p class="description opacity-8">Development with many programmers</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br /><br />
    <footer role="footer" class="footer">
      <?php
        include 'assets/include/footer.php';
      ?>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <script src="assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>