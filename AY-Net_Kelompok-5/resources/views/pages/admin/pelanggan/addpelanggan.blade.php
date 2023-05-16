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
                                        <form action="{{ route('savepaket') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="validationCustomUsername">Nama Pelanggan</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"> <i class="fa fa-list"></i> </span>
                                                    <input type="text" class="form-control" id="nama_pelanggan" placeholder="Masukkan nama pelanggan.." name="nama_pelanggan">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-label form-label">No Telp</label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                                    <input type="number" class="form-control" id="no_telp" placeholder="Masukkan no telepon.." name="no_telp">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-label form-label">Email</label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"> <i class="fa fa-envelope"></i></span>
                                                    <input type="text" class="form-control" id="email" placeholder="Masukkan email.." name="email">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-label form-label">Alamat</label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"> <i class="fa fa-home"></i></span>
                                                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat.." name="alamat">
                                                </div>
                                            </div>
                                            <!-- <div class="mb-3">
                                                <label class="text-label form-label" for="dlab-password">Jenis Paket</label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"> </span>
                                                    <input type="number" class="form-control" id="harga_paket" placeholder="Masukkan harga paket.." name="harga_paket">
                                                </div>
                                            </div> -->
                                            <button type="submit" class="btn me-2 btn-primary">Simpan</button>
                                            <button type="submit" class="btn btn-danger">Batal</button>
                                        </form>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
            </div>
        </div>
@endsection