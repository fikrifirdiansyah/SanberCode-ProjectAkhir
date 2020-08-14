@extends('admin/admin')
@section('content')
    


<div class="container mt-4 mb-4">
    <div class="row justify-content-md-center">
      <div class="col-md-12 col-lg-8">
        <h1 class="h2 mb-4">Edit Pertanyaan</h1><br>
        <form action="/pertanyaan/update/{{$pertanyaan -> id}}" method="POST">   
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input type="hidden" name="id" value="{{ $pertanyaan->judul }}">
            <label>Judul</label>
            <input class="form-control" type="text" name="judul" value="{{ $pertanyaan->judul }}" required="required"> <br/>
            <label>Isi Pertnyaan</label>
            <div class="form-group">
            <textarea id="editor" name="isi" value="{{ $pertanyaan->isi }}"></textarea>
            </div>
            <label>Tag</label>
            <select class="custom-select" name="tag" value="{{ $pertanyaan->tag }}">
                <option selected>Tag</option>
                <option value="1">html</option>
                <option value="2">css</option>
                <option value="3">php</option>
            </select>           
            <label>profil_id</label>
            <input class="form-control" type="number" name="profil_id" required="required" value="{{ $pertanyaan->profil_id }}"> <br/>
            <label>created_at</label>
            <input class="form-control" type="date" name="created_at" required="required" value="{{ $pertanyaan->created_at }}"> <br/>
            <label>updated_at</label>
            <input class="form-control" type="date" name="updated_at" value="{{ $pertanyaan->updated_at }}"> <br/>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
</div>

@endsection