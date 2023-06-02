@extends('layouts.admin.admin')

@section('titlePage', ' Tagihan | AY NET - Bondowoso')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0);">Tagihan</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Tagihan</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('savetagihan') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label"><strong>Bulan</strong></label>
                                                <div class="col-sm-6">
                                                    <div class="input-group mb-3">
                                                        <select class="form-control" aria-label="Default select example" name="id_bulan" id="exampleInputNamaBulan">
                                                            <option value="">Pilih Bulan</option>
                                                            @foreach($bulan as $bulan)
                                                                <option value="{{$bulan->id_bulan}}">{{$bulan->nama_bulan}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label"><strong>Tahun</strong></label>
                                                <div class="col-sm-6">
                                                    <div class="input-group mb-3">
                                                        <input type="number" class="form-control @error('years') is invalid @enderror" 
                                                            id="years" placeholder="Masukkan Tahun" name="years" value="{{old('years')}}">
                                                            @error('years') 
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span> 
                                                            @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label"><strong>Nama Pelanggan</strong></label>
                                                <div class="col-sm-6">
                                                    <div class="input-group mb-3">
                                                        <select class="form-control" aria-label="Default select example" name="id_pelanggan" id="exampleInputNamaPelanggan">
                                                            <option value="">Pilih Nama Pelanggan</option>
                                                            @foreach($pelanggan as $pelanggan)
                                                                <option value="{{$pelanggan->id_pelanggan}}">{{$pelanggan->nama_pelanggan}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label"><strong></strong></label>
                                                <div class="col-sm-6 d-flex">
                                                    <a href="{{ route('addtagihan') }}" class="btn btn-danger me-2">Batal</a>
                                                    <button type="submit" class="btn btn-primary d-sm-inline-block"><strong>Buat Tagihan</strong></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div></br>
                            <!-- </div>
                            <div class="card-body"> -->
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Jenis Paket</th>
                                                <th>Tagihan</th>
                                                <th>Bulan / Tahun</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tagihan as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->pelanggan->nama_pelanggan }}</td>
                                                    <td>{{ $item->pelanggan->paket->nama_paket }}</td>
                                                    <td>Rp {{ number_format($item->pelanggan->paket->harga_paket) }}</td>
                                                    <td>{{ $item->bulan->nama_bulan }} / {{ $item->years }}</td>
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