@extends('template.admin')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="sparkline13-list shadow-reset">
            <div class="sparkline13-hd">
                <div class="main-sparkline13-hd">
                    <h1>Data Penjual</h1>
                    <div class="sparkline13-outline-icon">
                        <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                        <span><i class="fa fa-wrench"></i></span>
                        <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <div class="sparkline13-graph">
                <div class="datatable-dashv1-list custom-datatable-overright">
                	 <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                        <thead>
                            <tr>
                            	<th class="text-center">Nama Lengkap</th>
                            	<th class="text-center"> Alamat</th>
                            	<th class="text-center">Nomor Telp</th>
                            	<th class="text-center">Username</th>
                            	<th class="text-center">Password</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($penjual as $penjual)
                        		<tr>
                        			<td style="text-align: center;">{{$penjual->nama_lengkap}}</td>
                        			<td style="text-align: center;">{{$penjual->alamat}}</td>
                        			<td style="text-align: center;">{{$penjual->no_hp}}</td>
                        			<td style="text-align: center;">{{$penjual->username}}</td>
                        			<td style="text-align: center;">{{$penjual->password}}</td>
                        		</tr>
                        	@endforeach
                        </tbody>
                    </table>
                      
                </div>
            </div>
        </div>
    </div>
</div>

@endsection