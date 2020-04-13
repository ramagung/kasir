@extends('Layout.dasboard')

@section('content')
<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Dasboard</h3>
							<p class="panel-subtitle">APRIL 2020</p>
						</div>
						<div class="panel-body">
						<div class="row">
						<div class="col-md-6">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">BIODATA</h3>
								</div>
								<div class="panel-body">
                                    <p>Nama : ANAK AGUNG ADI RAMA ANGGRAPANA</p>
                                    <P>NIM : 1815051022</L>
                                    <P>Prodi : Pendidikan Teknik Informatika</P>
                                </div>
								
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
						<div class="col-md-6">
							<!-- MULTI CHARTS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Studi Kasus</h3>
								</div>
								<div class="panel-body">
                                    <p>Judul : Sistem TOKO</p>
                                    <p>Penjelasan : Sistem TOKO ini mempermudah karyawan untuk mengecek stok barang dan memudahkan pembeli dalam pembelian barang</p>
								
								</div>
							</div>
							<!-- END MULTI CHARTS -->
						</div>
						<div class="col-lg-12">
                            <button type="button">
                                <a href="{{route('obat.create')}}">Tambah Data</a>
                            </button>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>no</th>
									<th>Nama barang</th>
									<th>Jenis barang</th>
									<th>Harga</th>
								
								</tr>
							</thead>
							<tbody>
								@foreach ($barang as $in => $val)
									<tr>
										<td>{{($in+1)}}</td>
										<td>{{$val->namabarang}}</td>
										<td>{{$val->jenisbarang}}</td>
										<td>{{$val->harga}}</td>
                                        <td>
                                            <a href="{{route('barang.edit',$val->Id_barang)}}">Update</a>
                                            <form action="{{route('barang.destroy',$val->Id_barang)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                            </form>
                                        </td>
									</tr>
								@endforeach
							</tbody>
						</table>
						{{$barang->links()}}
					</div>
					</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
					
				</div>
					
				</div>
			</div>
@endsection('content')