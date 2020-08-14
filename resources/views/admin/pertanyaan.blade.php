@extends('admin/admin')
@section('content')
    



<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id_Pertanyaan</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Tanggal Dibuat</th>
                        <th>Tanggal Diperbarui</th>
                        <th>Profil Id</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pertanyaan as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->judul }}</td>
                        <td>{{ $p->isi }}</td>
                        <td>{{ $p->created_at }}</td>
                        <td>{{ $p->updated_at }}</td>
                        <td>{{$p->profil_id}}</td>
                        <td>
                        <a href="/pertanyaan/edit/{{$p -> id}}" class="btn btn-warning">Edit</a>
                            <a href="/pertanyaan/hapus/{{$p -> id}}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection