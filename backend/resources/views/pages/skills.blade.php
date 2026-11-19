@extends('layouts.app')

@section('title', 'Skills Academy')

@section('content')

<!-- HEADER -->
<header class="hero pt-5">
  <div class="container position-relative pt-5 pb-5 text-center" style="max-width:820px">
    <span class="hero-badge mb-3">📚 Skills Academy</span>
    <h1 class="hero-title mb-3">Learn skills that <span class="accent">pay the bills</span></h1>
    <p class="lead-soft mb-0">
      Free, offline-first courses built for mountain connectivity — taught by
      professionals from Gilgit-Baltistan who know valley realities.
    </p>
  </div>
  <div class="hero-mountain">
    <svg viewBox="0 0 1440 90" preserveAspectRatio="none" style="width:100%;height:60px">
      <path fill="#ffffff" d="M0,70 L140,36 L300,64 L470,24 L640,60 L820,16 L980,56 L1140,30 L1300,58 L1440,40 L1440,90 L0,90 Z"></path>
    </svg>
  </div>
</header>

<!-- STATS -->
<section class="pt-5 pb-4 bg-white">
  <div class="container">
    <div class="row g-3 text-center">
      <div class="col-sm-4">
        <div class="float-card p-3">
          <div class="stat-num" style="font-size:1.7rem">{{ $courses->count() }}</div>
          <div class="stat-label">Expert Courses</div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="float-card p-3">
          <div class="stat-num" style="font-size:1.7rem">{{ $categories->count() }}</div>
          <div class="stat-label">Categories</div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="float-card p-3">
          <div class="stat-num" style="font-size:1.7rem">{{ $courses->where('is_enrolled', true)->count() }}</div>
          <div class="stat-label">Continue Learning</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SEARCH + FILTERS + COURSES -->
<section class="py-5 bg-soft">
  <div class="container">
    <div class="card-soft p-3 p-md-4 mb-4 reveal">
      <div class="row g-3 align-items-center">
        <div class="col-lg-5">
          <div class="position-relative">
            <i class="bi bi-search position-absolute" style="left:14px;top:50%;transform:translateY(-50%);color:var(--brand)"></i>
            <input type="search" class="input-soft" style="padding-left:42px" placeholder="Search courses, skills, instructors…" data-search-input />
          </div>
        </div>
        <div class="col-lg-7">
          <div class="d-flex gap-2 flex-wrap justify-content-lg-end">
            <button class="filter-chip active" data-filter-chip="all" aria-pressed="true">All</button>
            @foreach ($categories as $category)
              <button class="filter-chip" data-filter-chip="{{ $category }}" aria-pressed="false">{{ $category }}</button>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="row g-4">
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
      <div class="col-md-6 col-lg-4">
        <div class="card-soft p-4 h-100 hoverable reveal" data-searchable data-category="{{ $course->category }}" data-course="{{ \Illuminate\Support\Str::slug($course->title) }}" data-cat="{{ $course->category }}" data-base="{{ (int) $course->progress }}">
          <div class="d-flex justify-content-between align-items-start mb-3">
            <div class="icon-tile mb-0">
              @switch($course->category)
                @case('Tech & Coding') 💻 @break
                @case('Freelancing') 🌐 @break
                @case('Design') 🎨 @break
                @case('Business') 📈 @break
                @default 📚
              @endswitch
            </div>
            <span class="badge-soft">⭐ {{ number_format($course->rating, 1) }}</span>
          </div>
          <span class="badge-amber mb-2">{{ $course->category }}</span>
          <h3 style="font-size:1.05rem;margin:10px 0 8px">{{ $course->title }}</h3>
          <p style="color:var(--muted);font-size:.86rem;line-height:1.65;flex:1">{{ $course->description }}</p>

          <div class="d-flex gap-3 flex-wrap mb-3" style="font-size:.78rem;color:var(--muted)">
            <span><i class="bi bi-clock me-1"></i>{{ $course->duration }}</span>
            <span><i class="bi bi-play-circle me-1"></i>{{ $course->lessons_count }} lessons</span>
          </div>

          <div class="d-flex justify-content-between mb-1" style="font-size:.76rem;color:var(--muted)">
            <span>Progress</span><span class="fw-bold text-brand" data-pct-label>{{ $course->progress }}%</span>
          </div>
          <div class="progress-ph mb-3"><span data-pct-bar style="width:{{ $course->progress }}%"></span></div>

          <hr class="divider-soft my-3" />
          <div class="d-flex align-items-center justify-content-center gap-2">
            <a href="{{ $ytMap[$course->title] ?? '#' }}" target="_blank" rel="noopener" class="btn btn-brand btn-sm px-3" data-continue>Continue <i class="bi bi-play-fill ms-1"></i></a>
          </div>
        </div>
      </div>
      @empty
      <div class="col-12">
        <div class="card-soft p-5 text-center">
          <div style="font-size:2.5rem">📚</div>
          <h3 class="mt-3">No courses found</h3>
          <p class="mb-0" style="color:var(--muted)">Try another search or category — new courses drop every month.</p>
        </div>
      </div>
      @endforelse
    </div>
  </div>
</section>

@endsection
