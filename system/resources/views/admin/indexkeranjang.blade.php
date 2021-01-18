@extends('template.admin')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="sparkline13-list shadow-reset">
            <div class="sparkline13-hd">
                <div class="main-sparkline13-hd">
                    <h1>Data Keranjang</h1>
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
                            	<th class="text-center">Nama Penjual</th>
                            	<th class="text-center"> Alamat Penjual</th>
                            	<th class="text-center">Nama Pembeli</th>
                            	<th class="text-center">Alamat Pembeli</th>
                            	<th class="text-center">Nama Produk</th>
                                <th class="text-center">Ukuran Produk</th>
                                <th class="text-center">Harga Produk</th>
                                <th class="text-center">Stok Produk</th>
                                <th class="text-center">Jumlah yang di beli</th>
                                <th class="text-center">Total Pebayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($keranjang as $keranjang)
                        		<tr>
                        			<td style="text-align: center;">{{$keranjang->penjual->nama_lengkap}}</td>
                        			<td style="text-align: center;">{{$keranjang->penjual->alamat}}</td>
                        			<td style="text-align: center;">{{$keranjang->pembeli->nama_lengkap}}</td>
                        			<td style="text-align: center;">{{$keranjang->pembeli->alamat}}</td>
                        			<td style="text-align: center;">{{$keranjang->produk->nama_produk}}</td>
                                    <td style="text-align: center;">{{$keranjang->ukuran}}</td>
                                    <td style="text-align: center;">{{$keranjang->harga}}</td>
                                    <td style="text-align: center;">{{$keranjang->produk->stok}}</td>
                                    <td style="text-align: center;">{{$keranjang->jumlah}}</td>
                                    <td style="text-align: center;">{{$keranjang->total}}</td>
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

@endsection