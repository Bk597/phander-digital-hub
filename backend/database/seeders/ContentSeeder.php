<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\MarketProduct;
use App\Models\Opportunity;
use App\Models\Roadmap;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        /* ---------------- Courses (Skills Academy) ---------------- */
        $courses = [
            [
                'title' => 'Frontend Web Development',
                'category' => 'Tech & Coding',
                'duration' => '6 Weeks',
                'lessons_count' => 24,
                'instructor' => 'Engr. Salman Ali & Team GB',
                'description' => 'Learn HTML5, CSS3, modern JavaScript, and responsive design tailored for remote work with offline-first caching for mountainous regions.',
                'rating' => 4.90,
                'modules' => [
                    'Web Foundations & Semantic HTML',
                    'CSS Styling & Responsive Grid',
                    'Modern JavaScript (ES6+)',
                    'Building a Live Portfolio Project',
                    'Low-Bandwidth Optimization & Offline Sync',
                ],
                'is_enrolled' => true,
                'progress' => 65,
                'is_featured' => true,
            ],
            [
                'title' => 'Freelance Mastery & Remote Work',
                'category' => 'Freelancing',
                'duration' => '4 Weeks',
                'lessons_count' => 16,
                'instructor' => 'Farhana Baig (Top Rated Freelancer)',
                'description' => 'Master international platforms like Upwork and Fiverr. Learn client communication, proposal writing, and setting up Payoneer in Pakistan.',
                'rating' => 4.95,
                'modules' => [
                    'Winning Profile Creation',
                    'High-Converting Proposals',
                    'Pricing & Remote Contracts',
                    'Receiving Global Payments in Pakistan',
                ],
                'is_enrolled' => true,
                'progress' => 40,
                'is_featured' => true,
            ],
            [
                'title' => 'UI/UX Design with Figma',
                'category' => 'Design',
                'duration' => '5 Weeks',
                'lessons_count' => 20,
                'instructor' => 'Tariq Shah (Lead UI/UX)',
                'description' => 'Design intuitive mobile and web interfaces with Figma auto-layout, design systems, and clickable prototypes.',
                'rating' => 4.85,
                'modules' => [
                    'Design Thinking Foundations',
                    'Figma Layout Grids & Auto-Layout',
                    'Interactive Prototyping',
                    'Case Study Presentations',
                ],
                'is_enrolled' => false,
                'progress' => 0,
                'is_featured' => false,
            ],
            [
                'title' => 'Digital Marketing & Local E-Commerce',
                'category' => 'Business',
                'duration' => '3 Weeks',
                'lessons_count' => 12,
                'instructor' => 'Bibi Maryam (E-Commerce Specialist)',
                'description' => 'Market mountain valley handicrafts, dry fruits, and tourism services online using social media ads and catalogs.',
                'rating' => 4.80,
                'modules' => [
                    'Social Media Branding',
                    'Mobile Product Photography',
                    'Instagram & WhatsApp Commerce',
                    'Courier & Packaging Logistics',
                ],
                'is_enrolled' => false,
                'progress' => 0,
                'is_featured' => false,
            ],
            [
                'title' => 'Python for Data & Automation',
                'category' => 'Tech & Coding',
                'duration' => '6 Weeks',
                'lessons_count' => 22,
                'instructor' => 'Nadia Karim (Data Analyst)',
                'description' => 'From zero to automation scripts: pandas basics, web scraping fundamentals and reporting — no powerful PC needed.',
                'rating' => 4.80,
                'modules' => [
                    'Python Fundamentals',
                    'Data Cleaning with pandas',
                    'Web Scraping Basics',
                    'Automated Reporting Projects',
                ],
                'is_enrolled' => false,
                'progress' => 0,
                'is_featured' => false,
            ],
            [
                'title' => 'Content Writing & SEO',
                'category' => 'Freelancing',
                'duration' => '3 Weeks',
                'lessons_count' => 12,
                'instructor' => 'Sana Iqbal (Writer)',
                'description' => 'Write blogs, product copy and website content that ranks. Build a portfolio and land your first writing client.',
                'rating' => 4.75,
                'modules' => [
                    'Writing Fundamentals & Voice',
                    'SEO Keyword Research',
                    'Blog & Product Copy Formats',
                    'Building a Writer Portfolio',
                ],
                'is_enrolled' => false,
                'progress' => 0,
                'is_featured' => false,
            ],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(['title' => $course['title']], $course);
        }

        /* ---------------- Opportunities ---------------- */
        $opportunities = [
            [
                'title' => 'Gilgit-Baltistan Digital Youth Scholarship',
                'organization' => 'GB IT Board & Tech Partners',
                'type' => 'Scholarship',
                'deadline' => 'October 25, 2026',
                'coverage' => 'Fully Funded + Laptop & 4G Subsidy',
                'location' => 'Phander, Ghizer & Northern Valleys',
                'description' => 'Provides complete tuition fee coverage for 6-month specialized web development and remote freelancing tracks.',
                'is_saved' => true,
                'is_featured' => true,
            ],
            [
                'title' => 'Northern Women Tech Fellowship',
                'organization' => 'Mountain Empowerment Initiative',
                'type' => 'Fellowship',
                'deadline' => 'November 10, 2026',
                'coverage' => 'Rs. 25,000 / month stipend + Mentorship',
                'location' => 'Hybrid / Remote (Phander & Ghizer)',
                'description' => 'A safe, supportive cohort for women learning digital commerce, UI design, and freelance content creation.',
                'is_saved' => true,
                'is_featured' => true,
            ],
            [
                'title' => 'Remote Junior Frontend Developer',
                'organization' => 'CloudPeak Technologies',
                'type' => 'Remote Job',
                'deadline' => 'Rolling Applications',
                'coverage' => 'Rs. 85,000 - 110,000 / month',
                'location' => '100% Remote (Flexible Hours)',
                'description' => 'Build client dashboards and landing pages with flexible async hours tailored for mountain connectivity.',
                'is_saved' => false,
                'is_featured' => false,
            ],
            [
                'title' => 'Rural Enterprise & Artisans Grant',
                'organization' => 'Aga Khan Rural Support Programme (AKRSP)',
                'type' => 'Grant',
                'deadline' => 'December 5, 2026',
                'coverage' => 'Up to Rs. 350,000 Seed Capital',
                'location' => 'Ghizer District (Phander, Gupis, Yasin)',
                'description' => 'Non-repayable seed grant for procuring workshop materials, solar backup, and digital equipment.',
                'is_saved' => false,
                'is_featured' => true,
            ],
        ];

        foreach ($opportunities as $opportunity) {
            Opportunity::updateOrCreate(
                ['title' => $opportunity['title']],
                $opportunity
            );
        }

        /* ---------------- Women's Hub (Market Products) ---------------- */
        $products = [
            [
                'title' => 'Pure Hand-Embroidered Phander Shawl',
                'creator_name' => 'Bibi Amina',
                'village' => 'Phander Main Valley',
                'category' => 'Handcrafted Textile',
                'price' => 'Rs. 6,500',
                'description' => 'Finely spun local sheep wool hand-embroidered with classic Ghizer floral and geometric patterns.',
                'contact' => 'WhatsApp: +92 345 9821430',
                'likes' => 38,
                'is_favorite' => true,
                'emoji' => '🧣',
            ],
            [
                'title' => 'Custom Responsive Website Development',
                'creator_name' => 'Khalida & Tech Circle',
                'village' => 'Phander Koh',
                'category' => 'Digital Service',
                'price' => 'Rs. 18,000 / project',
                'description' => 'Clean modern landing pages, tourism booking sites, or portfolio websites built with mobile responsiveness.',
                'contact' => 'Email: bkhalida275@gmail.com',
                'likes' => 52,
                'is_favorite' => true,
                'emoji' => '💻',
            ],
            [
                'title' => 'Raw Wild Mountain Honey (Phander Valley)',
                'creator_name' => 'Fatima Gul',
                'village' => 'Chashi Valley',
                'category' => 'Local Organic',
                'price' => 'Rs. 2,200 / 500g jar',
                'description' => '100% natural raw blossom honey collected from high-altitude wildflowers in Phander and Chashi.',
                'contact' => 'WhatsApp: +92 346 5129984',
                'likes' => 27,
                'is_favorite' => false,
                'emoji' => '🍯',
            ],
            [
                'title' => 'Traditional Gilgit Hand-Knitted Cap & Brooch',
                'creator_name' => 'Saira Bano',
                'village' => 'Shamran Village',
                'category' => 'Handcrafted Textile',
                'price' => 'Rs. 2,800',
                'description' => 'Handmade woolen Gilgiti cap decorated with traditional beadwork and custom feather brooch.',
                'contact' => 'WhatsApp: +92 348 7741209',
                'likes' => 44,
                'is_favorite' => false,
                'emoji' => '🧢',
            ],
            [
                'title' => 'Sun-Dried Apricots & Walnuts',
                'creator_name' => 'Zarmina Begum',
                'village' => 'Gupis',
                'category' => 'Local Organic',
                'price' => 'Rs. 1,800 / kg',
                'description' => 'Chemical-free, hand-picked valley apricots & walnuts — 1kg combo pack.',
                'contact' => 'WhatsApp: +92 347 1102255',
                'likes' => 31,
                'is_favorite' => false,
                'emoji' => '🍑',
            ],
            [
                'title' => 'Social Media Management',
                'creator_name' => 'Haleema & Co.',
                'village' => 'Yasin',
                'category' => 'Digital Service',
                'price' => 'Rs. 12,000 / month',
                'description' => 'Monthly Instagram & Facebook content, captions and ad setup for local businesses.',
                'contact' => 'Email: haleema@example.com',
                'likes' => 19,
                'is_favorite' => false,
                'emoji' => '📱',
            ],
            [
                'title' => 'Woolen Hand-Knitted Socks (Pair)',
                'creator_name' => 'Rahat Bibi',
                'village' => 'Phander Koh',
                'category' => 'Handcrafted Textile',
                'price' => 'Rs. 1,200',
                'description' => 'Warm pure-wool socks knitted in traditional Ghizer patterns — unisex sizes.',
                'contact' => 'WhatsApp: +92 345 7710043',
                'likes' => 22,
                'is_favorite' => false,
                'emoji' => '🧦',
            ],
            [
                'title' => 'Logo & Brand Kit Design',
                'creator_name' => 'Ayesha Noor',
                'village' => 'Khizarabad',
                'category' => 'Digital Service',
                'price' => 'Rs. 4,500',
                'description' => 'Clean modern logos, flyers and social kits — 3 concepts, 2 revisions included.',
                'contact' => 'Email: ayesha@example.com',
                'likes' => 25,
                'is_favorite' => false,
                'emoji' => '🎨',
            ],
        ];

        foreach ($products as $product) {
            MarketProduct::updateOrCreate(['title' => $product['title']], $product);
        }

        /* ---------------- Roadmaps ---------------- */
        $roadmaps = [
            [
                'title' => 'Frontend Web Developer',
                'icon' => '💻',
                'duration' => '5 - 6 Months',
                'description' => 'Zero to job-ready frontend engineer building responsive, accessible web applications.',
                'sort_order' => 1,
                'steps' => [
                    ['title' => 'Internet & HTML5 Fundamentals', 'description' => 'Semantic markup, tags, forms and SEO.', 'is_done' => true],
                    ['title' => 'Responsive CSS & Flexbox/Grid', 'description' => 'Mobile-first layouts and Tailwind CSS.', 'is_done' => true],
                    ['title' => 'Modern JavaScript (ES6+) & APIs', 'description' => 'Async/await, fetching JSON data, and local storage.', 'is_done' => false],
                    ['title' => 'Component Frameworks (React/Vue)', 'description' => 'State management, reusable components and routing.', 'is_done' => false],
                    ['title' => 'Portfolio & Remote Job Hunt', 'description' => 'Build 3 live projects and apply for remote gigs.', 'is_done' => false],
                ],
            ],
            [
                'title' => 'Global Freelancer & Upwork Pro',
                'icon' => '💼',
                'duration' => '2 - 3 Months',
                'description' => 'Master client acquisition, high-converting proposals, and financial independence.',
                'sort_order' => 2,
                'steps' => [
                    ['title' => 'Niche & Service Definition', 'description' => 'Identify your marketable core skill and target clients.', 'is_done' => true],
                    ['title' => 'Profile Optimization & Case Studies', 'description' => 'Compelling bio, portfolio items, and intro video.', 'is_done' => false],
                    ['title' => 'Proposal Mastery & Bidding', 'description' => 'Write personalized pitches within 15 mins of job posting.', 'is_done' => false],
                    ['title' => 'Scaling & Long-Term Retainers', 'description' => 'Convert one-off clients into steady monthly retainers.', 'is_done' => false],
                ],
            ],
        ];

        foreach ($roadmaps as $data) {
            $steps = $data['steps'];
            unset($data['steps']);

            $roadmap = Roadmap::updateOrCreate(['title' => $data['title']], $data);

            foreach ($steps as $index => $step) {
                $roadmap->steps()->updateOrCreate(
                    ['position' => $index + 1],
                    [
                        'title' => $step['title'],
                        'description' => $step['description'],
                        'is_done' => $step['is_done'],
                    ]
                );
            }
        }
    }
}
