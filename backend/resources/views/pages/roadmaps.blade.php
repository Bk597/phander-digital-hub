@extends('layouts.app')

@section('title', 'Career Roadmaps')

@section('content')

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

    @forelse ($roadmaps as $roadmap)
      @php
        $doneCount = $roadmap->steps->where('is_done', true)->count();
        $totalSteps = $roadmap->steps->count();
        $percent = $totalSteps > 0 ? (int) round(($doneCount / $totalSteps) * 100) : 0;
        $panelId = 'rm-panel-' . $roadmap->id;
      @endphp
      <div class="card-soft p-4 mb-4 reveal" data-progress-scope>
        <div class="d-flex align-items-start gap-3 flex-wrap">
          <div class="icon-tile mb-0" style="flex:0 0 52px">{{ $roadmap->icon }}</div>
          <div class="flex-grow-1" style="min-width:240px">
            <div class="d-flex align-items-center gap-2 flex-wrap">
              <h3 style="font-size:1.1rem;margin:0">{{ $roadmap->title }}</h3>
              <span class="badge-soft"><i class="bi bi-clock me-1"></i>{{ $roadmap->duration }}</span>
            </div>
            <p class="mb-0 mt-1" style="color:var(--muted);font-size:.87rem">{{ $roadmap->description }}</p>
          </div>
          <button type="button" class="btn btn-ghost-brand btn-sm px-3"
                  data-roadmap-toggle="{{ $panelId }}" aria-expanded="false">
            View steps <i class="bi bi-chevron-down ms-1" style="display:inline-block"></i>
          </button>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-3 mb-1" style="font-size:.78rem;color:var(--muted)">
          <span>Your progress</span>
          <span class="fw-bold text-brand" data-progress-label>{{ $doneCount }}/{{ $totalSteps }} milestones</span>
        </div>
        <div class="progress-ph"><span style="width:{{ $percent }}%"></span></div>

        <div class="roadmap-panel mt-4 pt-3" id="{{ $panelId }}">
          <hr class="divider-soft" />
          @foreach ($roadmap->steps as $index => $step)
            <div class="timeline-item {{ $step->is_done ? 'done' : '' }}">
              <div class="timeline-bullet">{{ $index + 1 }}</div>
              <div class="flex-grow-1">
                <div class="d-flex align-items-start justify-content-between gap-3">
                  <div>
                    <h5>{{ $step->title }}</h5>
                    <p>{{ $step->description }}</p>
                  </div>
                  <input type="checkbox" class="milestone-check" data-milestone
                         {{ $step->is_done ? 'checked' : '' }}
                         style="width:18px;height:18px;accent-color:var(--brand);margin-top:4px;cursor:pointer;flex:0 0 18px" />
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    @empty
      <div class="card-soft p-5 text-center">
        <div style="font-size:2.5rem">🧭</div>
        <h3 class="mt-3">Roadmaps are being drafted</h3>
        <p class="mb-0" style="color:var(--muted)">Fresh step-by-step paths are on the way — check back soon.</p>
      </div>
    @endforelse
  </div>
</section>

@endsection
