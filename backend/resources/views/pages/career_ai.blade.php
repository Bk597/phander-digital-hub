@extends('layouts.app')

@section('title', 'Career AI')

@section('content')

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

@endsection
