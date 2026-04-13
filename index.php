<?php
/**
 * ═══════════════════════════════════════════════════════════════
 * index.php — Laughndry Landing Page (Main Entry)
 * ═══════════════════════════════════════════════════════════════
 *
 * HOW TO RUN:
 * 1. Place the entire "Laughndry" folder inside your XAMPP htdocs directory.
 * 2. Start Apache from the XAMPP Control Panel.
 * 3. Open http://localhost/Laughndry/ in your browser.
 *
 * FILE STRUCTURE:
 *   Laughndry/
 *   ├── index.php      ← This file (main page)
 *   ├── header.php      ← Reusable <head>, navbar
 *   ├── footer.php      ← Reusable footer, CTA, scripts
 *   ├── data.php        ← All dynamic content arrays
 *   └── style.css       ← Custom animations & styles
 */

/*tes*/

// Load all data arrays
require_once __DIR__ . '/data.php';

// Render the header (doctype, head, navbar)
require_once __DIR__ . '/header.php';
?>

<!-- ═══════════════════════════ HERO SECTION ═══════════════════════════ -->
<header
    class="relative overflow-hidden pt-8 sm:pt-12 pb-16 sm:pb-24 px-4 sm:px-8 max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center">
    <div class="z-10">
        <span
            class="inline-block px-4 py-1.5 rounded-full bg-primary-fixed text-primary text-xs font-black tracking-widest mb-6 hero-text-animate">
            #1 LAUNDRY DI SERPONG
        </span>

        <h1
            class="text-4xl sm:text-5xl md:text-6xl font-black text-primary leading-[1.1] tracking-tight mb-6 hero-text-animate-delay-1">
            Cuci numpuk? Ketawain aja, bereskan cucianmu di Laughndry!
        </h1>

        <p
            class="text-base sm:text-lg text-on-surface-variant mb-8 sm:mb-10 max-w-lg leading-relaxed hero-text-animate-delay-2">
            Cucian yang bikin stress jadi beres?! Serahkan pada kami! Nikmati layanan laundry premium dengan teknologi
            terkini dan keharuman tahan lama yang bikin harimu lebih ceria.
        </p>

        <a href="#harga"
            class="inline-flex items-center gap-3 bg-secondary-container text-on-secondary-fixed px-7 sm:px-8 py-3.5 sm:py-4 rounded-full font-black text-base sm:text-lg shadow-xl shadow-secondary-container/20 btn-press hero-text-animate-delay-3">
            Coba Sekarang
            <span class="material-symbols-outlined">arrow_forward</span>
        </a>
    </div>

    <div class="relative hero-image-animate">
        <div class="absolute inset-0 bg-primary-container rounded-[3rem] -rotate-3 z-0"></div>
        <video alt="Laughndry Experience"
            class="relative z-10 w-full aspect-[4/5] object-cover rounded-[2.5rem] shadow-2xl grayscale-[0.2] hover:grayscale-0 transition-all duration-700"
            src=" assets/gambar/video.mp4 " autoplay loop muted>
    </div>
</header>


<!-- ═══════════════════════════ TENTANG SECTION ═══════════════════════════ -->
<section class="py-16 sm:py-24 bg-surface-container-low" id="tentang">
    <div class="max-w-7xl mx-auto px-4 sm:px-8">

        <div class="text-center mb-12 sm:mb-16 reveal">
            <span class="text-secondary-container font-black tracking-[0.2em] text-sm mb-4 block">TENTANG</span>
            <h2 class="text-3xl sm:text-4xl font-black text-primary">Lebih dari sekadar cuci baju</h2><br />
            <h1> "Berawal dari layanan coin laundry terpercaya, Laughndry kini hadir
                dengan layanan full service untuk menjawab semua kebutuhan pakaian
                bersih Anda. Dengan fasilitas mesin modern berkapasitas besar, area
                yang bersih, dan pelayanan yang ramah, kami berkomitmen
                menghadirkan solusi cuci yang cepat, wangi, rapi, dan tepat waktu.
                Serahkan masalah cucian Anda kepada kami." </h1>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8 stagger-children">
            <?php foreach ($about_cards as $card): ?>
                <div class="bg-surface-container-lowest p-8 sm:p-10 rounded-3xl card-hover stagger-item">
                    <div
                        class="w-16 h-16 bg-secondary-fixed flex items-center justify-center rounded-full mb-8 icon-bounce">
                        <span class="material-symbols-outlined text-secondary text-3xl"><?= $card['icon'] ?></span>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-4"><?= $card['title'] ?></h3>
                    <p class="text-on-surface-variant leading-relaxed"><?= $card['desc'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ═══════════════════════════ LAYANAN SECTION ═══════════════════════════ -->
<section class="py-16 sm:py-24 bg-surface" id="layanan">
    <div class="max-w-7xl mx-auto px-4 sm:px-8">

        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 sm:mb-16 gap-4 sm:gap-6 reveal">
            <div>
                <span class="text-secondary-container font-black tracking-[0.2em] text-sm mb-4 block">LAYANAN
                    KAMI</span>
                <h2 class="text-3xl sm:text-4xl font-black text-primary">Pilih kenyamananmu</h2>
            </div>
            <p class="text-on-surface-variant max-w-sm"></p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 stagger-children">
            <?php foreach ($services as $svc): ?>
                <div class="bg-surface-container-lowest p-8 sm:p-10 rounded-3xl card-hover stagger-item">
                    <div
                        class="w-16 h-16 bg-secondary-fixed flex items-center justify-center rounded-full mb-8 icon-bounce">
                        <span class="material-symbols-outlined text-secondary text-3xl"><?= $svc['icon'] ?></span>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-4"><?= $svc['title'] ?></h3>
                    <p class="text-on-surface-variant leading-relaxed"><?= $svc['desc'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ═══════════════════════════ HARGA SECTION ═══════════════════════════ -->
<section class="py-16 sm:py-24 bg-surface-container-low" id="harga">
    <div class="max-w-7xl mx-auto px-4 sm:px-8 text-center">

        <div class="reveal">
            <h2 class="text-3xl sm:text-4xl font-black text-primary mb-12 sm:mb-16">Daftar Harga Laughndry</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-12 mb-12 sm:mb-16 stagger-children">

            <!-- ── Self Service Table ──────────────────────────────── -->
            <div class="overflow-hidden rounded-3xl shadow-lg bg-surface-container-lowest card-hover stagger-item">
                <div
                    class="bg-primary-container py-5 sm:py-6 text-on-primary font-bold text-lg sm:text-xl flex items-center justify-between px-6 sm:px-8">
                    <div class="flex flex-col items-start">
                        <span class="text-[10px] uppercase tracking-widest opacity-80">LAYANAN MANDIRI</span>
                        <span>Self Service</span>
                    </div>
                    <span class="material-symbols-outlined">dry_cleaning</span>
                </div>
                <div class="p-3 sm:p-4">
                    <table class="w-full text-left">
                        <tbody class="divide-y divide-surface-variant">
                            <?php foreach ($self_service_prices as $item): ?>
                                <tr class="price-row hover:bg-surface-container transition-colors">
                                    <td class="py-3 sm:py-4 px-4 sm:px-6">
                                        <p class="font-bold text-primary"><?= $item['name'] ?></p>
                                        <p class="text-xs text-on-surface-variant"><?= $item['desc'] ?></p>
                                    </td>
                                    <td
                                        class="py-3 sm:py-4 px-4 sm:px-6 text-right font-black text-secondary-container text-lg sm:text-xl whitespace-nowrap">
                                        <?= $item['price'] ?>
                                        <?php if ($item['unit']): ?>
                                            <span class="text-sm text-on-surface-variant"><?= $item['unit'] ?></span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div
                        class="mt-4 p-4 sm:p-6 bg-surface-container-low rounded-2xl flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2">
                        <span
                            class="font-black text-primary tracking-tight text-sm sm:text-base"><?= $self_service_bundle['label'] ?></span>
                        <span class="font-black text-secondary-container text-xl sm:text-2xl whitespace-nowrap">
                            <?= $self_service_bundle['price'] ?>
                            <span class="text-sm text-on-surface-variant"><?= $self_service_bundle['unit'] ?></span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- ── Drop Off Table ─────────────────────────────────── -->
            <div class="overflow-hidden rounded-3xl shadow-lg bg-surface-container-lowest card-hover stagger-item">
                <div
                    class="bg-primary-container py-5 sm:py-6 text-on-primary font-bold text-lg sm:text-xl flex items-center justify-between px-6 sm:px-8">
                    <div class="flex flex-col items-start">
                        <span class="text-[10px] uppercase tracking-widest opacity-80">TERIMA BERES</span>
                        <span>Drop Off</span>
                    </div>
                    <span class="material-symbols-outlined">inventory_2</span>
                </div>
                <div class="p-3 sm:p-4">
                    <table class="w-full text-left">
                        <tbody class="divide-y divide-surface-variant">
                            <?php foreach ($dropoff_prices as $item): ?>
                                <tr class="price-row hover:bg-surface-container transition-colors">
                                    <td class="py-3 sm:py-4 px-4 sm:px-6">
                                        <p class="font-bold text-primary"><?= $item['name'] ?></p>
                                        <p class="text-xs text-on-surface-variant"><?= $item['desc'] ?></p>
                                    </td>
                                    <td
                                        class="py-3 sm:py-4 px-4 sm:px-6 text-right font-black text-secondary-container text-lg sm:text-xl whitespace-nowrap">
                                        <?= $item['price'] ?>
                                        <?php if ($item['unit']): ?>
                                            <span class="text-sm text-on-surface-variant"><?= $item['unit'] ?></span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ── Pricing Info Cards ────────────────────────────────── -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8 stagger-children">
            <?php foreach ($pricing_info as $info): ?>
                <div class="bg-surface-container-lowest p-6 sm:p-8 rounded-2xl shadow-sm text-left card-hover stagger-item">
                    <span
                        class="material-symbols-outlined text-primary text-3xl mb-4 icon-bounce"><?= $info['icon'] ?></span>
                    <h4 class="font-bold text-primary mb-2"><?= $info['title'] ?></h4>
                    <p class="text-sm text-on-surface-variant leading-relaxed"><?= $info['desc'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ═══════════════════════════ ULASAN SECTION ═══════════════════════════ -->
<section class="py-16 sm:py-24 bg-surface" id="ulasan">
    <div class="max-w-7xl mx-auto px-4 sm:px-8">

        <div class="text-center mb-12 sm:mb-16 reveal">
            <span class="text-secondary-container font-black tracking-[0.2em] text-sm mb-4 block">KATA MEREKA</span>
            <h2 class="text-3xl sm:text-4xl font-black text-primary">Apa Kata Pelanggan Tentang Laughndry</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 stagger-children">
            <?php foreach ($testimonials as $t): ?>
                <div
                    class="bg-surface-container-lowest p-6 sm:p-8 rounded-3xl shadow-sm border border-outline-variant/10 testimonial-card stagger-item">
                    <!-- Stars -->
                    <div class="flex text-secondary-container mb-4">
                        <?php for ($i = 0; $i < $t['stars']; $i++): ?>
                            <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1;">star</span>
                        <?php endfor; ?>
                    </div>

                    <p class="text-on-surface-variant mb-6 sm:mb-8 italic leading-relaxed">"<?= $t['quote'] ?>"</p>

                    <div class="flex items-center gap-4">
                        <div
                            class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-secondary-container flex items-center justify-center font-bold text-on-secondary-fixed text-sm">
                            <?= $t['initials'] ?>
                        </div>
                        <div>
                            <p class="font-bold text-primary"><?= $t['name'] ?></p>
                            <p class="text-xs text-on-surface-variant"><?= $t['role'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<?php
// Render the footer (CTA banner, footer content, scripts)
require_once __DIR__ . '/footer.php';
?>