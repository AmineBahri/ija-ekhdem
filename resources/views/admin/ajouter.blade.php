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
          <h1>Add Produit</h1>
          <small>Add Produit</small>
       </div>
    </section>
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <!-- Form controls -->
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonlist"> 
                      <a class="btn btn-add " href="{{url('list-product')}}"> 
                      <i class="fa fa-eye"></i>Consulter liste des produits</a>  
                   </div>
                </div>
                <div class="panel-body">
      <form  class="col-sm-6" action="{{url('/add-produit')}}" method="post" enctype="multipart/form-data">
                @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Description:</label>
            <input type="text" name="description" class="form-control" placeholder="Décrire votre produit"  id="description" >
          </div>    
          <div class="uploadButton margin-top-30">
            <input type="file" name="file"/>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">lien:</label>
            <input type="text" name="lien" class="form-control" placeholder="Enter le prenom"  id="lien" >
          </div>
          <input type="submit" class="btn btn-success" value="Ajouter">   
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