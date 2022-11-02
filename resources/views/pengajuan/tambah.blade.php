<!-- Menghubungkan dengan template induk home.blade.php -->
@extends('template')

<!-- Bagian Judul Halaman -->
<!-- Pembuatan section pendek -->
@section('Judul_halaman','Halaman Insert Data Laporan')

<!-- Bagian Content -->
<!-- Cara Pembuatan Section Panjang -->
@section('content')
<a href="pengajuan">
      <button>Kembali</button>
    </a>
	<div class="row">
		<div class="container">
			<h2 class="text-center my-5">SILAHKAN TAMBAH PENGAJUAN</h2>
			

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

  <form action="pengajuan/store" method="post">
  	<input type="hidden" name="_token" value="<?php echo csrf_token
  	(); ?>">

	Nama:
	<div class="form-group">
	<input type="text" name="nama" placeholder="Inputkan "
    required="required"><br><br>
	</div>

  	Tujuan Keberangkatan : 
	<div class="form-group">
  	<input type="text" name="tujuan_keberangkatan" placeholder="Inputkan "
    required="required"><br><br>
	</div>

  	Tanggal :
	<div class="form-group">
  	<input type="date" name="tanggal_keberangkatan" placeholder="Inputkan "
    required="required"><br><br>
	</div>

  	Kembali : 
	<div class="form-group">
  	<input type="date" name="tanggal_kembali" placeholder="Inputkan "
    required="required"><br><br>
	</div>

    Tujuan :
	<div class="form-group">
  	<input type="text" name="tujuan" placeholder="Inputkan "
    required="required"><br><br>
	</div>

  	<input type="submit" value="Simpan">
  </form>
@endsection