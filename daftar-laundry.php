<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troli Laundry Anda</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <style>
        body {
            background: #f8fafc;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .cart-container {
            max-width: 540px;
            margin: 40px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 32px 24px 24px 24px;
        }
        .cart-title {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 2rem;
            font-weight: bold;
            color: #fbbf24;
            margin-bottom: 18px;
        }
        .cart-list {
            list-style: none;
            padding: 0;
            margin: 0 0 24px 0;
        }
        .cart-list li {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 18px 0;
            border-bottom: 1px solid #f3f4f6;
            font-size: 1.1rem;
        }
        .cart-list li:last-child {
            border-bottom: none;
        }
        .cart-img {
            width: 56px;
            height: 56px;
            background: #f3f4f6;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #a3a3a3;
        }
        .cart-info {
            flex: 1;
        }
        .cart-name {
            font-weight: 500;
            color: #222;
        }
        .cart-price {
            color: #f59e0b;
            font-weight: bold;
            margin-top: 2px;
        }
        .cart-remove {
            background: none;
            border: none;
            color: #ef4444;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 4px;
            transition: color 0.2s;
        }
        .cart-remove:hover {
            color: #b91c1c;
        }
        .cart-empty {
            text-align: center;
            color: #888;
            margin: 32px 0;
        }
        .cart-total {
            text-align: right;
            font-size: 1.2rem;
            font-weight: bold;
            color: #374151;
            margin-bottom: 24px;
        }
        .cart-btn {
            display: inline-block;
            background: #fbbf24;
            color: #fff;
            font-weight: bold;
            padding: 12px 32px;
            border-radius: 999px;
            text-decoration: none;
            transition: background 0.2s;
            box-shadow: 0 2px 8px rgba(251,191,36,0.12);
        }
        .cart-btn:hover {
            background: #f59e0b;
        }
        .btn-group {
            display: flex;
            gap: 12px;
            margin-top: 16px;
        }
        .btn-group .cart-btn {
            flex: 1;
            text-align: center;
            border: none;
            cursor: pointer;
            font-family: inherit;
            font-size: 1rem;
            box-sizing: border-box;
        }
        .btn-primary {
            background: #10b981;
            box-shadow: 0 2px 8px rgba(16,185,129,0.12);
        }
        .btn-primary:hover {
            background: #059669;
        }
        .btn-secondary {
            background: #9ca3af;
            box-shadow: 0 2px 8px rgba(156,163,175,0.12);
        }
        .btn-secondary:hover {
            background: #6b7280;
        }
        .payment-summary {
            background: #f9fafb;
            border-radius: 12px;
            padding: 16px;
            margin-bottom: 20px;
            border: 1px solid #e5e7eb;
        }
        .payment-summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            color: #4b5563;
        }
        .payment-summary-total {
            display: flex;
            justify-content: space-between;
            margin-top: 12px;
            padding-top: 12px;
            border-top: 1px solid #d1d5db;
            font-weight: bold;
            color: #111827;
            font-size: 1.1rem;
        }
        .form-group {
            margin-bottom: 24px;
        }
        .form-label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #374151;
        }
        .form-select {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            font-size: 1rem;
            font-family: inherit;
            background-color: white;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="cart-container">
        <!-- Main Cart View -->
        <div id="cart-view">
            <div class="cart-title">
                <span class="material-symbols-outlined" style="font-size:2.2rem;">shopping_cart</span>
                Troli Laundry Anda
            </div>
            <ul class="cart-list" id="cart-list"></ul>
            <div class="cart-empty" id="cart-empty">Belum ada laundry yang dipilih.</div>
            <div class="cart-total" id="cart-total"></div>
            <div class="btn-group">
                <a href="harga.php" class="cart-btn">Tambah Pesanan</a>
                <button id="btn-checkout" class="cart-btn btn-primary" style="display: none;">Pembayaran</button>
            </div>
        </div>

        <!-- Payment View (Hidden by default) -->
        <div id="payment-view" style="display: none;">
            <div class="cart-title">
                <span class="material-symbols-outlined" style="font-size:2.2rem;">payments</span>
                Pembayaran
            </div>
            <div id="payment-summary" class="payment-summary">
                <!-- Summary inserted via JS -->
            </div>
            <div class="form-group">
                <label class="form-label">Metode Pembayaran</label>
                <select class="form-select" id="payment-method">
                    <option value="qris">QRIS</option>
                    <option value="transfer">Transfer Bank (BCA/Mandiri/BRI)</option>
                    <option value="tunai">Tunai (Bayar di tempat)</option>
                </select>
            </div>
            <div class="btn-group">
                <button id="btn-back" class="cart-btn btn-secondary">Kembali</button>
                <button id="btn-confirm" class="cart-btn btn-primary">Konfirmasi Pesanan</button>
            </div>
        </div>
    </div>
    <script>
        // Ambil data keranjang dari localStorage
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartList = document.getElementById('cart-list');
        const cartEmpty = document.getElementById('cart-empty');
        const cartTotal = document.getElementById('cart-total');
        let total = 0;

        function renderCart() {
            cartList.innerHTML = '';
            total = 0;
            if (cart.length === 0) {
                cartList.style.display = 'none';
                cartTotal.style.display = 'none';
                cartEmpty.style.display = 'block';
                document.getElementById('btn-checkout').style.display = 'none';
            } else {
                cartList.style.display = 'block';
                cartTotal.style.display = 'block';
                cartEmpty.style.display = 'none';
                document.getElementById('btn-checkout').style.display = 'block';
                cart.forEach((item, idx) => {
                    let price = parseInt(item.price.replace(/[^0-9]/g, ''));
                    total += price;
                    const li = document.createElement('li');
                    li.innerHTML = `
                        <div class="cart-img">
                            <span class="material-symbols-outlined">local_laundry_service</span>
                        </div>
                        <div class="cart-info">
                            <div class="cart-name">${item.name}</div>
                            <div class="cart-price">Rp ${price.toLocaleString('id-ID')}</div>
                        </div>
                        <button class="cart-remove" title="Hapus" data-idx="${idx}"><span class="material-symbols-outlined">delete</span></button>
                    `;
                    cartList.appendChild(li);
                });
                cartTotal.textContent = `Total: Rp ${total.toLocaleString('id-ID')}`;
            }
        }

        // Event delegation untuk hapus barang
        cartList.addEventListener('click', function(e) {
            if (e.target.closest('.cart-remove')) {
                const idx = e.target.closest('.cart-remove').getAttribute('data-idx');
                cart.splice(idx, 1);
                localStorage.setItem('cart', JSON.stringify(cart));
                renderCart();
            }
        });

        renderCart();

        // Payment logic
        const cartView = document.getElementById('cart-view');
        const paymentView = document.getElementById('payment-view');
        const btnCheckout = document.getElementById('btn-checkout');
        const btnBack = document.getElementById('btn-back');
        const btnConfirm = document.getElementById('btn-confirm');
        const paymentSummary = document.getElementById('payment-summary');

        btnCheckout.addEventListener('click', () => {
            cartView.style.display = 'none';
            paymentView.style.display = 'block';
            renderPaymentSummary();
        });

        btnBack.addEventListener('click', () => {
            paymentView.style.display = 'none';
            cartView.style.display = 'block';
        });

        btnConfirm.addEventListener('click', () => {
            const method = document.getElementById('payment-method');
            const selectedText = method.options[method.selectedIndex].text;
            alert(`Pesanan berhasil dikonfirmasi!\nMetode Pembayaran: ${selectedText}\nTerima kasih telah menggunakan Laughndry.`);
            localStorage.removeItem('cart');
            cart = [];
            renderCart();
            paymentView.style.display = 'none';
            cartView.style.display = 'block';
        });

        function renderPaymentSummary() {
            paymentSummary.innerHTML = '';
            let orderItems = '';
            cart.forEach(item => {
                let price = parseInt(item.price.replace(/[^0-9]/g, ''));
                orderItems += `
                    <div class="payment-summary-item">
                        <span>${item.name}</span>
                        <span>Rp ${price.toLocaleString('id-ID')}</span>
                    </div>
                `;
            });
            paymentSummary.innerHTML = `
                ${orderItems}
                <div class="payment-summary-total">
                    <span>Total Tagihan</span>
                    <span>Rp ${total.toLocaleString('id-ID')}</span>
                </div>
            `;
        }
    </script>
</body>
</html>
