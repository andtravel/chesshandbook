@extends('layouts.base')

@section('title','Вход в личный кабинет')

@section('main')

    <div class="row justify-content-center mt-auto">
        <div class="col-md-4">
            <div class="card brown">
                <div class="card-header text-center"><h2>{{ __('Вход') }}</h2></div>

                <div class="card-body">
                    <form action="{{ route('login') }}" method="post">
                        @csrf

                        <div class="input-group mb-3">
                            <input
                                id="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                placeholder="Email"
                                value="{{ old('email') }}"
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
                                placeholder="Пароль"
                                required
                                autocomplete="current-password">
                            <div class="input-group-text card-style border-0">
                                <span class="fas fa-lock"></span>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-around align-items-center">
                            <div class="form-check">
                                <input class="form-check-input color-custom-light" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Запомнить меня') }}
                                </label>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-outline-light brown">Войти</button>
                            </div>
                        </div>
                        <div class="text-center mt-2">
                            @if (Route::has('password.request'))
                                <a class="text-custom-light text-decoration-none" href="{{ route('password.request') }}">
                                    {{ __('Забыли пароль?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

