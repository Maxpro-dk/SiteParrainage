@extends('layout.templatelog')
@section('content')
    
    <form method="post" class="signin-form mt-4" action="{{ route('register') }}">
        @csrf
        <input type="hidden" name="parent_id" value="{{$user->id}}"/>
        @include('partiels.auth_errors')
        <div class="form-group  mt-3 pb-2 ">
            <input type="text"  class="form-control 1is-invalid" id="name" name="name" value="{{old("name")}}" >
            <label class="form-control-placeholder"  for="name"> Nom</label>
            <div class="invalid-feedback"></div>
        </div>
        <div class="form-group mt-3 pb-2 ">
            <input type="email"  class="form-control 1is-invalid" id="username" name="email" value="{{old("email")}}"  required>
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
            <button type="submit" class="form-control btn btn-primary rounded submit px-3 ">S'inscrire</button>
        </div>
    
    </form>
    <div class="flex items-center justify-end mt-4">
        <a class="btn" href="{{ url('auth/facebook?parent_id='.$user->id) }}"
            style="background: #3B5499; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
            Login with Facebook
        </a>
    </div>
    <div>
        <p class="text-center">
            Vous êtes déjà membre ? <a  href="{{ route('login') }}">Se connecter</a>
        </p>
    </div>
@endsection
