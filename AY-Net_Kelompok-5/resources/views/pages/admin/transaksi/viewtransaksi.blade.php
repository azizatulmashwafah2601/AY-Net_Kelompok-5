@extends('layouts.admin.admin')

@section('titlePage', ' Transaksi View | AY NET - Bondowoso')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0);">Transaksi View</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Tagihan</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Jenis Paket</th>
                                                <th>Tagihan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Budi Hartono</td>
                                                <td>3 Mbps</td>
                                                <td>Rp. 100.000</td>												
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Agus Sartono</td>
                                                <td>5 Mbps</td>
                                                <td>Rp. 150.000</td>												
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