<!-- Menghubungkan dengan template induk home.blade.php -->
@extends('template')

<!-- Bagian Judul Halaman -->
<!-- Pembuatan section pendek -->
@section('Judul_halaman','Halaman Insert Data Laporan')

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
	<!-- <form action="laporancari" method="get"> 
		<input type="text" name="cari" placeholder="Cari Laporan .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form> -->
<div class="row">
	<div class="col" style=" margin: 10% 15% 20% 15%;">
	<table class="table"  border="1">
	<tr>
		<th>nama</th>
		<th>tujuan keberangkatan</th>
		<th>tanggal keberangkatan</th>
		<th style="width: 50%;">tanggal kembali</th>
        <th>tujuan</th>
		<th>kendala</th>
		<th>kesimpulan</th>
		<th width="1%">File</th>
		<th>OPSI</th>
			
	</tr>
	@foreach($laporan as $l)
	<tr>
		<td class="">{{$l -> pengajuan-> nama}}</td>
		<td class="">{{$l -> pengajuan -> tujuan_keberangkatan}}</td>
		<td class="">{{$l -> pengajuan -> tanggal_keberangkatan}}</td>
		<td class="">{{$l -> pengajuan -> tanggal_kembali}}</td>
        <td class="">{{$l -> pengajuan-> tujuan}}</td>
		<td class="">{{$l -> kendala}}</td>
		<td class="">{{$l -> kesimpulan}}</td>
		<td class=""><a href="showlaporan{{ $l->file }}" </a> 
		<img width="40px" src="{{ asset('image/logo-pdf.png') }}"> </td>
		<td>	
			<a href= "laporantambah{{  $l->pengajuan->id }}" ><button type="button" class="btn btn-primary">TAMBAH</button></a>
			<a href="laporanhapus/{{$l -> id}}"><button type="button" class="btn btn-danger">HAPUS</button></a>
		</td>
	</tr>
	@endforeach

</table>
	</div>
</div>

<br><br>

@endsection
