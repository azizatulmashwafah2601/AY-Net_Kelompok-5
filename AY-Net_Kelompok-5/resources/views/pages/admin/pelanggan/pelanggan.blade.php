@extends('layouts.admin.admin')

@section('titlePage', ' Pelanggan | AY NET - Bondowoso')
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
                                <h4 class="card-title">Data Pelanggan</h4>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('addpelanggan') }}" class="btn btn-primary d-sm-inline-block">Tambah</a></br></br>
                            <!-- </div>
                            <div class="card-body"> -->
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Alamat</th>
                                                <th>No Telpon</th>
                                                <th>Email</th>
                                                <th>Jenis Paket</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($pelanggan as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><a href="javascript:void(0);">{{ $item->nama_pelanggan }}</a></td>
                                                    <td><a href="javascript:void(0);">{{ $item->alamat }}</a></td>
                                                    <td><a href="javascript:void(0);">{{ $item->no_telp }}</a></td>
                                                    <td><a href="javascript:void(0);">{{ $item->email }}</a></td>
                                                    <td><a href="javascript:void(0);">{{ $item->nama_paket }}</a></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{ route('editpelanggan', $item->id_pelanggan) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                            <a href="{{ route('deletepelanggan', $item->id_pelanggan) }}" class="btn btn-danger shadow btn-xs sharp me-1" onclick="return confirm('Anda yakin ingin menghapus data?')"><i class="fa fa-trash"></i></a>
                                                            <a href="#" class="btn btn-primary shadow btn-xs sharp"><i class="fa fa-comment"></i></a>
                                                        </div>												
												    </td>	
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
@endsection