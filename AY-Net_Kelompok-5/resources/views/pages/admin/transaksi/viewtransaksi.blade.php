@extends('layouts.admin.admin')

@section('titlePage', ' Transaksi View | AY NET - Bondowoso')
@section('content')
<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Transaksi View</a></li>
            </ol>
        </div>
        <!-- row -->
        <div>
            <!-- row -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Tagihan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Jenis Paket</th>
                                        <th>Tagihan</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaksi as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama_pelanggan }}</td>
                                            <td>{{ $item->nama_paket }}</td>
                                            <td>{{ $item->harga_paket }}</td>
                                            <td>{{ $item->nama_bulan }}</td>
                                            <td>{{ $item->years }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection