@extends('layouts.admin.admin')

@section('titlePage', ' Tambah Paket | AY NET - Bondowoso')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0);">Paket</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Data Paket</h4>
                            </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{ route('savepaket') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="validationCustomUsername">Nama Paket</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"> <i class="fa fa-list"></i> </span>
                                                    <input type="text" class="form-control @error('nama_paket') is invalid @enderror" 
                                                        id="nama_paket" placeholder="Masukkan nama paket.." name="nama_paket">
                                                        @error('nama_paket') 
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span> 
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="dlab-password">Harga Paket</label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"> Rp. </span>
                                                    <input type="number" class="form-control @error('harga_paket') is invalid @enderror"" 
                                                        id="harga_paket" placeholder="Masukkan harga paket.." name="harga_paket">
                                                    @error('harga_paket') 
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span> 
                                                    @enderror
                                                </div>
                                            </div>
                                            <button type="submit" class="btn me-2 btn-primary">Simpan</button>
                                            <a
                                                href="{{ route('paket') }}"
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