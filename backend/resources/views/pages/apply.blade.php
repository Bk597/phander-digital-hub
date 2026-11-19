@extends('layouts.app')

@section('content')
  <!-- FORM -->
  <section class="pt-5 pb-5 bg-soft">
    <div class="container" style="max-width:780px">

      <div class="text-center mb-4">
        <span class="hero-badge mb-3">📋 Application Form</span>
        <h1 class="hero-title mb-2" style="font-size:clamp(1.6rem,4vw,2.4rem)">
          Apply for <span class="accent" id="oppHeading">an opportunity</span>
        </h1>
        <p class="lead-soft mb-0" style="font-size:.98rem">
          Fill the form below — it takes less than two minutes. Fields marked
          <span style="color:var(--brand);font-weight:700">*</span> are required.
        </p>
      </div>

      <!-- selected opportunity -->
      <div class="card-soft p-4 mb-4 reveal" id="oppBox">
        <div class="d-flex align-items-center gap-3 flex-wrap">
          <span class="badge-amber d-none" id="oppTypeBadge">Scholarship</span>
          <div class="flex-grow-1" style="min-width:220px">
            <div class="stat-label mb-1">You are applying for</div>
            <div class="fw-bold" id="oppBoxTitle" style="font-size:1.02rem">General application</div>
          </div>
          <a href="{{ route('opportunities') }}" id="pickLink" class="btn btn-ghost-brand btn-sm px-3 d-none">
            Pick from list <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>
      </div>

      <!-- application form -->
      <form id="applyForm" class="card-soft p-4 reveal" novalidate>
        <div class="row g-3">
          <div class="col-12">
            <label class="form-label" for="oppTitle" style="font-size:.86rem;font-weight:600">Opportunity</label>
            <input type="text" class="input-soft" id="oppTitle" name="opportunity" placeholder="Scholarship or job title" readonly style="background:rgba(0,106,96,.05)" />
          </div>
          <div class="col-md-6">
            <label class="form-label" for="fName" style="font-size:.86rem;font-weight:600">Full name <span style="color:var(--brand)">*</span></label>
            <input type="text" class="input-soft" id="fName" name="name" required placeholder="Your full name" />
          </div>
          <div class="col-md-6">
            <label class="form-label" for="fEmail" style="font-size:.86rem;font-weight:600">Email <span style="color:var(--brand)">*</span></label>
            <input type="email" class="input-soft" id="fEmail" name="email" required placeholder="you@example.com" />
          </div>
          <div class="col-md-6">
            <label class="form-label" for="fPhone" style="font-size:.86rem;font-weight:600">Phone <span style="color:var(--brand)">*</span></label>
            <input type="tel" class="input-soft" id="fPhone" name="phone" required pattern=".{10,15}" title="10-15 digits, e.g. 03451234567" placeholder="0345 1234567" />
          </div>
          <div class="col-md-6">
            <label class="form-label" for="fCnic" style="font-size:.86rem;font-weight:600">CNIC / B-Form</label>
            <input type="text" class="input-soft" id="fCnic" name="cnic" placeholder="Optional — e.g. 42101-1234567-8" />
          </div>
          <div class="col-md-6">
            <label class="form-label" for="fDistrict" style="font-size:.86rem;font-weight:600">District <span style="color:var(--brand)">*</span></label>
            <select class="input-soft" id="fDistrict" name="district" required>
              <option value="" selected disabled>Select district</option>
              <option>Gilgit</option>
              <option>Hunza</option>
              <option>Nagar</option>
              <option>Ghizer</option>
              <option>Astore</option>
              <option>Diamer</option>
              <option>Skardu</option>
              <option>Shigar</option>
              <option>Ghanche</option>
              <option>Rondu</option>
              <option>Other / Outside GB</option>
            </select>
          </div>
          <div class="col-md-6">
            <label class="form-label" for="fEdu" style="font-size:.86rem;font-weight:600">Highest education <span style="color:var(--brand)">*</span></label>
            <select class="input-soft" id="fEdu" name="education" required>
              <option value="" selected disabled>Select level</option>
              <option>Matric</option>
              <option>Intermediate (FA / FSc)</option>
              <option>Bachelor (BS / BA / BSc)</option>
              <option>Master (MS / MA / MSc)</option>
              <option>MPhil</option>
              <option>PhD</option>
              <option>Diploma / Certificate</option>
              <option>Other</option>
            </select>
          </div>
          <div class="col-12">
            <label class="form-label" for="fInst" style="font-size:.86rem;font-weight:600">School / College / University</label>
            <input type="text" class="input-soft" id="fInst" name="institution" placeholder="Institution name" />
          </div>
          <div class="col-12">
            <label class="form-label" for="fStatement" style="font-size:.86rem;font-weight:600">Why should you be selected? <span style="color:var(--brand)">*</span></label>
            <textarea class="input-soft" id="fStatement" name="statement" rows="4" required minlength="40" placeholder="Tell us briefly about yourself, your goals and why you deserve this opportunity (English or Roman Urdu)."></textarea>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="fConfirm" required style="accent-color:var(--brand)" />
              <label class="form-check-label" for="fConfirm" style="font-size:.84rem;color:var(--muted)">
                I confirm that the information provided above is correct.
              </label>
            </div>
          </div>
          <div class="col-12 d-flex gap-2 flex-wrap align-items-center">
            <button type="submit" class="btn btn-brand px-4" id="submitBtn">
              Submit application <i class="bi bi-send ms-1"></i>
            </button>
            <a href="{{ route('opportunities') }}" class="btn btn-ghost-brand">Cancel</a>
            <small style="color:var(--muted);font-size:.78rem">
              Aapki application save ho jayegi — confirmation ke liye email ka option milega.
            </small>
          </div>
        </div>
      </form>

      <!-- success -->
      <div id="applySuccess" class="card-soft p-5 text-center d-none">
        <div style="font-size:3rem">✅</div>
        <h2 class="mt-3" style="font-size:1.35rem">Application submitted!</h2>
        <p class="mt-2 mb-1" style="color:var(--muted);font-size:.92rem">
          Your application reference:
        </p>
        <div class="fw-bold mb-2" id="refOut" style="font-size:1.25rem;color:var(--brand);letter-spacing:.5px">—</div>
        <p class="mb-4" id="summaryOut" style="color:var(--muted);font-size:.88rem"></p>
        <div class="d-flex gap-2 flex-wrap justify-content-center">
          <a href="#" id="mailtoBtn" class="btn btn-brand px-4" target="_blank" rel="noopener">
            Email a copy <i class="bi bi-envelope ms-1"></i>
          </a>
          <a href="{{ route('opportunities') }}" class="btn btn-ghost-brand px-4">Back to opportunities</a>
        </div>
      </div>

    </div>
  </section>

  <script>
    (function () {
      var params = new URLSearchParams(location.search);
      var title = (params.get('title') || '').trim();
      var type = (params.get('type') || '').trim();
      var oppInput = document.getElementById('oppTitle');
      var heading = document.getElementById('oppHeading');
      var badge = document.getElementById('oppTypeBadge');
      var boxTitle = document.getElementById('oppBoxTitle');
      var pickLink = document.getElementById('pickLink');

      if (title) {
        oppInput.value = title;
        boxTitle.textContent = title;
        heading.textContent = title;
        document.title = 'Apply — ' + title + ' — GB Digital Hub';
        if (type) { badge.textContent = type; badge.classList.remove('d-none'); }
      } else {
        oppInput.value = '';
        oppInput.placeholder = 'General application — pick one from the Scholarships page';
        boxTitle.textContent = 'General application';
        pickLink.classList.remove('d-none');
      }

      var form = document.getElementById('applyForm');
      form.addEventListener('submit', function (e) {
        e.preventDefault();
        if (!form.checkValidity()) { form.reportValidity(); return; }

        var rec = {
          ref: 'GBH-2026-' + String(Math.floor(1000 + Math.random() * 9000)),
          opportunity: oppInput.value || 'General application',
          type: type || 'General',
          name: document.getElementById('fName').value.trim(),
          email: document.getElementById('fEmail').value.trim(),
          phone: document.getElementById('fPhone').value.trim(),
          cnic: document.getElementById('fCnic').value.trim(),
          district: document.getElementById('fDistrict').value,
          education: document.getElementById('fEdu').value,
          institution: document.getElementById('fInst').value.trim(),
          statement: document.getElementById('fStatement').value.trim(),
          ts: new Date().toISOString()
        };

        try {
          var all = JSON.parse(localStorage.getItem('gb_applications') || '[]');
          all.push(rec);
          localStorage.setItem('gb_applications', JSON.stringify(all));
        } catch (err) {}

        document.getElementById('refOut').textContent = rec.ref;
        document.getElementById('summaryOut').textContent =
          rec.opportunity + ' — ' + rec.name + ' (' + rec.email + ', ' + rec.district + ')';

        var body =
          'Application ID: ' + rec.ref + '\n' +
          'Opportunity: ' + rec.opportunity + ' (' + rec.type + ')\n' +
          'Name: ' + rec.name + '\n' +
          'Email: ' + rec.email + '\n' +
          'Phone: ' + rec.phone + '\n' +
          'CNIC: ' + (rec.cnic || '-') + '\n' +
          'District: ' + rec.district + '\n' +
          'Education: ' + rec.education + '\n' +
          'Institution: ' + (rec.institution || '-') + '\n\n' +
          'Statement:\n' + rec.statement;
        document.getElementById('mailtoBtn').href =
          'mailto:bkhalida275@gmail.com?subject=' +
          encodeURIComponent('Application: ' + rec.opportunity + ' (' + rec.ref + ')') +
          '&body=' + encodeURIComponent(body);

        form.classList.add('d-none');
        document.getElementById('oppBox').classList.add('d-none');
        document.getElementById('applySuccess').classList.remove('d-none');
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    })();
  </script>
@endsection
