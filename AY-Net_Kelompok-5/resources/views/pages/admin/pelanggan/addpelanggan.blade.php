@extends('layouts.admin.admin')

@section('titlePage', ' Tambah Pelanggan | AY NET - Bondowoso')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0);">Pelanggan</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Data Pelanggan</h4>
                            </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{ route('savepelanggan') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="validationCustomUsername">Nama Pelanggan</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"> <i class="fa fa-list"></i> </span>
                                                    <input type="text" class="form-control @error('nama_pelanggan') is invalid @enderror" 
                                                        id="nama_pelanggan" placeholder="Masukkan nama pelanggan.." name="nama_pelanggan">
                                                        @error('nama_pelanggan') 
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span> 
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-label form-label">Alamat</label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"> <i class="fa fa-home"></i></span>
                                                    <input type="text" class="form-control @error('alamat') is invalid @enderror"
                                                        id="alamat" placeholder="Masukkan alamat.." name="alamat">
                                                        @error('alamat') 
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span> 
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-label form-label">No Telp</label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                                    <input type="number" class="form-control @error('no_telp') is invalid @enderror"
                                                        id="no_telp" placeholder="Masukkan no telepon.." name="no_telp">
                                                        @error('no_telp') 
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span> 
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-label form-label">Email</label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"> <i class="fa fa-envelope"></i></span>
                                                    <input type="text" class="form-control @error('email') is invalid @enderror"
                                                        id="email" placeholder="Masukkan email.." name="email">
                                                        @error('email') 
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span> 
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="dlab-password">Jenis Paket</label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"> <i class="fa fa-cube"></i> </span>                                                    
                                                        <select class="form-control" aria-label="Default select example" name="id_paket" id="exampleInputNamaPaket">
                                                            <option value="">Pilih Paket</option>
                                                            @foreach($paket as $paket)
                                                                <option value="{{$paket->id_paket}}">{{$paket->nama_paket}}</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn me-2 btn-primary">Simpan</button>
                                            <a
                                                href="{{ route('pelanggan') }}"
                                                class="btn btn-danger"
                                                >Batal
                                            </a>
                                        </form>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection