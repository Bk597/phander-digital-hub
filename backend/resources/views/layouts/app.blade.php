<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'GB Digital Hub') @if(trim($__env->yieldContent('title', '')) !== '') — GB Digital Hub @endif</title>
  <meta name="description" content="@yield('meta_description', 'GB Digital Hub — Free digital skills courses, scholarships, career AI advisor, roadmaps and Women’s Marketplace for mountain youth and women of Gilgit-Baltistan.')" />
  <link rel="icon" href="{{ asset('assets/img/logo.png') }}" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/vendor/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    /* Tailwind preflight OFF: iska reset Bootstrap ki styling (headings, navbar) ko override kar raha tha */
    tailwind.config = { corePlugins: { preflight: false } };
  </script>
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
  @stack('head')
</head>
<body class="@yield('body_class')">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-xl fixed-top ph-navbar py-2">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="GB Digital Hub" /></a>
      <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav mx-auto gap-1">
          @php
            $navItems = [
                '/' => 'Home',
                '/skills' => 'Skills',
                '/opportunities' => 'Scholarships',
                '/roadmaps' => 'Roadmaps',
                '/womens-hub' => "Women's Hub",
                '/career-ai' => 'Career AI',
                '/about' => 'About',
                '/contact' => 'Contact',
            ];
            $currentPath = request()->path();
          @endphp
          @foreach ($navItems as $path => $label)
            @php
              $isActive = $path === '/' ? $currentPath === '/' : str_starts_with($currentPath, trim($path, '/'));
            @endphp
            <li class="nav-item">
              <a class="nav-link {{ $isActive ? 'active' : '' }}" href="{{ $path }}">{{ $label }}</a>
            </li>
          @endforeach
        </ul>
        <div class="d-flex align-items-center gap-2">
          @auth
            <span class="badge-soft d-none d-md-inline-block">🔔 3</span>
            <a href="{{ route('dashboard') }}" class="btn btn-ghost-brand btn-sm px-3">
              <i class="bi bi-person-circle me-1"></i>{{ \Illuminate\Support\Str::of(auth()->user()->name)->before(' ') }}
            </a>
            <a href="#" class="btn btn-brand btn-sm px-3" id="logoutBtn"><i class="bi bi-box-arrow-right me-1"></i>Logout</a>
          @else
            <a href="{{ route('login') }}" class="btn btn-ghost-brand btn-sm px-3">Log in</a>
            <a href="{{ route('register') }}" class="btn btn-brand btn-sm px-3">Join Free</a>
          @endauth
        </div>
      </div>
    </div>
  </nav>

  @yield('content')

  <!-- FOOTER -->
  @include('partials.footer')

  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  @auth
  <script>
    // Logout → POST /logout (Laravel)
    document.getElementById('logoutBtn')?.addEventListener('click', async (e) => {
      e.preventDefault();
      try {
        await fetch('{{ route('logout') }}', {
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Accept': 'application/json'
          }
        });
      } catch (_) {}
      location.href = '/';
    });
  </script>
  @endauth
  @stack('scripts')
</body>
</html>
