@extends('admin.layouts.master')
@section('title','View Utilisateur')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>View utilisateur</h1>
          <small>utilisateur List</small>
       </div>
    </section>
    @if(Session::has('flash_message_error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    <strong>{{ session('flash_message_error') }}</strong>
    </div>
    @endif
    @if(Session::has('flash_message_success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    <strong>{{ session('flash_message_success') }}</strong>
    </div>
    @endif

    <div id="message_success" style="display:none;" class="alert alert-sm alert-success">Status Enabled</div>
    <div id="message_error" style="display:none;" class="alert alert-sm alert-danger">Status Disabled</div>
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonexport">
                      <a href="#">
                         <h4>View utilisateur</h4>
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="btn-group">
                      <div class="buttonexport" id="buttonlist"> 
                      <a class="btn btn-add" href="{{url('add-utilisateur')}}"> <i class="fa fa-plus"></i> Add Utilisateur
                         </a>  
                      </div>
                      
                   </div>
                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">
                      <table id="table_id" class="table table-bordered table-striped table-hover">
                          <thead>
                <tr>
                  <th>ID</th>
                 
                  
                  <th>Cin</th>
                  <th>Nom</th>
                  <th>Prenom</th>
                   <th>Email</th>
                  <th>Adresse</th>
                  <th>Telephone</th>
                  <th>Date_naissance</th>
                     <th>Action</th>
</tr>
</thead>
                <tbody>
                    @foreach($utilisateur as $item)
                <tr>
                   <td>{{$item->id}}</td>
                 
                  <td>{{$item->cin}}</td>
                  <td>{{$item->nom}}</td>
                  <td>{{$item->prenom}}</td>
                  
                  <td>{{$item->email}}</td>
                  <td>{{$item->adresse}}</td>
                  <td>{{$item->telephone}}</td>
                  <td>{{$item->date_naissance}}</td>
                    <td>
                 
 <a href="/edit-utilisateur/{{$item->id}}"class ="btn btn-success">Edit</a>
<a href="/delete-utilisateur/{{$item->id}}" class ="btn btn-danger ">Delete</a>
           </td>
                 </tr>
           @endforeach
         </tbody>
        </tfoot>
      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
@endsection