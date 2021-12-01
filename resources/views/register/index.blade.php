@extends('layout_depan.template')
@section('content')
<main class="form-signin">
      <form action="{{ route('register.store') }}" method="post">
          @csrf
        <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <h1 class="h3 mb-3 fw-normal text-center">Sign Up</h1>
        <div class="form-floating">

            <label for="floatingInput">Nama</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="name" required>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    
        <div class="form-floating pt-2">
            <label for="floatingInput">Email address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" required>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror    
        </div>

        <div class="form-floating pt-2">
            <label for="floatingPassword">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror 
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Create Account</button>
      </form>
</main>
@endsection