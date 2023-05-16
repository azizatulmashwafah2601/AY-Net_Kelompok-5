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
            <div class="card text-white bg-primary">
                <div class="card-body mb-0">
                    <p class="card-text"><strong>Data Tagihan</strong></p>
                    <p class="card-text"><strong>Bulan Mei Tahun 2023</strong></p>
                </div>
            </div>
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
                                        <th>Id Pelanggan</th>
                                        <th>Nama</th>
                                        <th>Tagihan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>C001</td>
                                        <td>Budi Hartono</td>
                                        <td>Rp. 100.000</td>
                                        <td><span class="badge badge-danger">Belum Bayar</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary btn-xxs">Bayar</button>
                                                <button type="button" class="btn btn-success btn-xxs">WA</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>C002</td>
                                        <td>Agus Sartono</td>
                                        <td>Rp. 150.000</td>
                                        <td><span class="badge badge-danger">Belum Bayar</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary btn-xxs">Bayar</button>
                                                <button type="button" class="btn btn-success btn-xxs">WA</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection