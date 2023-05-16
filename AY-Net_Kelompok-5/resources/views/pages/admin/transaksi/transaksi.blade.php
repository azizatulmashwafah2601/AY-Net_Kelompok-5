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
                                    <form>
                                        <div class="mb-2 row">
                                            <label class="col-sm-2 col-form-label"><strong>Bulan</strong></label>
                                            <div class="col-sm-3">
                                                <div class="input-group mb-3">
                                                    <select class="default-select  form-control wide">
                                                        <option selected="">~ Pilih Bulan ~</option>
                                                        <option value="1">Maret</option>
                                                        <option value="2">April</option>
                                                        <option value="3">Mei</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label class="col-sm-2 col-form-label"><strong>Tahun</strong></label>
                                            <div class="col-sm-3">
                                                <div class="input-group mb-3">
                                                    <select class="default-select  form-control wide">
                                                        <option selected="">~ Pilih Tahun ~</option>
                                                        <option value="1">2023</option>
                                                        <option value="2">2024</option>
                                                        <option value="3">2024</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label"><strong></strong></label>
                                            <div class="col-sm-3 d-flex">
                                                <button type="submit" class="btn btn-primary"><strong>Lihat</strong></button>
                                            </div>
                                        </div>
                                    </form>
                                </div></br>
                            <!-- </div>
                        </div>
                    </div>
            </div>
        </div>
@endsection