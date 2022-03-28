@extends('layout.admin')  

@section('content_title')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Profile page</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
            <ol class="breadcrumb">
                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="active">Ajout de membre</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
                
                   
                    <!-- /.row -->
                    <!-- .row -->
                    <div class="row ">
                       
                        <div class="col-md-8 col-xs-12">
                            <div class="white-box">
                                <form class="form-horizontal form-material" method="POST" action="{{route('user_store')}}" ENCTYPE="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Nom d'utilisateur</label>
                                        <div class="col-md-12">
                                            <input value="{{old("name")}}" class="is-invalid form-control form-control-line" type="text" name="name" id="name"  required/>
                                            <span class="invalid-feedback" >
                                                @error('name'){{$message}}@enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input value="{{old("email")}}" class="is-invalid form-control form-control-line" type="text" name="email" id="email"   required/>
                                            <span class="invalid-feedback" >
                                                @error('email'){{$message}}@enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Mot de passe</label>
                                        <div class="col-md-12">
                                    
                                            <input value="{{old("password")}}" class="is-invalid form-control form-control-line" type="text" name="password" id="password"   required/>
                                                <span class="invalid-feedback" >
                                                    @error('password'){{$message}}@enderror
                                                </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Confirmer mot passe</label>
                                        <div class="col-md-12">
                                            <input value="{{old("password_confirmation")}}" class="is-invalid form-control form-control-line" type="text" name="password_confirmation" id="password_confirmation"  required/>
                                            <span class="invalid-feedback" >
                                                @error('password_confirmation'){{$message}}@enderror
                                            </span>
                                        </div>
                                    </div> 
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button  class="btn btn-success">Ajouter </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                
@endsection  
           
