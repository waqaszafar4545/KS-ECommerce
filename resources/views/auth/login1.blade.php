@extends('layouts.login')
            @section('content')
                <div class="justify-content-center">
                    <div class="card my-auto">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}" id="login-form-id">
                    @csrf
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                               placeholder="Email" style="text-align: center;">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password" required
                               autocomplete="current-password" placeholder="Password" style="text-align: center;">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="form-group mb-0">
                            <span class="login-span" id="validation-span-id">
                                <a onclick="validateFieldsByFormId(this)" data-validation="validation-span-id">SUBMIT</a>
                            </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer " style="text-align: center;font-size: larger;background: #262262;">
        <samp style="color: white;"> <strong>Copyright &copy; 2020 AloExpo.</strong>
            All rights reserved Powered By <a href="https://codebyuk.com/" target=”_blank”>CodeByUK</a>
        </samp>
    </div>
@endsection
