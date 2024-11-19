@extends('layout.main')
@section('main')
    <div class="wrapper">

        @include('components.sidebar')

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    @include('components.header')
                </div>
                @include('components.navbar')
            </div>

            <div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h3 class="fw-bold mb-3">Edit List Siswa</h3>
                        <ul class="breadcrumbs mb-3">
                            <li class="nav-home">
                                <a href="#">
                                    <i class="icon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="icon-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Pages</a>
                            </li>
                            <li class="separator">
                                <i class="icon-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Siswa</a>
                            </li>
                            <li class="separator">
                                <i class="icon-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Edit List Siswa</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Edit List Siswa</h4>
                                    <a href="{{ route('siswa') }}" class="btn btn-primary">Kembali</a>
                                </div>
                                <div class="card-body">
                                    @include('components.alert')
                                    <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="nama" id="nama"
                                                aria-describedby="helpId" placeholder="Masukkan Nama" value="{{ $siswa->nama }}" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="kelas" class="form-label">Kelas</label>
                                            <select class="form-select" name="kelas_id" id="kelas">
                                                @forelse ($kelas as $p)
                                                    <option value="{{ $p->id }}" @selected($p->id == $siswa->kelas_id)
                                                        >
                                                        {{ $p->nama }}</option>
                                                @empty
                                                    <option disabled selected>Data Kosong</option>
                                                @endforelse
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="umur" class="form-label">Umur</label>
                                            <input type="text" class="form-control" name="umur" id="umur"
                                                aria-describedby="helpId" placeholder="Masukkan Umur" value="{{ $siswa->umur }}" />
                                        </div>

                                        <button type="submit" class="form-control btn btn-primary">Kirim</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            @include('components.footer')
        </div>
    </div>
@endsection
