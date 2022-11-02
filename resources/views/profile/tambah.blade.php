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

  <form action="profile/store" method="post">
  	<input type="hidden" name="_token" value="<?php echo csrf_token
  	(); ?>">

	Nama:
	<div class="form-group">
	<input type="text" name="nama" placeholder="Inputkan "
    required="required"><br><br>
	</div>

  	Tempat Lahir : 
	<div class="form-group">
  	<input type="text" name="tempat_lahir" placeholder="Inputkan "
    required="required"><br><br>
	</div>

  	Tanggal Lahir  :
	<div class="form-group">
  	<input type="date" name="tanggal_lahir" placeholder="Inputkan "
    required="required"><br><br>
	</div>

  	No HP : 
	<div class="form-group">
  	<input type="text" name="no_hp" placeholder="Inputkan "
    required="required"><br><br>
	</div>

    Alamat :
	<div class="form-group">
  	<input type="text" name="alamat" placeholder="Inputkan "
    required="required"><br><br>
	</div>

    Instansi :
	<div class="form-group">
  	<input type="text" name="instansi" placeholder="Inputkan "
    required="required"><br><br>
	</div>

  	<input type="submit" value="Simpan"> 
  </form>
@endsection