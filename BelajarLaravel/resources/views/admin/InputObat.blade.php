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
                                    <p>Judul : Sistem Pelayanan Apotek Laksamana</p>
                                    <p>Penjelasan : Sistem toko ini mempermudah karyawan untuk mengecek stok barang dan memudahkan pembeli dalam pembelian barang</p>
								
								</div>
							</div>
							<!-- END MULTI CHARTS -->
                            <form action="{{(isset($barang))?route('barang.update',$barang->id_anggota):route('barang.store')}}" method="POST">
                            @csrf
                            @if(isset($barang))?@method('PUT')
                            @endif
                        <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Nama barang</label>
                            <div class="col-lg-10">
                            <input type="text" value="{{(isset($barang))?$barang->namabarang:old('namabarang')}}" name="namabarang" class="form-control">
                        @error('namabarang')<small style="color:red">{{$message}}</small>@enderror
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Jenis Obat</label>
                            <div class="col-lg-10">
                            <input type="text" value="{{(isset($barang))?$barang->jenis barang:old('jenisbarang')}}" name="jenisbarang" class="form-control">
                        @error('jenisbarang')<small style="color:red">{{$message}}</small>@enderror
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Harga</label>
                            <div class="col-lg-10">
                            <input type="text" value="{{(isset($obat))?$obat->harga:old('harga')}}" name="harga" class="form-control">
                        @error('harga')<small style="color:red">{{$message}}</small>@enderror
                        </div>
                        </div>
                       
                    <div class="form-group">
                      <button type="submit">SIMPAN</button>
                    </div>
                    </div>  
                  </form>
                  </div>
              </div>
                        </div>
						</div>
					</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
					
					
					
				</div>
			</div>
@endsection('content')