@extends('layout_depan.template')
@section('content')
<main class="form-signin">
  @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{Session::get('success')}}
    </div>
  @endif

  @if(Session::has('failed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{Session::get('failed')}}
    </div>
  @endif
      <form action="{{ route('authenticate') }}" method="post">
        @csrf
        <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
    
        <div class="form-floating">
        <label for="floatingInput">Email address</label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror'" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating pt-2">
        <label for="floatingPassword">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">New to app?<a href="/register"> Create Account</a></small>
</main>
@endsection