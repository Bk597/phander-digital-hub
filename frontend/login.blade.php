<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Log In — GB Digital Hub</title>
  <meta name="description" content="Log in to GB Digital Hub — continue your courses, roadmaps and Women's Hub stall." />
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

  <div class="auth-wrap">
    <!-- branding side -->
    <aside class="auth-side auth-side-login">
      <a href="index.html" style="display:inline-block;align-self:flex-start;background:#fff;border-radius:14px;padding:10px 16px;line-height:0"><img src="assets/img/logo.png" alt="GB Digital Hub" style="height:46px;width:auto;display:block" /></a>
      <h1 class="mt-4 mb-3" style="font-size:2.2rem;line-height:1.25;color:#fff">
        Welcome back to<br />your journey.
      </h1>
      <p style="color:#b9d4d0;font-size:.95rem;max-width:420px">
        Pick up your courses, milestones and saved opportunities right where
        you left them.
      </p>

      <div class="mt-4">
        <div class="benefit">
          <span class="tick">✓</span>
          <div>
            <div class="fw-semibold" style="font-size:.92rem">Track your progress</div>
            <div style="font-size:.82rem;color:#9fc4bf">Courses &amp; roadmap milestones, saved offline.</div>
          </div>
        </div>
        <div class="benefit">
          <span class="tick">✓</span>
          <div>
            <div class="fw-semibold" style="font-size:.92rem">Never miss a deadline</div>
            <div style="font-size:.82rem;color:#9fc4bf">Your saved scholarships &amp; jobs stay in one list.</div>
          </div>
        </div>
        <div class="benefit">
          <span class="tick">✓</span>
          <div>
            <div class="fw-semibold" style="font-size:.92rem">Your Women's Hub stall</div>
            <div style="font-size:.82rem;color:#9fc4bf">Manage product listings and buyer contacts.</div>
          </div>
        </div>
      </div>

      <div class="mt-5" style="font-size:.78rem;color:#7da39e">
        New here? <a href="register.html" style="color:#7fe3d6;font-weight:600">Create a free account →</a>
      </div>
    </aside>

    <!-- form side -->
    <main class="d-flex align-items-center justify-content-center p-4 p-md-5" style="background:#fbfdfc">
      <div class="card-soft p-4 p-md-5 w-100" style="max-width:480px">
        <span class="hero-badge mb-3">🔐 Secure login</span>
        <h1 style="font-size:1.7rem;font-weight:800;margin-bottom:6px">Welcome back</h1>
        <p class="lead-soft mb-4" style="font-size:.92rem">Log in to continue your learning journey.</p>

        <div id="formError" class="alert alert-danger py-2 d-none" style="font-size:.86rem"></div>

        <form id="loginForm" class="d-grid gap-3">
          <div>
            <label class="fw-semibold mb-1" style="font-size:.84rem" for="lEmail">Email Address</label>
            <input type="email" class="input-soft" id="lEmail" name="email"
                   placeholder="you@example.com" required autofocus />
          </div>
          <div>
            <label class="fw-semibold mb-1" style="font-size:.84rem" for="lPassword">Password</label>
            <input type="password" class="input-soft" id="lPassword" name="password" placeholder="••••••••" required />
          </div>
          <div class="d-flex justify-content-between align-items-center" style="font-size:.82rem;color:var(--muted)">
            <label class="d-flex align-items-center gap-2 mb-0" style="cursor:pointer">
              <input type="checkbox" name="remember" value="1" style="accent-color:var(--brand)" /> Remember me
            </label>
            <a href="#" style="color:var(--brand);text-decoration:none">Forgot password?</a>
          </div>

          <button class="btn btn-brand w-100 mt-1" type="submit">
            Log In <i class="bi bi-arrow-right ms-2"></i>
          </button>
        </form>

        <hr class="divider-soft my-4" />
        <p class="text-center mb-0" style="font-size:.88rem;color:var(--muted)">
          New to GB Digital Hub?
          <a href="register.html" style="color:var(--brand);font-weight:700;text-decoration:none">Create a free account</a>
        </p>
        <p class="text-center mt-3 mb-0" style="font-size:12px;color:#9aa8a6">
          Demo: test@example.com / password
        </p>
        <p class="text-center mt-2 mb-0" style="font-size:.78rem">
          <a href="index.html" style="color:var(--muted)">← Back to home</a>
        </p>
      </div>
    </main>
  </div>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    // Static demo login → session localStorage me (real auth Laravel site :8000 pe hai)
    document.getElementById('loginForm').addEventListener('submit', async (e) => {
      e.preventDefault();
      const form = e.target;
      const btn = form.querySelector('button[type="submit"]');
      const errBox = document.getElementById('formError');
      const email = form.email.value.trim();
      const password = form.password.value;

      if (!email || !password) return;
      if (password.length < 6) {
        errBox.textContent = 'Password must be at least 6 characters.';
        errBox.classList.remove('d-none');
        return;
      }
      errBox.classList.add('d-none');
      btn.disabled = true;
      btn.innerHTML = 'Logging in…';

      const demoName = email.split('@')[0].replace(/[._-]+/g, ' ').replace(/\b\w/g, (c) => c.toUpperCase());
      localStorage.setItem('ph_user', JSON.stringify({ name: demoName, email }));
      showToast('Welcome back, ' + demoName + '! 🎉');
      setTimeout(() => { location.href = 'dashboard.html'; }, 700);
    });
  </script>
</body>
</html>
