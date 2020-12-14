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
use App\Models\ProductInstagram;
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
        //$offreDetails = DB::table('offre_emplois')->get();
        $offreDetails = OffreEmploi::paginate(5);
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
        $emplacement = $request->input('emplacement') ; 
        if(($category_id == null || $category_id == '') && ($offerWord == null || $offerWord == '') && ($emplacement == null || $emplacement == '')) {
            $offers = OffreEmploi::all() ; 
        } elseif(($category_id == null || $category_id == '') && ($emplacement == null || $emplacement == '') && $offerWord != null && $offerWord != '') {
            $offers = OffreEmploi::where('titre_offre','like','%'.$offerWord.'%')->get() ;    
        } elseif(($offerWord == null || $offerWord == '') && ($emplacement == null || $emplacement == '') && $category_id != '' && $category_id != null) {
            $offers = OffreEmploi::where('categories_id','=',$category_id)->get() ; 
        } elseif(($offerWord == null || $offerWord == '') && ($category_id == '' && $category_id == null) && $emplacement != '' && $emplacement != null) {
            $offers = OffreEmploi::where('emplacement','like','%'.$emplacement.'%')->get() ; 
        } elseif(($category_id == '' && $category_id == null) && ($offerWord != '' && $offerWord != null && $emplacement != '' && $emplacement != null)) {
            $offers = OffreEmploi::where([['titre_offre','like','%'.$offerWord.'%'],['emplacement','like','%'.$emplacement.'%']])->get() ; 
        } elseif(($emplacement == '' && $emplacement == null) && ($offerWord != '' && $offerWord != null && $category_id != '' && $category_id != null)) {
            $offers = OffreEmploi::where([['titre_offre','like','%'.$offerWord.'%'],['categories_id','=',$category_id]])->get() ; 
        } elseif(($offerWord == '' && $offerWord == null) && ($emplacement != '' && $emplacement != null && $category_id != '' && $category_id != null)) {
            $offers = OffreEmploi::where([['emplacement','like','%'.$emplacement.'%'],['categories_id','=',$category_id]])->get() ; 
        } elseif($category_id != '' && $category_id != null && $offerWord != '' && $offerWord != null && $emplacement != '' && $emplacement != null) {
            $offers = OffreEmploi::where([['categories_id','=',$category_id],['titre_offre','like','%'.$offerWord.'%'],['emplacement','like','%'.$emplacement.'%']])->get() ; 
        }
        return $offers ; 
    }

    public function offreCategorie($id)
    {
        $offres = OffreEmploi::where('categories_id',$id)->get();
        return $offres;
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
        foreach ($categories as $item) 
        {
            $calcul = OffreEmploi::where('categories_id',$item->id)->count();
            echo $item->name.' '.$calcul.'<br>';
        }
        //echo $calcul;
    }

}
