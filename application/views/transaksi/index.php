<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Yummy Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/'); ?>img/favicon.png" rel="icon">
  <link href="<?= base_url('assets/'); ?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/'); ?>/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="<?php base_url('#'); ?>" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Nyambel-in<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?= base_url('#'); ?>">Home</a></li>
          <li><a href="<?= base_url('#about'); ?>">About</a></li>
          <li><a href="<?= base_url('#menu'); ?>">Menu</a></li>
          <li><a href="<?= base_url('#events'); ?>">Events</a></li>
          <li><a href="<?= base_url('#chefs'); ?>">Chefs</a></li>
          <li><a href="<?= base_url('#gallery'); ?>">Gallery</a></li>
          <li><a href="<?= base_url('#contact'); ?>">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="#book-a-table">Book a Table</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Transaksi ======= -->

  <div class="box">
                <form method="post" action="checkout1.html">
                  <h1>Shopping cart</h1>
                  <p class="text-muted">You currently have 3 item(s) in your cart.</p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Product</th>
                          <th>Quantity</th>
                          <th>Unit price</th>
                          <th>Discount</th>
                          <th colspan="2">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="#"><img src="img/detailsquare.jpg" alt="White Blouse Armani"></a></td>
                          <td><a href="#">White Blouse Armani</a></td>
                          <td>
                            <input type="number" value="2" class="form-control">
                          </td>
                          <td>$123.00</td>
                          <td>$0.00</td>
                          <td>$246.00</td>
                          <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <tr>
                          <td><a href="#"><img src="img/basketsquare.jpg" alt="Black Blouse Armani"></a></td>
                          <td><a href="#">Black Blouse Armani</a></td>
                          <td>
                            <input type="number" value="1" class="form-control">
                          </td>
                          <td>$200.00</td>
                          <td>$0.00</td>
                          <td>$200.00</td>
                          <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th colspan="2">$446.00</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.table-responsive-->
                  <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                    <div class="left"><a href="category.html" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                    <div class="right">
                      <button class="btn btn-outline-secondary"><i class="fa fa-refresh"></i> Update cart</button>
                      <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i></button>
                    </div>
                  </div>
                </form>
              </div>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022 - US<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="<?= base_url('#'); ?>" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/'); ?>/vendor/aos/aos.js"></script>
  <script src="<?= base_url('assets/'); ?>/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('assets/'); ?>/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url('assets/'); ?>/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('assets/'); ?>/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/'); ?>/js/main.js"></script>

</body>

</html>