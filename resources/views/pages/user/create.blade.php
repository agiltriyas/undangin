@extends('layout.web',['title' => 'Members'])

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('member.index') }}">Members</a></li>
<li class="breadcrumb-item"><a>Add Admin</a></li>
@endsection

@section('content-web')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('member.store') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input required type="text" class="form-control @error('name') is-invalid @enderror " placeholder="Full name"
                                name="name" value="{{ old('name') }}">
                        </div>
                        @error('name')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="input-group mb-3">
                            <input required type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" name="email">
                        </div>
                        @error('email')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="input-group mb-3">
                            <input required type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                        </div>
                        @error('password')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="input-group mb-3">
                            <input required type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
                        </div>
                        @error('password_confirmation')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="row justify-content-end">
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection