@extends('layout.template')

@section('content')
<div class="content">
    <form method="post" action="{{ route('tempat.update', $tmpt_mkn->id) }}" enctype="multipart/form-data">
        @csrf
            <div class="mb-3 w-50">
                <label for="inputJudul" class="form-label">Nama Tempat</label>
                <input type="text" name="nama_tempat" class="form-control" value="{{ $tmpt_mkn->nama_tempat }}">
            </div>
            <div class="mb-3 w-50">
                <label for="id_buku" class="form-label">Kota</label>
                <select name="id_lokasi" class="form-select" aria-label="Default select example">
                    <option value="" selected>Pilih Kota</option>
                    @foreach ($locs as $data)
                    <option value="{{ $data->id }}" @if($data->id==$tmpt_mkn->id_lokasi) selected @endif>{{ $data->nama_kota }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3 w-50">
                <label for="foto" class="form-label">Upload Foto</label>
                <img src="{{ asset('storage/'.$tmpt_mkn->foto) }}" class="img-preview img-fluid mb-3 mx-auto">
                <input type="file" id="image" name="foto" class="form-control d-block @error('foto') is-invalid @enderror" onchange="previewImage()">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a class="btn btn-danger" href="/tempat">Batal</a>
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