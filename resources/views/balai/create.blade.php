@extends('master')

@section('title')
    <title>Create Page</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Balai Create Page</h1>
        </div>
        <div class="section-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Wait</strong> Ada yang salah ,<br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Form Add Balai</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('balai.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <table class="table table-bordered">
                            <tr>
                                <td>Nama Balai</td>
                                <td>
                                    <input class="form-control" type="text" name="nama_satker">
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" class="form-control" name="alamat"></td>
                            </tr>
                            <tr>
                                <td>Kota</td>
                                <td><input type="text" name="kota" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Tipe Balai</td>
                                <td>
                                    <select name="tipe_id" class="form-control">
                                        <option value="0">- Pilih Tipe Balai -</option>
                                        @foreach($tipe_balai as $t)
                                            <option value="{{ $t->id }}">{{ $t->nama_tipe }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><button type="submit" class="btn btn-primary">Save Data</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
