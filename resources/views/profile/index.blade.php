<!-- Menghubungkan dengan template induk home.blade.php -->
@extends('template')

<!-- Bagian Judul Halaman -->
<!-- Pembuatan section pendek -->
@section('Judul_halaman','Halaman Insert Data Pengajuan')

<!-- Bagian Content -->
<!-- Cara Pembuatan Section Panjang -->
@section('content')
<section style="">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{ Auth::user()->name }}</h5>
            <p class="text-muted mb-1">Full Stack Developer</p>
            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
            <div class="d-flex justify-content-center mb-2">

              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
        </div>
      </div>
      
      @if($empty === true)
        <a href="profiletambah"><button>TAMBAH</button></a>
      @else
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              @foreach($profile as $p)
              <a href="profileedit{{$p -> id}}"><button type="button" class="btn btn-primary">EDIT</button></a>
              <div class="col-sm-3">
                    <p class="mb-0">Nama</p>
                </div>
                 <div class="col-sm-9">
                 <p class="text-muted mb-0">{{ $p-> nama }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Tempat Lahir</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $p-> tempat_lahir }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Tanggal Lahir</p>
              </div>
              <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $p-> tanggal_lahir }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">No Hp</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $p-> no_hp }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Alamat</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $p-> alamat }}</p>
              </div>
            </div> 
              <hr>
                <div class="row">
                 <div class="col-sm-3">
                     <p class="mb-0">Instansi</p>
                     </div>
                        <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $p-> instansi }}</p>
                    </div>
                </div>
          </div>
        </div>
      </div>
              @endforeach
            
      @endif

     
    </div>
  </div>
</section>
@endsection