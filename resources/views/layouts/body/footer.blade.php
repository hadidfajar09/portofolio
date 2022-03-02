@php
    $contacts = DB::table('contacts')->first();
@endphp
<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>ZeroNine</h3>
            <p>
              {{ $contacts->address }}
              <br>
              <strong>Phone:</strong> {{ $contacts->phone }}<br>
              <strong>Email:</strong> {{ $contacts->email }}<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('aboutme') }}">About me</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('skills') }}">My Skills</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('portofolio') }}">Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact Me</a></li>
            </ul>
          </div>

     
          <div class="col-lg-6 col-md-12 footer-newsletter" style="float: right">
            <h4>Contact Me Please...</h4>
            <p>I Need a Job</p>
            <form action="{{ route('contact') }}" method="get">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>ZeroNine</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          Designed by <a href="{{ url('/') }}">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/HadidFajar09" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/mochammad.hadid.fajar/" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.youtube.com/channel/UCGqUociA6nipY-4N9D5nHOw" class="instagram" target="_blank"><i class="bx bxl-youtube"></i></a>
        <a href="https://github.com/hadidfajar09" class="google-plus" target="_blank"><i class="bx bxl-github"></i></a>
        <a href="https://www.linkedin.com/in/hadid-fajar-74b85b18a/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->