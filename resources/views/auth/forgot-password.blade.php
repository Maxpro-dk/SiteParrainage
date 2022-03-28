@extends('layout.templatelog')
@section('content')
    
    <div class="my-2">
       <h6 class="text-justify ">Veuillez entrer votre email pour la  réinitialisation de votre mot de passe. Nous vous enverrons 
           un lien de réinitialisation de mot de passe par cette email </h6> 
    </div>
    <form method="POST"  class="signin-form mt-4"  action="{{ route('password.email') }}">
        @csrf
        @include('partiels.auth_errors')
        @if (session('status')!=null)
            <div class="alert alert-success">
                {{session('status')??""}}
            </div>
        @endif
        <div class="form-group mt-3 pb-2 ">
            <input type="email"  class="form-control 1is-invalid" id="username" name="email" :value="old('email')" required autofocus>
            <label class="form-control-placeholder"  for="username"> Email</label>
            <div class="invalid-feedback"></div>
        </div>

        
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary rounded submit px-3 ">Réinitialiser par email</button>
        </div>
    
    </form>

   
@endsection


