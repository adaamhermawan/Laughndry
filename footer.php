<?php
/**
 * footer.php — Site footer + CTA banner + all closing tags.
 *
 * Expects $contact_info & $social_links from data.php.
 */
?>

<!-- ═══════════════════════════ CTA BANNER ═══════════════════════════ -->
<section class="px-4 sm:px-8 pb-16 sm:pb-24 reveal">
    <div
        class="max-w-7xl mx-auto signature-gradient rounded-[2rem] sm:rounded-[3rem] p-8 sm:p-12 md:p-20 text-center relative overflow-hidden shadow-2xl">
        <!-- Decorative blobs -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl">
        </div>
        <div
            class="absolute bottom-0 left-0 w-64 h-64 bg-secondary-container/10 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl">
        </div>

        <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-on-primary mb-6 sm:mb-8 relative z-10">Siap
            Merasakan Kesegaran?</h2>
        <p
            class="text-on-primary-container text-base sm:text-lg mb-8 sm:mb-12 max-w-2xl mx-auto relative z-10 leading-relaxed">
            Jangan biarkan cucian kotor menumpuk dan merusak mood harimu. Hubungi kami sekarang dan biarkan para ahli
            yang menanganinya!
        </p>
        <a href="#harga"
            class="inline-block bg-secondary-container text-on-secondary-fixed px-8 sm:px-10 py-4 sm:py-5 rounded-full font-black text-lg sm:text-xl hover:scale-105 active:scale-95 transition-all relative z-10 shadow-lg">
            Order Sekarang
        </a>
    </div>
</section>

<!-- ═══════════════════════════ FOOTER ═══════════════════════════ -->
<footer class="bg-primary text-on-primary pt-16 sm:pt-20 pb-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-8 grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-16 mb-16 md:mb-20">

        <!-- Brand -->
        <div>
            <div class="text-2xl sm:text-3xl font-black mb-6 text-white">Laughndry</div>
            <p class="text-emerald-100/70 leading-relaxed mb-8">
                Premium Laundry Editorial. Menyediakan layanan cuci berkualitas tinggi dengan perhatian pada detail dan
                kenyamanan pelanggan.
            </p>

        </div>

        <!-- Contact -->
        <div>
            <h4 class="text-lg sm:text-xl font-bold mb-6 sm:mb-8 text-secondary-container">HUBUNGI KAMI</h4>
            <ul class="space-y-4">
                <?php foreach ($contact_info as $ci): ?>
                    <li class="flex items-center gap-3 text-emerald-100/80">
                        <?php if ($ci['icon'] === 'svg:instagram'): ?>
                            <svg class="text-secondary-container" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                            </svg>
                        <?php else: ?>
                            <span class="material-symbols-outlined text-secondary-container"><?= $ci['icon'] ?></span>
                        <?php endif; ?>
                        <?= $ci['text'] ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Map / Location -->
        <div>
            <h4 class="text-lg sm:text-xl font-bold mb-6 sm:mb-8 text-secondary-container">LOKASI KAMI</h4>
            <div class="rounded-2xl overflow-hidden h-48 relative">
                <img alt="Peta Lokasi" class="w-full h-full object-cover opacity-50"
                    src="assets/gambar/Basemap image.png" />
                <div class="absolute inset-0 bg-primary/40 flex items-center justify-center">
                    <div
                        class="bg-surface p-3 sm:p-4 rounded-xl text-primary text-xs sm:text-sm font-bold shadow-xl text-center">
                        Jl. Raya Puspitek No 18b, Kel. Buaran, Kec. Serpong, Kota Tangerang Selatan
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div
        class="max-w-7xl mx-auto px-4 sm:px-8 pt-8 border-t border-white/10 text-center text-emerald-100/50 text-xs sm:text-sm">
        &copy; <?= date('Y') ?> Laughndry. Premium Laundry Editorial. Seluruh Hak Cipta Dilindungi.
    </div>
</footer>

<!-- ═══════════════════════════ SCRIPTS ═══════════════════════════ -->
<script>
    // ── Mobile Menu Toggle ──────────────────────────────────────────────────
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        menuBtn.classList.toggle('open');
        if (mobileMenu.style.maxHeight) {
            mobileMenu.style.maxHeight = null;
        } else {
            mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
        }
    });

    // Close menu when clicking a link
    document.querySelectorAll('.mobile-nav-link').forEach(link => {
        link.addEventListener('click', () => {
            menuBtn.classList.remove('open');
            mobileMenu.style.maxHeight = null;
        });
    });

    // ── Scroll-Triggered Reveal Animations (Intersection Observer) ──────────
    const revealElements = document.querySelectorAll('.reveal');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    revealElements.forEach(el => revealObserver.observe(el));

    // ── Staggered card animations ───────────────────────────────────────────
    const staggerContainers = document.querySelectorAll('.stagger-children');

    const staggerObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const children = entry.target.querySelectorAll('.stagger-item');
                children.forEach((child, i) => {
                    child.style.transitionDelay = `${i * 100}ms`;
                    child.classList.add('revealed');
                });
                staggerObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08 });

    staggerContainers.forEach(el => staggerObserver.observe(el));

    // ── Navbar Shrink on Scroll ─────────────────────────────────────────────
    const nav = document.getElementById('main-nav');
    let lastScroll = 0;

    window.addEventListener('scroll', () => {
        const currentScroll = window.scrollY;
        if (currentScroll > 60) {
            nav.classList.add('shadow-lg', 'py-1');
        } else {
            nav.classList.remove('shadow-lg', 'py-1');
        }
        lastScroll = currentScroll;
    }, { passive: true });

    // ── Smooth scroll for anchor links ──────────────────────────────────────
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
</script>

</body>

</html>