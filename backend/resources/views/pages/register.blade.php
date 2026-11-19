<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Join Free — GB Digital Hub</title>
  <meta name="description" content="Create your free GB Digital Hub account — courses, scholarships, roadmaps and Women's Hub." />
  <link rel="icon" href="{{ asset('assets/img/logo.png') }}" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/vendor/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = { corePlugins: { preflight: false } };
  </script>
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>
<body>

  <div class="auth-wrap">
    <!-- branding side -->
    <aside class="auth-side auth-side-register">
      <a href="{{ route('home') }}" style="display:inline-block;align-self:flex-start;background:#fff;border-radius:14px;padding:10px 16px;line-height:0"><img src="{{ asset('assets/img/logo.png') }}" alt="GB Digital Hub" style="height:46px;width:auto;display:block" /></a>
      <h1 class="mt-4 mb-3" style="font-size:2.2rem;line-height:1.25;color:#fff">
        Start your digital<br />journey — free.
      </h1>
      <p style="color:#eafffb;font-size:.95rem;max-width:420px">
        Free guides for learners and artisans across Gilgit-Baltistan. No fee, ever.
      </p>

      <div class="mt-4">
        <div class="benefit">
          <span class="tick">✓</span>
          <div>
            <div class="fw-semibold" style="font-size:.92rem;color:#fff">Free courses &amp; roadmaps</div>
            <div style="font-size:.82rem;color:#eafffb">Web, design, freelancing and more — offline-first.</div>
          </div>
        </div>
        <div class="benefit">
          <span class="tick">✓</span>
          <div>
            <div class="fw-semibold" style="font-size:.92rem;color:#fff">Scholarship alerts</div>
            <div style="font-size:.82rem;color:#eafffb">Save fully-funded opportunities before deadlines hit.</div>
          </div>
        </div>
        <div class="benefit">
          <span class="tick">✓</span>
          <div>
            <div class="fw-semibold" style="font-size:.92rem;color:#fff">Women's Hub marketplace</div>
            <div style="font-size:.82rem;color:#eafffb">List your products and reach buyers nationwide.</div>
          </div>
        </div>
      </div>

      <div class="mt-5" style="font-size:.78rem;color:rgba(255,255,255,.75)">
        Already registered? <a href="{{ route('login') }}" style="color:#fff;font-weight:700">Log in →</a>
      </div>
    </aside>

    <!-- form side -->
    <main class="d-flex align-items-center justify-content-center p-4 p-md-5" style="background:#fbfdfc">
      <div class="card-soft p-4 p-md-5 w-100" style="max-width:560px">
        <span class="hero-badge mb-3">🌱 Free forever for GB students</span>
        <h1 style="font-size:1.7rem;font-weight:800;margin-bottom:6px">Create your account</h1>
        <p class="lead-soft mb-4" style="font-size:.92rem">Takes less than a minute — then the whole Hub unlocks.</p>

        @if ($errors->any())
          <div class="alert alert-danger py-2" style="font-size:.86rem">{{ $errors->first() }}</div>
        @endif
        <div id="formError" class="alert alert-danger py-2 d-none" style="font-size:.86rem"></div>

        <form id="registerForm" action="{{ route('register.attempt') }}" method="POST" class="d-grid gap-3">
          <div>
            <label class="fw-semibold mb-1" style="font-size:.84rem" for="rName">Your Name *</label>
            <input type="text" class="input-soft" id="rName" name="name"
                   value="{{ old('name') }}" placeholder="e.g. Khalida Begum" required autofocus />
          </div>
          <div>
            <label class="fw-semibold mb-1" style="font-size:.84rem" for="rEmail">Email Address *</label>
            <input type="email" class="input-soft" id="rEmail" name="email"
                   value="{{ old('email') }}" placeholder="you@example.com" required />
          </div>
          <div class="row g-3">
            <div class="col-sm-6">
              <label class="fw-semibold mb-1" style="font-size:.84rem" for="rPhone">Phone / WhatsApp</label>
              <input type="tel" class="input-soft" id="rPhone" name="phone"
                     value="{{ old('phone') }}" placeholder="+92 3XX XXXXXXX" />
            </div>
            <div class="col-sm-6">
              <label class="fw-semibold mb-1" style="font-size:.84rem" for="rLocation">Village / Location</label>
              <input type="text" class="input-soft" id="rLocation" name="location"
                     value="{{ old('location') }}" placeholder="e.g. Gilgit / Skardu" />
            </div>
          </div>
          <div class="row g-3">
            <div class="col-sm-6">
              <label class="fw-semibold mb-1" style="font-size:.84rem" for="rPassword">Password *</label>
              <input type="password" class="input-soft" id="rPassword" name="password" placeholder="Min. 8 characters" required minlength="8" />
            </div>
            <div class="col-sm-6">
              <label class="fw-semibold mb-1" style="font-size:.84rem" for="rPassword2">Confirm Password *</label>
              <input type="password" class="input-soft" id="rPassword2" name="password_confirmation" placeholder="Repeat password" required minlength="8" />
            </div>
          </div>

          <div>
            <label class="fw-semibold mb-1" style="font-size:.84rem" for="rGoal">Primary learning goal</label>
            <select class="input-soft" id="rGoal" name="goal">
              <option value="Learn tech & coding skills" {{ old('goal') === 'Learn tech & coding skills' ? 'selected' : '' }}>💻 Learn tech &amp; coding skills</option>
              <option value="Start freelancing & earn remotely" {{ old('goal') === 'Start freelancing & earn remotely' ? 'selected' : '' }}>🌐 Start freelancing &amp; earn remotely</option>
              <option value="Sell handmade products (Women's Hub)" {{ old('goal') === "Sell handmade products (Women's Hub)" ? 'selected' : '' }}>🧣 Sell handmade products (Women's Hub)</option>
              <option value="Find scholarships & grants" {{ old('goal') === 'Find scholarships & grants' ? 'selected' : '' }}>🎓 Find scholarships &amp; grants</option>
            </select>
          </div>

          <label class="d-flex align-items-start gap-2" style="font-size:.8rem;color:var(--muted);cursor:pointer">
            <input type="checkbox" required style="accent-color:var(--brand);margin-top:3px" />
            <span>I agree to the <a href="#" style="color:var(--brand)">Terms of Service</a> &amp; <a href="#" style="color:var(--brand)">Privacy Policy</a></span>
          </label>

          <button class="btn btn-brand w-100 mt-1" type="submit">
            Create free account <i class="bi bi-arrow-right ms-2"></i>
          </button>
        </form>

        <hr class="divider-soft my-4" />
        <p class="text-center mb-0" style="font-size:.88rem;color:var(--muted)">
          Already have an account?
          <a href="{{ route('login') }}" style="color:var(--brand);font-weight:700;text-decoration:none">Log in</a>
        </p>
        <p class="text-center mt-2 mb-0" style="font-size:.78rem">
          <a href="{{ route('home') }}" style="color:var(--muted)">← Back to home</a>
        </p>
      </div>
    </main>
  </div>

  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script>
    // Register → POST /register (JSON API)
    document.getElementById('registerForm').addEventListener('submit', async (e) => {
      e.preventDefault();
      const form = e.target;
      const btn = form.querySelector('button[type="submit"]');
      const errBox = document.getElementById('formError');
      errBox.classList.add('d-none');
      btn.disabled = true;
      btn.innerHTML = 'Creating account…';
      try {
        const res = await fetch(form.action, {
          method: 'POST',
          body: new FormData(form),
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Accept': 'application/json'
          }
        });
        const data = await res.json().catch(() => ({}));
        if (res.ok && data.redirect) { location.href = data.redirect; return; }
        const msg = data.errors ? Object.values(data.errors).flat()[0] : (data.message || 'Registration failed. Please try again.');
        errBox.textContent = msg;
        errBox.classList.remove('d-none');
      } catch (_) {
        errBox.textContent = 'Network error — please try again.';
        errBox.classList.remove('d-none');
      }
      btn.disabled = false;
      btn.innerHTML = 'Create free account <i class="bi bi-arrow-right ms-2"></i>';
    });
  </script>
</body>
</html>
