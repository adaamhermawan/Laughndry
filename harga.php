<?php
require_once __DIR__ . '/data.php';

// Render the header (doctype, head, navbar)
require_once __DIR__ . '/header.php';
?>

<!-- ═══════════════════════════ HEADER PAGE ═══════════════════════════ -->
<section class="pt-16 sm:pt-24 pb-12 bg-surface-container-low">
    <div class="max-w-4xl mx-auto px-4 sm:px-8 text-center sm:text-left mt-8">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-black text-primary leading-tight mb-4">Detail Lengkap<br>Daftar
            Harga Laughndry</h1>
        <p class="text-on-surface-variant text-base sm:text-lg">Transparansi harga untuk kualitas premium. Temukan paket
            layanan laundry terbaik yang dirancang khusus untuk kebutuhan gaya hidup Anda yang dinamis.
        </p>
    </div>
</section>

<!-- ═══════════════════════════ PRICE LIST SECTION ═══════════════════════════ -->
<section class="py-12 bg-surface">
    <div class="max-w-4xl mx-auto px-4 sm:px-8 space-y-12">
        <?php foreach ($full_price_list as $category): ?>
            <div class="reveal">
                <!-- Category Title -->
                <div class="border-l-4 border-secondary-container pl-4 mb-6">
                    <h2 class="text-xl sm:text-2xl font-bold text-primary"><?= $category['category'] ?></h2>
                    <?php if (!empty($category['desc'])): ?>
                        <p class="text-xs sm:text-sm text-on-surface-variant mt-1"><?= $category['desc'] ?></p>
                    <?php endif; ?>
                </div>

                <!-- Category Items -->
                <div
                    class="bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/10 overflow-hidden">
                    <table class="w-full text-left bg-white">
                        <tbody class="divide-y divide-surface-variant">
                            <?php foreach ($category['items'] as $item): ?>
                                <tr class="hover:bg-surface-container transition-colors">
                                    <td class="py-3 px-4 sm:py-4 sm:px-6">
                                        <p class="text-sm sm:text-base font-medium text-primary"><?= $item['name'] ?></p>
                                    </td>
                                    <td
                                        class="py-3 px-4 sm:py-4 sm:px-6 text-right font-bold text-secondary-container whitespace-nowrap text-sm sm:text-base">
                                        <?= $item['price'] ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="text-center pt-8 pb-12 reveal">
            <a href="index.php"
                class="inline-flex items-center gap-3 bg-primary text-on-primary px-8 py-4 rounded-full font-bold hover:scale-105 active:scale-95 transition-all shadow-xl hover:shadow-2xl">
                <span class="material-symbols-outlined text-lg">arrow_back</span>
                Kembali ke Halaman Utama
            </a>
        </div>
    </div>
</section>

<?php
// Render the footer
require_once __DIR__ . '/footer.php';
?>