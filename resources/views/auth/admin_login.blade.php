@extends('layout.templatelog')
@section('content')

    <form method="post" class="signin-form mt-4" action="{{ route('adminLogin') }}">
        @csrf
        @include('partiels.auth_errors')
        <div class="form-group mt-3 pb-2 ">
            <input type="email"  class="form-control 1is-invalid" id="username" name="email" :value="old('email')" required autofocus  required>
            <label class="form-control-placeholder"  for="username"> Email</label>
            <div class="invalid-feedback"></div>
        </div>

        
        <div class="form-group  ">
            <input id="password-field" type="password" name="password" 
                class="form-control 1is-invalid" required autocomplete="current-password">

            <label class="form-control-placeholder " for="password-field">Mot de Passe</label>
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            <div class="invalid-feedback"></div>
            <div>
                <div class="col-md-6 float-left  row">
                    <label class="" for="remember_me">se souvenir </label>
                    <input id="remember" type="checkbox" class="checkbox-wrap ml-1 mt-1 " name="remember">
                </div>
                <div class=" float-right ">
                    <a class=" mb-1 mt-0 pt-0 " href="{{ route('password.request') }}">mot de passe oublié</a>
                </div> 
            </div>
           
        </div>
       
            
        
        
        
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary rounded submit px-3 ">Se connecter</button>
        </div>
    
        
    </form>


    
@endsection


