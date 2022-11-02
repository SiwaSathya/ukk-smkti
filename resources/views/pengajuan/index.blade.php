<!-- Menghubungkan dengan template induk home.blade.php -->
@extends('template')

<!-- Bagian Judul Halaman -->
<!-- Pembuatan section pendek -->
@section('Judul_halaman','Halaman Insert Data Pengajuan')

<!-- Bagian Content -->
<!-- Cara Pembuatan Section Panjang -->
@section('content')

<style type="text/css">
	.paginate li{
		float: left;
		list-style: none;
		margin: 5px;
	}
</style>
<p>Cari Data Pengajuan :</p>

	<form action="pengajuancari" method="get">
		<input type="text" name="cari" placeholder="Cari Pengajuan .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
	<br>

<a href="pengajuantambah" style="margin: 20px;"> TAMBAH PENGAJUAN</a>
<br>
<div class="row ">
	<div class="col-md-8" style="border: 2px black solid; margin: 10% 15% 20% 15%">
	<table class="table"  border="1">
		<thead>
	<tr>
		<th scope="col">nama</th>
		<th scope="col">tujuan keberangkatan</th>
		<th scope="col">tanggal keberangkatan</th>
		<th scope="col">tanggal kembali</th>
        <th scope="col">tujuan</th>
		<th scope="col">OPSI</th>
	</tr>
	</thead>
	@foreach($pengajuan as $p)
	<thead>
	<tr>
		<td>{{$p -> nama}}</td>
		<td>{{$p -> tujuan_keberangkatan}}</td>
		<td>{{$p -> tanggal_keberangkatan}}</td>
		<td>{{$p -> tanggal_kembali}}</td>
        <td>{{$p -> tujuan}}</td>
		<td>	
			<a href="pengajuanedit{{$p -> id}}"><button type="button" class="btn btn-primary">EDIT</button></a>
			<a href="laporantambah{{$p -> id}}"><button type="button" class="btn btn-info">BUAT LAPORAN</button></a>
			<a href="pengajuanhapus/{{$p -> id}}"><button type="button" class="btn btn-warning">HAPUS</button></a>
		</td>
	</tr>
	</thead>
	@endforeach

</table>
	</div>
</div>

<br><br>

@endsection
