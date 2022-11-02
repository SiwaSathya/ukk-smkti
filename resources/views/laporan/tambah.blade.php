<!-- Menghubungkan dengan template induk home.blade.php -->
@extends('template')

<!-- Bagian Judul Halaman -->
<!-- Pembuatan section pendek -->
@section('Judul_halaman','Halaman Insert Data Pengajuan')

<!-- Bagian Content -->
<!-- Cara Pembuatan Section Panjang -->
@section('content')
	<div class="row">
		<div class="container">
			<h2 class="text-center my-5">SILAHKAN UPLOAD FILE</h2>
			

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="laporan/store{{ $id }}" method="POST" enctype="multipart/form-data"> 
					@csrf
				<input type="hidden" name="pengajuan_id" value="{{ $id }}">
					{{ csrf_field() }}

					<div class="form-group">
						<b>Kendala</b>
						<textarea class="form-control" name="kendala"></textarea>
					</div>

					<div class="form-group">
						<b>Kesimpulan</b>
						<textarea class="form-control" name="kesimpulan"></textarea>
					</div>

					<div class="form-group">
						<b>File PDF</b><br/>
						<input type="file" name="file">
					</div>

					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
				 <h4 class="my-5">Data</h4>
@endsection