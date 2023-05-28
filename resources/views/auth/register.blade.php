@extends('layouts.base')

@section('title', 'Регистрация')

@section('main')
    <div class="row justify-content-center mt-auto">
        <div class="col-md-4">
            <div class="card brown">
                <div class="card-header text-center"><h2>{{ __('Регистрация') }}</h2></div>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('register') }}" method="post">
                        @csrf

                        <div class="input-group mb-3">
                            <input
                                id="name"
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                name="name"
                                placeholder="Имя"
                                value="{{ old('name') }}"
                                required autocomplete="name"
                                autofocus>
                                <div class="input-group-text card-style border-0">
                                    <span class="fas fa-user"></span>
                                </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input
                                id="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                placeholder="Email"
                                value="{{ old('email') }}"
                                required autocomplete="email">
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
                                required autocomplete="new-password"
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
                                <div class="input-group-text card-style border-0">
                                    <span class="fas fa-lock"></span>
                                </div>
                        </div>

                        <div class="d-flex justify-content-center align-items-center">
                            <div class="form-check">
                                <input class="form-check-input color-custom-light" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Запомнить меня') }}
                                </label>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-outline-light brown">
                                        {{ __('Вперед') }}
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
@endsection
<!-- /.register-box -->
