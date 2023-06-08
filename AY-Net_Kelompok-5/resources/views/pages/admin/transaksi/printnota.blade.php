<!DOCTYPE html>
<html>
<head>
    <title>Nota | AY NET - Bondowoso</title>
    <style>
        .container {
            width: 300px;
        }
        .header {
            margin: 0;
            text-align: center;
        }
        h2, p {
            margin: 0;
        }
        .flex-container-1 {
            display: flex;
            margin-top: 10px;
        }

        .flex-container-1 > div {
            text-align : left;
        }
        .flex-container-1 .right {
            text-align : right;
            width: 200px;
        }
        .flex-container-1 .left {
            width: 100px;
        }
        .flex-container {
            width: 300px;
            display: flex;
        }

        .flex-container > div {
            -ms-flex: 1;  /* IE 10 */
            flex: 1;
        }
        ul {
            display: contents;
        }
        ul li {
            display: block;
        }
        hr {
            border-style: dashed;
        }
        a {
            text-decoration: none;
            text-align: center;
            padding: 10px;
            background: #00e676;
            border-radius: 5px;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header" style="margin-bottom: 30px;">
            <img src="{{url('frontend/images/logo-ay.png')}}" alt="picture" width="80px">
            <h3>AY NET</h3>
            <p>Jl. Kis Mangunsarkoro, Tamansari, Bondowoso</p>
        </div>
        <hr>
        <div class="flex-container-1">
            <div class="left">
                <ul>
                    <li>No Transaksi</li>
                    <li>Tgl Transaksi</li>
                </ul>
            </div>
            <div class="right">
                <ul>
                    <li>TRX00{{ $transaksi->id_transaksi }}</li>
                    <li>{{ date('d-m-Y', strtotime($transaksi->created_at)) }}</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="flex-container" style="margin-bottom: 10px; text-align:left;">
            <div style="margin-bottom: 10px; text-align:left;"><b>Pelanggan</b></div>
            <div style="margin-bottom: 10px; text-align:center;"><b>Nama Paket</b></div>
            <div style="margin-bottom: 10px; text-align:right;"><b>Harga Paket</b></div>
        </div>
        <hr>
        <div class="flex-container" style="text-align: left;">
            <div style="margin-bottom: 10px; text-align:left;">{{ $transaksi->pelanggan->nama_pelanggan }}</div>
            <div style="margin-bottom: 10px; text-align:center;">{{ $transaksi->pelanggan->paket->nama_paket }}</div>
            <div style="margin-bottom: 10px; text-align:right;">Rp {{ number_format($transaksi->pelanggan->paket->harga_paket) }}</div>
        </div>
        <hr>
        <div class="flex-container" style="text-align: right; margin-top: 10px;">
            <div></div>
            <div>
                <ul>
                    <li>Grand Total</li>
                    <li>Pembayaran</li>
                    <li>Kembalian</li>
                </ul>
            </div>
            <div style="text-align: right;">
                <ul>
                    <li>Rp {{ number_format($transaksi->pelanggan->paket->harga_paket) }}</li>
                    <li>Rp {{ number_format($transaksi->total_bayar) }}</li>
                    <li>
                        <?php $kembalian = abs($transaksi->pelanggan->paket->harga_paket - $transaksi->total_bayar);
                        ?>Rp {{ number_format($kembalian)}}
                    </li>
                </ul>
            </div>
        </div>
        <div class="container" style="text-align: center; margin-top: 10px;">
            <h1>{{ $transaksi->status }}</h1>
        </div>
        <hr>
        <div class="container" style="text-align: center; margin-top: 20px;">
            <p>Terimakasih telah berlangganan internet</p>
            <h3>AY NET</h3>
        </div>
    </div>

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>
