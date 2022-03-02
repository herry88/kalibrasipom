@extends('master')

@section('title')
    <title>Edit Tipe Page</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tipe Balai Edit Page</h1>
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
                    <h4>Form Edit Balai</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('tipebalai.update', $tipe_balai->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <table class="table table-bordered">
                            <tr>
                                <td>Tipe Balai</td>
                                <td><input type="text" value="{{ $tipe_balai->nama_tipe }}" name="nama_tipe"
                                        class="form-control"></td>
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
