<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <style>
        h1 {
            font-family: Times New Roman;
            text-transform: uppercase;
            
            margin-top: 10px;
            text-align: center;
            color: black
        }
        h2 {
            color: black;
            font-family: Times New Roman;
            text-align: center;
            margin-top: 5px;
        }
        p {
            color: black;
            font-family: Times New Roman;
            text-align: center;
            margin-top: 0px;
        }
        hr {
            width: 70%;
            margin-top: -10px;
        }     
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
        padding: 8px;
        text-align: center;
        border-bottom: 1px solid #ddd;
        }
        
        th {
        background-color: #95e6df;
        }
  </style>
  <title>Cetak Data Laporan</title>
</head>

<body >
    <div class="form-group">
        <h1><b>Laporan Transaksi</b></h1>
        <hr>
        <h2 style="margin-bottom:5px;"><b>AY NET</b></h2>
        <p>Jalan Kis Mangun Sarkoro, Tamansari, Bondowoso - Jawa Timur</p>
        <table class=" static" align="center" rules="all" border="1px" style="width: 95%";>
            <tr>
                <th>No</th>
                    <th>Tanggal Transaksi</th>
                    <th>Tagihan Bulan</th>
                    <th>Nama Pelanggan</th>
                    <th>Jenis Paket</th>
                    <th>Harga Paket</th>
                    <th>Status</th>
                    <th>Total Bayar</th>
                </tr>
                @foreach ($transaksi as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ date('d F Y', strtotime($item->tgl_transaksi)) }}</td>
                    <td>{{ $item->bulan->nama_bulan}} / {{ $item->years }}</td>
                    <td>{{ $item->pelanggan->nama_pelanggan }}</td>
                    <td>{{ $item->pelanggan->paket->nama_paket }}</td>
                    <td>Rp. {{ number_format($item->pelanggan->paket->harga_paket) }}</td>
                    <td>{{ $item->status }}</td>
                    <td>Rp. {{ number_format($item->total_bayar) }}</td>
                    </tr>
                @endforeach
        </table>
    </div>
    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>