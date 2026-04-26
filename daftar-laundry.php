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
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
            padding: 32px 24px 24px 24px;
        }

        .cart-title {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 2rem;
            font-weight: 900;
            color: #00433a;
            margin-bottom: 18px;
        }

        .cart-title .material-symbols-outlined {
            color: #fbad48;
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

        .qty-control {
            display: flex;
            align-items: center;
            gap: 8px;
            background: #f3f4f6;
            padding: 4px 8px;
            border-radius: 8px;
            margin-right: 8px;
        }

        .qty-btn {
            background: #fff;
            border: 1px solid #e5e7eb;
            width: 28px;
            height: 28px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-weight: bold;
            color: #374151;
            transition: all 0.2s;
        }

        .qty-btn:hover {
            background: #e5e7eb;
        }

        .qty-value {
            font-weight: 600;
            min-width: 20px;
            text-align: center;
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
            box-shadow: 0 2px 8px rgba(251, 191, 36, 0.12);
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
            background: #00433a;
            box-shadow: 0 2px 8px rgba(0, 67, 58, 0.2);
        }

        .btn-primary:hover {
            background: #005046;
        }

        .btn-secondary {
            background: #9ca3af;
            box-shadow: 0 2px 8px rgba(156, 163, 175, 0.12);
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

        // Inisialisasi properti qty jika belum ada
        cart = cart.map(item => ({ ...item, qty: item.qty || 1 }));
        localStorage.setItem('cart', JSON.stringify(cart));

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
                    let qty = item.qty || 1;
                    let icon = item.icon || 'local_laundry_service';
                    let subtotal = price * qty;
                    total += subtotal;

                    const li = document.createElement('li');
                    li.innerHTML = `
                        <div class="cart-img">
                            <span class="material-symbols-outlined" style="color: #00433a;">${icon}</span>
                        </div>
                        <div class="cart-info">
                            <div class="cart-name">
                                ${item.name}
                                ${item.category ? `<span style="display: block; font-size: 0.75rem; color: #6b7280; margin-top: 2px; font-weight: normal;">${item.category}</span>` : ''}
                            </div>
                            <div class="cart-price">Rp ${price.toLocaleString('id-ID')}</div>
                        </div>
                        <div class="qty-control">
                            <button class="qty-btn qty-minus" data-idx="${idx}">-</button>
                            <span class="qty-value">${qty}</span>
                            <button class="qty-btn qty-plus" data-idx="${idx}">+</button>
                        </div>
                        <button class="cart-remove" title="Hapus" data-idx="${idx}"><span class="material-symbols-outlined">delete</span></button>
                    `;
                    cartList.appendChild(li);
                });
                cartTotal.textContent = `Total: Rp ${total.toLocaleString('id-ID')}`;
            }
        }

        // Event delegation untuk hapus barang dan kuantitas
        cartList.addEventListener('click', function (e) {
            const btnRemove = e.target.closest('.cart-remove');
            const btnMinus = e.target.closest('.qty-minus');
            const btnPlus = e.target.closest('.qty-plus');

            if (btnRemove) {
                const idx = btnRemove.getAttribute('data-idx');
                cart.splice(idx, 1);
                localStorage.setItem('cart', JSON.stringify(cart));
                renderCart();
            } else if (btnMinus) {
                const idx = btnMinus.getAttribute('data-idx');
                if (cart[idx].qty > 1) {
                    cart[idx].qty--;
                } else {
                    cart.splice(idx, 1);
                }
                localStorage.setItem('cart', JSON.stringify(cart));
                renderCart();
            } else if (btnPlus) {
                const idx = btnPlus.getAttribute('data-idx');
                cart[idx].qty = (cart[idx].qty || 1) + 1;
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
                let qty = item.qty || 1;
                let subtotal = price * qty;
                orderItems += `
                    <div class="payment-summary-item" style="align-items: flex-start;">
                        <div>
                            <div style="font-weight: 500;">${item.name} (x${qty})</div>
                            ${item.category ? `<div style="font-size: 0.75rem; color: #6b7280; margin-top: 2px;">${item.category}</div>` : ''}
                        </div>
                        <span style="white-space: nowrap; margin-left: 12px;">Rp ${subtotal.toLocaleString('id-ID')}</span>
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