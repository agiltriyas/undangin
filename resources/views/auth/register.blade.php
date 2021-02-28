@extends('layout.auth',['title' => 'Register Page - Undangan'])

@section('content')
<div class="register-box">
    <div class="card card-outline card-danger">
        <div class="card-header text-center">
            <div class="h3"><b>Daftar Akun Baru</b></div>
        </div>
        <div class="card-body">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror " placeholder="Full name"
                        name="name" value="{{ old('name') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                @error('name')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                <div class="input-group mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" name="email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                @error('email')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @error('password')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @error('password_confirmation')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree" required> 
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            {{-- <div class="social-auth-links text-center">
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                </a>
            </div> --}}

            <a href="{{ route('login') }}" class="text-center">Saya sudah punya akun</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->
@endsection
