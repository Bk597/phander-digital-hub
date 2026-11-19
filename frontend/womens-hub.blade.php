<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Women's Hub — GB Digital Hub</title>
  <meta name="description" content="Marketplace for women artisans of Gilgit-Baltistan - shawls, honey, handicrafts and digital services." />
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
      <span class="hero-badge mb-3">🧣 Women's Hub Marketplace</span>
      <h1 class="hero-title mb-3">Sell from your village to <span class="accent">the world</span></h1>
      <p class="lead-soft mb-0">
        Shawls, honey, handicrafts and digital services by the women of Gilgit-Baltistan — listed free, paid safely, shipped nationally.
      </p>
    </div>
    <div class="hero-mountain">
      <svg viewBox="0 0 1440 90" preserveAspectRatio="none" style="width:100%;height:60px">
        <path fill="#ffffff" d="M0,70 L150,34 L310,64 L480,20 L650,58 L830,16 L1000,54 L1170,28 L1330,58 L1440,40 L1440,90 L0,90 Z"></path>
      </svg>
    </div>
  </header>

  <!-- STATS + FILTER + PRODUCTS -->
  <section class="pt-5 pb-5 bg-white">
    <div class="container">
      <div class="row g-3 text-center mb-4">
        <div class="col-sm-4">
          <div class="float-card p-3">
            <div class="stat-num" style="font-size:1.7rem">8</div>
            <div class="stat-label">Products Listed</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="float-card p-3">
            <div class="stat-num" style="font-size:1.7rem">3</div>
            <div class="stat-label">Categories</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="float-card p-3">
            <div class="stat-num" style="font-size:1.7rem">258</div>
            <div class="stat-label">Total Likes</div>
          </div>
        </div>
      </div>

      <div class="card-soft p-3 p-md-4 mb-4 reveal">
        <div class="d-flex gap-2 flex-wrap justify-content-center">
          <button class="filter-chip active" data-filter-chip="all" aria-pressed="true">All</button>
          <button class="filter-chip" data-filter-chip="Handcrafted Textile" aria-pressed="false">Handcrafted Textile</button>
          <button class="filter-chip" data-filter-chip="Digital Service" aria-pressed="false">Digital Service</button>
          <button class="filter-chip" data-filter-chip="Local Organic" aria-pressed="false">Local Organic</button>
        </div>
      </div>

      <div class="row g-4">
        <!-- 1. Shawl -->
        <div class="col-md-6 col-lg-4">
          <div class="card-soft p-4 h-100 hoverable reveal" data-searchable data-category="Handcrafted Textile">
            <div class="d-flex justify-content-between align-items-start mb-3">
              <span class="rounded-circle d-grid" style="width:56px;height:56px;font-size:1.7rem;background:rgba(0,168,150,.10);border:1px solid rgba(0,168,150,.2);place-items:center">🧣</span>
              <div class="d-flex align-items-center gap-1">
                <button type="button" class="like-btn liked" aria-label="Like">♥</button>
                <span class="like-count">38</span>
              </div>
            </div>
            <span class="badge-amber mb-2">Handcrafted Textile</span>
            <h3 style="font-size:1rem;margin:10px 0 6px">Pure Hand-Embroidered Wool Shawl</h3>
            <div class="mb-2" style="font-size:.8rem;color:var(--brand);font-weight:600">Bibi Amina • Gilgit</div>
            <div class="fw-bold mb-2" style="font-size:1.05rem;color:var(--ink)">Rs. 6,500</div>
            <p style="color:var(--muted);font-size:.85rem;line-height:1.6;flex:1">
              Finely spun local sheep wool hand-embroidered with classic Gilgit-Baltistan floral and geometric patterns.
            </p>
            <hr class="divider-soft my-3" />
            <div class="d-flex align-items-center justify-content-between gap-2">
              <small style="color:var(--muted);font-size:.74rem"><i class="bi bi-whatsapp me-1"></i>WhatsApp</small>
              <a href="contact.html" class="btn btn-brand btn-sm px-3">Contact</a>
            </div>
          </div>
        </div>

        <!-- 2. Website Dev -->
        <div class="col-md-6 col-lg-4">
          <div class="card-soft p-4 h-100 hoverable reveal" data-searchable data-category="Digital Service">
            <div class="d-flex justify-content-between align-items-start mb-3">
              <span class="rounded-circle d-grid" style="width:56px;height:56px;font-size:1.7rem;background:rgba(0,168,150,.10);border:1px solid rgba(0,168,150,.2);place-items:center">💻</span>
              <div class="d-flex align-items-center gap-1">
                <button type="button" class="like-btn liked" aria-label="Like">♥</button>
                <span class="like-count">52</span>
              </div>
            </div>
            <span class="badge-amber mb-2">Digital Service</span>
            <h3 style="font-size:1rem;margin:10px 0 6px">Custom Responsive Website Development</h3>
            <div class="mb-2" style="font-size:.8rem;color:var(--brand);font-weight:600">Khalida &amp; Tech Circle • Skardu</div>
            <div class="fw-bold mb-2" style="font-size:1.05rem;color:var(--ink)">Rs. 18,000 / project</div>
            <p style="color:var(--muted);font-size:.85rem;line-height:1.6;flex:1">
              Clean modern landing pages, tourism booking sites, or portfolio websites built with mobile responsiveness.
            </p>
            <hr class="divider-soft my-3" />
            <div class="d-flex align-items-center justify-content-between gap-2">
              <small style="color:var(--muted);font-size:.74rem"><i class="bi bi-envelope me-1"></i>Email</small>
              <a href="contact.html" class="btn btn-brand btn-sm px-3">Contact</a>
            </div>
          </div>
        </div>

        <!-- 3. Honey -->
        <div class="col-md-6 col-lg-4">
          <div class="card-soft p-4 h-100 hoverable reveal" data-searchable data-category="Local Organic">
            <div class="d-flex justify-content-between align-items-start mb-3">
              <span class="rounded-circle d-grid" style="width:56px;height:56px;font-size:1.7rem;background:rgba(0,168,150,.10);border:1px solid rgba(0,168,150,.2);place-items:center">🍯</span>
              <div class="d-flex align-items-center gap-1">
                <button type="button" class="like-btn" aria-label="Like">♡</button>
                <span class="like-count">27</span>
              </div>
            </div>
            <span class="badge-amber mb-2">Local Organic</span>
            <h3 style="font-size:1rem;margin:10px 0 6px">Raw Wild Mountain Honey (Gilgit-Baltistan)</h3>
            <div class="mb-2" style="font-size:.8rem;color:var(--brand);font-weight:600">Fatima Gul • Chashi Valley</div>
            <div class="fw-bold mb-2" style="font-size:1.05rem;color:var(--ink)">Rs. 2,200 / 500g jar</div>
            <p style="color:var(--muted);font-size:.85rem;line-height:1.6;flex:1">
              100% natural raw blossom honey collected from high-altitude wildflowers in Gilgit-Baltistan.
            </p>
            <hr class="divider-soft my-3" />
            <div class="d-flex align-items-center justify-content-between gap-2">
              <small style="color:var(--muted);font-size:.74rem"><i class="bi bi-whatsapp me-1"></i>WhatsApp</small>
              <a href="contact.html" class="btn btn-brand btn-sm px-3">Contact</a>
            </div>
          </div>
        </div>

        <!-- 4. Cap -->
        <div class="col-md-6 col-lg-4">
          <div class="card-soft p-4 h-100 hoverable reveal" data-searchable data-category="Handcrafted Textile">
            <div class="d-flex justify-content-between align-items-start mb-3">
              <span class="rounded-circle d-grid" style="width:56px;height:56px;font-size:1.7rem;background:rgba(0,168,150,.10);border:1px solid rgba(0,168,150,.2);place-items:center">🧢</span>
              <div class="d-flex align-items-center gap-1">
                <button type="button" class="like-btn" aria-label="Like">♡</button>
                <span class="like-count">44</span>
              </div>
            </div>
            <span class="badge-amber mb-2">Handcrafted Textile</span>
            <h3 style="font-size:1rem;margin:10px 0 6px">Traditional Gilgit Hand-Knitted Cap &amp; Brooch</h3>
            <div class="mb-2" style="font-size:.8rem;color:var(--brand);font-weight:600">Saira Bano • Shamran Village</div>
            <div class="fw-bold mb-2" style="font-size:1.05rem;color:var(--ink)">Rs. 2,800</div>
            <p style="color:var(--muted);font-size:.85rem;line-height:1.6;flex:1">
              Handmade woolen Gilgiti cap decorated with traditional beadwork and custom feather brooch.
            </p>
            <hr class="divider-soft my-3" />
            <div class="d-flex align-items-center justify-content-between gap-2">
              <small style="color:var(--muted);font-size:.74rem"><i class="bi bi-whatsapp me-1"></i>WhatsApp</small>
              <a href="contact.html" class="btn btn-brand btn-sm px-3">Contact</a>
            </div>
          </div>
        </div>

        <!-- 5. Apricots -->
        <div class="col-md-6 col-lg-4">
          <div class="card-soft p-4 h-100 hoverable reveal" data-searchable data-category="Local Organic">
            <div class="d-flex justify-content-between align-items-start mb-3">
              <span class="rounded-circle d-grid" style="width:56px;height:56px;font-size:1.7rem;background:rgba(0,168,150,.10);border:1px solid rgba(0,168,150,.2);place-items:center">🍑</span>
              <div class="d-flex align-items-center gap-1">
                <button type="button" class="like-btn" aria-label="Like">♡</button>
                <span class="like-count">31</span>
              </div>
            </div>
            <span class="badge-amber mb-2">Local Organic</span>
            <h3 style="font-size:1rem;margin:10px 0 6px">Sun-Dried Apricots &amp; Walnuts</h3>
            <div class="mb-2" style="font-size:.8rem;color:var(--brand);font-weight:600">Zarmina Begum • Gupis</div>
            <div class="fw-bold mb-2" style="font-size:1.05rem;color:var(--ink)">Rs. 1,800 / kg</div>
            <p style="color:var(--muted);font-size:.85rem;line-height:1.6;flex:1">
              Chemical-free, hand-picked valley apricots &amp; walnuts — 1kg combo pack.
            </p>
            <hr class="divider-soft my-3" />
            <div class="d-flex align-items-center justify-content-between gap-2">
              <small style="color:var(--muted);font-size:.74rem"><i class="bi bi-whatsapp me-1"></i>WhatsApp</small>
              <a href="contact.html" class="btn btn-brand btn-sm px-3">Contact</a>
            </div>
          </div>
        </div>

        <!-- 6. Social Media Mgmt -->
        <div class="col-md-6 col-lg-4">
          <div class="card-soft p-4 h-100 hoverable reveal" data-searchable data-category="Digital Service">
            <div class="d-flex justify-content-between align-items-start mb-3">
              <span class="rounded-circle d-grid" style="width:56px;height:56px;font-size:1.7rem;background:rgba(0,168,150,.10);border:1px solid rgba(0,168,150,.2);place-items:center">📱</span>
              <div class="d-flex align-items-center gap-1">
                <button type="button" class="like-btn" aria-label="Like">♡</button>
                <span class="like-count">19</span>
              </div>
            </div>
            <span class="badge-amber mb-2">Digital Service</span>
            <h3 style="font-size:1rem;margin:10px 0 6px">Social Media Management</h3>
            <div class="mb-2" style="font-size:.8rem;color:var(--brand);font-weight:600">Haleema &amp; Co. • Yasin</div>
            <div class="fw-bold mb-2" style="font-size:1.05rem;color:var(--ink)">Rs. 12,000 / month</div>
            <p style="color:var(--muted);font-size:.85rem;line-height:1.6;flex:1">
              Monthly Instagram &amp; Facebook content, captions and ad setup for local businesses.
            </p>
            <hr class="divider-soft my-3" />
            <div class="d-flex align-items-center justify-content-between gap-2">
              <small style="color:var(--muted);font-size:.74rem"><i class="bi bi-envelope me-1"></i>Email</small>
              <a href="contact.html" class="btn btn-brand btn-sm px-3">Contact</a>
            </div>
          </div>
        </div>

        <!-- 7. Socks -->
        <div class="col-md-6 col-lg-4">
          <div class="card-soft p-4 h-100 hoverable reveal" data-searchable data-category="Handcrafted Textile">
            <div class="d-flex justify-content-between align-items-start mb-3">
              <span class="rounded-circle d-grid" style="width:56px;height:56px;font-size:1.7rem;background:rgba(0,168,150,.10);border:1px solid rgba(0,168,150,.2);place-items:center">🧦</span>
              <div class="d-flex align-items-center gap-1">
                <button type="button" class="like-btn" aria-label="Like">♡</button>
                <span class="like-count">22</span>
              </div>
            </div>
            <span class="badge-amber mb-2">Handcrafted Textile</span>
            <h3 style="font-size:1rem;margin:10px 0 6px">Woolen Hand-Knitted Socks (Pair)</h3>
            <div class="mb-2" style="font-size:.8rem;color:var(--brand);font-weight:600">Rahat Bibi • Skardu</div>
            <div class="fw-bold mb-2" style="font-size:1.05rem;color:var(--ink)">Rs. 1,200</div>
            <p style="color:var(--muted);font-size:.85rem;line-height:1.6;flex:1">
              Warm pure-wool socks knitted in traditional Gilgit-Baltistan patterns — unisex sizes.
            </p>
            <hr class="divider-soft my-3" />
            <div class="d-flex align-items-center justify-content-between gap-2">
              <small style="color:var(--muted);font-size:.74rem"><i class="bi bi-whatsapp me-1"></i>WhatsApp</small>
              <a href="contact.html" class="btn btn-brand btn-sm px-3">Contact</a>
            </div>
          </div>
        </div>

        <!-- 8. Logo Design -->
        <div class="col-md-6 col-lg-4">
          <div class="card-soft p-4 h-100 hoverable reveal" data-searchable data-category="Digital Service">
            <div class="d-flex justify-content-between align-items-start mb-3">
              <span class="rounded-circle d-grid" style="width:56px;height:56px;font-size:1.7rem;background:rgba(0,168,150,.10);border:1px solid rgba(0,168,150,.2);place-items:center">🎨</span>
              <div class="d-flex align-items-center gap-1">
                <button type="button" class="like-btn" aria-label="Like">♡</button>
                <span class="like-count">25</span>
              </div>
            </div>
            <span class="badge-amber mb-2">Digital Service</span>
            <h3 style="font-size:1rem;margin:10px 0 6px">Logo &amp; Brand Kit Design</h3>
            <div class="mb-2" style="font-size:.8rem;color:var(--brand);font-weight:600">Ayesha Noor • Khizarabad</div>
            <div class="fw-bold mb-2" style="font-size:1.05rem;color:var(--ink)">Rs. 4,500</div>
            <p style="color:var(--muted);font-size:.85rem;line-height:1.6;flex:1">
              Clean modern logos, flyers and social kits — 3 concepts, 2 revisions included.
            </p>
            <hr class="divider-soft my-3" />
            <div class="d-flex align-items-center justify-content-between gap-2">
              <small style="color:var(--muted);font-size:.74rem"><i class="bi bi-envelope me-1"></i>Email</small>
              <a href="contact.html" class="btn btn-brand btn-sm px-3">Contact</a>
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
