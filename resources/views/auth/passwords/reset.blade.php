@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row flex-column pt-5 align-items-center">
        <div class="col-md-8">
            <div class="card card-block">
                <div class="card-header">
                    Скинути пароль
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('assword.request') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <label class="form-control-label" for="email">Емейл-адрес</label>
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" id="email" name="email" value="{{ old('email') }}"
                                   placeholder="Введіть свій емейл " required autofocus>
                            @if ($errors->has('email'))
                                <small class="form-control-feedback invalid-feedback">{{ $errors->first('email') }}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="form-control-label" for="password">Пароль</label>
                            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" id="password" name="password" required aria-describedby="passwordHelp">
                            @if ($errors->has('password'))
                                <div class="form-control-feedback invalid-feedback">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password" required>
                            <small class="form-text text-muted" id="passwordHelp">Тримайте свій пароль від чужих очей.</small>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-primary btn-block">Reset Password</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
