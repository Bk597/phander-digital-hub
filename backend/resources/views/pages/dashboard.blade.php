@extends('layouts.app')

@section('title', 'My Dashboard')

@section('content')

<!-- WELCOME -->
<header class="hero pt-5">
  <div class="container position-relative pt-5 pb-5">
    <div class="row align-items-center g-4">
      <div class="col-lg-7">
        <span class="hero-badge mb-3">📊 My Dashboard</span>
        <h1 class="hero-title mb-2" style="font-size:clamp(1.7rem,3.4vw,2.4rem)">
          👋 Welcome, <span class="accent">{{ $user->name }}</span>
        </h1>
        <p class="lead-soft mb-0">
          Here's your learning journey — courses in progress, roadmap milestones
          and saved opportunities, all in one place.
        </p>
      </div>
      <div class="col-lg-5">
        <div class="row g-3 text-center">
          <div class="col-4">
            <div class="float-card p-3 h-100">
              <div class="stat-num" style="font-size:1.5rem">{{ $courses->count() }}</div>
              <div class="stat-label">Enrolled</div>
            </div>
          </div>
          <div class="col-4">
            <div class="float-card p-3 h-100">
              <div class="stat-num" style="font-size:1.5rem">{{ $savedOpportunities->count() }}</div>
              <div class="stat-label">Saved</div>
            </div>
          </div>
          <div class="col-4">
            <div class="float-card p-3 h-100">
              <div class="stat-num" style="font-size:1.5rem">{{ $products }}</div>
              <div class="stat-label">Listings</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-mountain">
    <svg viewBox="0 0 1440 90" preserveAspectRatio="none" style="width:100%;height:60px">
      <path fill="#ffffff" d="M0,70 L150,34 L310,64 L480,20 L650,58 L830,16 L1000,54 L1170,28 L1330,58 L1440,40 L1440,90 L0,90 Z"></path>
    </svg>
  </div>
</header>

<section class="py-5 bg-soft">
  <div class="container">
    <div class="row g-4">
      <!-- LEFT: courses + roadmaps -->
      <div class="col-lg-8">
        <!-- enrolled courses -->
        <div class="card-soft p-4 mb-4 reveal">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 style="font-size:1.1rem;margin:0">📚 My Courses</h2>
            <a href="{{ route('skills') }}" class="btn btn-ghost-brand btn-sm px-3">Browse more</a>
          </div>

          @php
            $ytMap = [
              'Frontend Web Development' => 'https://www.youtube.com/watch?v=nu_pCVPKzTk',
              'Freelance Mastery & Remote Work' => 'https://www.youtube.com/watch?v=DnetNoirovA',
              'UI/UX Design with Figma' => 'https://www.youtube.com/watch?v=mT_Jjn8RJdo',
              'Digital Marketing & Local E-Commerce' => 'https://www.youtube.com/playlist?list=PLEiEAq2VkUUJupNSQGmZIX_hIYnBV6Dna',
              'Python for Data & Automation' => 'https://www.youtube.com/watch?v=ix9cRaBkVe0',
              'Content Writing & SEO' => 'https://www.youtube.com/playlist?list=PLEiEAq2VkUUJcRzDRLS90PtiRQIDcV_7A',
            ];
          @endphp
          @forelse ($courses as $course)
            <div class="d-flex align-items-center gap-3 flex-wrap py-3 {{ !$loop->last ? 'border-bottom' : '' }}" style="border-color:rgba(0,106,96,.10) !important" data-course="{{ \Illuminate\Support\Str::slug($course->title) }}" data-cat="{{ $course->category }}" data-base="{{ (int) $course->progress }}">
              <div class="icon-tile mb-0" style="flex:0 0 46px;width:46px;height:46px;font-size:1.15rem">🎬</div>
              <div class="flex-grow-1" style="min-width:190px">
                <div class="fw-bold" style="font-size:.95rem">{{ $course->title }}</div>
                <div class="stat-label">{{ $course->category }} • {{ $course->duration }}</div>
              </div>
              <div style="min-width:160px">
                <div class="d-flex justify-content-between mb-1" style="font-size:.74rem;color:var(--muted)">
                  <span>Progress</span><span class="fw-bold text-brand" data-pct-label>{{ $course->progress }}%</span>
                </div>
                <div class="progress-ph"><span data-pct-bar style="width:{{ $course->progress }}%"></span></div>
              </div>
              <a href="{{ $ytMap[$course->title] ?? route('skills') }}" target="_blank" rel="noopener" class="btn btn-brand btn-sm px-3" data-continue>Continue</a>
            </div>
          @empty
            <div class="text-center py-4">
              <p style="color:var(--muted)" class="mb-2">You haven't enrolled in any course yet.</p>
              <a href="{{ route('skills') }}" class="btn btn-brand btn-sm">Start your first course</a>
            </div>
          @endforelse
        </div>

        <!-- roadmap progress -->
        <div class="card-soft p-4 reveal" data-progress-scope>
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 style="font-size:1.1rem;margin:0">🧭 Roadmap Progress</h2>
            <a href="{{ route('roadmaps') }}" class="btn btn-ghost-brand btn-sm px-3">Open roadmaps</a>
          </div>

          @forelse ($roadmaps as $roadmap)
            @php
              $doneCount = $roadmap->steps->where('is_done', true)->count();
              $totalSteps = $roadmap->steps->count();
              $percent = $totalSteps > 0 ? (int) round(($doneCount / $totalSteps) * 100) : 0;
            @endphp
            <div class="mb-4 {{ !$loop->last ? 'pb-3' : '' }}" style="border-bottom:{{ !$loop->last ? '1px solid rgba(0,106,96,.10)' : 'none' }}">
              <div class="d-flex align-items-center gap-2 mb-1">
                <span>{{ $roadmap->icon }}</span>
                <span class="fw-bold" style="font-size:.92rem">{{ $roadmap->title }}</span>
                <span class="ms-auto" style="font-size:.78rem;color:var(--muted)">
                  <span class="fw-bold text-brand">{{ $doneCount }}/{{ $totalSteps }}</span> milestones
                </span>
              </div>
              <div class="progress-ph"><span style="width:{{ $percent }}%"></span></div>
            </div>
          @empty
            <p class="mb-0" style="color:var(--muted)">No roadmaps yet.</p>
          @endforelse
        </div>
      </div>

      <!-- RIGHT: saved opps + profile -->
      <div class="col-lg-4">
        <!-- saved opportunities -->
        <div class="card-soft p-4 mb-4 reveal">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 style="font-size:1.1rem;margin:0">🔖 Saved Opportunities</h2>
          </div>

          @forelse ($savedOpportunities as $opportunity)
            <div class="d-flex gap-3 py-3 {{ !$loop->last ? 'border-bottom' : '' }}" style="border-color:rgba(0,106,96,.10) !important">
              <div class="icon-tile mb-0" style="flex:0 0 42px;width:42px;height:42px;font-size:1.1rem;margin:0">🎯</div>
              <div>
                <span class="badge-amber">{{ $opportunity->type }}</span>
                <div class="fw-bold mt-1" style="font-size:.88rem;line-height:1.4">{{ $opportunity->title }}</div>
                <div class="stat-label" style="font-size:.76rem">
                  <i class="bi bi-calendar-event me-1"></i>{{ $opportunity->deadline }}
                </div>
              </div>
            </div>
          @empty
            <div class="text-center py-3">
              <p style="color:var(--muted);font-size:.86rem" class="mb-2">Nothing saved yet.</p>
              <a href="{{ route('opportunities') }}" class="btn btn-ghost-brand btn-sm">Find opportunities</a>
            </div>
          @endforelse
        </div>

        <!-- profile -->
        <div class="card-soft p-4 text-center reveal">
          <span class="rounded-circle bg-brand text-white d-grid mx-auto mb-3" style="width:74px;height:74px;font-size:1.7rem;place-items:center">
            {{ strtoupper(substr($user->name, 0, 1)) }}
          </span>
          <h2 style="font-size:1.05rem;margin-bottom:2px">{{ $user->name }}</h2>
          <div class="stat-label mb-3">{{ $user->email }}</div>

          <div class="d-grid gap-2 text-start mb-3" style="font-size:.84rem;color:var(--muted)">
            <div><i class="bi bi-geo-alt me-2 text-brand"></i>Gilgit-Baltistan</div>
            <div><i class="bi bi-lightning-charge me-2 text-brand"></i>Member since {{ $user->created_at ? $user->created_at->format('M Y') : 'today' }}</div>
          </div>

          <hr class="divider-soft" />
          <div class="d-grid gap-2">
            <a href="{{ route('womens-hub') }}" class="btn btn-ghost-brand btn-sm">🧣 Visit Women's Hub</a>
            <a href="{{ route('career-ai') }}" class="btn btn-ghost-brand btn-sm">🤖 Ask Career AI</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
