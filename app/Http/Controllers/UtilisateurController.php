<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Utilisateur;
use App\Models\PersonneMorale;
use App\Models\OffreEmploi;
use App\Models\Category;
use App\Models\Project;
use App\Models\OffreEmploiUtilisateur;
use App\Models\ProductInstagram;
use Illuminate\Support\Facades\Hash;
use App\Mail\ResetPassword;
use Session;

class UtilisateurController extends Controller
{
    public function register()
    {
    	return view('register');
    }
    
    public function signUp(Request $request)
    {
    	$request->validate(
            [
              'cin' => 'required|numeric',
              'nom' => 'required|max:255',
              'prenom' => 'required|max:255',
              'email' => 'required|email',
              'password' => 'required|min:8|alpha_num',
              'address' => 'required|max:255',
              'telephone' => 'required|max:255',
              'date_naissance' => 'required|date'
            ]);
        $utilisateur = new Utilisateur();
        $utilisateur->cin = $request->cin;
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->email = $request->email;
        $utilisateur->password = Hash::make($request->password);
        $utilisateur->adresse = $request->address;
        $utilisateur->telephone = $request->telephone;
        $utilisateur->date_naissance = $request->date_naissance;
        $utilisateur->save();

        return redirect('/login')->with('success', 'Freelancer ajouté avec succès!');
    }

    public function login()
    {
       return view('login');
    }
    
    public function signIn(Request $request)
    {
      $utilisateur = Utilisateur::where(['email' => $request->email])->first();
      if (!$utilisateur || !Hash::check($request->password, $utilisateur->password)) 
      {
        $request->session()->flash('status', 'Username or password is not matched');
        return redirect()->back();
      }
      else
      {
        $request->session()->put('utilisateur', $utilisateur);
        return redirect('/dashboard-user');
      }
    }

    public function postuler($id)
    {
      $offre = OffreEmploi::find($id);
      $utilisateur = Session::get('utilisateur')['id'];
      $infoUser = Utilisateur::find($utilisateur);
      $user = OffreEmploiUtilisateur::where([['offre_emploi_id',$id],['utilisateur_id',$utilisateur]])->get();
      //return $user;
      if (count($user) > 0) 
      {
        return redirect()->back()->with('status','Vous etes déjà postulé à cette offre');
      }
      else
      {
        if ($utilisateur)
        {
          return view('postuler-offre',['offre' => $offre, 'infoUser' => $infoUser]);
        }
        else
        {
          return redirect('/login');
        }
      }
    }

    public function confirmOffre(Request $request,$id)
    {
      $utilisateur = Session::get('utilisateur')['id'];
      $request->validate(
            [
              'file' => 'required|mimes:pdf|max:2048'
            ]);
      $request->file('file')->store('public');
      DB::table('offre_emploi_utilisateur')->insert([
            'date_demande' => date('Y-m-d'),
            'status' => '0',
            'cv_utilisateur' => $request->file('file')->getClientOriginalName(),
            'offre_emploi_id' => $id,
            'utilisateur_id' => $utilisateur
        ]);
      return redirect()->back();
    }

    public function dashboardUser()
    {
      $utilisateur = Session::get('utilisateur')['id'];
      $categories = Category::all();
      $offres = Utilisateur::find($utilisateur)->offres;
      //return $offres;
      return view('dashboard-user',['offres' => $offres,'categories' => $categories]);
    }

    public function userSearch(Request $request)
    {
      $category_id = $request->input('category_id') ; 
      $offerWord = $request->input('offer_title') ; 
      if(($category_id == null || $category_id == '') && ($offerWord == null || $offerWord == '')) 
        {
          $offers = OffreEmploi::all() ; 
        } 
        elseif(($category_id == null || $category_id == '') && $offerWord != null && $offerWord != '') 
        {
          $offers = OffreEmploi::where('titre_offre','like','%'.$offerWord.'%')->get() ;    
        } 
        elseif(($offerWord == null || $offerWord == '') && $category_id != '' && $category_id != null) 
        {
          $offers = OffreEmploi::where('categories_id','=',$category_id)->get() ; 
        } 
        elseif($category_id != '' && $category_id != null && $offerWord != '' && $offerWord != null) 
        {
          $offers = OffreEmploi::where([['categories_id','=',$category_id],['titre_offre','like','%'.$offerWord.'%']])->get() ; 
        }
        return $offers ;
    }

    public function addProject()
    {
      return view('add-project');
    }

    public function storeProject(Request $request)
    {
      $request->validate(
            [
              'prix_projet' => 'required|max:255',
              'date_depot' => 'required|date',
              'file' => 'required|mimes:zip,rar|max:2048'
            ]);
      $file = $request->file('file');
      $uploadPath = "projets";
      $originalFile = $file->getClientOriginalName();
      $file->move($uploadPath, $originalFile);
      
      $project = new Project();
      $project->nom_projet = $originalFile;
      $project->prix_projet = $request->prix_projet;
      $project->date_depot = $request->date_depot;
      $project->utilisateur_id = Session::get('utilisateur')['id'];
      $project->save();
      return redirect('list-project');
    }

    public function listProject()
    {
      $utilisateur = Session::get('utilisateur')['id'];
      $project = Project::where('utilisateur_id',$utilisateur)->get();
      return view('list-project',['project' => $project]);
    }

    public function parametresUser()
    {
      $utilisateur = Session::get('utilisateur')['id'];
      //$infos = DB::table('utilisateurs')->where('id', $utilisateur)->first();
      $infos = Utilisateur::find($utilisateur);
      //return $infos;
      return view('parametres-user',['infos' => $infos]);
    }

    public function updateUser(Request $request)
    {
      $request->validate(
            [
              'cin' => 'required|numeric',
              'nom' => 'required|max:255',
              'prenom' => 'required|max:255',
              'email' => 'required|email',
              'adresse' => 'required|max:255',
              'telephone' => 'required|numeric',
              'date_naissance' => 'required|date',
              'pswcnf' => 'same:password|min:8|alpha_num',
            ]);
        $utilisateur = Utilisateur::find($request->id);
        $utilisateur->cin = $request->cin;
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->email = $request->email;
        $utilisateur->adresse = $request->adresse;
        $utilisateur->telephone = $request->telephone;
        $utilisateur->date_naissance = $request->date_naissance;
        $utilisateur->password = Hash::make($request->password);
        $utilisateur->save();
        return redirect('/parametres-user')->with('success', 'Compte Modifié avec succès!');
    }

    public function deleteUser($id)
    {
      $offre = DB::table('utilisateurs')->where('id', $id)->delete();
      return redirect('/logout-user');
    }

    public function forgetUser()
    {
      return view('forget-password-user');
    }

    public function verifMail(Request $request)
    {
      $request->validate(
            [
              'email' => 'required|email'
            ]);
      $utilisateur = Utilisateur::where(['email' => $request->email])->first();
      if ($utilisateur->email != $request->email) 
      {
        $request->session()->flash('status', 'Email non vérifié');
        return redirect()->back();
      }
      else
      {
        $data['nom'] = $utilisateur->nom;
        $data['prenom'] = $utilisateur->prenom;
        Mail::to($utilisateur->email)
            ->send(new ResetPassword($data));
        return redirect()->back(); 
      }
      //return $utilisateur->email.'='.$request->email;
    }

    public function initialiserMdp()
    {
      return view('initialiser-mdp-user');
    }

    public function updatePswUser(Request $request)
    {
      $request->validate(
            [
              'email' => 'required|email',
              'password' => 'required|min:8|alpha_num',
              'pswcnf' => 'required|same:password|min:8|alpha_num'
            ]);
      /*$utilisateur = new Utilisateur();
      $utilisateur->password = Hash::make($request->password);
      $utilisateur->save();*/
      $utilisateur = Utilisateur::where(['email' => $request->email])->first();
      if ($utilisateur->email == $request->email) 
      {
        DB::table('utilisateurs')
          ->where('email', $utilisateur->email)
          ->where('id', $utilisateur->id)
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

    public function offreInstagram($id)
    {
        $produits = ProductInstagram::where('categories_id',$id)->get();
        return view('produits-instagram',['produits' => $produits]);
    }

    public function logoutUser()
    {
      Session::forget('utilisateur');
      Session::flush();
      return redirect('/login');
    }
}
