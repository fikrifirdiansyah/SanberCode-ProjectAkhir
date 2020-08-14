@extends('admin/admin')
@section('content')
    



<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id_Komentar</th>
                        <th>Isi</th>
                        <th>Tanggal Dibuat</th>
                        <th>Tanggal Diperbarui</th>
                        <th>Pertanyaan id</th>
                        <th>Profil Id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($komentar as $k)
                    <tr>
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->isi }}</td>
                        <td>{{ $k->created_at }}</td>
                        <td>{{ $k->updated_at }}</td>
                        <td>{{ $k->pertanyaan_id }}</td>
                        <td>{{$k->profil_id}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection