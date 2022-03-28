@extends('layout.admin')

@section('content_title')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Profile page</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
            <ol class="breadcrumb">
                <li><a href="">Dashboard</a></li>
                <li class="active">voir profil</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="white-box">
                <div class="user-bg"> <img width="100%" alt="user"
                        src="{{ asset('assets_admin/plugins/images/large/img1.jpg') }}">
                    <div class="overlay-box">
                        <div class="user-content">
                            <a href="javascript:void(0)"><img
                                    src="{{ asset('assets_admin/plugins/images/users/genu.jpg') }}"
                                    class="thumb-lg img-circle" alt="img"></a>
                            <h4 class="text-white">{{ $user->name }}</h4>
                            <h5 class="text-white">{{ $user->email }}</h5>
                        </div>
                    </div>
                </div>
                <div class="user-btm-box">


                    <div class="col-md-8 col-sm-8 text-center">
                        <p class="text-danger"><i class="ti-dribbble"></i></p>
                        <h4>Membre</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-xs-12">
            <div class="white-box">
                <div class="form-horizontal form-material">
                    <fieldset disabled="disabled">
                        <form >
                            <div class="form-group">
                                <label class="col-md-12">Nom d'utilisateur</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $user->name }}"
                                        class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" value="{{ $user->email }}"
                                        class="form-control form-control-line" name="example-email" id="example-email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input type="password" value="{{ $user->first_pass }}"
                                        class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Parrain</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{$user->parent==null?"":$user->parent->name}}"
                                        class="form-control form-control-line">
                                </div>
                            </div>
                            
                            
                        </form>
                    </fieldset>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive table mt-2 overflow-auto" id="dataTable" role="grid" aria-describedby="dataTable_info">
        <table class="table dataTable my-0" id="dataTable">
            <thead>
                <tr>
                    <th>Nom d'utilisateur</th>
                    <th>Email</th>
                    <th>Nombre de fiolle</th>
                    <th>Parent</th>
                    
                </tr>
            </thead>
            <tbody>
            @foreach ($user->children as $user)
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
                    {{$user->parent==null?"":$user->parent->name}}
                </td>
                
                </tr>
                
            @endforeach
                    


            </tbody>
            <tfoot>
                <tr>
                    <td><strong>Nom d'utilisateur</strong></td>
                    <td><strong>Email</strong></td>
                    <td><strong>Nombre de fiolles</strong></td>
                    <td><strong>Parent</strong></td>
                    
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.row -->
@endsection




