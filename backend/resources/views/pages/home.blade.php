@extends('layouts.app')

@section('title', 'Home')

@section('content')

<style>
  /* Home page: contents ko left se thoda margin (breathing room) */
  .hero .container,
  body > section .container {
    padding-left: clamp(24px, 3vw, 40px);
  }
</style>

<!-- ============ HERO ============ -->
<header class="hero pt-5">
  <div class="container position-relative pt-5 pb-5">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <span class="hero-badge mb-3">🌱 Gilgit-Baltistan</span>
        <h1 class="hero-title mb-3">Bridging the <span class="accent">digital divide</span> for mountain youth</h1>
        <p class="lead-soft mb-4">
          Free digital skills, fully-funded scholarships, career guidance AI and a
          marketplace for women artisans — one guide for every dreamer across Gilgit-Baltistan.
        </p>
        <div class="d-flex gap-3 flex-wrap mb-4">
          <a href="#hubs" class="btn btn-brand">Explore the Hubs <i class="bi bi-arrow-down-right ms-2"></i></a>
          <a href="{{ route('register') }}" class="btn btn-ghost-brand">Join Free</a>
        </div>
        <div class="d-flex align-items-center gap-3 flex-wrap">
          <div class="d-flex">
            <span class="rounded-circle bg-brand text-white d-grid" style="width:40px;height:40px;place-items:center;font-size:.9rem;border:3px solid #fff">👩🏽</span>
            <span class="rounded-circle bg-amber text-white d-grid ms-n3" style="width:40px;height:40px;place-items:center;font-size:.9rem;border:3px solid #fff">👨🏽‍💻</span>
            <span class="rounded-circle bg-brand-light text-white d-grid ms-n3" style="width:40px;height:40px;place-items:center;font-size:.9rem;border:3px solid #fff">👩🏻</span>
            <span class="rounded-circle d-grid ms-n3 text-white" style="width:40px;height:40px;place-items:center;font-size:.72rem;font-weight:700;border:3px solid #fff;background:#6750a4">GB</span>
          </div>
          <div>
            <div class="fw-bold" style="font-size:.95rem">Skills, scholarships &amp; artisans</div>
            <div class="stat-label">all in one free GB guide</div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 d-flex justify-content-center position-relative">
        <div class="floaty position-relative">
          <div class="phone-mock">
            <div class="phone-notch"></div>
            <div class="phone-screen p-3 pt-5">
              <div class="d-flex justify-content-between align-items-center mb-3 mt-2">
                <div>
                  <div style="font-size:.7rem;color:var(--muted)">Assalam-o-Alaikum 👋</div>
                  <div style="font-size:.95rem;font-weight:700">Explore GB Digital Hub</div>
                </div>
                <span class="rounded-circle bg-white d-grid" style="width:32px;height:32px;place-items:center;box-shadow:0 2px 8px rgba(0,0,0,.08)">🔔</span>
              </div>
              <div class="rounded-pill mb-3" style="background:#fff;border:1px solid rgba(0,106,96,.14);padding:8px 14px;font-size:.7rem;color:#8a9795">
                <i class="bi bi-search me-2"></i>Search courses, scholarships…
              </div>
              <div class="row g-2 mb-3">
                <div class="col-6"><div class="mini-grid-card"><span class="emoji">💻</span><span>Skills<br/>Academy</span></div></div>
                <div class="col-6"><div class="mini-grid-card"><span class="emoji">🎓</span><span>Scholarships<br/>&amp; Jobs</span></div></div>
                <div class="col-6"><div class="mini-grid-card"><span class="emoji">🧭</span><span>Career<br/>Roadmaps</span></div></div>
                <div class="col-6"><div class="mini-grid-card"><span class="emoji">🧣</span><span>Women's<br/>Market</span></div></div>
              </div>
              <div class="mini-grid-card mb-3" style="min-height:auto">
                <div class="d-flex justify-content-between align-items-center">
                  <span><span class="emoji">📚</span> Frontend Web Dev</span>
                  <span style="color:var(--brand)">65%</span>
                </div>
                <div class="progress-ph mt-2"><span style="width:65%"></span></div>
              </div>
              <div class="d-flex align-items-center gap-2" style="font-size:.68rem;color:#33413f">
                <span class="rounded-circle d-grid" style="width:24px;height:24px;background:rgba(0,168,150,.15);place-items:center">🤖</span>
                Career AI: "You'd shine in web development!"
              </div>
            </div>
          </div>
          <div class="float-card position-absolute d-flex align-items-center gap-2 px-3 py-2 floaty-slow" style="top:8%;left:-8%">
            <span style="font-size:1.2rem">⭐</span>
            <div>
              <div style="font-size:.8rem;font-weight:700">4.9 / 5.0</div>
              <div class="stat-label" style="font-size:.66rem">Course rating</div>
            </div>
          </div>
          <div class="float-card position-absolute d-flex align-items-center gap-2 px-3 py-2 floaty" style="bottom:10%;right:-6%">
            <span style="font-size:1.2rem">🎓</span>
            <div>
              <div style="font-size:.8rem;font-weight:700">120+ Scholarships</div>
              <div class="stat-label" style="font-size:.66rem">Fully funded</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-mountain">
    <svg viewBox="0 0 1440 90" preserveAspectRatio="none" style="width:100%;height:70px">
      <path fill="#ffffff" d="M0,70 L120,40 L260,66 L420,20 L560,58 L720,12 L880,54 L1030,26 L1180,60 L1320,34 L1440,64 L1440,90 L0,90 Z"></path>
    </svg>
  </div>
</header>

<!-- ============ STATS ============ -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row g-4 text-center">
      <div class="col-6 col-md-3">
        <div class="float-card p-4 h-100 reveal">
          <div class="stat-num"><span data-count="{{ $stats['courses'] }}">0</span>+</div>
          <div class="stat-label">Skill Courses</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="float-card p-4 h-100 reveal">
          <div class="stat-num"><span data-count="{{ $stats['opportunities'] }}">0</span>+</div>
          <div class="stat-label">Opportunities</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="float-card p-4 h-100 reveal">
          <div class="stat-num"><span data-count="{{ $stats['products'] }}">0</span>+</div>
          <div class="stat-label">Market Products</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="float-card p-4 h-100 reveal">
          <div class="stat-num"><span data-count="{{ $stats['roadmaps'] }}">0</span></div>
          <div class="stat-label">Career Roadmaps</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ EXPLORE THE HUBS ============ -->
<section class="py-5 bg-soft" id="hubs">
  <div class="container py-3">
    <div class="text-center mb-5 reveal">
      <span class="section-eyebrow">🌟 Platform</span>
      <h2 class="section-title mt-3">Everything you need in one Hub</h2>
      <p class="lead-soft mx-auto mt-2" style="max-width:620px">
        Five connected hubs that take you from learning to earning — designed
        offline-first for mountain connectivity.
      </p>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('skills') }}" class="text-decoration-none">
          <div class="hub-card reveal">
            <div class="icon-tile">💻</div>
            <span class="badge-soft align-self-start mb-2">6 Courses</span>
            <h3 style="color:var(--ink)">Skills Academy</h3>
            <p>Free courses in web development, design, freelancing and marketing — built for 3G phones.</p>
            <div class="card-arrow">Start learning <i class="bi bi-arrow-right ms-1"></i></div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('opportunities') }}" class="text-decoration-none">
          <div class="hub-card reveal">
            <div class="icon-tile" style="background:rgba(229,152,25,.12);border-color:rgba(229,152,25,.3)">🎓</div>
            <span class="badge-amber align-self-start mb-2">120+ Live</span>
            <h3 style="color:var(--ink)">Scholarships &amp; Jobs</h3>
            <p>Fully-funded scholarships, remote jobs and artisan grants — updated with real deadlines.</p>
            <div class="card-arrow">View opportunities <i class="bi bi-arrow-right ms-1"></i></div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('career-ai') }}" class="text-decoration-none">
          <div class="hub-card reveal">
            <div class="icon-tile" style="background:rgba(103,80,164,.1);border-color:rgba(103,80,164,.3)">🤖</div>
            <span class="badge-purple align-self-start mb-2">AI Powered</span>
            <h3 style="color:var(--ink)">Career AI</h3>
            <p>Not sure what to do after matric? Ask our AI advisor and get a personal career plan.</p>
            <div class="card-arrow">Ask a question <i class="bi bi-arrow-right ms-1"></i></div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('roadmaps') }}" class="text-decoration-none">
          <div class="hub-card reveal">
            <div class="icon-tile">🧭</div>
            <span class="badge-soft align-self-start mb-2">Step by step</span>
            <h3 style="color:var(--ink)">Career Roadmaps</h3>
            <p>Milestone-by-milestone paths for developers, freelancers and entrepreneurs.</p>
            <div class="card-arrow">See roadmaps <i class="bi bi-arrow-right ms-1"></i></div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('womens-hub') }}" class="text-decoration-none">
          <div class="hub-card reveal">
            <div class="icon-tile" style="background:rgba(224,36,94,.08);border-color:rgba(224,36,94,.25)">🧣</div>
            <span class="badge-soft align-self-start mb-2">Women first</span>
            <h3 style="color:var(--ink)">Women's Hub</h3>
            <p>Marketplace for shawls, honey, handicrafts and digital services by valley women.</p>
            <div class="card-arrow">Visit the market <i class="bi bi-arrow-right ms-1"></i></div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('dashboard') }}" class="text-decoration-none">
          <div class="hub-card reveal">
            <div class="icon-tile" style="background:rgba(0,122,94,.1);border-color:rgba(0,122,94,.3)">📊</div>
            <span class="badge-soft align-self-start mb-2">Your space</span>
            <h3 style="color:var(--ink)">My Dashboard</h3>
            <p>Track enrolled courses, roadmap milestones and saved opportunities in one place.</p>
            <div class="card-arrow">Open dashboard <i class="bi bi-arrow-right ms-1"></i></div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============ CONTINUE LEARNING ============ -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5 reveal">
        <span class="section-eyebrow">📚 Continue learning</span>
        <h2 class="section-title mt-3">Pick up right where you left off</h2>
        <p class="lead-soft mt-3">
          Your progress syncs even when the network drops — lessons cache on the
          phone and resume the moment you're back online.
        </p>
        <a href="{{ route('skills') }}" class="btn btn-brand mt-3">Browse all courses <i class="bi bi-arrow-right ms-2"></i></a>
      </div>
      <div class="col-lg-7 d-grid gap-3">
        @forelse ($featuredCourses as $course)
        <div class="card-soft p-4 hoverable reveal">
          <div class="d-flex align-items-center gap-3 flex-wrap">
            <div class="icon-tile mb-0" style="margin:0;flex:0 0 52px">{{ $course->is_enrolled ? '🎬' : '✨' }}</div>
            <div class="flex-grow-1" style="min-width:200px">
              <span class="badge-soft">{{ $course->category }}</span>
              <h3 style="font-size:1.02rem;margin:8px 0 4px">{{ $course->title }}</h3>
              <div class="stat-label">{{ $course->duration }} • {{ $course->lessons_count }} lessons • ⭐ {{ number_format($course->rating, 1) }}</div>
            </div>
            <div style="min-width:170px">
              @if ($course->is_enrolled)
                <div class="d-flex justify-content-between mb-1" style="font-size:.78rem;color:var(--muted)">
                  <span>Progress</span><span class="fw-bold text-brand">{{ $course->progress }}%</span>
                </div>
                <div class="progress-ph"><span style="width:{{ $course->progress }}%"></span></div>
                <a href="{{ route('skills') }}" class="btn btn-brand btn-sm w-100 mt-3">Continue <i class="bi bi-play-fill ms-1"></i></a>
              @else
                <a href="{{ route('skills') }}" class="btn btn-ghost-brand btn-sm w-100">Enroll Free <i class="bi bi-arrow-right ms-1"></i></a>
              @endif
            </div>
          </div>
        </div>
        @empty
        <div class="card-soft p-4 text-center">
          <p class="mb-2" style="color:var(--muted)">No courses yet — be the first to start!</p>
          <a href="{{ route('skills') }}" class="btn btn-brand btn-sm">Explore Skills Academy</a>
        </div>
        @endforelse
      </div>
    </div>
  </div>
</section>

<!-- ============ FEATURED OPPORTUNITIES (dark) ============ -->
<section class="py-5 dark-strip">
  <div class="container py-3">
    <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-4 reveal">
      <div>
        <span class="badge-amber mb-3">🎯 Featured this week</span>
        <h2 class="section-title text-white mt-2">Don't miss these opportunities</h2>
        <p class="mt-2 mb-0" style="color:#b9d4d0">Hand-picked scholarships, fellowships and grants for GB students.</p>
      </div>
      <div class="d-flex gap-3 flex-wrap">
        <a href="{{ route('opportunities') }}" class="btn btn-amber">View all <i class="bi bi-arrow-right ms-2"></i></a>
      </div>
    </div>
    <div class="row g-4">
      @forelse ($featuredOpportunities as $opportunity)
      <div class="col-md-6 col-lg-4">
        <div class="h-100 rounded-4 p-4 reveal" style="background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.12)">
          <span class="badge-soft mb-3">{{ $opportunity->type }}</span>
          <h3 style="font-size:1.02rem;color:#fff;margin:10px 0 6px">{{ $opportunity->title }}</h3>
          <div style="font-size:.82rem;color:#9fc4bf">{{ $opportunity->organization }}</div>
          <div class="d-flex flex-column gap-1 mt-3" style="font-size:.8rem;color:#d7e8e5">
            <div><i class="bi bi-calendar-event me-2 text-amber"></i>{{ $opportunity->deadline }}</div>
            <div><i class="bi bi-geo-alt me-2 text-amber"></i>{{ $opportunity->location }}</div>
            <div><i class="bi bi-patch-check me-2 text-amber"></i>{{ $opportunity->coverage }}</div>
          </div>
          <a href="{{ route('opportunities') }}" class="btn btn-amber btn-sm w-100 mt-4">Apply now</a>
        </div>
      </div>
      @empty
      <div class="col-12">
        <p class="text-center" style="color:#b9d4d0">New opportunities are on the way — check the full board soon.</p>
      </div>
      @endforelse
    </div>
  </div>
</section>

<!-- ============ CTA / NEWSLETTER ============ -->
<section class="py-5">
  <div class="container">
    <div class="rounded-5 p-4 p-md-5 text-center reveal" style="background:linear-gradient(135deg,rgba(0,106,96,.10),rgba(229,152,25,.10));border:1px solid rgba(0,106,96,.14)">
      <span class="section-eyebrow">🚀 Ready to start?</span>
      <h2 class="section-title mt-3">Your digital future begins today</h2>
      <p class="lead-soft mx-auto mt-2" style="max-width:560px">
        A free guide for learners and artisans across Gilgit-Baltistan. No fees, ever.
      </p>
      <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
        <a href="{{ route('register') }}" class="btn btn-brand">Create free account <i class="bi bi-arrow-right ms-2"></i></a>
        <a href="{{ route('contact') }}" class="btn btn-ghost-brand">Partner with us</a>
      </div>
      <form data-demo-form="newsletter" action="{{ route('newsletter.subscribe') }}" class="d-flex gap-2 justify-content-center mt-4 mx-auto" style="max-width:440px">
        <input type="email" name="email" class="input-soft" placeholder="Your email address" required />
        <button class="btn btn-brand" type="submit">Subscribe</button>
      </form>
    </div>
  </div>
</section>

@endsection
