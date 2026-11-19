@extends('layouts.app')

@section('title', 'Scholarships & Jobs')

@section('content')

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
          <div class="stat-num" style="font-size:1.7rem">{{ $opportunities->count() }}</div>
          <div class="stat-label">Live Opportunities</div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="float-card p-3">
          <div class="stat-num" style="font-size:1.7rem">{{ $types->count() }}</div>
          <div class="stat-label">Types</div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="float-card p-3">
          <div class="stat-num" style="font-size:1.7rem">{{ $opportunities->where('is_saved', true)->count() }}</div>
          <div class="stat-label">Saved by You</div>
        </div>
      </div>
    </div>

    <div class="card-soft p-3 p-md-4 mb-4 reveal">
      <div class="d-flex gap-2 flex-wrap justify-content-center">
        <button class="filter-chip active" data-opp-filter="all" aria-pressed="true">All</button>
        @foreach ($types as $type)
          <button class="filter-chip" data-opp-filter="{{ $type }}" aria-pressed="false">{{ $type }}</button>
        @endforeach
      </div>
    </div>

    <div class="row g-4">
      @forelse ($opportunities as $opportunity)
      <div class="col-md-6">
        <div class="card-soft p-4 h-100 hoverable reveal" data-opp-type="{{ $opportunity->type }}">
          <div class="d-flex justify-content-between align-items-start gap-3 mb-3">
            <div class="d-flex align-items-center gap-2 flex-wrap">
              <span class="badge-amber">{{ $opportunity->type }}</span>
              @if ($opportunity->is_featured)
                <span class="badge-purple">⭐ Featured</span>
              @endif
            </div>
            <button type="button"
                    class="btn btn-sm px-3 save-opp {{ $opportunity->is_saved ? 'btn-brand' : 'btn-ghost-brand' }}"
                    data-saved="{{ $opportunity->is_saved ? 'true' : 'false' }}">
              {!! $opportunity->is_saved
                  ? 'Saved <i class="bi bi-bookmark-check-fill ms-1"></i>'
                  : 'Save <i class="bi bi-bookmark ms-1"></i>' !!}
            </button>
          </div>

          <h3 style="font-size:1.08rem;margin:0 0 6px">{{ $opportunity->title }}</h3>
          <div class="mb-3" style="font-size:.84rem;color:var(--brand);font-weight:600">{{ $opportunity->organization }}</div>

          <div class="d-grid gap-2 mb-3" style="font-size:.84rem;color:var(--muted)">
            <div><i class="bi bi-calendar-event me-2 text-brand"></i><strong>Deadline:</strong> {{ $opportunity->deadline }}</div>
            <div><i class="bi bi-patch-check me-2 text-brand"></i><strong>Coverage:</strong> {{ $opportunity->coverage }}</div>
            <div><i class="bi bi-geo-alt me-2 text-brand"></i><strong>Location:</strong> {{ $opportunity->location }}</div>
          </div>

          <p style="color:var(--muted);font-size:.86rem;line-height:1.65">{{ $opportunity->description }}</p>
          @if ($opportunity->apply_url)
            <a href="{{ $opportunity->apply_url }}" target="_blank" rel="noopener" style="font-size:.8rem;color:var(--brand);font-weight:600;text-decoration:none">Details &amp; eligibility <i class="bi bi-box-arrow-up-right ms-1"></i></a>
          @endif

          <hr class="divider-soft my-3" />
          <div class="d-flex gap-2 flex-wrap">
            <a href="{{ route('apply', ['title' => $opportunity->title, 'type' => $opportunity->type]) }}" class="btn btn-brand btn-sm">Apply now <i class="bi bi-arrow-right ms-1"></i></a>
            <a href="{{ route('contact') }}" class="btn btn-ghost-brand btn-sm">Ask details</a>
          </div>
        </div>
      </div>
      @empty
      <div class="col-12">
        <div class="card-soft p-5 text-center">
          <div style="font-size:2.5rem">🎯</div>
          <h3 class="mt-3">No opportunities yet</h3>
          <p class="mb-0" style="color:var(--muted)">We add new scholarships and jobs every week — check back soon.</p>
        </div>
      </div>
      @endforelse
    </div>
  </div>
</section>

@endsection
