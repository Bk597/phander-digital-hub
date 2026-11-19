/* =========================================================
   GB Digital Hub — Original Site JS (restored)
   navbar scroll, counters, reveal, filters, search,
   roadmaps, likes, saves, chat, toast, back-to-top
   ========================================================= */
(function () {
  "use strict";

  /* ---------- Navbar shadow on scroll ---------- */
  var nav = document.querySelector(".ph-navbar");
  function onScroll() {
    if (!nav) return;
    if (window.scrollY > 10) {
      nav.classList.add("shadow-lg");
      nav.classList.add("py-1");
      nav.classList.remove("py-2");
    } else {
      nav.classList.remove("shadow-lg");
      nav.classList.remove("py-1");
      nav.classList.add("py-2");
    }
    if (backBtn) backBtn.style.display = window.scrollY > 400 ? "grid" : "none";
  }
  window.addEventListener("scroll", onScroll, { passive: true });

  /* ---------- Back to top ---------- */
  var backBtn = document.createElement("button");
  backBtn.className = "btn-brand";
  backBtn.setAttribute("aria-label", "Back to top");
  backBtn.innerHTML = "&#8593;";
  backBtn.style.cssText =
    "position:fixed;left:18px;bottom:22px;width:42px;height:42px;padding:0;border-radius:50%;display:none;place-items:center;z-index:1040;";
  document.body.appendChild(backBtn);
  backBtn.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  /* ---------- Toast ---------- */
  var toastEl = document.createElement("div");
  toastEl.className = "ph-toast";
  toastEl.setAttribute("role", "status");
  document.body.appendChild(toastEl);
  var toastTimer;
  window.showToast = function (msg) {
    toastEl.textContent = msg;
    toastEl.classList.add("show");
    clearTimeout(toastTimer);
    toastTimer = setTimeout(function () {
      toastEl.classList.remove("show");
    }, 2400);
  };

  /* ---------- Counters ---------- */
  var counters = document.querySelectorAll("[data-count]");
  if (counters.length && "IntersectionObserver" in window) {
    var cObs = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          var el = entry.target;
          cObs.unobserve(el);
          var target = parseInt(el.getAttribute("data-count"), 10) || 0;
          var start = null;
          var dur = 1300;
          function step(ts) {
            if (!start) start = ts;
            var p = Math.min((ts - start) / dur, 1);
            el.textContent = Math.round(target * (1 - Math.pow(1 - p, 3)));
            if (p < 1) requestAnimationFrame(step);
          }
          requestAnimationFrame(step);
        });
      },
      { threshold: 0.4 }
    );
    counters.forEach(function (c) {
      cObs.observe(c);
    });
  }

  /* ---------- Reveal on scroll ---------- */
  var reveals = document.querySelectorAll(".reveal");
  if (reveals.length && "IntersectionObserver" in window) {
    var rObs = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (e) {
          if (e.isIntersecting) {
            e.target.classList.add("visible");
            rObs.unobserve(e.target);
          }
        });
      },
      { threshold: 0.12 }
    );
    reveals.forEach(function (r) {
      rObs.observe(r);
    });
  } else {
    reveals.forEach(function (r) {
      r.classList.add("visible");
    });
  }

  /* ---------- Course category chips + search (skills) ---------- */
  var filterChips = document.querySelectorAll("[data-filter-chip]");
  var searchInput = document.querySelector("[data-search-input]");
  var courseCards = document.querySelectorAll("[data-searchable]");
  var activeCategory = "all";

  function applyCourseFilters() {
    if (!courseCards.length) return;
    var q = (searchInput && searchInput.value ? searchInput.value : "").trim().toLowerCase();
    courseCards.forEach(function (card) {
      var cat = card.getAttribute("data-category") || "";
      var matchCat = activeCategory === "all" || cat === activeCategory;
      var matchText = !q || card.textContent.toLowerCase().indexOf(q) !== -1;
      var col = card.closest(".col, [class*='col-']");
      if (col) col.style.display = matchCat && matchText ? "" : "none";
      else card.style.display = matchCat && matchText ? "" : "none";
    });
  }

  filterChips.forEach(function (chip) {
    chip.addEventListener("click", function () {
      filterChips.forEach(function (c) {
        c.classList.remove("active");
        c.setAttribute("aria-pressed", "false");
      });
      chip.classList.add("active");
      chip.setAttribute("aria-pressed", "true");
      activeCategory = chip.getAttribute("data-filter-chip") || "all";
      applyCourseFilters();
    });
  });
  if (searchInput) {
    searchInput.addEventListener("input", applyCourseFilters);
  }

  /* ---------- Opportunity type filter ---------- */
  var oppFilters = document.querySelectorAll("[data-opp-filter]");
  var oppItems = document.querySelectorAll("[data-opp-type]");
  oppFilters.forEach(function (chip) {
    chip.addEventListener("click", function () {
      oppFilters.forEach(function (c) {
        c.classList.remove("active");
        c.setAttribute("aria-pressed", "false");
      });
      chip.classList.add("active");
      chip.setAttribute("aria-pressed", "true");
      var type = chip.getAttribute("data-opp-filter");
      oppItems.forEach(function (item) {
        var t = item.getAttribute("data-opp-type");
        var show = type === "all" || t === type;
        var col = item.closest(".col, [class*='col-']");
        if (col) col.style.display = show ? "" : "none";
        else item.style.display = show ? "" : "none";
      });
    });
  });

  /* ---------- Save / bookmark buttons ---------- */
  function updateSavedCount() {
    var el = document.getElementById("savedCount");
    if (!el) return;
    el.textContent = document.querySelectorAll('.save-opp[data-saved="true"]').length;
  }
  document.querySelectorAll(".save-opp").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var saved = btn.getAttribute("data-saved") === "true";
      if (saved) {
        btn.setAttribute("data-saved", "false");
        btn.classList.remove("btn-brand");
        btn.classList.add("btn-ghost-brand");
        btn.innerHTML = 'Save <i class="bi bi-bookmark ms-1"></i>';
        showToast("Removed from saved opportunities");
      } else {
        btn.setAttribute("data-saved", "true");
        btn.classList.remove("btn-ghost-brand");
        btn.classList.add("btn-brand");
        btn.innerHTML = 'Saved <i class="bi bi-bookmark-check-fill ms-1"></i>';
        showToast("Opportunity saved to your dashboard");
      }
      updateSavedCount();
    });
  });
  updateSavedCount();

  /* ---------- Like buttons (Women's Hub) ---------- */
  document.querySelectorAll(".like-btn").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var countEl = btn.parentElement
        ? btn.parentElement.querySelector(".like-count")
        : null;
      var liked = btn.classList.contains("liked");
      if (liked) {
        btn.classList.remove("liked");
        btn.innerHTML = "&#9825;";
        if (countEl) countEl.textContent = Math.max(0, (parseInt(countEl.textContent, 10) || 0) - 1);
      } else {
        btn.classList.add("liked");
        btn.innerHTML = "&#9829;";
        if (countEl) countEl.textContent = (parseInt(countEl.textContent, 10) || 0) + 1;
      }
    });
  });

  /* ---------- Roadmap accordions + milestone checkboxes ---------- */
  document.querySelectorAll("[data-roadmap-toggle]").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var targetId = btn.getAttribute("data-roadmap-toggle");
      var panel = document.getElementById(targetId);
      if (!panel) return;
      var open = panel.classList.contains("show");
      panel.classList.toggle("show", !open);
      var chev = btn.querySelector("i");
      if (chev) chev.style.transform = open ? "" : "rotate(180deg)";
    });
  });

  document.addEventListener("change", function (e) {
    var box = e.target;
    if (!box.matches || !box.matches('.milestone-check, input[type="checkbox"][data-milestone]')) return;
    var item = box.closest(".timeline-item");
    if (item) item.classList.toggle("done", box.checked);
    var scope = box.closest("[data-progress-scope]") || document;
    var boxes = scope.querySelectorAll('.milestone-check, input[type="checkbox"][data-milestone]');
    var done = 0;
    boxes.forEach(function (b) {
      if (b.checked) done++;
    });
    var label = scope.querySelector("[data-progress-label]");
    if (label) label.textContent = done + "/" + boxes.length + " milestones";
    var bar = scope.querySelector(".progress-ph > span");
    if (bar && boxes.length) bar.style.width = Math.round((done / boxes.length) * 100) + "%";
  });

  /* ---------- Career AI chat ---------- */
  var chatWindow = document.getElementById("chatWindow");
  var chatForm = document.getElementById("chatForm");
  var chatInput = document.getElementById("chatInput");
  var quickReplies = document.getElementById("quickReplies");

  var cannedReplies = [
    {
      keys: ["web", "website", "frontend", "developer", "coding"],
      reply:
        "Web Development is a great start 🚀 Begin with HTML & CSS (2 weeks), then JavaScript (3 weeks), then build 3 projects. Check the Web Development course in Skills Academy — after 4 months you can start freelancing on Fiverr/Upwork."
    },
    {
      keys: ["graphic", "design", "canva", "logo"],
      reply:
        "Graphic Design is perfect if you're creative 🎨 Learn Canva in 1 week, then Adobe Photoshop/Illustrator basics (4–6 weeks). Start with logos & social media posts — local shops across Gilgit-Baltistan always need designers. Rates: PKR 2,000–15,000 per project."
    },
    {
      keys: ["women", "women's", "handicraft", "shawl", "embroidery", "sell"],
      reply:
        "For women in Gilgit-Baltistan 👩‍👩‍👧 the Women's Hub marketplace is ideal — list your shawls, embroidery or homemade food. Pair it with the Digital Marketing course to sell on Instagram & Facebook. Many of our artisans earn PKR 15,000–40,000/month."
    },
    {
      keys: ["freelanc", "fiverr", "upwork", "earn", "money"],
      reply:
        "Freelancing is the fastest way to earn in dollars 💵 Pick ONE skill (writing, design or web), create profiles on Fiverr & Upwork, and send 5 proposals daily. Our Freelancing Masterclass covers profiles, proposals and payments — most students get their first client within 6 weeks."
    },
    {
      keys: ["scholarship", "study", "university", "abroad"],
      reply:
        "There are many fully-funded scholarships 🎓 — HEC Need-Based, Ehsaas, and international ones (Chevening, DAAD, Turkey Burslari). Head to the Opportunities hub and filter by 'Scholarship'. Deadlines usually fall in Dec–March, so apply early!"
    },
    {
      keys: ["ai", "artificial", "chatgpt", "data"],
      reply:
        "AI is the hottest field right now 🤖 Start with Python (3 weeks), learn data handling with pandas, then AI tools like ChatGPT APIs. Our AI & Data Basics track takes 3 months and lands beginners into junior data roles at PKR 60,000+."
    },
    {
      keys: ["roadmap", "path", "career plan"],
      reply:
        "A roadmap tells you exactly what to learn and when 🗺️ Go to the Roadmaps page and pick one — Web Development, Freelancing, Graphic Design or Women Entrepreneurship. Tick milestones as you go; your progress saves to your dashboard."
    }
  ];

  function appendBubble(text, who) {
    if (!chatWindow) return null;
    var wrap = document.createElement("div");
    wrap.className = "d-flex " + (who === "user" ? "justify-content-end" : "justify-content-start");
    var b = document.createElement("div");
    b.className = "chat-bubble " + who;
    b.textContent = text;
    wrap.appendChild(b);
    chatWindow.appendChild(wrap);
    chatWindow.scrollTop = chatWindow.scrollHeight;
    return b;
  }

  function botReply(userText) {
    var typing = document.createElement("div");
    typing.className = "d-flex justify-content-start";
    typing.innerHTML =
      '<div class="chat-bubble bot"><span class="typing-dots"><span></span><span></span><span></span></span></div>';
    chatWindow.appendChild(typing);
    chatWindow.scrollTop = chatWindow.scrollHeight;

    var lower = userText.toLowerCase();
    var answer =
      "Great question! Based on your interest, I'd suggest starting with the Skills Academy — pick a course that matches your goal, follow the roadmap milestones, and use the Opportunities hub for scholarships. Ask me about web development, graphic design, freelancing, AI or scholarships for a specific plan!";
    for (var i = 0; i < cannedReplies.length; i++) {
      if (cannedReplies[i].keys.some(function (k) { return lower.indexOf(k) !== -1; })) {
        answer = cannedReplies[i].reply;
        break;
      }
    }
    setTimeout(function () {
      typing.remove();
      appendBubble(answer, "bot");
    }, 900);
  }

  if (chatForm && chatWindow && chatInput) {
    chatForm.addEventListener("submit", function (e) {
      e.preventDefault();
      var text = chatInput.value.trim();
      if (!text) return;
      appendBubble(text, "user");
      chatInput.value = "";
      botReply(text);
    });
  }
  if (quickReplies) {
    quickReplies.querySelectorAll("[data-q]").forEach(function (chip) {
      chip.addEventListener("click", function () {
        var q = chip.getAttribute("data-q");
        appendBubble(q, "user");
        botReply(q);
      });
    });
  }

  /* ---------- Demo forms (newsletter / contact) ---------- */
  document.querySelectorAll("[data-demo-form]").forEach(function (form) {
    form.addEventListener("submit", async function (e) {
      e.preventDefault();
      var kind = form.getAttribute("data-demo-form");
      var doneMsg =
        kind === "contact"
          ? "Message sent! We'll reply within 24 hours 📩"
          : "You're subscribed! Welcome to the Hub 🎉";

      /* agar form ka action (backend URL) hai to asal me POST karo */
      if (form.getAttribute("action")) {
        try {
          var meta = document.querySelector('meta[name="csrf-token"]');
          var headers = { Accept: "application/json" };
          if (meta) headers["X-CSRF-TOKEN"] = meta.content;
          var res = await fetch(form.action, {
            method: "POST",
            body: new FormData(form),
            headers: headers
          });
          var data = await res.json().catch(function () { return {}; });
          if (res.ok) {
            showToast(data.message || doneMsg);
            form.reset();
          } else {
            showToast(
              data.errors
                ? Object.values(data.errors).flat()[0]
                : "Something went wrong — please try again."
            );
          }
        } catch (_) {
          showToast("Network error — please try again.");
        }
        return;
      }

      showToast(doneMsg);
      form.reset();
    });
  });

  /* ---------- Active nav highlight ---------- */
  var path = window.location.pathname.split("/").pop() || "index.html";
  document.querySelectorAll(".navbar .nav-link").forEach(function (link) {
    var href = link.getAttribute("href");
    if (href === path) link.classList.add("active");
  });

  onScroll();
})();

/* ===== GB Digital Hub — course progress: Skills -> YouTube -> Dashboard ===== */
(function () {
  var KEY = 'gb_course_progress';
  var DEFAULT_IDS = ['frontend', 'freelance'];
  var YT_MAP = {
    'Frontend Web Development': 'https://www.youtube.com/watch?v=nu_pCVPKzTk',
    'Freelance Mastery & Remote Work': 'https://www.youtube.com/watch?v=DnetNoirovA',
    'UI/UX Design with Figma': 'https://www.youtube.com/watch?v=mT_Jjn8RJdo',
    'Digital Marketing & Local E-Commerce': 'https://www.youtube.com/playlist?list=PLEiEAq2VkUUJupNSQGmZIX_hIYnBV6Dna',
    'Python for Data & Automation': 'https://www.youtube.com/watch?v=ix9cRaBkVe0',
    'Content Writing & SEO': 'https://www.youtube.com/playlist?list=PLEiEAq2VkUUJcRzDRLS90PtiRQIDcV_7A'
  };

  function load() { try { return JSON.parse(localStorage.getItem(KEY)) || {}; } catch (e) { return {}; } }
  function save(o) { try { localStorage.setItem(KEY, JSON.stringify(o)); } catch (e) {} }

  function paint(row, val) {
    var l = row.querySelector('[data-pct-label]');
    var b = row.querySelector('[data-pct-bar]');
    if (l) l.textContent = val + '%';
    if (b) b.style.width = val + '%';
  }

  function titleOf(row) {
    var t = row.querySelector('h3') || row.querySelector('.flex-grow-1 .fw-bold') || row.querySelector('.fw-bold');
    return t ? t.textContent.trim() : '';
  }

  function ytOf(row) {
    var yt = row.getAttribute('data-yt');
    if (yt) return yt;
    var map = YT_MAP[titleOf(row)];
    return map || 'skills.html';
  }

  function baseOf(row) { return parseInt(row.getAttribute('data-base') || '0', 10) || 0; }

  function currentVal(row, store) {
    var id = row.getAttribute('data-course');
    var base = baseOf(row);
    var e = store[id];
    return (e && typeof e.pct === 'number') ? Math.max(e.pct, base) : base;
  }

  function updateStat(store) {
    var el = document.getElementById('continueCount');
    if (!el) return;
    var extra = 0;
    Object.keys(store).forEach(function (id) {
      if (DEFAULT_IDS.indexOf(id) === -1 && store[id] && store[id].pct > 0) extra++;
    });
    el.textContent = String(2 + extra);
  }

  function bindRow(row) {
    if (row.__gbBound) return;
    row.__gbBound = true;
    var id = row.getAttribute('data-course');
    var btn = row.querySelector('[data-continue]');
    if (!id || !btn) return;
    var store = load();
    var yt = ytOf(row);
    if (yt && btn.getAttribute('href') !== yt) btn.setAttribute('href', yt);
    if (yt.indexOf('http') === 0) { btn.setAttribute('target', '_blank'); btn.setAttribute('rel', 'noopener'); }
    paint(row, currentVal(row, store));
    btn.addEventListener('click', function () {
      var s = load();
      var e = s[id] || {};
      var prev = (typeof e.pct === 'number') ? Math.max(e.pct, baseOf(row)) : baseOf(row);
      e.pct = Math.min(95, prev + 10);
      e.opens = (e.opens || 0) + 1;
      e.title = e.title || titleOf(row);
      e.cat = e.cat || row.getAttribute('data-cat') || row.getAttribute('data-category') || '';
      var dur = row.querySelector('.bi-clock');
      if (!e.dur && dur && dur.parentElement) e.dur = dur.parentElement.textContent.trim();
      e.yt = yt;
      e.ts = Date.now();
      s[id] = e;
      save(s);
      paint(row, e.pct);
      updateStat(s);
    });
  }

  function iconFor(cat) {
    cat = cat || '';
    if (cat.indexOf('Tech') > -1) return '\uD83D\uDCBB';
    if (cat.indexOf('Design') > -1) return '\uD83C\uDFA8';
    if (cat.indexOf('Business') > -1) return '\uD83D\uDCC8';
    if (cat.indexOf('Freelanc') > -1) return '\uD83C\uDF10';
    return '\uD83C\uDFAC';
  }

  function renderDashboard() {
    var list = document.getElementById('myCourses');
    if (!list) return;
    var store = load();
    var ids = Object.keys(store);
    if (!ids.length) return;
    var rows = [
      { id: 'frontend', title: 'Frontend Web Development', meta: 'Tech & Coding \u2022 6 Weeks', base: 65, yt: 'https://www.youtube.com/watch?v=nu_pCVPKzTk', icon: '\uD83C\uDFAC' },
      { id: 'freelance', title: 'Freelance Mastery & Remote Work', meta: 'Freelancing \u2022 4 Weeks', base: 40, yt: 'https://www.youtube.com/watch?v=DnetNoirovA', icon: '\uD83C\uDFAC' }
    ];
    ids.forEach(function (id) {
      if (DEFAULT_IDS.indexOf(id) > -1) return;
      var e = store[id];
      if (!e || !e.pct) return;
      var meta = [e.cat, e.dur].filter(Boolean).join(' \u2022 ');
      rows.push({ id: id, title: e.title || id, meta: meta, base: 0, yt: (YT_MAP[e.title] || e.yt || 'skills.html'), icon: iconFor(e.cat) });
    });
    list.innerHTML = rows.map(function (r) {
      var st = store[r.id];
      var val = (st && typeof st.pct === 'number') ? Math.max(st.pct, r.base) : r.base;
      return '<div class="d-flex align-items-center gap-3 flex-wrap py-3" style="border-color:rgba(0,106,96,.10) !important" data-course="' + r.id + '" data-yt="' + r.yt + '" data-base="' + r.base + '">' +
        '<div class="icon-tile mb-0" style="flex:0 0 46px;width:46px;height:46px;font-size:1.15rem">' + r.icon + '</div>' +
        '<div class="flex-grow-1" style="min-width:190px"><div class="fw-bold" style="font-size:.95rem">' + r.title + '</div>' +
        '<div class="stat-label">' + r.meta + '</div></div>' +
        '<div style="min-width:160px"><div class="d-flex justify-content-between mb-1" style="font-size:.74rem;color:var(--muted)">' +
        '<span>Progress</span><span class="fw-bold text-brand" data-pct-label>' + val + '%</span></div>' +
        '<div class="progress-ph"><span data-pct-bar style="width:' + val + '%"></span></div></div>' +
        '<a href="' + r.yt + '" target="_blank" rel="noopener" class="btn btn-brand btn-sm px-3" data-continue>Continue</a></div>';
    }).join('');
    Array.prototype.forEach.call(list.querySelectorAll('[data-course]'), bindRow);
  }

  function boot() {
    Array.prototype.forEach.call(document.querySelectorAll('[data-course]'), bindRow);
    renderDashboard();
    updateStat(load());
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', boot);
  else boot();
})();
