@extends('layout_depan.template')
@section('content')
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Daftar Tempat</h2>
          <span>Blogs</span>
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
        </div>
        <div class="row">
          @foreach($plcs as $data)
          <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="#">
                  <img src="{{ asset('storage/'.$data->foto) }}">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <div class="date"><i class="lni-calendar"></i>10 April, 2018</div>
                <h3><a href="single-post.html">10 Tips to Design a High-converting Landing Page</a></h3>
                <div class="meta-tags">
                  <span><a href="#"><i class="lni-eye"></i> 4.5k Views</a></span>
                  <span><a href="#"><i class="lni-bubble"></i> 07</a></span>
                  <span><a href="#"><i class="lni-reply"></i> 332</a></span>
                </div>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
          @endforeach
        </div>
      </div>
@endsection