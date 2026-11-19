<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Scholarships & Jobs — GB Digital Hub</title>
  <meta name="description" content="Fully-funded scholarships, remote jobs and grants for students and entrepreneurs of Gilgit-Baltistan." />
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
      <span class="hero-badge mb-3">🎯 Scholarships • Jobs • Grants</span>
      <h1 class="hero-title mb-3">Opportunities for <span class="accent">mountain talent</span></h1>
      <p class="lead-soft mb-0">
        Fully-funded scholarships, remote jobs and seed grants — hand-picked for
        students and entrepreneurs of Gilgit-Baltistan.
      </p>
    </div>
    <div class="hero-mountain">
      <svg viewBox="0 0 1440 90" preserveAspectRatio="none" style="width:100%;height:60px">
        <path fill="#ffffff" d="M0,70 L160,30 L320,62 L500,20 L680,58 L860,18 L1030,54 L1200,28 L1360,56 L1440,36 L1440,90 L0,90 Z"></path>
      </svg>
    </div>
  </header>

  <!-- STATS + FILTER + LIST -->
  <section class="pt-5 pb-5 bg-white">
    <div class="container">
      <div class="row g-3 text-center mb-4">
        <div class="col-sm-4">
          <div class="float-card p-3">
            <div class="stat-num" style="font-size:1.7rem">4</div>
            <div class="stat-label">Live Opportunities</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="float-card p-3">
            <div class="stat-num" style="font-size:1.7rem">4</div>
            <div class="stat-label">Types</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="float-card p-3">
            <div class="stat-num" style="font-size:1.7rem">2</div>
            <div class="stat-label">Saved by You</div>
          </div>
        </div>
      </div>

      <div class="card-soft p-3 p-md-4 mb-4 reveal">
        <div class="d-flex gap-2 flex-wrap justify-content-center">
          <button class="filter-chip active" data-opp-filter="all" aria-pressed="true">All</button>
          <button class="filter-chip" data-opp-filter="Scholarship" aria-pressed="false">Scholarship</button>
          <button class="filter-chip" data-opp-filter="Fellowship" aria-pressed="false">Fellowship</button>
          <button class="filter-chip" data-opp-filter="Remote Job" aria-pressed="false">Remote Job</button>
          <button class="filter-chip" data-opp-filter="Grant" aria-pressed="false">Grant</button>
        </div>
      </div>

      <div class="row g-4">
        <!-- GB Digital Youth Scholarship -->
        <div class="col-md-6">
          <div class="card-soft p-4 h-100 hoverable reveal" data-opp-type="Scholarship">
            <div class="d-flex justify-content-between align-items-start gap-3 mb-3">
              <div class="d-flex align-items-center gap-2 flex-wrap">
                <span class="badge-amber">Scholarship</span>
                <span class="badge-purple">⭐ Featured</span>
              </div>
              <button type="button" class="btn btn-sm px-3 save-opp btn-brand" data-saved="true">
                Saved <i class="bi bi-bookmark-check-fill ms-1"></i>
              </button>
            </div>
            <h3 style="font-size:1.08rem;margin:0 0 6px">Gilgit-Baltistan Digital Youth Scholarship</h3>
            <div class="mb-3" style="font-size:.84rem;color:var(--brand);font-weight:600">GB IT Board &amp; Tech Partners</div>
            <div class="d-grid gap-2 mb-3" style="font-size:.84rem;color:var(--muted)">
              <div><i class="bi bi-calendar-event me-2 text-brand"></i><strong>Deadline:</strong> October 25, 2026</div>
              <div><i class="bi bi-patch-check me-2 text-brand"></i><strong>Coverage:</strong> Fully Funded + Laptop &amp; 4G Subsidy</div>
              <div><i class="bi bi-geo-alt me-2 text-brand"></i><strong>Location:</strong> Across Gilgit-Baltistan</div>
            </div>
            <p style="color:var(--muted);font-size:.86rem;line-height:1.65">
              Provides complete tuition fee coverage for 6-month specialized web development and remote freelancing tracks.
            </p>
            <hr class="divider-soft my-3" />
            <div class="d-flex gap-2 flex-wrap">
              <a href="register.html" class="btn btn-brand btn-sm">Apply now <i class="bi bi-arrow-right ms-1"></i></a>
              <a href="contact.html" class="btn btn-ghost-brand btn-sm">Ask details</a>
            </div>
          </div>
        </div>

        <!-- Northern Women Tech Fellowship -->
        <div class="col-md-6">
          <div class="card-soft p-4 h-100 hoverable reveal" data-opp-type="Fellowship">
            <div class="d-flex justify-content-between align-items-start gap-3 mb-3">
              <div class="d-flex align-items-center gap-2 flex-wrap">
                <span class="badge-amber">Fellowship</span>
                <span class="badge-purple">⭐ Featured</span>
              </div>
              <button type="button" class="btn btn-sm px-3 save-opp btn-brand" data-saved="true">
                Saved <i class="bi bi-bookmark-check-fill ms-1"></i>
              </button>
            </div>
            <h3 style="font-size:1.08rem;margin:0 0 6px">Northern Women Tech Fellowship</h3>
            <div class="mb-3" style="font-size:.84rem;color:var(--brand);font-weight:600">Mountain Empowerment Initiative</div>
            <div class="d-grid gap-2 mb-3" style="font-size:.84rem;color:var(--muted)">
              <div><i class="bi bi-calendar-event me-2 text-brand"></i><strong>Deadline:</strong> November 10, 2026</div>
              <div><i class="bi bi-patch-check me-2 text-brand"></i><strong>Coverage:</strong> Rs. 25,000 / month stipend + Mentorship</div>
              <div><i class="bi bi-geo-alt me-2 text-brand"></i><strong>Location:</strong> Hybrid / Remote (Gilgit-Baltistan)</div>
            </div>
            <p style="color:var(--muted);font-size:.86rem;line-height:1.65">
              A safe, supportive cohort for women learning digital commerce, UI design, and freelance content creation.
            </p>
            <hr class="divider-soft my-3" />
            <div class="d-flex gap-2 flex-wrap">
              <a href="register.html" class="btn btn-brand btn-sm">Apply now <i class="bi bi-arrow-right ms-1"></i></a>
              <a href="contact.html" class="btn btn-ghost-brand btn-sm">Ask details</a>
            </div>
          </div>
        </div>

        <!-- Remote Junior Frontend Developer -->
        <div class="col-md-6">
          <div class="card-soft p-4 h-100 hoverable reveal" data-opp-type="Remote Job">
            <div class="d-flex justify-content-between align-items-start gap-3 mb-3">
              <div class="d-flex align-items-center gap-2 flex-wrap">
                <span class="badge-amber">Remote Job</span>
              </div>
              <button type="button" class="btn btn-sm px-3 save-opp btn-ghost-brand" data-saved="false">
                Save <i class="bi bi-bookmark ms-1"></i>
              </button>
            </div>
            <h3 style="font-size:1.08rem;margin:0 0 6px">Remote Junior Frontend Developer</h3>
            <div class="mb-3" style="font-size:.84rem;color:var(--brand);font-weight:600">CloudPeak Technologies</div>
            <div class="d-grid gap-2 mb-3" style="font-size:.84rem;color:var(--muted)">
              <div><i class="bi bi-calendar-event me-2 text-brand"></i><strong>Deadline:</strong> Rolling Applications</div>
              <div><i class="bi bi-patch-check me-2 text-brand"></i><strong>Coverage:</strong> Rs. 85,000 - 110,000 / month</div>
              <div><i class="bi bi-geo-alt me-2 text-brand"></i><strong>Location:</strong> 100% Remote (Flexible Hours)</div>
            </div>
            <p style="color:var(--muted);font-size:.86rem;line-height:1.65">
              Build client dashboards and landing pages with flexible async hours tailored for mountain connectivity.
            </p>
            <hr class="divider-soft my-3" />
            <div class="d-flex gap-2 flex-wrap">
              <a href="register.html" class="btn btn-brand btn-sm">Apply now <i class="bi bi-arrow-right ms-1"></i></a>
              <a href="contact.html" class="btn btn-ghost-brand btn-sm">Ask details</a>
            </div>
          </div>
        </div>

        <!-- Rural Enterprise & Artisans Grant -->
        <div class="col-md-6">
          <div class="card-soft p-4 h-100 hoverable reveal" data-opp-type="Grant">
            <div class="d-flex justify-content-between align-items-start gap-3 mb-3">
              <div class="d-flex align-items-center gap-2 flex-wrap">
                <span class="badge-amber">Grant</span>
                <span class="badge-purple">⭐ Featured</span>
              </div>
              <button type="button" class="btn btn-sm px-3 save-opp btn-ghost-brand" data-saved="false">
                Save <i class="bi bi-bookmark ms-1"></i>
              </button>
            </div>
            <h3 style="font-size:1.08rem;margin:0 0 6px">Rural Enterprise &amp; Artisans Grant</h3>
            <div class="mb-3" style="font-size:.84rem;color:var(--brand);font-weight:600">Aga Khan Rural Support Programme (AKRSP)</div>
            <div class="d-grid gap-2 mb-3" style="font-size:.84rem;color:var(--muted)">
              <div><i class="bi bi-calendar-event me-2 text-brand"></i><strong>Deadline:</strong> December 5, 2026</div>
              <div><i class="bi bi-patch-check me-2 text-brand"></i><strong>Coverage:</strong> Up to Rs. 350,000 Seed Capital</div>
              <div><i class="bi bi-geo-alt me-2 text-brand"></i><strong>Location:</strong> All districts of Gilgit-Baltistan</div>
            </div>
            <p style="color:var(--muted);font-size:.86rem;line-height:1.65">
              Non-repayable seed grant for procuring workshop materials, solar backup, and digital equipment.
            </p>
            <hr class="divider-soft my-3" />
            <div class="d-flex gap-2 flex-wrap">
              <a href="register.html" class="btn btn-brand btn-sm">Apply now <i class="bi bi-arrow-right ms-1"></i></a>
              <a href="contact.html" class="btn btn-ghost-brand btn-sm">Ask details</a>
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
