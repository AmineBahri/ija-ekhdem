<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<h2>Bonjour {{$data['nom']}} {{$data['prenom']}}!</h2>
<h4>vous recevez cet email parce que nous avons reçu une requete de réinitialisation de mot de passe pour votre compte</h4>
<h4>Cliquez sur ce lien pour continuer la procédure</h4>
<a href="{{url('initialiser-mdp-personne')}}" class="lien">Initialiser votre mot de passe</a>
<!--<a href="{{url('initialiser-mdp-personne')}}" class="btn btn-primary">Initialiser votre mot de passe</a>-->
<script type="text/javascript">
	//$(".lien").removeAttr("href");
	//setTimeout($(".lien").removeAttr("href"),6000);
	//setTimeout($(".lien").setAttribute('href', '#'),3000);
	/*setTimeout(function() 
	{
		$(".lien").removeAttr("href");
	},3600000);*/
	/*var lien = document.getElementsByClassName('lien'),
    lienLength = lien.length;
   
    for(var i=0 ; i < lienLength ; i++)
    {
      lien[i].href = '#';
    }*/
</script>