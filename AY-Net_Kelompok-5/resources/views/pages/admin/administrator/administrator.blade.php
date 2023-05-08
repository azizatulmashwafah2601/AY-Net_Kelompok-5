@extends('layouts.admin.admin')

@section('titlePage', ' Admin | AY NET - Bondowoso')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="{{ route('admin') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Administrator</h4>
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
                                                <th>Username</th>
                                                <th>Foto</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($administrator as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                    <td><a href="javascript:void(0);">{{ $item->username }}</a></td>
                                                    <td><img src="{{ url('/img/administrator/'.$item->foto_profil) }}" alt="picture" width="100px"></td>
                                                <td>
													<div class="d-flex">
														<!-- <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> -->
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
@endsection