@extends('sb-admin/app')
@section('title', 'Profile')

@section('content')
    <form action="{{ route('profilePasien.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-7">
              <h3>Profile</h3>
              <div class="mb-3">
                <label for="_foto" class="form-label">Foto</label>
                <input type="file" class="form-control form-control-sm" name="_foto" id="_foto">
            </div>
            <div class="mb-3">
                <label for="_nama" class="form-label">Nama</label>
                <input type="text" class="form-control form-control-sm" name="_nama" id="_nama">
            </div>
            <div class="mb-3">
                <label for="_email" class="form-label">Email</label>
                <input type="text" class="form-control form-control-sm" name="_email" id="_email">
            </div> 
        <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
    </form>

@endsection