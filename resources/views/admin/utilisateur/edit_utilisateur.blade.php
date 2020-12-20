@extends('admin.layouts.master')
@section('title','Edit Utilisateur')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Edit Utilisateur</h1>
          <small>Edit Utilisateur</small>
       </div>
    </section>
    @if(Session::has('flash_message_error'))
   <div class="alert alert-sm alert-danger alert-block" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong>{!! session('flash_message_error') !!}</strong>
   </div>
   @endif
   
   @if(Session::has('flash_message_success'))
   <div class="alert alert-sm alert-success alert-block" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong>{!! session('flash_message_success') !!}</strong>
   </div>
   @endif
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <!-- Form controls -->
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonlist"> 
                      <a class="btn btn-add " href="{{url('admin/view-products')}}"> 
                      <i class="fa fa-eye"></i>  View Utilisateur </a>  
                   </div>
                </div>
                <div class="panel-body">
        <form  class="col-sm-6" action="/edit-utilisateur/{{$utilisateur->id}}" method="post" enctype="multipart/form-data">
                @csrf

                     
                    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cin:</label>
<input type="text" name="cin" class="form-control" value="{{$utilisateur->cin}}" placeholder="Enter le cin"  id="cin" >
          </div>    
                <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" name="nom" class="form-control" value="{{$utilisateur->nom}}" placeholder="Enter le nom"  id="nom" >
          </div>      
            
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Prenom:</label>
            <input type="text" name="prenom" class="form-control"value="{{$utilisateur->prenom}}" placeholder="Enter le prenom"  id="prenom" >
          </div>

           
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text"  name="email" class="form-control"value="{{$utilisateur->email}}" id="email"></input>
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="text" name="password" class="form-control"value="{{$utilisateur->password}}" placeholder="password"  id="password" >
          </div>
 <div class="form-group">
            <label for="recipient-name" class="col-form-label">Adresse:</label>
            <input type="text" name="adresse" class="form-control" value="{{$utilisateur->adresse}}" placeholder="adresse"  id="adresse" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Telephone:</label>
            <input type="text" name="telephone" class="form-control"value="{{$utilisateur->telephone}}" placeholder="telephone"  id="telephone" >
          </div>
         
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Date Naissance:</label>
            <input type="text" name="date_naissance" class="form-control" value="{{$utilisateur->date_naissance}}" placeholder="date_naissance"  id="date_naissance" >
          </div>
          
        <input type="submit" class="btn btn-success" value="Update"> 
      </div>
          
            </div>

                   </form>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

@endsection