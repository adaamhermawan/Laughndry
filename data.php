<?php
/**
 * data.php — Central data store for the Laughndry landing page.
 *
 * All dynamic content (services, pricing, testimonials, about cards, etc.)
 * lives here as simple PHP arrays. Edit these arrays to update the site
 * without touching any template code.
 */

// ─── About / Value-Proposition Cards ────────────────────────────────────────
$about_cards = [
    [
        'icon' => 'bolt',
        'title' => 'Praktis &amp; Cepat',
        'desc' => 'Mencuci & mengeringkan pakaian dengan Express! Tak perlu antri & menunggu lama.',
    ],
    [
        'icon' => 'schedule',
        'title' => 'Tersedia 24 Jam',
        'desc' => 'Nikmati kenyamanan mencuci kapan saja, sesuai dengan jadwal anda. Kami buka 24 jam setiap hari.',
    ],
    [
        'icon' => 'payments',
        'title' => 'Harga Terjangkau',
        'desc' => 'Hemat waktu & uang anda, cocok untuk kebutuhan harian.',
    ],
];

// ─── Service Cards ──────────────────────────────────────────────────────────
$services = [
    [
        'icon' => 'iron',
        'title' => 'Cuci - Setrika (Min 3kg)',
        'desc' => 'Pakaian lengkap dicuci, disetrika dan dilipat rapih. Pewangi pakaian disediakan dari kami siap di pakai.',

    ],
    [
        'icon' => 'styler',
        'title' => 'Hanya Setrika (Min 3kg)',
        'desc' => 'Bawa pakaian bersih, biar kami yang setrika pakaian Anda dengan wangi dan licin rapih untuk langsung dipakai.',

    ],
    [
        'icon' => 'checkroom',
        'title' => 'Cuci - Lipat (Min 3kg)',
        'desc' => 'Pakaian kotor dicuci bersih, kering secara maksimal dengan mesin yang besar, lalu pelipatan rapi.',
    ],

    [
        'icon' => 'local_laundry_service',
        'title' => 'Cuci - Kering',
        'desc' => 'Pakaian kotor dicuci bersih lalu dikeringkan maksimal masuk mesin pengering tanpa lipat rapi.',
    ],
    [
        'icon' => 'layers',
        'title' => 'Cuci Combo',
        'desc' => 'Kombinasi layanan cuci, kami keringkan lalu lipat rapih dan packing. Pakaian siap di pakai.',
    ],
    [
        'icon' => 'bed',
        'title' => 'Satuan Bedcover Seprei',
        'desc' => 'Perawatan khusus yang detail untuk seprai selimut maksimal nyaman untuk tidur dengan pulas.',
    ],
    [
        'icon' => 'styler',
        'title' => 'Satuan',
        'desc' => 'Perawatan khusus untuk pakaian harian dan menjaga kualitas baju kesayangan anda tetap awet dan nyaman.',
    ],
    [
        'icon' => 'dry_cleaning',
        'title' => 'Dry Clean',
        'desc' => 'Perawatan khusus tanpa menggunakan media air agar pakaian bebas kerusakan dan warna tetap utuh.',
    ],
];

// ─── FAQ ───────────────────────────────────────────────────────────────────
$faqs = [
    [
        'q' => 'Layanan apa saja yang tersedia di Laughndry?',
        'a' => 'Kami menyediakan berbagai pilihan, seperti:<br>· Self service (cuci kering sendiri): Layanan cepat dan praktis.<br>· Terima Beres (Drop off): Layanan cuci kering lipat dan cuci setrika.<br>· Layanan Satuan: Pilihan tepat untuk bahan pakaian yang sensitif.'
    ],
    [
        'q' => 'Berapa lama waktu pengerjaannya?',
        'a' => 'Tergantung dengan layanan yang dipilih, pengerjaan dapat selesai dalam hitungan jam hingga 1-2 hari kerja untuk hasil yang lebih maksimal.'
    ],
    [
        'q' => 'Apakah Laughndry menerima cuci bedcover atau gorden?',
        'a' => 'Tentu saja! Mesin kami memiliki kapasitas yang memadai untuk mencuci item besar seperti bedcover dan gorden.'
    ],
    [
        'q' => 'Apakah saya harus membawa deterjen sendiri untuk Coin Laundry?',
        'a' => 'Tidak perlu repot membawa deterjen sendiri, karena layanan kami sudah mencakup deterjen cair dan pewangi berkualitas tinggi.'
    ],
    [
        'q' => 'Apakah ada area tunggu yang nyaman?',
        'a' => 'Tentu saja ada! Kami menyediakan area tunggu yang dilengkapi dengan tempat duduk yang nyaman dan bersih.'
    ],
    [
        'q' => 'Bagaimana cara memesan layanan Laughndry?',
        'a' => 'Anda dapat memesan layanan kami melalui WhatsApp atau langsung datang ke outlet kami di Serpong.'
    ]
];

// ─── Self-Service Pricing ───────────────────────────────────────────────────
$self_service_prices = [
    [
        'name' => 'Cuci',
        'desc' => 'Pencucian mesin standar',
        'price' => '1.000',
        'unit' => '/kg',
    ],
    [
        'name' => 'Kering',
        'desc' => 'Pengeringan suhu optimal',
        'price' => '1.000',
        'unit' => '/kg',
    ],
];

$self_service_bundle = [
    'label' => 'BUNDLE CUCI KERING',
    'price' => '2.000',
    'unit' => '/kg',
];

// ─── Drop-Off Pricing ──────────────────────────────────────────────────────
$dropoff_prices = [
    [
        'name' => 'Cuci Kering (5kg)',
        'desc' => 'Ideal untuk harian',
        'price' => '20.000',
        'unit' => '',
    ],
    [
        'name' => 'Cuci Kering (10kg)',
        'desc' => 'Paket keluarga',
        'price' => '30.000',
        'unit' => '',
    ],
    [
        'name' => 'Cuci Kering Lipat',
        'desc' => 'Siap masuk lemari',
        'price' => '6.000',
        'unit' => '/kg',
    ],
];

// ─── Pricing Info Boxes ─────────────────────────────────────────────────────
$pricing_info = [
    [
        'icon' => 'local_shipping',
        'title' => 'Antar Jemput',
        'desc' => 'Minimal order untuk layanan pickup &amp; delivery adalah 5kg. Pastikan pakaian Anda siap saat kurir kami tiba.',
    ],
    [
        'icon' => 'location_on',
        'title' => 'Radius Biaya',
        'desc' => 'Jarak pengantaran 2km hingga 3km akan dikenakan biaya tambahan sebesar Rp. 5.000 saja.',
    ],
    [
        'icon' => 'check_circle',
        'title' => 'Kualitas Terjamin',
        'desc' => 'Setiap proses menggunakan deterjen ramah lingkungan dan teknik pengeringan yang menjaga serat kain.',
    ],
];

// ─── Testimonials ───────────────────────────────────────────────────────────
$testimonials = [
    [
        'stars' => 5,
        'quote' => '"Laundry paling sat-set! Wanginya awet banget meski udah seminggu di lemari. CS-nya juga ramah banget pas pick up."',
        'initials' => 'AN',
        'name' => 'Andi Nugroho',
        'role' => '',
    ],
    [
        'stars' => 5,
        'quote' => 'Suka banget sama layanan Express-nya. Baju kerja yang harus dipake mendadak bisa langsung beres dan rapi jali!',
        'initials' => 'SP',
        'name' => 'Sari Putri',
        'role' => '',
    ],
    [
        'stars' => 5,
        'quote' => 'Harga bersahabat tapi kualitas mewah. Bed cover saya jadi lembut banget dan bersih sempurna. Recommended bgt!',
        'initials' => 'BM',
        'name' => 'Budi Mahendra',
        'role' => '',
    ],
    [
        'stars' => 5,
        'quote' => 'Mesinnya banyak jadi antri pun ga kelamaan nunggu. Pelayanan sangat informatif dan ramah sekali. Parkiran luas.',
        'initials' => 'LL',
        'name' => 'Lulu Lutfia',
        'role' => '',
    ],
    [
        'stars' => 5,
        'quote' => 'laundry nya sangat bagus dan bersih, sering bolak balik dikarenakan murah dan deket dari rumah, sangat rekomendasi untuk anak kampus',
        'initials' => 'AW',
        'name' => 'Astri Wulandari',
        'role' => '',
    ],
    [
        'stars' => 5,
        'quote' => 'pelayanan bagus terus buka 24 jam lagi, jdinya kalau malem malem ada baju yang mau dipake besok bisa langsung di cuci dan cepet kering.',
        'initials' => 'NR',
        'name' => 'Nafizha Ramadhani',
        'role' => '',
    ],
];

// ─── Navigation Links ──────────────────────────────────────────────────────
$nav_links = [
    ['label' => 'Home', 'href' => '#', 'active' => true, 'id' => 'nav-home'],
    ['label' => 'Tentang', 'href' => '#tentang', 'active' => false, 'id' => 'nav-tentang'],
    ['label' => 'Layanan', 'href' => '#layanan', 'active' => false, 'id' => 'nav-layanan'],
    ['label' => 'Ulasan', 'href' => '#ulasan', 'active' => false, 'id' => 'nav-ulasan'],
    ['label' => 'Harga', 'href' => '#harga', 'active' => false, 'id' => 'nav-harga'],
];

// ─── Contact Info ───────────────────────────────────────────────────────────
$contact_info = [
    ['icon' => 'phone', 'text' => '+62 852-2096-6656'],
    ['icon' => 'mail', 'text' => 'laughndry@gmail.com'],
    ['icon' => 'svg:instagram', 'text' => '@laughndry'],
    ['icon' => 'schedule', 'text' => 'Buka 24 Jam'],
];
