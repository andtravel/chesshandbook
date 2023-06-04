@extends('layouts.base')

@section('title','Сброс пароля')

@section('main')
    <div class="row justify-content-center my-3">
        <div class="col-md-4">
            <div class="card brown">
                <div class="card-header text-center">{{ __('Сбросить пароль') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="input-group mb-3">
                            <input
                                id="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ old('email') }}"
                                required autocomplete="email"
                                autofocus
                                placeholder="Email">
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

                            <div class="col text-center">
                                <button type="submit" class="btn btn-outline-light brown">
                                    {{ __("Отправить ссылку на email") }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
