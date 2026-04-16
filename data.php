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
        'desc' => 'Paket lengkap perawatan pakaian
harian Anda. Bersih maksimal dan rapi
siap pakai.',

    ],
    [
        'icon' => 'styler',
        'title' => 'Hanya Setrika (Min 3kg)',
        'desc' => 'Cucian sudah bersih? Serahkan urusan
menyetrika yang melelahkan kepada
tenaga ahli kami.',

    ],
    [
        'icon' => 'checkroom',
        'title' => 'Cuci - Lipat (Min 3kg)',
        'desc' => 'Solusi praktis untuk pakaian santai.
Cuci bersih dan kering, langsung dilipat
rapi.',
    ],

    [
        'icon' => 'local_laundry_service',
        'title' => 'Cuci - Kering',
        'desc' => 'Layanan cepat kering untuk Anda yang
memiliki mobilitas tinggi dan butuh hasil
instan.',
    ],
    [
        'icon' => 'layers',
        'title' => 'Self Service',
        'desc' => 'Gunakan mesin modern kami secara
mandiri. Lebih ekonomis dan sesuai
privasi Anda.',
    ],
    [
        'icon' => 'bed',
        'title' => 'Satuan Bedcover Seprei',
        'desc' => 'Pembersihan mendalam untuk
perlengkapan tidur Anda agar istirahat
tetap higienis.',
    ],
    [
        'icon' => 'styler',
        'title' => 'Satuan',
        'desc' => 'Perawatan khusus untuk pakaian
branded, jas, gaun, atau item
kesayangan lainnya.',
    ],
    [
        'icon' => 'dry_cleaning',
        'title' => 'Dry Clean',
        'desc' => 'Pencucian tanpa air menggunakan
bahan khusus untuk menjaga serat kain
tetap awet.',
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

// ─── Testimonials ───────────────────────────────────────────────────────────
$testimonials = [
    [
        'stars' => 5,
        'quote' => 'Pertama nyuci di sini dan hasilnya puas
banget... dari segi harga relatif terjangkau
lah,dari segi pelayanan,karyawan yg
incharge helpfull dan ramah bgt. untuk
orang yg baru pertama laundry coin kaya
gw di guidance kok sama petugas nya.',
        'initials' => 'RA',
        'name' => 'Rama Abil Clemira',
        'role' => '',
    ],
    [
        'stars' => 5,
        'quote' => 'Baru pertama kali ke sini, Alhamdulillah
pelayanan nya baik, gak terlalu ngantri
juga. Sekarang mah udah 4x bolak balik ke
sini. Di kala musim hujan, cucian numpuk,
tapi males nyuci pake tangan ya
Laughndry Coin solusinya',
        'initials' => 'RA',
        'name' => 'Rosita Anindya',
        'role' => '',
    ],
    [
        'stars' => 5,
        'quote' => 'Sudah buka 24Jam... Lama waktu untuk
Cuci 30menit. Lama waktu pengering
50menit. Jadi total waktu untuk cuci
sekitar 80 menit, belum termasuk antrian
mesin. Dapat GRATIS parfum sehabis cuci,
ambil di meja kasir.',
        'initials' => 'DH',
        'name' => 'Daniel Hendrato',
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
    ['label' => 'Harga', 'href' => 'harga.php', 'active' => false, 'id' => 'nav-harga'],
];

// ─── Full Price List (harga.php) ───────────────────────────────────────────
$full_price_list = [
    [
        'category' => 'Cuci - Setrika Min 3 Kg',
        'desc' => 'Pakaian lengkap dicuci, disetrika dan dilipat rapih. Pewangi pakaian disediakan dari kami siap pakai.',
        'items' => [
            ['name' => 'Express 6 Jam', 'price' => 'Rp 14.000 /kg'],
            ['name' => 'SHS Satu Hari Saja (1 Hari)', 'price' => 'Rp 9.500 /kg'],
            ['name' => 'Reguler (3 Hari)', 'price' => 'Rp 8.000 /kg'],
            ['name' => 'Paket Hemat 30kg / Bulan', 'price' => 'Rp 235.000'],
            ['name' => 'Express Khusus)', 'price' => 'Rp 25.000 /kg'],
            ['name' => 'Express VIP (3 Jam Selesai)', 'price' => 'Rp 30.000 /kg'],
        ]
    ],
    [
        'category' => 'Hanya Setrika Min 3 Kg',
        'desc' => 'Bawa pakaian bersih, biar kami yang setrika pakaian Anda dengan wangi dan licin rapih untuk langsung dipakai.',
        'items' => [
            ['name' => 'Reguler 3 Hari', 'price' => 'Rp 8.000 /kg'],
            ['name' => 'Kilat 1 Hari', 'price' => 'Rp 12.000 /kg'],
            ['name' => 'Express Pagi Sore Selesai', 'price' => 'Rp 15.000 /kg'],
            ['name' => 'Express Khusus Suhu Malam', 'price' => 'Rp 20.000 /kg'],
            ['name' => 'Express VIP 3 Jam Selesai', 'price' => 'Rp 25.000 /kg'],
        ]
    ],
    [
        'category' => 'Cuci Lipat 3 Kg',
        'desc' => 'Pakaian kotor dicuci bersih, kering secara maksimal dengan mesin yang besar, lalu pelipatan rapi.',
        'items' => [
            ['name' => 'Reguler 3 Hari', 'price' => 'Rp 8.000 /kg'],
            ['name' => 'Express 1 Hari', 'price' => 'Rp 15.000 /kg'],
        ]
    ],
    [
        'category' => 'Cuci Kering',
        'desc' => 'Pakaian kotor dicuci bersih lalu dikeringkan maksimal',
        'items' => [
            ['name' => 'Reguler 3 Hari (5 Kg)', 'price' => 'Rp 25.000'],
            ['name' => 'Reguler 3 Hari (10Kg)', 'price' => 'Rp 45.000'],
            ['name' => 'Express 1 Hari (5Kg)', 'price' => 'Rp 35.000'],
            ['name' => 'Express 1 Hari (10Kg)', 'price' => 'Rp 65.000'],
        ]
    ],
    [
        'category' => 'Self Service',
        'desc' => 'Cuci dan keringkan mandiri tanpa lipat',
        'items' => [
            ['name' => 'Cuci 5 Kg', 'price' => 'Rp 15.000'],
            ['name' => 'Kering 5 Kg', 'price' => 'Rp 15.000'],
        ]
    ],
    [
        'category' => 'Dry Clean',
        'desc' => 'Perawatan khusus tanpa air untuk pakaian bebas kerusakan',
        'items' => [
            ['name' => 'Pakaian Satuan', 'price' => 'Rp 35.000'],
            ['name' => 'Jas / Tuxedo', 'price' => 'Rp 55.000'],
            ['name' => 'Gaun / Kebaya', 'price' => 'Rp 75.000'],
        ]
    ],
    [
        'category' => 'Satuan Bedcover - Seprei',
        'desc' => 'Perawatan khusus yang detail',
        'items' => [
            ['name' => 'Bedcover Single', 'price' => 'Rp 30.000'],
            ['name' => 'Bedcover Double', 'price' => 'Rp 40.000'],
            ['name' => 'Selimut Kecil', 'price' => 'Rp 25.000'],
            ['name' => 'Selimut Besar', 'price' => 'Rp 35.000'],
            ['name' => 'Seprei (Set + Sarung Bantal 1)', 'price' => 'Rp 20.000'],
            ['name' => 'Seprei (Set + Sarung Bantal 2)', 'price' => 'Rp 25.000'],
            ['name' => 'Seprei (Set + Sarung Guling 2)', 'price' => 'Rp 30.000'],
            ['name' => 'Boneka Kecil / Sedang 1', 'price' => 'Rp 15.000'],
            ['name' => 'Boneka Besar / Jumbo 1', 'price' => 'Rp 25.000'],
        ]
    ],
    [
        'category' => 'Satuan',
        'desc' => 'Detail perawatan pakaian harian',
        'items' => [
            ['name' => 'Kemeja / Kaos', 'price' => 'Rp 15.000'],
            ['name' => 'Kemeja Formal', 'price' => 'Rp 20.000'],
            ['name' => 'Celana Panjang Kain / Jeans', 'price' => 'Rp 25.000'],
            ['name' => 'Gamis', 'price' => 'Rp 30.000'],
            ['name' => 'Kaos Dalam / Singlet', 'price' => 'Rp 10.000'],
            ['name' => 'Celana Dalam', 'price' => 'Rp 10.000'],
            ['name' => 'Pakaian Dalam / Set', 'price' => 'Rp 15.000'],
            ['name' => 'Kaos Kaki / Tangan', 'price' => 'Rp 10.000'],
            ['name' => 'Handuk Kecil', 'price' => 'Rp 10.000'],
            ['name' => 'Handuk Besar', 'price' => 'Rp 20.000'],
            ['name' => 'Topi', 'price' => 'Rp 15.000'],
            ['name' => 'Sajadah / Mukena', 'price' => 'Rp 25.000'],
            ['name' => 'Jaket Kulit', 'price' => 'Rp 50.000'],
            ['name' => 'Jaket Bulu Angsa', 'price' => 'Rp 65.000'],
            ['name' => 'Sepatu Sneakers 1 Pasang', 'price' => 'Rp 35.000'],
            ['name' => 'Sepatu / Boots 1 Pasang', 'price' => 'Rp 45.000'],
            ['name' => 'Tas Ransel / Selempang', 'price' => 'Rp 35.000'],
            ['name' => 'Gorden Tipis', 'price' => 'Rp 15.000'],
            ['name' => 'Gorden Tebal / Vitrase', 'price' => 'Rp 20.000'],
            ['name' => 'Sarung Bantal / Guling', 'price' => 'Rp 10.000'],
            ['name' => 'Bantal / Guling', 'price' => 'Rp 25.000'],
            ['name' => 'Helm Half Face', 'price' => 'Rp 20.000'],
            ['name' => 'Helm Full Face', 'price' => 'Rp 25.000'],
            ['name' => 'Stroller Bayi', 'price' => 'Rp 75.000'],
            ['name' => 'Koper Kecil / Sedang', 'price' => 'Rp 55.000'],
            ['name' => 'Koper Besar', 'price' => 'Rp 75.000'],
        ]
    ]
];

// ─── Contact Info ───────────────────────────────────────────────────────────
$contact_info = [
    ['icon' => 'phone', 'text' => '+62 852-2096-6656'],
    ['icon' => 'mail', 'text' => 'laughndry@gmail.com'],
    ['icon' => 'svg:instagram', 'text' => '@laughndry'],
    ['icon' => 'schedule', 'text' => 'Buka 24 Jam'],
];
