@extends('master')

@section('title')
    <title>Data Jabatan</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Jabatan</h1>
        </div>
        <div class="section-body">
            {{-- untuk menampilkan pesan sukses --}}
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('tipebalai.create') }}" class="btn btn-primary">Add Balai</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Jabatan</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
