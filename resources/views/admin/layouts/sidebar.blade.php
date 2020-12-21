         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar">
                <!-- sidebar -->
                <div class="sidebar">
                   <!-- sidebar menu -->
                   <ul class="sidebar-menu">
                      <li class="active">
                         <a href="{{url('/dashboard-admin')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                         <span class="pull-right-container">
                         </span>
                         </a>
                      </li>
                    
                      <li class="treeview">
                        <a href="#">
                        <i class="fa fa-product-hunt"></i><span>PersonneMorale</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url('add-personne')}}">Add Personne</a></li>
                        <li><a href="{{url('view-personne')}}">View Personne</a></li>
                        </ul>
                     </li>
                      <li class="treeview">
                         <a href="#">
                         <i class="fa fa-list"></i><span>Utilisateur</span>
                         <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                         </span>
                         </a>
                         <ul class="treeview-menu">
                            <li><a href="{{url('add-utilisateur')}}">Add utilisateur</a></li>
                         <li><a href="{{url('view-utilisateur')}}">View utilisateur</a></li>
                         </ul>
                      </li>
                      <li class="treeview">
                         <a href="#">
                         <i class="fa fa-list"></i><span>Instagram</span>
                         <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                         </span>
                         </a>
                         <ul class="treeview-menu">
                            <li><a href="{{url('add-product')}}">Add produit</a></li>
                       
                         </ul>
                      </li>
                     
                   </ul>
                </div>
                <!-- /.sidebar -->
             </aside>
             <!-- =============================================== -->