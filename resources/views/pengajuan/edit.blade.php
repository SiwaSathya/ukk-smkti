<!-- Menghubungkan dengan template induk home.blade.php -->
@extends('template')

<!-- Bagian Judul Halaman -->
<!-- Pembuatan section pendek -->
@section('Judul_halaman','Halaman Insert Data Pengajuan')

<!-- Bagian Content -->
<!-- Cara Pembuatan Section Panjang -->
@section('content')

	<h3> Edit Data Pengajuan</h3>

	<a href="pengajuan">
		<button> Data Pengajuan</button>
</a>
		<br><br>

		@foreach($pengajuan as $p)
		<form action="pengajuan/update" method="post">
			{{csrf_field() }}
		<input type="hidden" name="id" value="{{$p
		->id }}"> <br>
		<input type="text" name="nama" value="{{
		$p->nama }}"> <br>
		<input type="text" name="tujuan_keberangkatan" value="{{
		$p->tujuan_keberangkatan }}"> <br>
		<input type="date" name="tanggal_keberangkatan" value="{{
		$p->tanggal_keberangkatan }}"> <br>
		<input type="date" name="tanggal_kembali" value="{{
		$p->tanggal_kembali }}"> <br>
        <input type="text" name="tujuan" value="{{
		$p->tujuan }}"> <br>
		<input type="submit" value="UPDATE">
			</form>

		@endforeach
@endsection