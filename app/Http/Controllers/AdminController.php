<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Utilisateur;
use App\Models\PersonneMorale;
use App\Models\ProductInstagram;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;

class AdminController extends Controller
{
    public function login()
    { 
      return view('admin.login');
    }
    
    public function dashboard()
    {
      return view('admin.dashboard');
    }
    
    public function registerAdmin()
    {
      return view('admin.inscription');
    }
    
    public function signAdmin(Request $request)
    {
        $request->validate(
            [
              'name' => 'required|max:255',
              'email' => 'required|email',
              'password' => 'required|min:8|alpha_num',
              'conf_password' => 'required|min:8|alpha_num|same:password'
            ]);
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password); 
        $admin->save();

      return redirect('/login-admin')->with('success', 'admin crée avec succès!');   
    }

    public function sign(Request $request)
    {
      $admin = Admin::where(['email' => $request->email])->first();
      if (!$admin || !Hash::check($request->password, $admin->password)) 
      {
        $request->session()->flash('status', 'Username or password is not matched');
        return redirect()->back();
      }
      else
      {
        $request->session()->put('admin', $admin);
        return redirect('/dashboard-admin');
      }
    }
    
    public function logoutAdmin()
    {
        Session::forget('admin');
        Session::flush();
        return redirect('/login-admin');
    }
    
    public function addUtilisateur()
    {
       return view('admin.utilisateur.add_utilisateur');
    }
    
    public function storeUtilisateur(Request $request)
    {
     $request->validate(
            [
              'cin' => 'required|numeric',
              'nom' => 'required|max:255',
              'prenom' => 'required|max:255',
               
              'email' => 'required|email',
              'password' => 'required|min:8',
              'adresse' => 'required|max:255',
              'telephone' => 'required|numeric',
              'date_naissance' => 'required|date',
              
            ]);
        $utilisateur = new Utilisateur();
        $utilisateur->cin = $request->cin;
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->email = $request->email;
        $utilisateur->password = Hash::make($request->password);
        $utilisateur->adresse = $request->adresse;
        $utilisateur->telephone = $request->telephone;
        $utilisateur->date_naissance = $request->date_naissance;
       
        $utilisateur->save();
     
       return redirect('/view-utilisateur')->with('success', 'utilisateur ajouté avec succès!');
    }
    
    public function viewUtilisateur()
    {
      $utilisateur= DB::table('utilisateurs')->get();
      return view('admin.utilisateur.view_utilisateur',[
            'utilisateur' => $utilisateur]);
    }
 
    public function addPersonne()
    {
       return view('admin.personne.add_personne');
    }
     
    public function storePersonne(Request $request)
    {
      $request->validate(
            [
              'cin' => 'required|numeric',
              'nom' => 'required|max:255',
              'prenom' => 'required|max:255',
              'nom_societe' => 'required|max:255', 
              'email' => 'required|email',
              'password' => 'required|min:8',
              'adresse' => 'required|max:255',
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
        $personne->adresse = $request->adresse;
        $personne->telephone = $request->telephone;
        $personne->date_naissance = $request->date_naissance;
        $personne->domaine = $request->domaine;
        $personne->save();
     
      return redirect('/view-personne')->with('success', 'personne ajouté avec succès!');
        //var_dump($item);
    }
    
    public function viewPersonne()
    {
     $personne= DB::table('personne_morales')->get();
      return view('admin.personne.view_personne',[
            'personne' => $personne]);
    }
    
    public function editUtilisateur($id)
    {
      $utilisateur = Utilisateur::find($id);     
      //return $utilisateur;
      return view('admin.utilisateur.edit_utilisateur',['utilisateur' => $utilisateur]);
    }

    public function updateUtilisateur(Request $request,$id)
    {
      $request->validate(
            [
              'cin' => 'required|numeric',
              'nom' => 'required|max:255',
              'prenom' => 'required|max:255',
              'email' => 'required|email',
              'password' => 'required|min:8',
              'adresse' => 'required|max:255',
              'telephone' => 'required|numeric',
              'date_naissance' => 'required|date'
            ]);
        
        $utilisateur = Utilisateur::find($request->id);
        $utilisateur->cin = $request->cin;
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->email = $request->email;
        $utilisateur->password = Hash::make($request->password);
        $utilisateur->adresse = $request->adresse;
        $utilisateur->telephone = $request->telephone;
        $utilisateur->date_naissance = $request->date_naissance;
        $utilisateur->save();

      return redirect('/view-utilisateur')->with('success', 'utilisateur modifié avec succès!');
        //var_dump($item);
    }
    
    public function deleteUtilisateur($id)
    {
      $utilisateur= DB::table('utilisateurs')->where('id', $id)->delete();
      return redirect('/view-utilisateur');
    } 
    
    public function editPersonne($id)
    {
      $personne = PersonneMorale::find($id);
      //return $personne;
      return view('admin.personne.edit_personne',['personne' => $personne]);
    }

    public function updatePersonne(Request $request,$id)
    {
      $request->validate(
            [
              'cin' => 'required|numeric',
              'nom' => 'required|max:255',
              'prenom' => 'required|max:255',
              'nom_societe' => 'required|max:255', 
              'email' => 'required|email',
              'password' => 'required|min:8',
              'adresse' => 'required|max:255',
              'telephone' => 'required|numeric',
              'date_naissance' => 'required|date',
              'domaine' => 'required|max:255',
            ]);
        
        $personne = PersonneMorale::find($request->id);
        $personne->cin = $request->cin;
        $personne->nom = $request->nom;
        $personne->prenom = $request->prenom;
        $personne->nom_societe = $request->nom_societe;
        $personne->email = $request->email;
        $personne->password = Hash::make($request->password);
        $personne->adresse = $request->adresse;
        $personne->telephone = $request->telephone;
        $personne->date_naissance = $request->date_naissance;
        $personne->domaine = $request->domaine;
        $personne->save();
        return redirect('/view-personne')->with('success', 'personne Modifié avec succès!');
        //var_dump($item);
    }
    
    public function deletePersonne($id)
    {
      $personne = DB::table('personne_morales')->where('id', $id)->delete();
      return redirect('/view-personne');
    } 
    
    public function addProduct()
    {
      return view('admin.ajouter');
    }
    
    public function storeProduct(Request $request)
    {
      $request->validate(
            [
              'description' => 'required|max:255',
              'file' => 'required|mimes:gif,jpeg,jpg,png',
              'lien' => 'required|max:255'
            ]);
     
        $file = $request->file('file');
        $uploadPath = "instagram";
        $originalImage = $file->getClientOriginalName();
        $file->move($uploadPath, $originalImage);
        $produit = new ProductInstagram();
        $produit->description = $request->description;
        $produit->file = $originalImage;
        $produit->lien = $request->lien;
        $produit->categories_id = "11";
        $produit->save();
     
      return redirect('/list-product')->with('success', 'produit ajouté avec succès!');
        //var_dump($item);
     }
    
    public function listProduct()
    {
      $produits = DB::table('produits_instagram')->get();
      return view ('admin.instagram.list-produit',['produits' => $produits]);
    }

    public function deleteProduct($id)
    {
      $produit = DB::table('produits_instagram')->where('id', $id)->delete();
      return redirect()->back();
    }
}
