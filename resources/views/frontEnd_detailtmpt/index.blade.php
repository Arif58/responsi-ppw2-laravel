@extends('layout_depan.template')
@section('content')
<div class="section">
  <div class="card mb-3 border-0" style="margin: 0 190px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('storage/'.$tmpt->foto) }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $tmpt->nama_tempat }}</h5>
          @foreach($ket as $data)
          <p class="card-text">{{ $data->waktu_operasional }}</p>
          <p class="card-text">{{ $data->no_telp }}</p>
          <p class="card-text">{{ $data->alamat }}</p>
          <h1 class="mt-3"><a href="{{ $data->link_maps }}" style="color: #007bff;" target="_blank"><i class="fas fa-directions"></i></a></h1>
          @endforeach
        </div>
      </div>
    </div>
    <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="btn nav-link active border-0" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><font color="black">Review</font></button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="btn nav-link border-0" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><font color="black">Menu</font></button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="container mt-3 d-flex border-0">
          <div class="row d-flex">
              <div class="col-md-13">
                @auth
                <form method="post" action="{{ route('review.store', $tmpt->id ) }}" class="form-floating mb-3">
                  @csrf
                  <!-- <div class="d-flex flex-row">
                    <input type="text" name="comment" class="form-control" style="width: auto;" placeholder="Add Review">
                  </div> -->
                  @if(Auth::user())
                  <div class="form-floating">
                    <textarea name="comment" class="form-control" placeholder="Add Review" id="floatingTextarea"></textarea>
                  </div>
                  <button class="btn btn-primary border-0 rounded mt-1 mb-3"><i class="fas fa-paper-plane"></i></button>
                  @endif
                  @else
                  <div class="form-floating">
                    <textarea name="comment" class="form-control" placeholder="masuk untuk menambahkan ulasan" id="floatingTextarea" disabled></textarea>
                  </div>
                </form>
                @endauth
                
                <div class="text-left">
                    <h6>All Reviews</h6>
                </div>
                @foreach($review as $ulasan)
                <div class="card p-3 mb-2" style="width:300px">
                  <div class="d-flex flex-row">
                    <div class="d-flex flex-column ms-2">
                      <h6 class="mb-1 text-primary">{{ $ulasan->user->name }}</h6>
                      <p class="comment-text">{{ $ulasan->comment }}</p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
          </div>
        </div>
      </div>
      @foreach($ket as $data)
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <a href="{{ asset('storage/'.$data->menu) }}" data-lightbox="image-1"><img src="{{ asset('storage/'.$data->menu) }}" class="rounded d-block" style="width: 200px; height: 200px;"></a>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection
 