<footer class="ph-footer">
  <div class="container">
    <div class="row g-4 pb-4">
      <div class="col-lg-4">
        <div class="d-flex align-items-center gap-2 mb-3">
          <img src="{{ asset('assets/img/logo.png') }}" alt="GB Digital Hub" style="height:34px;width:auto;background:#fff;border-radius:9px;padding:5px 9px" />
        </div>
        <p style="color:#8fb3ae;font-size:.9rem;line-height:1.7">
          A digital career &amp; skills platform for mountain youth and women.
          Learn • Grow • Earn — from Gilgit-Baltistan to the world.
        </p>
        <div class="d-flex gap-2 mt-3">
          <a href="#" class="social-btn"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-btn"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-btn"><i class="bi bi-youtube"></i></a>
          <a href="#" class="social-btn"><i class="bi bi-linkedin"></i></a>
          <a href="#" class="social-btn"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>
      <div class="col-6 col-lg-2">
        <h5>Platform</h5>
        <ul class="list-unstyled d-grid gap-2">
          <li><a href="{{ route('skills') }}">Skills Academy</a></li>
          <li><a href="{{ route('opportunities') }}">Scholarships</a></li>
          <li><a href="{{ route('roadmaps') }}">Roadmaps</a></li>
          <li><a href="{{ route('career-ai') }}">Career AI</a></li>
          <li><a href="{{ route('womens-hub') }}">Women's Hub</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2">
        <h5>Company</h5>
        <ul class="list-unstyled d-grid gap-2">
          <li><a href="{{ route('about') }}">About Us</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
          <li><a href="{{ route('login') }}">Log in</a></li>
          <li><a href="{{ route('register') }}">Join Free</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-lg-4">
        <h5>Contact</h5>
        <ul class="list-unstyled d-grid gap-2" style="color:#b9d4d0;font-size:.9rem">
          <li><i class="bi bi-geo-alt me-2"></i>Gilgit-Baltistan</li>
          <li><i class="bi bi-envelope me-2"></i>bkhalida275@gmail.com</li>
          <li><i class="bi bi-phone me-2"></i>+92 345 9821430</li>
          <li><i class="bi bi-clock me-2"></i>Mon – Sat: 9:00 AM – 6:00 PM PKT</li>
        </ul>
      </div>
    </div>
    <div class="border-top py-3 d-flex flex-wrap justify-content-between gap-2" style="border-color:rgba(255,255,255,.1) !important">
      <small style="color:#7da39e">© {{ date('Y') }} GB Digital Hub. All rights reserved.</small>
      <small style="color:#7da39e">Made with ❤️ in Gilgit-Baltistan</small>
    </div>
  </div>
</footer>
