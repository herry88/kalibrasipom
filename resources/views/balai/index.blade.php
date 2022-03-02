@extends('master')

@section('title')
    <title>Data Balai</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Balai</h1>
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
                            <a href="{{ route('balai.create') }}" class="btn btn-primary">Add Balai</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Balai</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Tipe Balai</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($balai as $b)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $b->nama_satker }}</td>
                                            <td>{{ $b->alamat }}</td>
                                            <td>{{ $b->kota }}</td>
                                            <td>{{ $b->tipebalai->nama_tipe }}</td>
                                            <td>
                                                <a href="{{ route('balai.edit', $b->id) }}" class="btn btn-warning"
                                                    title="Edit"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('balai.destroy', $b->id) }}" class="btn btn-danger"
                                                    title="Hapus"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
