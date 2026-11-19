# 🌐 GB Digital Hub — Website

**A digital skills, scholarships & marketplace guide for the mountain youth and women of Gilgit-Baltistan.**

> **Branding:** sab jagah naya **Digital Hub logo** (`assets/img/logo.png` — navbar, footer chip, auth pages, About card, favicon). Purana `⛰️` emoji branding hata di gayi hai. Logo dark+bold processed hai (gamma 1.25 + contrast 1.2) taaki white background par clearly dikhe. Navbar me logo ke sath alag **Home** link bhi hai.

GB Digital Hub ek complete website hai jo Flutter app (GB Digital Hub) ke saath design-match karti hai. It has two parts that run side by side:

- **`frontend/`** — 100% static website (HTML, CSS, JavaScript, Bootstrap 5, Tailwind CSS) — no setup needed.
- **`backend/`** — Full Laravel (PHP) + MySQL application with real database, authentication, forms and a dashboard.

---

## ✨ Features (The Hubs)

| Hub | What it does |
|---|---|
| 💻 **Skills Academy** | Free courses (web dev, design, freelancing, marketing) with category filters, search and progress tracking |
| 🎓 **Scholarships & Jobs** | Fully-funded scholarships, remote jobs & grants with type filters and save/bookmark |
| 🧭 **Career Roadmaps** | Step-by-step milestone timelines with tickable checkboxes and live progress bars |
| 🤖 **Career AI** | Free chat advisor with quick replies and smart canned answers (courses, freelancing, scholarships) |
| 🧣 **Women's Hub** | Marketplace for valley women — shawls, honey, handicrafts & digital services with likes |
| 📊 **My Dashboard** | Enrolled courses, roadmap progress, saved opportunities & profile (login required) |

Plus: About page, Contact page (with FAQ + form), newsletter signup, split-screen Login/Register.

## 🛠️ Tech Stack

| Layer | Technology |
|---|---|
| Frontend | HTML5, CSS3, JavaScript (ES6+), Bootstrap **5.3.3**, Tailwind CSS (CDN), Bootstrap Icons |
| Backend | Laravel **12** (PHP **8.2+**), Blade templates |
| Database | MySQL / MariaDB (XAMPP) — database name: `phander_hub` |
| Auth | Hand-rolled session auth (register / login / logout) with CSRF protection |

## 📁 Project Structure

```
phander_website/
├── frontend/                     # Static site (port 8080)
│   ├── index.html                # Home — gradient hero + phone mockup
│   ├── skills.html               # Courses + filters + search
│   ├── opportunities.html        # Scholarships / jobs / grants
│   ├── roadmaps.html             # Milestone timelines
│   ├── womens-hub.html           # Women's marketplace
│   ├── career-ai.html            # AI career chat
│   ├── dashboard.html            # Demo dashboard (localStorage session)
│   ├── login.html / register.html# Split-screen auth (demo session)
│   ├── about.html / contact.html
│   └── assets/
│       ├── css/style.css         # Poppins theme, cards, chat, timeline…
│       └── js/main.js            # Filters, chat, likes, toasts, counters
│
└── backend/                      # Laravel app (port 8000)
    ├── app/Http/Controllers/
    │   ├── PageController.php    # All page views (+ data)
    │   ├── AuthController.php    # register/login/logout (JSON API)
    │   └── FormController.php    # contact + newsletter (JSON API)
    ├── app/Models/               # Course, Opportunity, Roadmap, MarketProduct, User…
    ├── database/
    │   ├── migrations/           # courses, opportunities, market_products, roadmaps,
    │   │                         # contact_messages, newsletter_subscribers
    │   └── seeders/ContentSeeder.php  # 6 courses, 4 opportunities, 8 products, 2 roadmaps
    ├── resources/views/
    │   ├── layouts/app.blade.php # Navbar (GB Digital Hub) + footer include
    │   ├── partials/footer.blade.php
    │   └── pages/*.blade.php     # Same 11 pages as frontend
    ├── public/assets/            # style.css + main.js (synced from frontend)
    └── routes/web.php
```

## 🚀 Setup & Run

### Requirements

- PHP **8.2+** with Composer
- MySQL/MariaDB (e.g. XAMPP — port **3306**)
- A static file server for `frontend/` (PHP built-in server works)

### 1️⃣ Database

Default `.env` config (XAMPP defaults):

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=phander_hub
DB_USERNAME=root
DB_PASSWORD=
```

Create the database and load everything (schema + demo content + demo user):

```bash
mysql -u root -e "CREATE DATABASE IF NOT EXISTS phander_hub CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

cd backend
composer install
php artisan key:generate
php artisan migrate --seed        # tables + ContentSeeder + demo user
```

### 2️⃣ Backend server (Laravel)

```bash
cd backend
php artisan serve --host=127.0.0.1 --port=8000
```

Open → **http://127.0.0.1:8000**

### 3️⃣ Frontend server (static)

```bash
cd frontend
php -S 127.0.0.1:8080
```

Open → **http://127.0.0.1:8080**

> Both servers can run at the same time (different ports).

## 🔑 Demo Login (backend)

| Email | Password |
|---|---|
| `test@example.com` | `password` |

Register naye account se bhi bana sakte hain (name, email, phone, village, goal).

> **Frontend (static) note:** `login.html` / `register.html` demo session localStorage me save karte hain aur `dashboard.html` par redirect karte hain — real database auth sirf backend (port 8000) par chalta hai.

## 🗺️ Pages & Routes

### Backend routes (website)

| Method | URI | Name | Auth |
|---|---|---|---|
| GET | `/` | home | — |
| GET | `/skills` | skills | — |
| GET | `/opportunities` | opportunities | — |
| GET | `/roadmaps` | roadmaps | — |
| GET | `/womens-hub` | womens-hub | — |
| GET | `/career-ai` | career-ai | — |
| GET | `/about` | about | — |
| GET | `/contact` | contact | — |
| POST | `/contact` | contact.store | — |
| POST | `/newsletter` | newsletter.subscribe | — |
| GET | `/login` | login | guest |
| POST | `/login` | login.attempt | guest |
| GET | `/register` | register | guest |
| POST | `/register` | register.attempt | guest |
| POST | `/logout` | logout | ✅ |
| GET | `/dashboard` | dashboard | ✅ |
| GET | `/api/me` | me | ✅ |

Auth POST endpoints JSON return karte hain (`{ message, redirect }` / `422 { errors }`) — login/register pages unhe `fetch()` se call karte hain.

## 🔌 REST API (JSON) — `/api/*`

Flutter app ya koi bhi client in endpoints ko use kar sakta hai. Har response ka format:

```json
{ "success": true, "message": "OK", "data": { ... } }
```

### Public endpoints (token nahi chahiye)

| Method | Endpoint | Description | Query params |
|---|---|---|---|
| GET | `/api/stats` | Home counts (courses, opportunities, products, roadmaps) | — |
| GET | `/api/courses` | Saare courses | `?category=Design` `?search=python` `?featured=1` |
| GET | `/api/courses/{id}` | Single course (modules ke saath) | — |
| GET | `/api/categories` | Course categories ki list | — |
| GET | `/api/opportunities` | Saare opportunities | `?type=Scholarship` `?search=hec` `?featured=1` |
| GET | `/api/opportunities/{id}` | Single opportunity | — |
| GET | `/api/opportunity-types` | Types ki list (Scholarship, Grant…) | — |
| GET | `/api/roadmaps` | Roadmaps + steps + `progress_percent` | — |
| GET | `/api/roadmaps/{id}` | Single roadmap + steps | — |
| GET | `/api/products` | Women's Hub products | `?category=Local Organic` `?search=honey` |
| POST | `/api/products` | Women's Hub me nayi listing publish (Flutter app ka "Showcase Your Skill" isse website par post karta hai) | body: `title,creator_name[,village,category,price,description,contact]` |
| GET | `/api/products/{id}` | Single product | — |
| GET | `/api/product-categories` | Product categories ki list | — |
| POST | `/api/contact` | Contact message save | body: `name,email,subject,message[,phone]` |
| POST | `/api/newsletter` | Email subscribe | body: `email` |

### Auth endpoints

| Method | Endpoint | Description |
|---|---|---|
| POST | `/api/auth/register` | Naya account → `{ token, user }` (201) |
| POST | `/api/auth/login` | Email+password → `{ token, user }` |
| POST | `/api/auth/logout` | Token cancel (auth) |
| GET | `/api/auth/me` | Current user (auth) |

### Protected endpoints (token required)

| Method | Endpoint | Description |
|---|---|---|
| GET | `/api/dashboard` | Enrolled courses + roadmaps progress + saved opportunities |
| POST | `/api/courses/{id}/enroll` | Course me enroll (demo) |
| POST | `/api/opportunities/{id}/save` | Save / unsave toggle |
| POST | `/api/products/{id}/like` | Like / unlike toggle (counter ke saath) |
| PATCH | `/api/roadmaps/{roadmapId}/steps/{stepId}` | Milestone tick/un-tick + naya progress |

### Authentication

1. `POST /api/auth/login` with `{"email":"test@example.com","password":"password"}` → milta hai **`token`** (64 chars).
2. Har protected request me header lagayein:

```
Authorization: Bearer <token>
Accept: application/json
```

Ya query string: `/api/dashboard?token=<token>`

### curl examples

```bash
# Public data
curl http://127.0.0.1:8000/api/stats
curl "http://127.0.0.1:8000/api/courses?category=Design"
curl http://127.0.0.1:8000/api/roadmaps

# Login → token
curl -X POST http://127.0.0.1:8000/api/auth/login \
  -H "Accept: application/json" -H "Content-Type: application/json" \
  -d '{"email":"test@example.com","password":"password"}'

# Protected (dashboard)
curl http://127.0.0.1:8000/api/dashboard \
  -H "Authorization: Bearer <token>" -H "Accept: application/json"

# Milestone tick
curl -X PATCH http://127.0.0.1:8000/api/roadmaps/1/steps/3 \
  -H "Authorization: Bearer <token>" -H "Accept: application/json"
```

### Error responses

| Status | Kab |
|---|---|
| `401` | Token missing / galat / logout ke baad |
| `404` | Record nahi mila (e.g. `/api/courses/999`) |
| `422` | Validation failed → `{ errors: { field: ["msg"] } }` |

> **Note:** API ka token `users.api_token` column me store hota hai (login har baar naya token banata hai — purana cancel ho jata hai). Auth token **Bearer header** ya `?token=` query se bheja ja sakta hai; website ka session login bhi protected endpoints par chalta hai.

## 📱 Flutter App connection

Yeh backend **Flutter app** (`../lib` — `phander_digital_hub`) se bhi connect hai:
- `lib/services/api_service.dart` me base URL `http://127.0.0.1:8000/api`
- App screens (Skills, Scholarships, Roadmaps, Women's Hub) live data isi API se load karte hain — server down par local fallback
- Login/Register app se bhi hote hain (token `shared_preferences` me)
- CORS enabled hai (web app `http://127.0.0.1:8090` se call kar sakti hai)
- Phone/emulator chalane ke liye `php artisan serve --host=0.0.0.0 --port=8000` aur app me baseUrl badlein (emulator: `10.0.2.2`, device: PC LAN IP — `ipconfig | findstr IPv4`, Profile → **Server Settings** se app se bhi badal sakte hain)
- **Live (InfinityFree):** app baseUrl `https://DOMAIN/backend/api` — LAN se free, koi PC chalane ki zaroorat nahi

## 🎨 Design System

Bahar wala (original) website design — Poppins font, gradient hero, soft cards:

| Token | Value |
|---|---|
| Primary (brand) | `#006A60` |
| Accent / light | `#00A896` |
| Amber | `#E59819` |
| Purple | `#6750A4` |
| Background | `#FBFDFC` (soft) / `#FFFFFF` |
| Font | **Poppins** (300–800) |
| Dark strip gradient | `#06211E → #004D45` |

Key CSS classes: `.hero`, `.phone-mock`, `.hub-card`, `.card-soft`, `.float-card`, `.badge-soft/amber/purple`, `.progress-ph`, `.timeline-item`, `.chat-bubble`, `.auth-wrap/.auth-side`, `.ph-footer`, `.filter-chip`, `.reveal` (scroll animations).

## ⚙️ Frontend JS Interactions (`assets/js/main.js`)

- 🔍 Course category chips + live search (`data-filter-chip`, `data-search-input`)
- 🎯 Opportunity type filter + Save/Bookmark toggle with toast
- ✅ Roadmap accordions + milestone checkboxes → live "x/y milestones" + progress bar
- 💬 Career AI chat (quick replies, typing dots, smart answers)
- ❤️ Women's Hub like button with counter
- 🔢 Animated counters + scroll reveal animations
- 🔔 Toast notifications (`.ph-toast`) + back-to-top button
- 📨 Contact/newsletter forms — demo toast on static site, real POST on backend

## 🧩 Notes & Gotchas

- **Tailwind + Bootstrap CDN clash:** Tailwind preflight disabled (`corePlugins: { preflight: false }`) and `.collapse { visibility: visible !important }` override so Bootstrap collapse/navbar works.
- **Vendor `bootstrap.min.css` truncated ho jaye** (site poori tarah unstyled dikhe, ~161KB file) → jsdelivr se re-download karke `frontend/assets/vendor/bootstrap/css/` me restore karein (poora ≈232,803 bytes) + backend copy bhi sync karein.
- **Navbar Home link:** `'/' => 'Home'` — active-logic special-case rakha hai (`$path === '/' ? $currentPath === '/' : str_starts_with(...)`) warna Home har page par active dikhega.
- **Syncing assets:** `frontend/assets/css/style.css` aur `frontend/assets/js/main.js` ko backend me copy karna hota hai:

  ```bash
  copy frontend\assets\css\style.css  backend\public\assets\css\style.css
  copy frontend\assets\js\main.js     backend\public\assets\js\main.js
  ```

- **View cache:** blade change ke baad `php artisan view:clear` chalayein agar purana output dikhe.

## 🌍 Live Deployment — InfinityFree (free hosting)

Ab website **InfinityFree** par live hai. Production layout:

```
htdocs/                       <- website root (https://YOUR-DOMAIN/)
├── index.html + 11 pages     <- static frontend (root par — folder andar nahi!)
├── assets/                   <- css/js/img/vendor (frontend + backend dono share)
└── backend/                  <- Laravel 12 (https://YOUR-DOMAIN/backend/)
    ├── index.php             <- launcher (project root se boot — public/ ki zaroorat nahi)
    ├── .htaccess             <- Laravel rewrites
    ├── .env                  <- APP_ENV=production, APP_DEBUG=false,
    │                           SESSION/CACHE=file, QUEUE=sync, DB_HOST=localhost
    ├── assets/               <- blade asset() URLs (/backend/assets/...)
    └── app/ vendor/ ...      <- poora Laravel app (vendor --no-dev)
```

### Deploy steps (jo follow kiye gaye):

1. **Panel → PHP Configuration → PHP 8.3** (Laravel 12 = PHP 8.2+ mandatory)
2. **Frontend:** zip upload → `htdocs` me extract → `index.html` root par
3. **Laravel:** `backend/` folder upload — **FTP se** (FileZilla, `ftpupload.net` / `if0_xxxxxxxx`) — kyunki 58MB zip File Manager ki 10MB limit cross karta hai
4. **`.env`** (File Manager se edit): `APP_URL`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` — panel → *MySQL Databases* se exact values
5. **phpMyAdmin** → DB select → **Import** → `phander_hub.sql` (mysqldump se bana; artisan migrate free plan par possible nahi — SSH nahi)
6. **SSL/TLS → Let's Encrypt** enable → Force HTTPS
7. **Flutter app** connect: Profile → **Server Settings** → `https://DOMAIN/backend/api`

### InfinityFree gotchas:

- File Manager upload limit **10MB/file** → bada backend **FTP** se
- SSH/artisan nahi → migrations ki jagah **SQL dump import**
- Storage symlink ki zaroorat nahi (koi file upload nahi) + **file** sessions/cache/queue drivers
- `APP_DEBUG=false` rakhein (production me errors leak hoti hain)
- Backend URLs clean: `https://DOMAIN/backend/skills`, API: `https://DOMAIN/backend/api/courses`

## 📇 Project Info

- **Project:** GB Digital Hub (Gilgit-Baltistan)
- **Contact:** bkhalida275@gmail.com · +92 345 9821430
- **Companion:** Flutter app `flutter_phander/` (same content & theme)

---

Made with ❤️ in Gilgit-Baltistan — *Learn • Grow • Earn* 🏔️
