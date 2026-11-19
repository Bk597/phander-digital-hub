<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Career AI — GB Digital Hub</title>
  <meta name="description" content="Ask the free Career AI advisor anything — course advice, roadmaps and scholarships for mountain youth." />
  <link rel="icon" href="assets/img/logo.png" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
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
    <div class="container position-relative pt-5 pb-5 text-center" style="max-width:820px">
      <span class="hero-badge mb-3">🤖 Career AI Advisor</span>
      <h1 class="hero-title mb-3">Not sure what to do next? <span class="accent">Ask me.</span></h1>
      <p class="lead-soft mb-0">
        Your free AI career companion — get course advice, roadmap suggestions and
        scholarship tips tailored for life in the mountains.
      </p>
    </div>
    <div class="hero-mountain">
      <svg viewBox="0 0 1440 90" preserveAspectRatio="none" style="width:100%;height:60px">
        <path fill="#ffffff" d="M0,70 L140,36 L300,64 L470,24 L640,60 L820,16 L980,56 L1150,30 L1310,58 L1440,40 L1440,90 L0,90 Z"></path>
      </svg>
    </div>
  </header>

  <!-- CHAT -->
  <section class="py-5 bg-soft">
    <div class="container">
      <div class="row g-4">
        <!-- info -->
        <div class="col-lg-4">
          <div class="card-soft p-4 mb-4 reveal">
            <span class="section-eyebrow">💡 How it works</span>
            <div class="d-grid gap-3 mt-3">
              <div class="d-flex gap-3">
                <div class="icon-tile mb-0" style="flex:0 0 44px;width:44px;height:44px;font-size:1.1rem">1️⃣</div>
                <div>
                  <h3 style="font-size:.95rem;margin-bottom:4px">Ask your question</h3>
                  <p class="mb-0" style="color:var(--muted);font-size:.82rem">Type anything — course choice, freelancing, scholarships.</p>
                </div>
              </div>
              <div class="d-flex gap-3">
                <div class="icon-tile mb-0" style="flex:0 0 44px;width:44px;height:44px;font-size:1.1rem">2️⃣</div>
                <div>
                  <h3 style="font-size:.95rem;margin-bottom:4px">Get a personal plan</h3>
                  <p class="mb-0" style="color:var(--muted);font-size:.82rem">The AI suggests skills, roadmaps and real opportunities.</p>
                </div>
              </div>
              <div class="d-flex gap-3">
                <div class="icon-tile mb-0" style="flex:0 0 44px;width:44px;height:44px;font-size:1.1rem">3️⃣</div>
                <div>
                  <h3 style="font-size:.95rem;margin-bottom:4px">Start doing</h3>
                  <p class="mb-0" style="color:var(--muted);font-size:.82rem">Enroll, tick milestones, and track it all on your dashboard.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="rounded-4 p-4 text-white" style="background:linear-gradient(150deg,#06211e,#006a60)">
            <div style="font-size:1.6rem">🔒</div>
            <h3 style="font-size:1rem;color:#fff;margin:10px 0 6px">Free &amp; private</h3>
            <p class="mb-0" style="font-size:.84rem;color:#b9d4d0">
              No sign-up needed to chat. Your questions stay on this device.
            </p>
          </div>
        </div>

        <!-- chat window -->
        <div class="col-lg-8">
          <div class="card-soft p-4 h-100 reveal">
            <div class="d-flex align-items-center gap-3 mb-3">
              <span class="rounded-circle d-grid" style="width:46px;height:46px;font-size:1.4rem;background:rgba(0,168,150,.12);place-items:center">🤖</span>
              <div>
                <h3 style="font-size:1rem;margin:0">Career AI</h3>
                <div class="stat-label" style="color:var(--brand)"><span style="display:inline-block;width:8px;height:8px;border-radius:50%;background:#00b894"></span> Online — replies instantly</div>
              </div>
            </div>

            <div class="chat-box mb-3" id="chatWindow">
              <div class="d-flex justify-content-start">
                <div class="chat-bubble bot">
                  Assalam-o-Alaikum! 👋 I'm your Career AI advisor. Ask me anything —
                  "Which course after matric?", "How do I start freelancing?" or
                  "Any scholarships for girls in Gilgit-Baltistan?"
                </div>
              </div>
            </div>

            <div id="quickReplies" class="d-flex gap-2 flex-wrap mb-3">
              <button type="button" class="quick-chip" data-q="Which course should I start with?">📚 Which course should I start?</button>
              <button type="button" class="quick-chip" data-q="How can I start freelancing and earn online?">🌐 Start freelancing</button>
              <button type="button" class="quick-chip" data-q="Are there any scholarships for women in Gilgit-Baltistan?">🎓 Scholarships for women</button>
              <button type="button" class="quick-chip" data-q="What career roadmap should I follow?">🧭 Suggest a roadmap</button>
            </div>

            <form id="chatForm" class="d-flex gap-2">
              <input type="text" id="chatInput" class="input-soft" autocomplete="off"
                     placeholder="Type your career question…" />
              <button class="btn btn-brand px-4" type="submit" aria-label="Send">
                <i class="bi bi-send"></i>
              </button>
            </form>
          </div>
        </div>
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
