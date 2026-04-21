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

<!-- Icon Keranjang Kuning dengan Notifikasi -->
<div class="icon-container fixed bottom-4 right-4 z-50">
    <a href="#" id="cart-link" class="relative">
        <span class="material-symbols-outlined text-yellow-500 text-5xl font-bold">shopping_cart</span>
        <span id="cart-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold w-6 h-6 flex items-center justify-center rounded-full hidden">0</span>
    </a>
</div>

<script>
    // Simpan cart di localStorage dan redirect ke daftar-laundry.php dengan data
    document.addEventListener('DOMContentLoaded', () => {
        const cartCount = document.getElementById('cart-count');
        const items = document.querySelectorAll('.add-to-cart');
        const cartLink = document.getElementById('cart-link');
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        let count = cart.length;
        if (count > 0) {
            cartCount.textContent = count;
            cartCount.classList.remove('hidden');
        }

        items.forEach(item => {
            item.addEventListener('click', function() {
                const name = this.getAttribute('data-name');
                const price = this.getAttribute('data-price');
                cart.push({ name, price });
                localStorage.setItem('cart', JSON.stringify(cart));
                cartCount.textContent = cart.length;
                cartCount.classList.remove('hidden');
            });
        });

        cartLink.addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = 'daftar-laundry.php';
        });
    });
</script>

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
                                        <p class="text-sm sm:text-base font-medium text-primary"> <?= $item['name'] ?> </p>
                                    </td>
                                    <td class="py-3 px-4 sm:py-4 sm:px-6 text-right font-bold text-secondary-container whitespace-nowrap text-sm sm:text-base">
                                        <?= $item['price'] ?>
                                    </td>
                                    <td class="py-3 px-4 sm:py-4 sm:px-6 text-right">
                                        <button class="add-to-cart bg-primary text-white px-4 py-2 rounded-full hover:bg-primary-dark" data-name="<?= htmlspecialchars($item['name']) ?>" data-price="<?= htmlspecialchars($item['price']) ?>">Pilih</button>
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