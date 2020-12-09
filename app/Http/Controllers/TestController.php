<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Utilisateur;
use App\Models\Contact;
use App\Models\OffreEmploi;
use App\Models\PersonneMorale;
use App\Models\Category;
use App\Models\TypeOffre;
use Illuminate\Support\Facades\Hash;
use Session;

class TestController extends Controller
{
    public function index()
    {
    	$offre = DB::table('offre_emplois')->count();
    	$personne = DB::table('personne_morales')->count();
    	$user = DB::table('utilisateurs')->count();
        $calcul = DB::table('offre_emplois')->count('categories_id');
        $categories = Category::all();
        $offreDetails = DB::table('offre_emplois')->get();
    	return view ('index',['offre' => $offre,
    		'personne' => $personne,
    		'user' => $user,
            'categories' => $categories,
            'calcul' => $calcul,
            'offreDetails' => $offreDetails]);
    }

    public function search(Request $request) 
    {
        $category_id = $request->input('category_id') ; 
        $offerWord = $request->input('offer_title') ; 
        if(($category_id == null || $category_id == '') && ($offerWord == null || $offerWord == '')) {
            $offers = OffreEmploi::all() ; 
        } elseif(($category_id == null || $category_id == '') && $offerWord != null && $offerWord != '') {
            $offers = OffreEmploi::where('titre_offre','like','%'.$offerWord.'%')->get() ;    
        } elseif(($offerWord == null || $offerWord == '') && $category_id != '' && $category_id != null) {
            $offers = OffreEmploi::where('categories_id','=',$category_id)->get() ; 
        } elseif($category_id != '' && $category_id != null && $offerWord != '' && $offerWord != null) {
            $offers = OffreEmploi::where([['categories_id','=',$category_id],['titre_offre','like','%'.$offerWord.'%']])->get() ; 
        }
        return $offers ; 
    }

    public function consulterOffre($id)
    {
        $offre = OffreEmploi::find($id);
        $typeOffre = TypeOffre::all();
        return view('consulter-offre',['offre' => $offre, 'typeOffre' => $typeOffre]);
    }

    public function contact()
    {
    	return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $details = [
                  'name' => $request->name,
                  'email' => $request->email,
                  'sujet' => $request->sujet,
                  'message' => $request->message
        ];

        $contact = new Contact();
        $contact->email = $request->email;
        $contact->sujet = $request->sujet;
        $contact->message = $request->message;
        $contact->save();
        Mail::to('mohamedamine.bahri@etudiant-fsegt.utm.tn')->send(new ContactMail($details));
        return back()->with('message envoyé', 'Votre message a été envoyé avec succès');
    }

    public function test()
    {
        $offres = OffreEmploi::all();
        $categories = Category::all();
        foreach ($offres as $value) 
        {
            foreach ($categories as $item) 
            {
                if ($value->categories_id == $item->id) 
                {
                  $calcul = DB::table('offre_emplois')->where('categories_id',$item->id)->count();
                  return $item->name.' '.$calcul;
                }
            }
        }
    }

}
