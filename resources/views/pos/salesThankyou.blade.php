<html>
    <head>
        <title>Terima Kasih atas Pembelian Anda - POS</title>
    </head>
    <body>
        <h1>Terima Kasih sudah berbelanja di Supermarket POS </h1>
        <p>Detail Pembelian:</p>
        <ul>
            <li>Produk: {{ $saleData['product'] }}</li>
            <li>Jumlah: {{ $saleData['kuantitas'] }}</li>
            <li>Total Pembelian: {{ $saleData['totalJumlah'] }}</li>
        </ul>
    </body>
</html>