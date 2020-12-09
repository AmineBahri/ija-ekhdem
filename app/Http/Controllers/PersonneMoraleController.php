<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\OfferAcceptedToUser;
use App\Mail\ResetPasswordPersonne;
use App\Models\PersonneMorale;
use App\Models\OffreEmploi;
use App\Models\DemandeEmploi1;
use App\Models\Utilisateur;
use App\Models\Equipe;
use App\Models\TypeOffre;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Session;

class PersonneMoraleController extends Controller
{
    public function signUppers(Request $request)
    {
        $request->validate(
            [
              'cin' => 'required|numeric',
              'nom' => 'required|max:255',
              'prenom' => 'required|max:255',
              'nom_societe' => 'required|max:255', 
              'email' => 'required|email',
              'password' => 'required|min:8',
              'address' => 'required|max:255',
              'telephone' => 'required|numeric',
              'date_naissance' => 'required|date',
              'domaine' => 'required|max:255',
            ]);
        $personne = new PersonneMorale();
        $personne->cin = $request->cin;
        $personne->nom = $request->nom;
        $personne->prenom = $request->prenom;
        $personne->nom_societe = $request->nom_societe;
        $personne->email = $request->email;
        $personne->password = Hash::make($request->password);
        $personne->adresse = $request->address;
        $personne->telephone = $request->telephone;
        $personne->date_naissance = $request->date_naissance;
        $personne->domaine = $request->domaine;
        $personne->save();

        return redirect('/login')->with('success', 'Employeur ajouté avec succès!');
    }

    public function signInp(Request $request)
    {
      $personne = PersonneMorale::where(['email' => $request->email])->first();
      if (!$personne || !Hash::check($request->password, $personne->password)) 
      {
        $request->session()->flash('status', 'Username or password is not matched');
        return redirect()->back();
      }
      else
      {
            $request->session()->put('personne', $personne);
        return redirect('/dashboard');
      }
    }

    public function dashboardEmpl()
    {
        $personne = Session::get('personne')['id'];
        
        $offre = OffreEmploi::all()->where('personne_morales_id', $personne);
        return view('listoffres',['offre' => $offre]);
    }

    public function addOffre()
    {
    	$personne = Session::get('personne')['id'];
      $equipes = Equipe::all();
      $type_offres = TypeOffre::all();
      $category = Category::all();
      return view('dashboard_empl',['category' => $category,'type_offres' => $type_offres,'equipes' => $equipes]);
    }

    public function storeOffre(Request $request)
    {
        $request->validate(
            [
              'titre_offre' => 'required',
              'type_offre' => 'required',
              'equipe' => 'required',
              'categorie_offre' => 'required',
              'emplacement' => 'required',
              'salaire_min' => 'required|max:255',
              'salaire_max' => 'required|max:255',
              'key_words' => 'required|max:255',
              'nombre_poste' => 'required|numeric',
              'durée' => 'required|max:255',
              'date_publication' => 'required|date',
              'description_offre' => 'required',
              'file' => 'required|mimes:pdf,docx,png,jpeg,jpg,png'
            ]);
        $personne = Session::get('personne')['id'];
        //$request->file('file')->store('public');
        $file = $request->file('file');
        $uploadPath = "template/images";
        $originalImage = $file->getClientOriginalName();
        $file->move($uploadPath, $originalImage);
        $offre_emploi = new OffreEmploi();
        $offre_emploi->titre_offre = $request->titre_offre;
        $offre_emploi->emplacement = $request->emplacement;
        $offre_emploi->salaire_min = $request->salaire_min;
        $offre_emploi->salaire_max = $request->salaire_max;
        $offre_emploi->key_words = $request->key_words;
        $offre_emploi->nombre_poste = $request->nombre_poste;
        $offre_emploi->durée = $request->durée;
        $offre_emploi->date_publication = $request->date_publication;
        $offre_emploi->description_offre = $request->description_offre;
        //$offre_emploi->image = $request->file('file')->getClientOriginalName();
        $offre_emploi->image = $originalImage;
        $offre_emploi->personne_morales_id = $personne;
        $offre_emploi->type_id = $request->type_offre;
        $offre_emploi->equipe_id = $request->equipe;
        $offre_emploi->categories_id = $request->categorie_offre;
        $offre_emploi->save();
        return redirect('/dashboard')->with('success', 'Offre emploi ajouté avec succès!');
    }

    public function show($id)
    {
      $offre = DB::table('offre_emplois')->where('id', $id)->first();
      $equipes = Equipe::all();
      $type_offres = TypeOffre::all();
      $category = Category::all();
    	return view('details_offre',['offre' => $offre,'equipes' => $equipes,'type_offres' => $type_offres,'category' => $category]);
    }

    public function edit($id)
    {
      //$offre = DB::table('offre_emplois')->where('id', $id)->first();
      $offre = OffreEmploi::find($id);
      //$type_offres = DB::table('type_offres')->get();
      $equipes = Equipe::all();
      $type_offres = TypeOffre::all();
      $category = Category::all();
      return view('edit_offre',['offre' => $offre,'equipes' => $equipes, 'type_offres' => $type_offres,'category' => $category]);
    }

    public function updateOffre(Request $request,$id)
    {
      $request->validate(
            [
              'titre_offre' => 'required',
              'type_offre' => 'required|max:255',
              'equipe' => 'required|max:255',
              'categorie_offre' => 'required',
              'emplacement' => 'required',
              'salaire_min' => 'required|max:255',
              'salaire_max' => 'required|max:255',
              'nombre_poste' => 'required|numeric',
              'durée' => 'required|max:255',
              'date_publication' => 'required|date',
              'description_offre' => 'required'
            ]);
        $offre = OffreEmploi::find($request->id);
        $offre->titre_offre = $request->titre_offre;
        $offre->emplacement = $request->emplacement;
        $offre->salaire_min = $request->salaire_min;
        $offre->salaire_max = $request->salaire_max;
        $offre->nombre_poste = $request->nombre_poste;
        $offre->durée = $request->durée;
        $offre->date_publication = $request->date_publication;
        $offre->description_offre = $request->description_offre;
        $offre->type_id = $request->type_offre;
        $offre->equipe_id = $request->equipe;
        $offre->categories_id = $request->categorie_offre;
        $offre->save();
        return redirect('/dashboard')->with('success', 'Offre Modifié avec succès!');
        //var_dump($item);
    }

    public function delete($id)
    {
      $offre = DB::table('offre_emplois')->where('id', $id)->delete();
    	return redirect('/dashboard');
    }

    public function consulterDemande($id)
    {
      $utilisateurs = OffreEmploi::find($id)->utilisateurs;
      return view('/listedemandes',['utilisateurs' => $utilisateurs,
                                   'id' => $id]);
      //return $utilisateurs;
    }

    public function accept($id,$ido)
    {
      $personne = Session::get('personne')['id'];
      $offre = OffreEmploi::find($ido); 
      $user = Utilisateur::find($id);
      $personne_morale = PersonneMorale::find($personne); 
      $data['offre'] = $offre; 
      $data['user'] = $user;
      $data['personne_morale'] = $personne_morale;
      Mail::to($user->email)
            ->send(new OfferAcceptedToUser($data));
            return redirect()->back(); 
    }

    public function refuse($id,$ido)
    {
      $demande = DB::table('offre_emploi_utilisateur')->where('utilisateur_id',$id)
      ->where('offre_emploi_id',$ido)->delete();
      return redirect()->back();
    }

    public function parametres()
    {
        $personne = Session::get('personne')['id'];
        $infos = DB::table('personne_morales')->where('id', $personne)->first();
        return view('parametres',['infos' => $infos]);
    }

    public function updatePers(Request $request)
    {
    	$request->validate(
            [
              'cin' => 'required|numeric',
              'nom' => 'required|max:255',
              'prenom' => 'required|max:255',
              'email' => 'required|email',
              'telephone' => 'required|numeric',
              'date_naissance' => 'required|date',
              'adresse' => 'required|max:255',
              'pswcnf' => 'same:password',
            ]);
        $personne = PersonneMorale::find($request->id);
        $personne->cin = $request->cin;
        $personne->nom = $request->nom;
        $personne->prenom = $request->prenom;
        $personne->email = $request->email;
        $personne->telephone = $request->telephone;
        $personne->date_naissance = $request->date_naissance;
        $personne->adresse = $request->adresse;
        $personne->password = Hash::make($request->password);
        $personne->save();
        return redirect('/parametres')->with('success', 'Compte Modifié avec succès!');
        //var_dump($personne);
    }

    public function deletePers($id)
    {
        $offre = DB::table('personne_morales')->where('id', $id)->delete();
      return redirect('/logout');
    }

    public function forgetPers()
    {
      return view('forget-password-personne');
    }

    public function verifMailPers(Request $request)
    {
      $request->validate(
            [
              'email' => 'required|email'
            ]);
      $personne = PersonneMorale::where(['email' => $request->email])->first();
      if ($personne->email != $request->email) 
      {
        $request->session()->flash('status', 'Email non vérifié');
        return redirect()->back();
      }
      else
      {
        $data['nom'] = $personne->nom;
        $data['prenom'] = $personne->prenom;
        Mail::to($personne->email)
            ->send(new ResetPasswordPersonne($data));
        return redirect()->back(); 
      }
      //return $personne->email.'='.$request->email;
    }

    public function initialiserMdpPersonne()
    {
      return view('initialiser-mdp-personne');
    }

    public function updatePswPers(Request $request)
    {
      $request->validate(
            [
              'email' => 'required|email',
              'password' => 'required|min:8|alpha_num',
              'pswcnf' => 'required|min:8|alpha_num|same:password'
            ]);
      $personne = PersonneMorale::where(['email' => $request->email])->first();
      if ($personne->email == $request->email) 
      {
        DB::table('personne_morales')
          ->where('email', $personne->email)
          ->where('id', $personne->id)
          ->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect('/login');
      }
      else
      {
         return redirect()->back();
      }
    }

    public function logout()
    {
      Session::forget('personne');
      Session::flush();
      return redirect('/login');
    }
}
