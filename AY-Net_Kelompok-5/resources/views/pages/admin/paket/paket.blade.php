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
                                <h4 class="card-title">Data Paket</h4>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('paket.addpaket') }}" class="btn btn-primary d-sm-inline-block">Tambah</a></br></br>
                                {{ csrf_field() }}
                            <!-- </div>
                            <div class="card-body"> -->
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Paket</th>
                                                <th>Harga</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($listpaket as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><a href="javascript:void(0);">{{ $item->nama_paket }}</a></td>
                                                    <td><a href="javascript:void(0);">Rp. {{ $item->harga_paket }}</a></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
@include('sweetalert::alert') 
@endsection