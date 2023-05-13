@extends('layouts.admin.admin')

@section('titlePage', ' Paket | AY NET - Bondowoso')
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
                                        <form action="{{ route('paket.savepaket') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="validationCustomUsername">Nama Paket</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"> <i class="fa fa-list"></i> </span>
                                                    <input type="text" class="form-control" id="nama_paket" placeholder="Masukkan nama paket.." name="nama_paket">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="dlab-password">Harga Paket</label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"> Rp. </span>
                                                    <input type="number" class="form-control" id="harga_paket" placeholder="Masukkan harga paket.." name="harga_paket">
                                                </div>
                                            </div>
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