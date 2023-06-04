@extends('layouts.base')

@section('title', 'Подтвердить пароль')

@section('main')
    <div class="row justify-content-center my-3">
        <div class="col-md-4">
            <div class="card brown">
                <div class="card-header text-center">{{ __('Подтвердить пароль') }}</div>

                <div class="card-body">
                    {{ __('Повторите пароль для продолжения.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="input-group mb-3">
                            <input
                                id="password"
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                required
                                autocomplete="current-password"
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
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Подтвердите пароль') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Забыли пароль?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
