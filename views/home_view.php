<!DOCTYPE html>
<html lang="en" style="zoom: 90%" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $this->title ?></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="<?= BASEURL ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?= BASEURL ?>assets/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?= BASEURL ?>assets/css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <strong>EKOBITS</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://ekobits.academy/#About" target="_blank">About Ekobits</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="#" class="nav-link" target="_blank">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link border border-light rounded"
              target="_blank">
              <i class="fa fa-github mr-2"></i>GitHub
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('<?= BASEURL ?>assets/img/78.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">Ekobits Technical Review</h1>

            <hr class="hr-light">

            <p>
              <strong><?= $this->message ?></strong>
            </p>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body">

                <!-- Form -->
                <form id="submit-me" action="">
                  <!-- Heading -->
                  <h3 class="dark-grey-text text-center">
                    <strong>Submit your record</strong>
                  </h3>
                  <hr>

                  <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="form3" name="firstname" class="form-control">
                    <label for="form3">Your First name</label>
                  </div>

                  <input type="hidden" name="formID" value="1">

                  <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="form3" name="lastname" class="form-control">
                    <label for="form3">Your Last name</label>
                  </div>

                  <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="form2" name="email" class="form-control">
                    <label for="form2">Your E-mail</label>
                  </div>

                  <div class="md-form">
                    <i class="fa fa-phone prefix grey-text"></i>
                    <input type="number" id="form2" name="phone" class="form-control">
                    <label for="form2">Your Phone</label>
                  </div>

                  <div class="md-form">
                    <i class="fa fa-calendar prefix grey-text"></i>
                    <input
                    type="date"
                    class="datepicker form-control"
                    name="dob">
                  </div>

                  <div class="md-form">
                    <i class="fa fa-map-marker prefix grey-text"></i>
                    <textarea type="text" id="form8" name="address" class="md-textarea"></textarea>
                    <label for="form8">Your Address</label>
                  </div>

                  <div class="md-form" id="responseDiv">
                    
                  </div>

                  <div class="text-center">
                    <button class="btn btn-indigo">Submit</button>
                    <hr>
                  </div>

                </form>
                <!-- Form -->
              </div>

            </div>

            <!--/.Card-->
          </div>

          <!--Grid column-->
        </div>

        <!--Grid row-->
      </div>

      <!-- Content -->
    </div>

    <!-- Mask & flexbox options-->
  </div>

  <!-- Full Page Intro -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?= BASEURL ?>assets/js/jquery-3.3.1.min.js"></script>
  <!-- DATE -->

  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?= BASEURL ?>assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?= BASEURL ?>assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?= BASEURL ?>assets/js/mdb.min.js"></script>
  <!-- APP JavaScript -->
  <script type="text/javascript" src="<?= BASEURL ?>assets/js/custom.js"></script>
  <!-- Initializations -->

  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
<!-- Button trigger modal-->
<button style="display: none" id="pushModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPush"></button>
<!--Modal: modalPush-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Inserted Successfully</p>
            </div>

            <!--Body-->
            <div class="modal-body">
                <i class="fa fa-check fa-4x animated rotateIn mb-4"></i>
                <p>Your record has been Inserted successfully<!-- You want to see it? --></p>
            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <a href="#" class="btn btn-primary" data-dismiss="modal">Ok</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalPush-->

</body>

</html>