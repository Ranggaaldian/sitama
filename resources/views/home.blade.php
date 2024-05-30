@extends('layouts.app')

@section('content')
    {{-- <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0">Silahkan Ajukan Judul Tugas Akhir</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6" style="position: absolute; top: 50%; transform: translateY(-50%)">
                    <div class="card card-info card-outline text-center shadow">
                        <div class="card-header">
                            <h4 class="font-weight-bold m-0">Judul Proposal</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="text" class="form-control mb-3 text-center" name="judul_ta" id="judul_ta" placeholder="Masukkan Judul Proposal">
                                <button type="submit" class="btn btn-info">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('.toast').toast('show')
    </script>
@endpush
