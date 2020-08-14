@extends('admin/admin')
@section('content')
    


<div class="container mt-4 mb-4">
    <div class="row justify-content-md-center">
      <div class="col-md-12 col-lg-8">
        <h1 class="h2 mb-4">Form Komentar</h1><br>
        <form action="/buat_komentar/buat" method="POST">   
            {{ csrf_field() }}
            <input type="hidden" name="id">
            <label>Isi Komentar</label>
            <div class="form-group">
            <textarea id="editor" name="isi"></textarea>
            </div>           
            <label>created_at</label>
            <input class="form-control" type="date" name="created_at" required="required"> <br/>
            <label>updated_at</label>
            <input class="form-control" type="date" name="updated_at"> <br/>
            <label>pertanyaan_id</label>
            <input class="form-control" type="number" name="pertanyaan_id" required="required"> <br/>
            <label>profil_id</label>
            <input class="form-control" type="number" name="profil_id" required="required"> <br/>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
</div>

@endsection