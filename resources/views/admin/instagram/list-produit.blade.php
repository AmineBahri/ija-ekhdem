@extends('admin.layouts.master')
@section('title','Liste des produits')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>View produits</h1>
          <small>Liste des produits</small>
       </div>
    </section>
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
                         <h4>View Produit</h4>
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="btn-group">
                      <div class="buttonexport" id="buttonlist"> 
                      <a class="btn btn-add" href="{{url('add-product')}}"> <i class="fa fa-plus"></i> Ajouter Produit
                         </a>  
                      </div>
                      
                   </div>
                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">
            <table id="table_id" class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Description</th>
                  <th>File</th>
                  <th>Lien</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($produits as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->description}}</td>
                  <td><img src="{{asset('instagram')}}/{{$item->file}}" width="70" height="100" />
                    <!--  <img src="instagram/{{$item->file}}"></td>-->
                  <td><a href="{{$item->lien}}">lien compte client</a></td>
                  <td><a href="/delete-product/{{$item->id}}" onclick = "return confirmDialog();" class ="btn btn-danger">Supprimer</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
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
<script>  
  function confirmDialog() 
  {
  var x=confirm("Vous etes sur de supprimer le produit ?")
  if (x) 
  {
    return true;
  } else 
  {
    return false;
  } 
}  
</script>