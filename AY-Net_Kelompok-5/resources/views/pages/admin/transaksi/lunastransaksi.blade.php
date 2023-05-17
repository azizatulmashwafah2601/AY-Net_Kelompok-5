@extends('layouts.admin.admin')

@section('titlePage', ' Transaksi View | AY NET - Bondowoso')
@section('content')
<div class="content-body">
      <div class="container-fluid">

            <div class="card text-white bg-success">
                  <div class="card-body mb-0">
                        <h1 class="text text-white bg-success"><strong>TAGIHAN LUNAS</strong></h1>
                  </div>
            </div>
            <!-- row -->
            <div>
                  <div class="col-12">
                        <div class="card">
                              <div class="card-body">
                                    <div class="table-responsive">
                                          <table id="example3" class="display" style="min-width: 845px">
                                                <thead>
                                                      <tr>
                                                            <th>No</th>
                                                            <th>Id Pelanggan</th>
                                                            <th>Bulan/Tahun</th>
                                                            <th>Tagihan</th>
                                                            <th>Tanggal</th>
                                                            <th>Status</th>
                                                            <th>Aksi</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <tr>
                                                            <td>1</td>
                                                            <td>C001- Agus S</td>
                                                            <td>03/23</td>
                                                            <td>Rp. 100.000</td>
                                                            <th>09-Mar-2023</th>
                                                            <td><a class="badge badge-xl badge-success">Lunas</a></td>
                                                            <td><a class="btn btn-sm btn-primary"><i class="las la-print me-3 scale5"></i><strong>Struk</strong></a></td>
                                                      </tr>
                                                      <tr>
                                                            <td>1</td>
                                                            <td>C002- Budi P</td>
                                                            <td>03/23</td>
                                                            <td>Rp. 150.000</td>
                                                            <th>09-Mar-2023</th>
                                                            <td><a class="badge badge-xl badge-success">Lunas</a></td>
                                                            <td><a class="btn btn-sm btn-primary"><i class="las la-print me-3 scale5"></i><strong>Struk</strong></a></td>
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