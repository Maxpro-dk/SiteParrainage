@extends('layout.admin') 

@section('content_title')
                    <div class="row bg-title">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                                
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                            </ol>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
 @endsection

@section('content')
                   
    <div  class="register-form"  id="register-form">
                
        
        <div class="float-right"><a href="{{route("user_add")}}">Ajouter un utilsatuer</a>  </div>
        <div class="table-responsive table mt-2 overflow-auto" id="dataTable" role="grid" aria-describedby="dataTable_info">
            <table class="table dataTable my-0" id="dataTable">
                <thead>
                    <tr>
                        <th>Nom d'utilisateur</th>
                        <th>Email</th>
                        <th>Nombre de fiolle</th>
                        <th>Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                    <td>
                        {{$user->name}}
                    </td>
                    <td>
                        {{$user->email}}
                    </td>
                    <td>
                        {{$user->children->count()}}
                    </td>
                    
                    <td>
                        <a href="{{route("see_profile",['id'=>$user->id])}}">voir</a>
                    </td>
                    
                    </tr>
                    
                @endforeach
                        
    
    
                </tbody>
                <tfoot>
                    <tr>
                        <td><strong>Nom d'utilisateur</strong></td>
                        <td><strong>Email</strong></td>
                        <td><strong>Nombre de fiolles</strong></td>
                        <td><strong>Action</strong></td>
                        
                    </tr>
                </tfoot>
            </table>
        </div>
        
        
                
                    
                    
                        
        
    </div>
            
@endsection  
           
