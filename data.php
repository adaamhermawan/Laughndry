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
        'icon' => 'self_care',
        'title' => 'Self Service',
        'desc' => 'Mencuci & mengeringkan pakaian dengan Express! Tak perlu antri & menunggu lama.',

    ],
    [
        'icon' => 'iron',
        'title' => 'Full Service (Setrika)',
        'desc' => 'Serahkan segalanya pada kami. Cuci, kering, hingga setrika rapi siap pakai.',

    ],
    [
        'icon' => 'inventory_2',
        'title' => 'Satuan &amp; Kiloan',
        'desc' => 'Dari baju harian hingga bed cover, kami tangani dengan teliti.',
    ],

    [
        'icon' => 'local_shipping',
        'title' => 'Pickup &amp; Delivery',
        'desc' => 'Malas keluar rumah? Kami jemput dan antar kembali cucian Anda.',
    ],
    [
        'icon' => 'dry_cleaning',
        'title' => 'Cuci Kering',
        'desc' => 'Proses pembersihan cepat untuk pakaian yang butuh perawatan ekstra.',
    ],
    [
        'icon' => 'checkroom',
        'title' => 'Cuci Kering Lipat',
        'desc' => 'Hemat waktu, kami lipat dengan rapi setelah kering.',
    ],
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
    ['label' => 'Home', 'href' => '#', 'active' => true],
    ['label' => 'Tentang', 'href' => '#tentang', 'active' => false],
    ['label' => 'Layanan', 'href' => '#layanan', 'active' => false],
    ['label' => 'Harga', 'href' => '#harga', 'active' => false],
    ['label' => 'Ulasan', 'href' => '#ulasan', 'active' => false],
];

// ─── Contact Info ───────────────────────────────────────────────────────────
$contact_info = [
    ['icon' => 'phone', 'text' => '+62 852-2096-6656'],
    ['icon' => 'mail', 'text' => 'laughndry@gmail.com'],
    ['icon' => 'svg:instagram', 'text' => '@laughndry'],
    ['icon' => 'schedule', 'text' => 'Buka 24 Jam'],
];
