@extends('admin.layouts.master')
@section('title','Add Utilisateur')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Add utilisateur</h1>
          <small>Add utilisateur</small>
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
                      <a class="btn btn-add " href="{{url('add-utilisateur')}}"> 
                      <i class="fa fa-eye"></i>  View utilisateur </a>  
                   </div>
                </div>
                <div class="panel-body">

     <form  class="col-sm-6" action="{{url('add-utilisateurs')}}" method="post" enctype="multipart/form-data">
        @csrf           
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cin:</label>
            <input type="text" name="cin" class="form-control" placeholder="Enter le cin"  id="cin" >
          </div>    
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" name="nom" class="form-control" placeholder="Enter le nom"  id="nom" >
          </div>      
            
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Prenom:</label>
            <input type="text" name="prenom" class="form-control" placeholder="Enter le prenom"  id="prenom" >
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text"  name="email" class="form-control" id="email"></input>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="text" name="password" class="form-control" placeholder="password"  id="password" ></input>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Adresse:</label>
            <input type="text" name="adresse" class="form-control" placeholder="adresse"  id="adresse" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Telephone:</label>
            <input type="text" name="telephone" class="form-control" placeholder="telephone"  id="telephone" >
          </div>
         
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Date Naissance:</label>
            <input type="text" name="date_naissance" class="form-control" placeholder="date_naissance"  id="date_naissance" >
          </div>
           <input type="submit" class="btn btn-success" value="AddUtilisateur"> 
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