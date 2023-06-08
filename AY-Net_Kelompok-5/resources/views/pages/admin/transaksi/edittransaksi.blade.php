@extends('layouts.admin.admin')

@section('titlePage', 'Edit Transaksi | AY NET - Bondowoso')
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
                                <h4 class="card-title">Edit Data Transaksi</h4>
                            </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{ route('updatetransaksi', $transaksi->id_transaksi) }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="validationCustomUsername">Total Bayar</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"> Rp. </span>
                                                    <input type="number" class="form-control @error('total_bayar') is-invalid @enderror" id="total_bayar" 
                                                        name="total_bayar" value="{{ $transaksi->total_bayar }}">
                                                        @error('total_bayar')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="dlab-password">Status</label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"> <i class="fa fa-cube"></i> </span>                                                    
                                                        <select class="form-control" name="status" id="status" required>
                                                            <option value="">Pilih Status</option>
                                                            <option <?php if($transaksi['status']=='Belum Bayar') echo 'selected'?>>Belum Bayar</option>
                                                            <option <?php if($transaksi['status']=='LUNAS') echo 'selected'?>>LUNAS</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="input-group">
                                                    <input type="hidden" class="form-control @error('id_bulan') is-invalid @enderror" id="id_bulan" 
                                                        name="id_bulan" value="{{ $transaksi->id_bulan }}">
                                                        @error('id_bulan')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="input-group">
                                                    <input type="hidden" class="form-control @error('years') is-invalid @enderror" id="years" 
                                                        name="years" value="{{ $transaksi->years }}">
                                                        @error('years')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="input-group">
                                                    <input type="hidden" class="form-control @error('id_pelanggan') is-invalid @enderror" id="id_pelanggan" 
                                                        name="id_pelanggan" value="{{ $transaksi->id_pelanggan }}">
                                                        @error('id_pelanggan')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="input-group">
                                                    <input type="hidden" class="form-control @error('tgl_transaksi') is-invalid @enderror" id="tgl_transaksi" 
                                                        name="tgl_transaksi" value="{{ $transaksi->tgl_transaksi }}">
                                                        @error('tgl_transaksi')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <button type="submit" class="btn me-2 btn-primary">Simpan</button>
                                            <a
                                                href="{{ route('transaksi') }}"
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