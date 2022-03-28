@extends('layout.template')

@section('content_title')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

            <ol class="breadcrumb">
                <li><a href="">Dashboard</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection

@section('content')
    <div class="register-form" id="register-form">


       
        <div class="table-responsive table mt-2 overflow-auto" id="dataTable" role="grid" aria-describedby="dataTable_info">
            <table class="table dataTable my-0" id="dataTable">
                <thead>
                    <tr>
                        <th>Nom d'utilisateur</th>
                        <th>Email</th>
                        <th>Mot de passe</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @forelse (Auth::user()->children as $user)
                        <tr>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                {{ $user->first_pass == null ? '' : $user->first_pass }}
                            </td>

                            

                        </tr>
                    @empty
                    @endforelse 

                </tbody>
                <tfoot>
                    <tr>
                        <td><strong>Nom d'utilisateur</strong></td>
                        <td><strong>Email</strong></td>
                        <td><strong>Mot de passse</strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>







    </div>
@endsection
