@extends('layouts.admin.admin')

@section('titlePage', ' Pelanggan | AY NET - Bondowoso')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="{{ route('admin') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0);">Pelanggan</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Pelanggan</h4>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0);" class="btn btn-primary d-sm-inline-block">Tambah</a></br></br>
                            <!-- </div>
                            <div class="card-body"> -->
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pelanggan</th>
                                                <th>No Telpon</th>
                                                <th>Alamat</th>
                                                <th>Jenis Paket</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="javascript:void(0);">1</a></td>
                                                <td><a href="javascript:void(0);">Budi Hartono</a></td>
                                                <td><a href="javascript:void(0);">081234567890</a></td>
                                                <td><a href="javascript:void(0);">Tanggul</a></td>
                                                <td><a href="javascript:void(0);">3 Mbps</a></td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>												
												</td>												
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:void(0);">2</a></td>
                                                <td><a href="javascript:void(0);">Agus Sartono</a></td>
                                                <td><a href="javascript:void(0);">081234567890</a></td>
                                                <td><a href="javascript:void(0);">Tanggul</a></td>
                                                <td><a href="javascript:void(0);">3 Mbps</a></td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>												
												</td>												
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
@endsection