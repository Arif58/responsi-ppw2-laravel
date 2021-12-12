@extends('layout.template')

@section('content')
<div class="content">
    <form method="post" action="{{ route('detail.store') }}" enctype="multipart/form-data">
        @csrf
            <div class="mb-3 w-50">
                <label for="id_tempat" class="form-label">Kota</label>
                <select name="id_kota" id="kota" class="form-select" aria-label="Default select example">
                    <option value="" disabled selected>Pilih Kota</option>
                    @foreach ($kota as $key => $value)
                    <option value="{{ $key }}" @if($key==$detail->id_kota) selected @endif>{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 w-50">
                <label for="id_tempat" class="form-label">Nama Tempat</label>
                <select name="id_tempat" id="tempat" class="form-select" aria-label="Default select example">
                    <option value="" disabled selected>Pilih Tempat</option>

                    
                </select>
            </div>
            <div class="mb-3 w-50">
                <label for="inputJudul" class="form-label">No.Telp</label>
                <input type="text" name="no_telp" class="form-control" value="{{ $detail->no_telp }}">
            </div>
            <div class="mb-3 w-50">
                <label for="inputJudul" class="form-label">Waktu Operasional</label>
                <input type="text" name="waktu_operasional" class="form-control" placeholder="ex: 18.00-23.00 (Mon-Sun)" value="{{ $detail->waktu_operasional }}">
            </div>
            <div class="mb-3 w-50">
                <label for="inputJudul" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ $detail->alamat }}">
            </div>
            <div class="mb-3 w-50">
                <label for="inputJudul" class="form-label">Link GMaps</label>
                <input type="text" name="link_maps" class="form-control" value="{{ $detail->link_maps }}">
            </div>
            <div class="mb-3 w-50">
                <label for="menu" class="form-label">Upload Foto Menu</label>
                
                <img src="{{ asset('storage/'.$detail->menu) }}" class="img-preview img-fluid mb-3 mx-auto">
                <input type="file" id="image" name="menu" class="form-control d-block @error('foto') is-invalid @enderror" onchange="previewImage()">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a class="btn btn-danger" href="/detail_tempat">Batal</a>
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
            <script type="text/javascript">
                jQuery(document).ready(function() {
                    jQuery('select[name="id_kota"]').on('change', function() {
                        var kotaID = jQuery(this).val();
                        console.log(kotaID)
                        if (kotaID) {
                            jQuery.ajax({
                                url: '/getTempat/' + kotaID,
                                type: "GET",
                                dataType: "json",
                                success: function(data) {
                                    console.log(data);
                                    jQuery('select[name="id_tempat"]').empty();
                                    jQuery.each(data, function(key, value) {
                                        $('select[name="id_tempat"]').append('<option value="' + key + '" @if($key==$detail->id_tempat) selected @endif>' + value + '</option>');
                                    });
                                }
                            });
                        } else {
                            $('select[name="id_tempat"]').empty();
                        }

                    });
                });

            </script>
</div>

@endsection