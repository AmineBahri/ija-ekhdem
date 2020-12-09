<h2>Bonjour {{$data['nom']}} {{$data['prenom']}}!</h2>
<h4>vous recevez cet email parce que nous avons reçu une requete de réinitialisation de mot de passe pour votre compte</h4>
<h4>Cliquez sur ce lien pour continuer la procédure</h4>
<a href="{{url('initialiser-mdp-user')}}" class="btn btn-primary">Initialiser votre mot de passe</a>
<!--<a href="{{url('initialiser-mdp-user')}}" class="btn btn-primary">Initialiser votre mot de passe</a>-->