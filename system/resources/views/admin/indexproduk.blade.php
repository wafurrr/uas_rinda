@extends('template.admin')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="sparkline13-list shadow-reset">
            <div class="sparkline13-hd">
                <div class="main-sparkline13-hd">
                    <h1>Data Produk</h1>
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
                            	<th class="text-center">Nama Produk</th>
                            	<th class="text-center"> Nama Toko</th>
                            	<th class="text-center">Ukuran</th>
                            	<th class="text-center">Harga</th>
                            	<th class="text-center">Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($produk as $produk)
                        		<tr>
                        			<td style="text-align: center;">{{$produk->nama_produk}}</td>
                        			<td style="text-align: center;">{{$produk->penjual->nama_toko}}</td>
                        			<td style="text-align: center;">{{$produk->ukuran}}</td>
                        			<td style="text-align: center;">Rp. {{number_format($produk->harga,0,',','.')}},00</td>
                        			<td style="text-align: center;">{{$produk->stok}}</td>
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