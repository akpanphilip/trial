@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="formBox-100">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header-100">WELCOME BACK</div>
                        <div class="card-body">
                            <form class="authform" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-2">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Password</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group d-flex justify-content-between mt-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <i class="fas fa-eye"></i>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <a href="/register" class="text-decoration-none text-secondary">Don't have an account?
                                    </a>
                                </div>
                                <div class="form-group mb-2">
                                </div>
                                <button type="submit" class="mt-2 btnSubmit btn btn-primary w-100">
                                    Login
                                </button>

                                <div class="d-flex justify-content-end mt-2">
                                    @if (Route::has('password.request'))
                                        <a class="text-decoration-none text-secondary"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
