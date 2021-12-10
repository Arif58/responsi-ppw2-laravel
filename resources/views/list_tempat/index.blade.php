@extends('layout_depan.template')
@section('content')
       <!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title"> Tempat Makan di {{ $locs->nama_kota }}</h2>
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
        </div>
        <div class="row">
          @foreach($plcs as $data)
          <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
            <a href="{{ route('detail.tempat', $data->tempat_makan_seo) }}">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <img src="{{ asset('storage/'.$data->foto) }}" style="width: 100%; height: 231px;">                
              </div>
              <div class="blog-item-text"> 
                <h3>{{ $data->nama_tempat }}</h3>
                <div class="meta-tags">
                  <span><a href="#"><i class="lni-eye"></i> 4.5k Views</span>
                  <span><a href="#"><i class="lni-bubble"></i> 07</a></span>
                  <span><a href="#"><i class="lni-reply"></i> 332</a></span>
                </div>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- blog Section End -->
@endsection