@extends('admin/admin')
@section('content')
    



<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id_Profile</th>
                        <th>Nama</th>
                        <th>email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($profil as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->nama_lengkap }}</td>
                        <td>{{ $p->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection