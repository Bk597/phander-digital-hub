@extends('layouts.app')

@section('title', 'Contact Us')
@section('meta_description', 'Get in touch with the GB Digital Hub team — questions about courses, scholarships, partnerships or the Women’s Hub.')

@section('content')
  <header class="hero pt-5">
    <div class="container position-relative pt-5 pb-4">
      <div class="pt-4 text-center mx-auto" style="max-width:720px">
        <span class="hero-badge mb-3">📬 Contact Us</span>
        <h1 class="hero-title mb-3">We'd love to <span class="accent">hear from you</span></h1>
        <p class="lead-soft">
          Questions about courses, scholarships, partnerships or listing your products?
          Our team replies within 24 hours.
        </p>
      </div>
    </div>
  </header>

  <section class="py-5">
    <div class="container">
      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          ✅ {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      @endif

      <div class="row g-4">
        <div class="col-lg-4">
          <div class="card-soft p-4 mb-4">
            <h3 style="font-size:1.05rem">Reach us directly</h3>
            <ul class="list-unstyled d-grid gap-3 mt-3 mb-0" style="font-size:.9rem">
              <li class="d-flex gap-3">
                <span class="icon-tile mb-0" style="margin-bottom:0 !important;width:44px;height:44px;font-size:1.1rem">📍</span>
                <div><strong>Office</strong><br /><span class="text-muted">Gilgit-Baltistan</span></div>
              </li>
              <li class="d-flex gap-3">
                <span class="icon-tile mb-0" style="margin-bottom:0 !important;width:44px;height:44px;font-size:1.1rem">📧</span>
                <div><strong>Email</strong><br /><a href="mailto:bkhalida275@gmail.com" class="text-brand text-decoration-none">bkhalida275@gmail.com</a></div>
              </li>
              <li class="d-flex gap-3">
                <span class="icon-tile mb-0" style="margin-bottom:0 !important;width:44px;height:44px;font-size:1.1rem">📞</span>
                <div><strong>Phone / WhatsApp</strong><br /><a href="tel:+923459821430" class="text-brand text-decoration-none">+92 345 9821430</a></div>
              </li>
              <li class="d-flex gap-3">
                <span class="icon-tile mb-0" style="margin-bottom:0 !important;width:44px;height:44px;font-size:1.1rem">🕘</span>
                <div><strong>Hours</strong><br /><span class="text-muted">Mon – Sat, 9:00 AM – 6:00 PM PKT</span></div>
              </li>
            </ul>
          </div>

          <div class="rounded-4 p-4 text-white" style="background:linear-gradient(135deg,var(--brand),var(--brand-light))">
            <div style="font-size:1.8rem">💬</div>
            <h3 class="text-white mt-2" style="font-size:1.02rem">Fastest reply on WhatsApp</h3>
            <p style="color:#d7f3ee;font-size:.88rem">
              For quick questions about scholarships or orders, message us directly.
            </p>
            <a href="https://wa.me/923459821430" target="_blank" rel="noopener"
               class="btn btn-light btn-sm fw-bold rounded-pill">
              <i class="bi bi-whatsapp me-1"></i> Chat on WhatsApp
            </a>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="card-soft p-4 p-md-5">
            <h3 style="font-size:1.2rem">Send us a message</h3>
            <p class="text-muted" style="font-size:.9rem">Fill in the form below and we'll get back to you soon.</p>

            @if ($errors->any())
              <div class="alert alert-danger py-2" style="font-size:.86rem">
                {{ $errors->first() }}
              </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="row g-3 mt-2">
              @csrf
              <div class="col-md-6">
                <label class="form-label" for="cName">Full Name *</label>
                <input type="text" class="form-control" id="cName" name="name"
                       value="{{ old('name') }}" placeholder="e.g. Khalida Begum" required />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="cEmail">Email Address *</label>
                <input type="email" class="form-control" id="cEmail" name="email"
                       value="{{ old('email') }}" placeholder="you@example.com" required />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="cPhone">Phone / WhatsApp</label>
                <input type="tel" class="form-control" id="cPhone" name="phone"
                       value="{{ old('phone') }}" placeholder="+92 3XX XXXXXXX" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="cSubject">Subject *</label>
                <select class="form-select" id="cSubject" name="subject" required>
                  <option value="" disabled>Choose a topic...</option>
                  @foreach (['Courses & Enrolment', 'Scholarships & Grants', "Women's Hub / Sell Products", 'Partnership or Sponsorship', 'Technical Issue', 'Other'] as $topic)
                    <option {{ old('subject') === $topic ? 'selected' : '' }}>{{ $topic }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-12">
                <label class="form-label" for="cMessage">Message *</label>
                <textarea class="form-control" id="cMessage" name="message" rows="5"
                          placeholder="Write your message here..." required>{{ old('message') }}</textarea>
              </div>
              <div class="col-12 d-flex flex-wrap gap-3 align-items-center">
                <button type="submit" class="btn btn-teal px-4">
                  <i class="bi bi-send-fill me-2"></i>Send Message
                </button>
                <small class="text-muted">We reply within 24 hours, Mon–Sat.</small>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-soft">
    <div class="container py-3">
      <div class="text-center mb-4">
        <span class="section-eyebrow">❓ Quick Answers</span>
        <h2 class="section-title mt-3">Frequently asked questions</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item border-0 rounded-4 mb-3 overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                  Is GB Digital Hub really free?
                </button>
              </h2>
              <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  Yes — all courses, roadmaps and the Career AI advisor are free for students of
                  Gilgit-Baltistan. Some advanced workshops may be sponsored by our partners.
                </div>
              </div>
            </div>
            <div class="accordion-item border-0 rounded-4 mb-3 overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                  Will it work on slow internet?
                </button>
              </h2>
              <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  Absolutely. Content is compressed and offline-first: once you open a lesson,
                  it caches on your device and keeps working even without signal.
                </div>
              </div>
            </div>
            <div class="accordion-item border-0 rounded-4 mb-3 overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                  How do I list my products in the Women's Hub?
                </button>
              </h2>
              <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  Create a free account, open your stall, and add photos, price and WhatsApp
                  number. Buyers contact you directly — we charge 0% commission.
                </div>
              </div>
            </div>
            <div class="accordion-item border-0 rounded-4 mb-3 overflow-hidden">
              <h2 class="accordion-header">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                  Can I apply for scholarships through the website?
                </button>
              </h2>
              <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  Yes. Every opportunity on the Scholarships page has an Apply button that
                  connects you to the official application or our guidance team.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
<script>
  // Contact form → POST /contact (JSON API)
  document.querySelector('form[action="{{ route('contact.store') }}"]')?.addEventListener('submit', async (e) => {
    e.preventDefault();
    const form = e.target;
    const btn = form.querySelector('button[type="submit"]');
    btn.disabled = true;
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
      if (res.ok) {
        showToast(data.message || 'Thank you! Your message has been received.');
        form.reset();
      } else {
        showToast(data.errors ? Object.values(data.errors).flat()[0] : 'Could not send — please try again.');
      }
    } catch (_) {
      showToast('Network error — please try again.');
    }
    btn.disabled = false;
  });
</script>
@endpush
