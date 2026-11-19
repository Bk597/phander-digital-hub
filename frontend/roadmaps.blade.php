<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Career Roadmaps — GB Digital Hub</title>
  <meta name="description" content="Step-by-step career roadmaps with milestones — frontend developer, freelancer and more." />
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
      <span class="hero-badge mb-3">🧭 Career Roadmaps</span>
      <h1 class="hero-title mb-3">Your step-by-step path to <span class="accent">success</span></h1>
      <p class="lead-soft mb-0">
        Follow milestone-by-milestone roadmaps, tick your progress, and always know
        exactly what to learn next — no confusion, no guesswork.
      </p>
    </div>
    <div class="hero-mountain">
      <svg viewBox="0 0 1440 90" preserveAspectRatio="none" style="width:100%;height:60px">
        <path fill="#ffffff" d="M0,70 L130,38 L290,66 L460,22 L630,58 L800,14 L970,52 L1150,26 L1310,56 L1440,38 L1440,90 L0,90 Z"></path>
      </svg>
    </div>
  </header>

  <!-- ROADMAPS -->
  <section class="py-5 bg-soft">
    <div class="container" style="max-width:920px">
      <div class="text-center mb-5 reveal">
        <span class="section-eyebrow">🗺️ Pick your path</span>
        <h2 class="section-title mt-3">Choose a roadmap and start ticking</h2>
      </div>

      <!-- Frontend Web Developer -->
      <div class="card-soft p-4 mb-4 reveal" data-progress-scope>
        <div class="d-flex align-items-start gap-3 flex-wrap">
          <div class="icon-tile mb-0" style="flex:0 0 52px">💻</div>
          <div class="flex-grow-1" style="min-width:240px">
            <div class="d-flex align-items-center gap-2 flex-wrap">
              <h3 style="font-size:1.1rem;margin:0">Frontend Web Developer</h3>
              <span class="badge-soft"><i class="bi bi-clock me-1"></i>5 - 6 Months</span>
            </div>
            <p class="mb-0 mt-1" style="color:var(--muted);font-size:.87rem">Zero to job-ready frontend engineer building responsive, accessible web applications.</p>
          </div>
          <button type="button" class="btn btn-ghost-brand btn-sm px-3" data-roadmap-toggle="rm-panel-1" aria-expanded="true">
            View steps <i class="bi bi-chevron-down ms-1" style="display:inline-block;transform:rotate(180deg)"></i>
          </button>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-3 mb-1" style="font-size:.78rem;color:var(--muted)">
          <span>Your progress</span>
          <span class="fw-bold text-brand" data-progress-label>2/5 milestones</span>
        </div>
        <div class="progress-ph"><span style="width:40%"></span></div>

        <div class="roadmap-panel show mt-4 pt-3" id="rm-panel-1">
          <hr class="divider-soft" />
          <div class="timeline-item done">
            <div class="timeline-bullet">1</div>
            <div class="flex-grow-1">
              <div class="d-flex align-items-start justify-content-between gap-3">
                <div>
                  <h5>Internet &amp; HTML5 Fundamentals</h5>
                  <p>Semantic markup, tags, forms and SEO.</p>
                </div>
                <input type="checkbox" class="milestone-check" data-milestone checked style="width:18px;height:18px;accent-color:var(--brand);margin-top:4px;cursor:pointer;flex:0 0 18px" />
              </div>
            </div>
          </div>
          <div class="timeline-item done">
            <div class="timeline-bullet">2</div>
            <div class="flex-grow-1">
              <div class="d-flex align-items-start justify-content-between gap-3">
                <div>
                  <h5>Responsive CSS &amp; Flexbox/Grid</h5>
                  <p>Mobile-first layouts and Tailwind CSS.</p>
                </div>
                <input type="checkbox" class="milestone-check" data-milestone checked style="width:18px;height:18px;accent-color:var(--brand);margin-top:4px;cursor:pointer;flex:0 0 18px" />
              </div>
            </div>
          </div>
          <div class="timeline-item">
            <div class="timeline-bullet">3</div>
            <div class="flex-grow-1">
              <div class="d-flex align-items-start justify-content-between gap-3">
                <div>
                  <h5>Modern JavaScript (ES6+) &amp; APIs</h5>
                  <p>Async/await, fetching JSON data, and local storage.</p>
                </div>
                <input type="checkbox" class="milestone-check" data-milestone style="width:18px;height:18px;accent-color:var(--brand);margin-top:4px;cursor:pointer;flex:0 0 18px" />
              </div>
            </div>
          </div>
          <div class="timeline-item">
            <div class="timeline-bullet">4</div>
            <div class="flex-grow-1">
              <div class="d-flex align-items-start justify-content-between gap-3">
                <div>
                  <h5>Component Frameworks (React/Vue)</h5>
                  <p>State management, reusable components and routing.</p>
                </div>
                <input type="checkbox" class="milestone-check" data-milestone style="width:18px;height:18px;accent-color:var(--brand);margin-top:4px;cursor:pointer;flex:0 0 18px" />
              </div>
            </div>
          </div>
          <div class="timeline-item">
            <div class="timeline-bullet">5</div>
            <div class="flex-grow-1">
              <div class="d-flex align-items-start justify-content-between gap-3">
                <div>
                  <h5>Portfolio &amp; Remote Job Hunt</h5>
                  <p>Build 3 live projects and apply for remote gigs.</p>
                </div>
                <input type="checkbox" class="milestone-check" data-milestone style="width:18px;height:18px;accent-color:var(--brand);margin-top:4px;cursor:pointer;flex:0 0 18px" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Global Freelancer -->
      <div class="card-soft p-4 mb-4 reveal" data-progress-scope>
        <div class="d-flex align-items-start gap-3 flex-wrap">
          <div class="icon-tile mb-0" style="flex:0 0 52px">💼</div>
          <div class="flex-grow-1" style="min-width:240px">
            <div class="d-flex align-items-center gap-2 flex-wrap">
              <h3 style="font-size:1.1rem;margin:0">Global Freelancer &amp; Upwork Pro</h3>
              <span class="badge-soft"><i class="bi bi-clock me-1"></i>2 - 3 Months</span>
            </div>
            <p class="mb-0 mt-1" style="color:var(--muted);font-size:.87rem">Master client acquisition, high-converting proposals, and financial independence.</p>
          </div>
          <button type="button" class="btn btn-ghost-brand btn-sm px-3" data-roadmap-toggle="rm-panel-2" aria-expanded="false">
            View steps <i class="bi bi-chevron-down ms-1" style="display:inline-block"></i>
          </button>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-3 mb-1" style="font-size:.78rem;color:var(--muted)">
          <span>Your progress</span>
          <span class="fw-bold text-brand" data-progress-label>1/4 milestones</span>
        </div>
        <div class="progress-ph"><span style="width:25%"></span></div>

        <div class="roadmap-panel mt-4 pt-3" id="rm-panel-2">
          <hr class="divider-soft" />
          <div class="timeline-item done">
            <div class="timeline-bullet">1</div>
            <div class="flex-grow-1">
              <div class="d-flex align-items-start justify-content-between gap-3">
                <div>
                  <h5>Niche &amp; Service Definition</h5>
                  <p>Identify your marketable core skill and target clients.</p>
                </div>
                <input type="checkbox" class="milestone-check" data-milestone checked style="width:18px;height:18px;accent-color:var(--brand);margin-top:4px;cursor:pointer;flex:0 0 18px" />
              </div>
            </div>
          </div>
          <div class="timeline-item">
            <div class="timeline-bullet">2</div>
            <div class="flex-grow-1">
              <div class="d-flex align-items-start justify-content-between gap-3">
                <div>
                  <h5>Profile Optimization &amp; Case Studies</h5>
                  <p>Compelling bio, portfolio items, and intro video.</p>
                </div>
                <input type="checkbox" class="milestone-check" data-milestone style="width:18px;height:18px;accent-color:var(--brand);margin-top:4px;cursor:pointer;flex:0 0 18px" />
              </div>
            </div>
          </div>
          <div class="timeline-item">
            <div class="timeline-bullet">3</div>
            <div class="flex-grow-1">
              <div class="d-flex align-items-start justify-content-between gap-3">
                <div>
                  <h5>Proposal Mastery &amp; Bidding</h5>
                  <p>Write personalized pitches within 15 mins of job posting.</p>
                </div>
                <input type="checkbox" class="milestone-check" data-milestone style="width:18px;height:18px;accent-color:var(--brand);margin-top:4px;cursor:pointer;flex:0 0 18px" />
              </div>
            </div>
          </div>
          <div class="timeline-item">
            <div class="timeline-bullet">4</div>
            <div class="flex-grow-1">
              <div class="d-flex align-items-start justify-content-between gap-3">
                <div>
                  <h5>Scaling &amp; Long-Term Retainers</h5>
                  <p>Convert one-off clients into steady monthly retainers.</p>
                </div>
                <input type="checkbox" class="milestone-check" data-milestone style="width:18px;height:18px;accent-color:var(--brand);margin-top:4px;cursor:pointer;flex:0 0 18px" />
              </div>
            </div>
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
