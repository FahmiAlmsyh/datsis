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
                        <h3 class="fw-bold mb-3">List Kelas</h3>
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
                        </ul>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">List Kelas</h4>
                                    <a href="{{ route('kelas.create') }}" class="btn btn-primary">Tambah Data</a>
                                </div>
                                <div class="card-body">
                                    @include('components.alert')
                                    <div class="table-responsive">
                                        <table id="multi-filter-select" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @forelse ($kelas as $p)
                                                    <tr>
                                                        <td>{{ $p->nama }}</td>
                                                        <td>
                                                            <a href="{{ route('kelas.edit', $p->id) }}"
                                                                class="btn btn-warning"><i
                                                                    class="fas fa-pencil-alt text-white"></i>
                                                            </a>
                                                            <form action="{{ route('kelas.destroy', $p->id) }}"
                                                                method="POST" style="display: inline;">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit" class="btn btn-danger text-white"
                                                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>

                                                @empty
                                                <tr>
                                                    <td colspan="2" class="text-center">
                                                        <span class="text-secondary fw-bold">Data Kosong</span>
                                                    </td>
                                                </tr>

                                                @endforelse

                                            </tbody>
                                        </table>
                                    </div>
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
