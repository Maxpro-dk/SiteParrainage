@extends('layout.templatelog')
@section('content')
    
    <div>
       <h6>Veuillez entrer votre email pour la  réinitialisation de votre mot de passe. Nous vous enverrons 
           un lien de réinitialisation de mot de passe par cette email </h6> 
    </div>
    <div  class="signin-form mt-4">
      
    
        <div class="alert alert-success text-justify ">
            {{ __('Merci pour votre\'inscription ! Avant de commencer, pouviez-vous vérifier votre email 
            en cliquant  sur le lien que nous vous avions envoyé par email? Si vous ne l\'aviez par reçu,un autre vous sera réenvoyer.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="alert alert-info text-justify">
                {{ __('Un nouveau lien de vérification a été  envoyé à votre email que vous aviez fourni lors 
                de votre inscription') }}
            </div>
        @endif

        <div>
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                        {{ __("Renvoie d'email de vérification") }}
                    </button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                    {{ __('Se deconnecter') }}
                </button>
            </form>
        </div>
    </div>

   
@endsection



