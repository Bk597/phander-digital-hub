@extends('layouts.app')

@section('title', "Women's Hub")

@section('content')

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
          <div class="stat-num" style="font-size:1.7rem">{{ $products->count() }}</div>
          <div class="stat-label">Products Listed</div>
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
          <div class="stat-num" style="font-size:1.7rem">{{ $products->sum('likes') }}</div>
          <div class="stat-label">Total Likes</div>
        </div>
      </div>
    </div>

    <div class="card-soft p-3 p-md-4 mb-4 reveal">
      <div class="d-flex gap-2 flex-wrap justify-content-center">
        <button class="filter-chip active" data-filter-chip="all" aria-pressed="true">All</button>
        @foreach ($categories as $category)
          <button class="filter-chip" data-filter-chip="{{ $category }}" aria-pressed="false">{{ $category }}</button>
        @endforeach
      </div>
    </div>

    <div class="row g-4">
      @forelse ($products as $product)
      <div class="col-md-6 col-lg-4">
        <div class="card-soft p-4 h-100 hoverable reveal" data-searchable data-category="{{ $product->category }}">
          <div class="d-flex justify-content-between align-items-start mb-3">
            <span class="rounded-circle d-grid" style="width:56px;height:56px;font-size:1.7rem;background:rgba(0,168,150,.10);border:1px solid rgba(0,168,150,.2);place-items:center">
              {{ $product->emoji }}
            </span>
            <div class="d-flex align-items-center gap-1">
              <button type="button" class="like-btn {{ $product->is_favorite ? 'liked' : '' }}" aria-label="Like">
                {!! $product->is_favorite ? '&#9829;' : '&#9825;' !!}
              </button>
              <span class="like-count">{{ $product->likes }}</span>
            </div>
          </div>

          <span class="badge-amber mb-2">{{ $product->category }}</span>
          <h3 style="font-size:1rem;margin:10px 0 6px">{{ $product->title }}</h3>
          <div class="mb-2" style="font-size:.8rem;color:var(--brand);font-weight:600">
            {{ $product->creator_name }} • {{ $product->village }}
          </div>
          <div class="fw-bold mb-2" style="font-size:1.05rem;color:var(--ink)">{{ $product->price }}</div>
          <p style="color:var(--muted);font-size:.85rem;line-height:1.6;flex:1">{{ $product->description }}</p>

          <hr class="divider-soft my-3" />
          <div class="d-flex align-items-center justify-content-between gap-2">
            <small style="color:var(--muted);font-size:.74rem">
              <i class="bi bi-whatsapp me-1"></i>{{ \Illuminate\Support\Str::before($product->contact, ':') }}
            </small>
            <a href="{{ route('contact') }}" class="btn btn-brand btn-sm px-3">Contact</a>
          </div>
        </div>
      </div>
      @empty
      <div class="col-12">
        <div class="card-soft p-5 text-center">
          <div style="font-size:2.5rem">🧣</div>
          <h3 class="mt-3">The marketplace is warming up</h3>
          <p class="mb-0" style="color:var(--muted)">Products from valley artisans will appear here shortly.</p>
        </div>
      </div>
      @endforelse
    </div>
  </div>
</section>

@endsection
