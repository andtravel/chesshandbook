@extends('layouts.base')

@section('title', 'Reset password')

@section('main')
    <div class="row justify-content-center mt-auto">
        <div class="col-md-4">
            <div class="card brown">
                <div class="card-header text-center">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="input-group mb-3">
                            <input
                                id="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ $email ?? old('email') }}"
                                required
                                autocomplete="email"
                                autofocus>
                            <div class="input-group-text card-style border-0">
                                <span class="fas fa-envelope"></span>
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input
                                id="password"
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                required
                                autocomplete="new-password"
                                placeholder="Пароль">
                            <div class="input-group-text card-style border-0">
                                <span class="fas fa-lock"></span>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>


                        <div class="input-group mb-3">
                            <input
                                id="password-confirm"
                                type="password"
                                class="form-control"
                                name="password_confirmation"
                                required autocomplete="new-password"
                                placeholder="Повторите пароль">
                        </div>

                        <div class="input-group mb-3">
                            <div class="col-4">
                                <button type="submit" class="btn btn-outline-light brown">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
