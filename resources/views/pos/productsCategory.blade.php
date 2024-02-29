<html>
    <head>
        <title>Daftar Produk Berdasarkan Kategori - POS</title>
    </head>
    <body>
        <h1>Daftar Produk untuk Kategori: {{ $category }}</h1>
    <ul>
        @if ($category == 'food-beverage')
        <li>Mie Instan</li>
        <li>Minuman Soda</li>
        <li>Kacang Almond</li>
        @elseif ($category == 'beauty-health')
        <li>Sabun Mandi</li>
        <li>Krim Pemutih Wajah</li>
        <li>Suplemen Vitamin</li>
        @elseif ($category == 'home-care')
        <li>Pembersih Lantai</li>
        <li>Wangian Ruangan</li>
        <li>Lampu LED</li>
        @elseif ($category == 'baby-kid')
        <li>Pakaian Bayi</li>
        <li>Mainan Anak</li>
        <li>Susu Formula</li>
        @else
        <li>Belum ada produk untuk kategori ini</li>
        @endif
    </ul>
    </body>
</html>