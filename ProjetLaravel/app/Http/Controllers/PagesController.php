<?php
use App\Models\Product;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;       //UTILISATION DE bd
use Session;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;


class PagesController extends Controller
{

    public function accueil() {
        return view('client.home');
    
    }

    public function contact() {
        return view('client.contact');
    
    }

    public function login() {
        return view('client.login');

    }

    public function inscription() {
        return view('client.inscription');

    }

    public function shop() {
        return view('client.shop');
    
    }

    public function panier() {
        return view('client.panier');
    
    }

    public function paiement() {
        return view('client.paiement');
    
    }


    public function tableauDeBord(){
        return view('admin.tableaude');
    }


    public function welcome() {
        return view('welcome');
    
    }

   

    public function home() {
        return view('pages.home');
    
    }

    public function apropos() {
        return view('pages.apropos');
    
    }

    public function formulaireCreate() {
        return view('pages.create');
    
    }
/*****************************Ajout de produit */
    public function ajoutProduit(Request $request) {
        //champs obligatoires
        $this->validate($request, ['product_name'=>'required',
                                    'product_price'=>'required',
                                    'product_description'=>'required',
                                    'product_image'=>'image|nullable|max:1999']);
    /*    
        $fileNameWithExt = $request->file('product_image')->getClientOriginalName(); // obtenir le nom original du fichier uploadé
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);    // nom du fichier sans l'extension
        $ext = $request->file('product_image')->getClientOriginalExtension();  // ext du fichier
        $fileNameToStore = $fileName.'_'.time().'.'.$ext;               // nom+date+extension
     */ 
        $produit = New Product();               // Instanciation d'un nouveau produit et sauvegarde dans la bd
        $produit->product_name = $request->product_name;;
        $produit->product_price = $request->product_price;
        $produit->product_description = $request->product_description;
        $produit->product_image = $request->product_image;
        $produit->save();

        Session::put('succes', 'Le produit '.$request->product_name. ' a été ajouté avec succès');
        return redirect('/create');

    /* Autre methode n'utilisant pas notre model Product
     $product_name = $request->input('product_name');
        $product_price = $request->input('product_price');
        $product_description = $request->input('product_description');
        $data=array('product_name'=>$product_name,"product_price"=>$product_price,"product_description"=>$product_description);
        DB::table('products')->insert($data); */
    
    
    }






    /*****************************liste des produits */

    public function services() {
        
        $produits = DB::table('products')
                    ->orderby('product_name', 'desc')
            //        ->inRandomOrder()
            //        ->limit(1)  
                    ->paginate(2); 
             //   ->get();*/
        return view('pages.services')->with('produits', $produits);  // retourne la page avec les produits
    /* Autre methode
            $produits = Product::inRandomOrder()->paginate(3);

    */

    }

    public function show($id) {
    //    $produit = DB::table('products')      //selection de la table
    //                ->where('id', $id)
    //                ->first();                 // le 1er element trouvé 
        $produit = Product::find($id);
        
        return view('pages.show')->with('produit', $produit); // retourne la page show avec le produit
        
    }


    public function formulaireEditer($id) {
        $produit = DB::table('products')      //selection de la table
                    ->where('id', $id)
                    ->first();                 // le 1er element trouvé 
        
        return view('pages.editer')->with('produit', $produit); // retourne la page editer avec le produit
        
    }

    public function modifierProduit(Request $request){

        //$produit = Product::find($request->id);   
        $produit = Product::find($request->input('id'));//Trouve le produit avec l'id reçu du formulaire et instancie un  produit
        $produit->product_name = $request->input('product_name');
        $produit->product_price = $request->input('product_price');
        $produit->product_description = $request->input('product_description');

        $produit->update();
        
        return redirect('/services')->with('updateStatus', 'Le produit '.$request->product_name. ' a été modifié avec succès');

    }


    public function supprimerProduit($id){
        $produit = Product::find($id);      //selection du produit de la table avec cet id (methode Eloquent laravel)

        $produit->delete();

        return redirect('/services')->with('deleteStatus', 'Le produit '.$produit->product_name. ' a été suppriméé avec succès');


    }






}
