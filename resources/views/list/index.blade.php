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
                <div class="card mt-4" style="height: 80vh">
                    <div class="card-body align-content-center">
                        <h1 class="h3 mb-4 text-center ">Bonjour 👋🏻</h1>
                    </div>
                </div>
            </div>

            @include('components.footer')
        </div>
    </div>
@endsection
