@extends('layouts.admin.admin')

@section('titlePage', ' Edit Profil | AY NET - Bondowoso')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0);">Profil</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Profil</h4>
                            </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{ route ('profilupdate') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="validationCustomUsername">Nama Lengkap</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                    <input type="text" class="form-control" id="nama_paket" name="name" value="{{ Auth::user()->name }}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="validationCustomUsername">Email</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                                    <input type="email" class="form-control" id="nama_paket" name="email" value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="validationCustomUsername">Password</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                    <input type="password" class="form-control" id="nama_paket" name="password" value="{{ Auth::user()->password }}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="dlab-password">Foto Profil</label>
                                                <img src="{{ url('/img/administrator/'.Auth::user()->foto_profil) }}" width="100px" class="d-block" onclick="window.open(this.src)">
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="dlab-password">Ubah Foto Profil</label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"> <i class="fas fa-file-image"></i> </span>
                                                    <input type="file" class="form-control" id="harga_paket" name="foto_profil" value="">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn me-2 btn-primary">Simpan</button>
                                            <a
                                                href="{{ route('admin') }}"
                                                class="btn btn-danger"
                                                >Cancel
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
@include('sweetalert::alert') 
@endsection