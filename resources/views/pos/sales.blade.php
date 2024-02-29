<html>
    <head>
        <title>Halaman Penjualan - POS</title>
    </head>
    <body>
        <h1>Halaman Transaksi POS</h1>
        <form action="{{ route('process.sale') }}" method="post">
        @csrf
        <label for="product">Pilih Produk:</label>
        <select name="product" id="product">
            <option value="mie-instan">Mie Instan</option>
            <option value="minuman-soda">Minuman Soda</option>
            <option value="kacang-almond">Kacang Almond</option>
            <option value="sabun-mandi">Sabun Mandi</option>
            <option value="krim-pemutih wajah">Krim Pemutih Wajah</option>
            <option value="suplemen-vitamin">Suplemen Vitamin</option>
            <option value="pembersih-lantai">Pembersih Lantai</option>
            <option value="wangian-ruangan">Wangian Ruangan</option>
            <option value="lampu-led">Lampu LED</option>
            <option value="pakaian-bayi">Pakaian Bayi</option>
            <option value="mainan-anak">Mainan Anak</option>
            <option value="susu-formula">Susu Formula</option>
        </select>
        <label for="kuantitas">Jumlah:</label>
        <input type="number" name="kuantitas" id="kuantitas" min="1" value="1">
        <button type="submit">Proses Penjualan</button>
    </form>
        <p>Silakan pilih produk dan masukkan jumlahnya untuk memulai transaksi.</p>
    </body>
</html>