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
                                <h4 class="card-title">Data Tagihan</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('filtertransaksi') }}" method="GET" id="formFilter">
                                    {{ csrf_field() }}
                                        <div class="mb-2 row">
                                            <label class="col-sm-2 col-form-label"><strong>Bulan</strong></label>
                                            <div class="col-sm-3">
                                                <div class="input-group mb-3">
                                                    <select class="default-select form-control wide" id="tag_select" name="nama_bulan">
                                                        <option value="0" selected disabled>Pilih Bulan</option>
                                                        <option value="01"> Januari</option>
                                                        <option value="02"> Februari</option>
                                                        <option value="03"> Maret</option>
                                                        <option value="04"> April</option>
                                                        <option value="05"> Mei</option>
                                                        <option value="06"> Juni</option>
                                                        <option value="07"> Juli</option>
                                                        <option value="08"> Agustus</option>
                                                        <option value="09"> September</option>
                                                        <option value="10"> Oktober</option>
                                                        <option value="11"> November</option>
                                                        <option value="12"> Desember</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label class="col-sm-2 col-form-label"><strong>Tahun</strong></label>
                                            <div class="col-sm-3">
                                                <div class="input-group mb-3">
                                                    <select class="default-select form-control wide" id="tag_select" name="years">
                                                        <option value="0" selected disabled>Pilih Tahun</option>
                                                        <?php 
                                                        $years = date('Y');
                                                        $min = $years - 60;
                                                        $max = $years;
                                                        for( $i=$max; $i>=$min; $i-- ) {
                                                        echo '<option value='.$i.'>'.$i.'</option>';
                                                        }?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label"><strong></strong></label>
                                            <div class="col-sm-3 d-flex">
                                                <button type="submit" form="formFilter" value="Submit" class="btn btn-primary d-sm-inline-block"><strong>Lihat</strong></button>
                                                {{ csrf_field() }}
                                            </div>
                                        </div>
                                    </form>
                                </div></br>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
@endsection