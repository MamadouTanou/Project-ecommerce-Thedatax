<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class CartController extends Controller
{
    public function affichePanier(){
        return view('sites.contenusite.detailpanier');
    }

    public function ajoutPanier(Request $request){
        $duplicata= Cart::search(function ($cartItem, $rowId)use($request) {
            return $cartItem->id == $request->id;
      });
        if($duplicata->isNotEmpty()){
             return Redirect::back()->with('success','Le produit à deja été ajouté');
        }
        $produit=Produit::find($request->id);
        Cart::add($produit->id,$produit->designation,1,$produit->prix)
        ->associate('App\Models\Produit');
        return Redirect::back()->with('success','Le produit à bien été ajouté');
    }

    public function supprimer($rowId){

    
         Cart::remove($rowId);
        return back()->with('success','Le produit a été retiré du panier.');
    }
}
