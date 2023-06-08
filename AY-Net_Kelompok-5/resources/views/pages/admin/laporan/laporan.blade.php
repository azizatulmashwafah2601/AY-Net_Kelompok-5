@extends('layouts.admin.admin')

@section('titlePage', ' Laporan | AY NET - Bondowoso')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0);">Laporan Transaksi</a></li>
					</ol>
                </div>
                <!-- row -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Laporan</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="" method="GET" id="formFilter">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label"><strong>Mulai Tanggal</strong></label>
                                                <div class="col-sm-6">
                                                    <div class="input-group mb-3">
                                                        <input type="date" name="tgl_awal" id="tgl_awal" class="form-control datetimepicker">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label"><strong>Sampai Tanggal</strong></label>
                                                <div class="col-sm-6">
                                                    <div class="input-group mb-3">
                                                        <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control datetimepicker">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label"><strong></strong></label>
                                                <div class="col-sm-6 d-flex">
                                                    <a href="" onclick="this.href='cetaklaporan/' + document.getElementById('tgl_awal').value + 
                                                    '/' + document.getElementById('tgl_akhir').value" target="_blank" class="btn btn-primary d-sm-inline-block"><strong>Cetak Laporan</strong></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@include('sweetalert::alert')         
@endsection