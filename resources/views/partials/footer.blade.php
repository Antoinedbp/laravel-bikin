<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Bikin</h3>
            <p>
              {{ $footers->adresse }} <br><br>
              <strong>Phone:</strong> {{ $footers->phone }}<br>
              <strong>Email:</strong> {{ $footers->email }}<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>{{ $footers->linkTitre1 }}</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $footers->link1 }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $footers->link2 }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $footers->link3 }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $footers->link4 }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $footers->link5 }}</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $footers->link6 }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $footers->link7 }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $footers->link8 }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $footers->link9 }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $footers->link10 }}</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>{{ $footers->titre }}</h4>
            <p>{{ $footers->description }}</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Bikin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bikin-free-simple-landing-page-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
</footer><!-- End Footer -->