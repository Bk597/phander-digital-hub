<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us — GB Digital Hub</title>
  <meta name="description" content="GB Digital Hub — bridging the digital divide for mountain youth and women of Gilgit-Baltistan." />
  <link rel="icon" href="assets/img/logo.png" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    /* Tailwind preflight OFF: iska reset Bootstrap ki styling (headings, navbar) ko override kar raha tha */
    tailwind.config = { corePlugins: { preflight: false } };
  </script>
  <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-xl fixed-top ph-navbar py-2">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="GB Digital Hub" /></a>
      <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav mx-auto gap-1">
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="skills.html">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="opportunities.html">Scholarships</a></li>
          <li class="nav-item"><a class="nav-link" href="roadmaps.html">Roadmaps</a></li>
          <li class="nav-item"><a class="nav-link" href="womens-hub.html">Women's Hub</a></li>
          <li class="nav-item"><a class="nav-link" href="career-ai.html">Career AI</a></li>
          <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
        </ul>
        <div class="d-flex align-items-center gap-2">
          <a href="login.html" class="btn btn-ghost-brand btn-sm px-3">Log in</a>
          <a href="register.html" class="btn btn-brand btn-sm px-3">Join Free</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <header class="hero pt-5">
    <div class="container position-relative pt-5 pb-4">
      <div class="pt-4 text-center mx-auto" style="max-width:760px">
        <span class="hero-badge mb-3">🏔️ About GB Digital Hub</span>
        <h1 class="hero-title mb-3">Bridging the <span class="accent">digital divide</span> from the mountains</h1>
        <p class="lead-soft">
          Built for every young person and woman across Gilgit-Baltistan who deserves a fair shot at the digital economy.
        </p>
      </div>
    </div>
  </header>

  <!-- STORY -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 reveal">
          <span class="section-eyebrow">📖 Our Story</span>
          <h2 class="section-title mt-3">From a valley with no bandwidth<br />to global opportunity</h2>
          <p class="lead-soft mt-3">
            In villages across Gilgit-Baltistan, talent has never been the problem —
            access has. Slow internet, no guidance counsellors, and few role models meant
            brilliant students dropped their dreams after matric.
          </p>
          <p class="lead-soft">
            GB Digital Hub changes that equation. It brings together world-class skill courses
            that work on a 3G phone with intermittent connectivity, connect students to
            fully-funded scholarships, and give women artisans a national marketplace —
            all in one platform.
          </p>
          <div class="row g-3 mt-3">
            <div class="col-sm-6">
              <div class="float-card p-3">
                <div class="stat-num" style="font-size:1.7rem"><span data-count="2400">0</span>+</div>
                <div class="stat-label">Learners served</div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="float-card p-3">
                <div class="stat-num" style="font-size:1.7rem"><span data-count="18">0</span></div>
                <div class="stat-label">Villages reached</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 reveal">
          <div class="rounded-4 p-4 p-md-5 text-white text-center" style="background:linear-gradient(150deg,#06211e,#006a60);min-height:340px;display:flex;flex-direction:column;justify-content:center">
            <img src="assets/img/logo.png" alt="GB Digital Hub" style="align-self:center;height:68px;width:auto;background:#fff;border-radius:16px;padding:12px 18px" />
            <h3 class="text-white mt-3">Gilgit-Baltistan</h3>
            <p style="color:#b9d4d0;max-width:400px;margin:0 auto">
              Famous for its blue lake and trout — now also home to a growing community
              of developers, freelancers and women entrepreneurs.
            </p>
            <div class="d-flex justify-content-center gap-4 mt-4">
              <div><div class="fw-bold fs-4">2,350m</div><small style="color:#8fb3ae">Altitude</small></div>
              <div><div class="fw-bold fs-4">100%</div><small style="color:#8fb3ae">Women-first design</small></div>
              <div><div class="fw-bold fs-4">Free</div><small style="color:#8fb3ae">For GB students</small></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VALUES -->
  <section class="py-5 bg-soft">
    <div class="container py-4">
      <div class="text-center mb-5 reveal">
        <span class="section-eyebrow">💡 Our Principles</span>
        <h2 class="section-title mt-3">What we build around</h2>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="app-card text-center reveal">
            <div class="icon-tile mx-auto">📶</div>
            <h3>Offline-First</h3>
            <p>Every lesson caches locally. Learning never stops when the network drops.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="app-card text-center reveal">
            <div class="icon-tile mx-auto" style="background:rgba(229,152,25,.12);border-color:rgba(229,152,25,.3)">👩‍🦰</div>
            <h3>Women-First</h3>
            <p>Safety controls, local-language support and mentorship designed for women.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="app-card text-center reveal">
            <div class="icon-tile mx-auto" style="background:rgba(103,80,164,.1);border-color:rgba(103,80,164,.3)">🤝</div>
            <h3>Local Mentors</h3>
            <p>Taught by professionals from GB who understand valley realities.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="app-card text-center reveal">
            <div class="icon-tile mx-auto" style="background:rgba(0,122,94,.1);border-color:rgba(0,122,94,.3)">🌍</div>
            <h3>Global Ambition</h3>
            <p>Skills and platforms that earn in dollars — from right where you are.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TEAM -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5 reveal">
        <span class="section-eyebrow">👥 The Team</span>
        <h2 class="section-title mt-3">Built by people from the valley</h2>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-sm-6 col-lg-3">
          <div class="card-soft p-4 text-center h-100 reveal">
            <span class="rounded-circle bg-brand text-white d-grid mx-auto mb-3" style="width:72px;height:72px;font-size:1.6rem">👩🏽‍💻</span>
            <h3 style="font-size:1.02rem">Khalida B.</h3>
            <small class="badge-soft">Founder &amp; Developer</small>
            <p style="font-size:.84rem;color:var(--muted);margin-top:.7rem">Aspiring web developer from Gilgit building tech for her community.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card-soft p-4 text-center h-100 reveal">
            <span class="rounded-circle bg-amber d-grid mx-auto mb-3" style="width:72px;height:72px;font-size:1.6rem">👨🏽‍🔧</span>
            <h3 style="font-size:1.02rem">Engr. Salman Ali</h3>
            <small class="badge-amber">Lead Instructor</small>
            <p style="font-size:.84rem;color:var(--muted);margin-top:.7rem">Software engineer &amp; mentor guiding Team GB's frontend track.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card-soft p-4 text-center h-100 reveal">
            <span class="rounded-circle bg-brand-light d-grid mx-auto mb-3" style="width:72px;height:72px;font-size:1.6rem">👩🏻</span>
            <h3 style="font-size:1.02rem">Farhana Baig</h3>
            <small class="badge-purple">Freelancing Coach</small>
            <p style="font-size:.84rem;color:var(--muted);margin-top:.7rem">Top-rated freelancer teaching clients, proposals and payments.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card-soft p-4 text-center h-100 reveal">
            <span class="rounded-circle d-grid mx-auto mb-3" style="width:72px;height:72px;font-size:1.6rem;background:rgba(224,36,94,.12);color:#e0245e">👩🏻‍🎨</span>
            <h3 style="font-size:1.02rem">Tariq Shah</h3>
            <small class="badge-soft">Design Lead</small>
            <p style="font-size:.84rem;color:var(--muted);margin-top:.7rem">UI/UX specialist crafting simple interfaces for low-literacy users.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-5 bg-soft">
    <div class="container text-center py-3">
      <h2 class="section-title">Be part of the movement</h2>
      <p class="lead-soft mx-auto mt-2" style="max-width:560px">
        Whether you want to learn, earn, or sell — there's a place for you in the Hub.
      </p>
      <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
        <a href="register.html" class="btn btn-teal">Join Free</a>
        <a href="contact.html" class="btn btn-outline-app">Partner With Us</a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="ph-footer">
    <div class="container">
      <div class="row g-4 pb-4">
        <div class="col-lg-4">
          <div class="d-flex align-items-center gap-2 mb-3">
            <img src="assets/img/logo.png" alt="GB Digital Hub" style="height:34px;width:auto;background:#fff;border-radius:9px;padding:5px 9px" />
          </div>
          <p style="color:#8fb3ae;font-size:.9rem;line-height:1.7">
            A digital career &amp; skills platform for mountain youth and women.
            Learn • Grow • Earn — from Gilgit-Baltistan to the world.
          </p>
          <div class="d-flex gap-2 mt-3">
            <a href="#" class="footer-social"><i class="bi bi-facebook"></i></a>
            <a href="#" class="footer-social"><i class="bi bi-instagram"></i></a>
            <a href="#" class="footer-social"><i class="bi bi-youtube"></i></a>
            <a href="#" class="footer-social"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="footer-social"><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>
        <div class="col-6 col-lg-2">
          <h5>Platform</h5>
          <ul class="list-unstyled d-grid gap-2">
            <li><a href="skills.html">Skills Academy</a></li>
            <li><a href="opportunities.html">Scholarships</a></li>
            <li><a href="roadmaps.html">Roadmaps</a></li>
            <li><a href="career-ai.html">Career AI</a></li>
            <li><a href="womens-hub.html">Women's Hub</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2">
          <h5>Company</h5>
          <ul class="list-unstyled d-grid gap-2">
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="login.html">Log in</a></li>
            <li><a href="register.html">Join Free</a></li>
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
        <small style="color:#7da39e">© 2026 GB Digital Hub. All rights reserved.</small>
        <small style="color:#7da39e">Made with ❤️ in Gilgit-Baltistan</small>
      </div>
    </div>
  </footer>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
