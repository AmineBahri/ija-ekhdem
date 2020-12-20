@extends('admin.layouts.master')
@section('title','Add Personne')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Add Personne</h1>
          <small>Add Personne</small>
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
                      <i class="fa fa-eye"></i>  View Admin </a>  
                   </div>
                </div>
                <div class="panel-body">
          

        
      <form  class="col-sm-6" action="{{url('/add-produit')}}" method="post" enctype="multipart/form-data">
                @csrf

                     
                    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Description:</label>
            <input type="text" name="description" class="form-control" placeholder="Enter le cin"  id="description" >
          </div>    
              <div class="uploadButton margin-top-30">
                  <input type="file" name="file"/>
                  <span class="uploadButton-file-name">Entrer votre CV version PDF*</span>
                </div>
      
            
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">lien:</label>
            <input type="text" name="lien" class="form-control" placeholder="Enter le prenom"  id="lien" >
          </div>
          <input type="submit" class="btn btn-success" value="AddPersonne"> 
            

          

          
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