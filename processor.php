    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tender Mercies</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
      </head>
      <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
          <a class="navbar-brand" href="index.html">Tender Mercies</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Mission</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Testimonials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Become Involved</a>
              </li>
            </ul>

          </div>
        </nav>

        <section id="section-home">
        <div class="main">
        <h1 class="display-4">Tender Mercies</h1>
        <p class="lead">Providing a Better Life to the Disabled Population</p>
        <?php
        if (isset($_POST['name']) && isset($_POST['email'])){
            $from = $_POST['email'];
            $name = $_POST['name'];
            $to      = 'uk.derekh@gmail.com';
            $subject = 'Response from website';
            $message = $_POST['message'];
            $body = '<html>
                      <body>
                        <h2>Form Submission</h2>
                        <hr />
                        <p>Name<br />'.$name.'</p>
                        <p>Email<br />'.$from.'</p>
                        <p>Body<br />'.$message.'</p>
                      </body>
                    </html>';


            $headers = "From: ".$name." <".$from. "\r\n" ;
            $headers .= "Reply-To: " .$from. "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset-utf-8";

            $send = mail($to, $subject, $body, $headers);
            if ($send) {
              echo '<br />';
              echo '<h2>Thanks for contacting us! We will be with you shortly.</h2>';
            } else {
              echo 'error';
            }
          }
            ?>
        </div>
        </section>


    <footer class="bg-primary">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Tender Mercies</h6>
          <p>Providing a Better Life to the Disabled Population</p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <!-- <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
          <p>
            <a href="#!">MDBootstrap</a>
          </p>
          <p>
            <a href="#!">MDWordPress</a>
          </p>
          <p>
            <a href="#!">BrandFlow</a>
          </p>
          <p>
            <a href="#!">Bootstrap Angular</a>
          </p>
        </div> -->
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
          <p>
            <a href="paypage/index.php">Donate</a>
          </p>
        </div>

        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p>
            <i class="fas fa-home mr-3"></i> St George, UT 84790, US</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> info@tendermerciesllc.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> <a href="tel:+13602923098">360.292.3098</a></p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Footer links -->

      <hr>

      <!-- Grid row -->
      <div class="row d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-7 col-lg-8">

          <!--Copyright-->
          <p class="text-center text-md-left">© 2019 Copyright:
              <strong> Tender Mercies</strong>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0">

          <!-- Social buttons -->
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="">
                  <i class="fab fa-facebook-square"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="">
                  <i class="fab fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1"
                href="">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.0/smooth-scroll.min.js"></script>
    <script src="https://kit.fontawesome.com/a1564e25b7.js" crossorigin="anonymous"></script>
    <script src="code.js"></script>
  </body>
</html>
