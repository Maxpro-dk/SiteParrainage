@extends('layout.guest')

@section('content_title')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Page d'accueil</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
            <ol class="breadcrumb">
                <li><a href="{{route("guest_profile")}}">voir profile</a></li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
@endsection