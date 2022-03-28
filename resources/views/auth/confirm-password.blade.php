@extends('layout.templatelog')
@section('content')
    
    <div class="my-2">
       <h6 class="text-justify">C'est une section sécurisée de notre application. Veuillez confirmer 
        votre mot de passse avant de continuer.</h6> 
    </div>
    <form method="POST"  class="signin-form mt-4"  action="{{ route('password.confirm') }}">
        @csrf
        @include('partiels.auth_errors')
        <div class="form-group mt-3 pb-2  ">
            <input id="password-field" type="password" name="password" 
                class="form-control 1is-invalid" required autocomplete="current-password" >

            <label class="form-control-placeholder " for="password-field">Mot de Passe</label>
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </div>
        
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary rounded submit px-3 ">Confirmmer</button>
        </div>
    
    </form>

   
@endsection

