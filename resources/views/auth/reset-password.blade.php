@extends('layout.templatelog')
@section('content')

    <form method="post" class="signin-form mt-4" action="{{ route('password.update') }}">
        @csrf
        @include('partiels.auth_errors')
        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="d-none form-group mt-3 pb-2 ">
            <input type="email"  class="form-control 1is-invalid" id="username" name="email" value="{{old('email', $request->email)}}" required autofocus>
            <label class="form-control-placeholder"  for="username"> Email</label>
            <div class="invalid-feedback"></div>
        </div>

        
        <div class="form-group mt-3 pb-2  ">
            <input id="password-field" type="password" name="password" 
                class="form-control 1is-invalid" required autocomplete="new-password">

            <label class="form-control-placeholder " for="password-field">Mot de Passe</label>
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            <div class="invalid-feedback"></div>
        </div>
        <div class="form-group  ">
            <input id="password_confirmation" type="password" name="password_confirmation" 
                class="form-control 1is-invalid" required>

            <label class="form-control-placeholder " for="password_confirmation">Confirmer mot de passe</label>
            <span toggle="#password_confirmation" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            <div class="invalid-feedback"></div>
        </div>

        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary rounded submit px-3 ">Réinitialiser le mot de passe</button>
        </div>
    
    </form>

    
@endsection


