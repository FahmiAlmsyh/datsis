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
                        <h3 class="fw-bold mb-3">Tambah List Kelas</h3>
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
                                <a href="#">Kelas</a>
                            </li>
                            <li class="separator">
                                <i class="icon-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Tambah List Kelas</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Tambah List Kelas</h4>
                                    <a href="{{ route('kelas') }}" class="btn btn-primary">Kembali</a>
                                </div>
                                <div class="card-body">
                                    @include('components.alert')
                                    <form action="{{ route('kelas.store') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="kelas" class="form-label">Kelas</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="nama"
                                                id="kelas"
                                                aria-describedby="helpId"
                                                placeholder="Masukkan Kelas"
                                            />
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
