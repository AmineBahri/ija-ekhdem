<div id="header">
        <div class="container">
            
            <!-- Left Side Content -->
            <div class="left-side">
                
                <!-- Logo -->
                <div id="logo">
                    <a href="{{url('/')}}"><img src="{{asset('template/images/logo.png')}}" data-sticky-logo="{{asset('template/images/logo.png')}}" data-transparent-logo="{{asset('template/images/logo.png')}}" alt=""></a>
                </div>

                <!-- Main Navigation -->
                <nav id="navigation">
                    <ul id="responsive">
                    <!--<li><a href="index.php"><img src="images/logo.png" width="200px"height="40px"></a></li>-->
                        <li><a href="{{url('/')}}" class="current">Acceuil</a></li>
                        @if(Session::get('utilisateur'))
                        <li><a href="{{url('/dashboard-user')}}">{{Session::get('utilisateur')['email']}}</a></li>
                        <li><a href="{{url('/logout-user')}}">Déconnexion</a></li>
                        @elseif(Session::get('personne'))
                        <li><a href="{{url('/dashboard')}}">{{Session::get('personne')['email']}}</a></li>
                        <li><a href="{{url('/logout')}}">Déconnexion</a></li>
                        @else
                        <li><a href="{{url('/login')}}">Authentification </a></li>
                        <li><a href="{{url('/register')}}"> Inscription</a></li>
                        @endif
                        <li><a href="{{url('/contact')}}">Contact</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->
                
            </div>
            <!-- Left Side Content / End -->

            </div>
            <!-- Right Side Content / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>