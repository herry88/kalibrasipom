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
                            <a href="{{ route('alat.create') }}" class="btn btn-primary">Add Balai</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Alat</th>
                                        <th>Merk</th>
                                        <th>Tipe Alat</th>
                                        <th>Satker</th>
                                        <th>Images</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($alat as $item)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nm_alat }}</td>
                                            <td>{{ $item->merk }}</td>
                                            <td>{{ $item->tipe }}</td>
                                            <td>{{ $item->balai_id }}</td>
                                            <td><img src="{{ Storage::url($item->image) }}" width="200" height="200"></td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
