@extends('layout.template')
@section('content')
<div class="content">
    <form method="post" action="{{ route('lokasi.update', $location->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 w-50">
            <label for="inputJudul" class="form-label">Nama Kota</label>
            <input type="text" name="nama_kota" class="form-control" value="{{ $location->nama_kota }}">
        </div>
        <div class="mb-3 w-50">
            <label for="foto" class="form-label">Upload Cover</label>
            <img src="{{ asset('storage/'.$location->foto) }}" class="img-preview img-fluid mb-3 mx-auto">
            <input type="file" id="image" name="foto" class="form-control d-block @error('foto') is-invalid @enderror" onchange="previewImage()">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a class="btn btn-danger" href="/lokasi">Batal</a>
    </form>
    <script>
        function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = "block";
        // imgPreview.style.height = "200px";
        // imgPreview.style.width = "180px";

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
            }
        }

    </script>
</div>

@endsection