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
                        <h3 class="fw-bold mb-3">Edit List Guru</h3>
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
                                <a href="#">Guru</a>
                            </li>
                            <li class="separator">
                                <i class="icon-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Edit List Guru</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Edit List Guru</h4>
                                    <a href="{{ route('guru') }}" class="btn btn-primary">Kembali</a>
                                </div>
                                <div class="card-body">
                                    @include('components.alert')
                                    <form action="{{ route('guru.update', $guru->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="nama" id="nama"
                                                aria-describedby="helpId" value="{{ $guru->nama }}" placeholder="Masukkan Nama" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="kelas" class="form-label">Kelas</label>
                                            <select class="form-select" name="kelas_id" id="kelas">
                                                @forelse ($kelas as $p)
                                                    <option value="{{ $p->id }}" @selected($p->id == $guru->kelas_id)
                                                        >
                                                        {{ $p->nama }}</option>
                                                @empty
                                                    <option disabled selected>Data Kosong</option>
                                                @endforelse
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="mapel" class="form-label">Mata Pelajaran</label>
                                            <input type="text" class="form-control" name="mapel" id="mapel"
                                                aria-describedby="helpId" value="{{ $guru->mapel }}" placeholder="Masukkan Mata Pelajaran" />
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
