@extends('templates/master')
@section('content')
<br>
<div class="col">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Ubah Data cast</h3>
        </div>
        <form action="{{ route('cast.update', $casts->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{$casts->nama }}" placeholder="Masukkan Nama">
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Umur</label>
                        <input type="text" class="form-control" id="umur" name="umur"
                        value="{{$casts->umur }}" placeholder="Masukkan Umur">
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Biografi</label>
                        <input type="text" class="form-control" id="bio" name="bio"
                        value="{{$casts->bio }}" placeholder="Masukkan Biografi">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('js')
<script src="{{ url('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(function () {
        $('#deskripsi_form').summernote()
    })

</script>
@endsection
