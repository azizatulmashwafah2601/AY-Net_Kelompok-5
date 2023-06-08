@extends('layouts.admin.admin')

@section('titlePage', ' Transaksi | AY NET - Bondowoso')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0);">Transaksi</a></li>
					</ol>
                </div>
                <!-- row -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Transaksi</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('filtertransaksi') }}" method="GET" id="formFilter">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label"><strong>Mulai Tanggal</strong></label>
                                                <div class="col-sm-6">
                                                    <div class="input-group mb-3">
                                                        <input type="date" name="tgl_mulai" class="form-control datetimepicker">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label"><strong>Sampai Tanggal</strong></label>
                                                <div class="col-sm-6">
                                                    <div class="input-group mb-3">
                                                        <input type="date" name="tgl_selesai" class="form-control datetimepicker">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label"><strong></strong></label>
                                                <div class="col-sm-6 d-flex">
                                                    <button type="submit" form="formFilter" value="Submit" class="btn btn-primary d-sm-inline-block"><strong>Lihat</strong></button>
                                                    {{ csrf_field() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div></br>
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Jenis Paket</th>
                                                <th>Harga</th>
                                                <th>Tagihan</th>
                                                <th>Tgl Trx</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transaksi as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->pelanggan->nama_pelanggan }}</td>
                                                    <td>{{ $item->pelanggan->paket->nama_paket }}</td>
                                                    <td>Rp {{ number_format($item->pelanggan->paket->harga_paket) }}</td>
                                                    <td>{{ $item->bulan->nama_bulan }} / {{$item->years}}</td>
                                                    <td>{{ date('d F Y', strtotime($item->tgl_transaksi))  }}</td>
                                                    <td>
                                                        <?php if ($item->status == 'Belum Bayar') {
                                                            echo '<a class="badge badge-danger">Belum Bayar</a>';
                                                        } else {
                                                            echo '<a class="badge badge-success">LUNAS</a>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{ route('edittransaksi', $item->id_transaksi) }}"class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-check"></i></a>
                                                            <a href="{{ route('redirectToWhatsApp', $item->id_transaksi) }}" target="_blank" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-comment"></i></a>
                                                            <a href="{{ route('printNota', $item->id_transaksi) }}" target="_blank" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-print"></i></a>
                                                        </div>												
                                                    </td>
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
        </div>
@include('sweetalert::alert')         
@endsection