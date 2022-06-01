@extends('layouts.app')

@section('content')
<div class="login">
    <div class="transparent-color">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">{{ __('Restablecer contraseña') }}</div>
        
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
        
                                <div class="form-group">
                                    <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>
        
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
        
                                <div class="form-group">
                                    <label for="password" class="col-form-label">{{ __('Password') }}</label>
        
                                    
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
        
                                <div class="form-group">
                                    <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>
        
                                    
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    
                                </div>
        
                                <div class="form-group">
                                    
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Reset Password') }}
                                    </button>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
