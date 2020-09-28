@extends('sites.mastersite')
@section('content')
<!-- banner-2 -->
<div class="page-head_agile_info_w3l">

</div>
<!-- //banner-2 -->
<!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{ route('site.contenu') }}">Accueil</a>
                        <i>|</i>
                    </li>
                    <li>Paiement</li>
                </ul>
            </div>
        </div>
    </div>
<!-- //page -->
<!-- //page -->
<!-- checkout page -->
<div class="privacy py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span>L</span>e
            <span>P</span>anier
        </h3>
        <!-- //tittle heading -->
        <div>
            <h4 class="mb-sm-4 mb-3"> Votre panier contient:
                <span>{{ Cart::content()->count() }}</span>
            </h4>

            <form method="post" action="#">
                <table  class="table table-bordered"  cellspacing="0" class="table table-bordered shop-table-cart">
                    <thead>
                        <tr>
                            <th class="product-remove">&nbsp;</th>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">Produit</th>
                            <th class="product-price">Prix</th>
                            <th class="product-quantity">Quantité</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Cart::content() as $produit)
                            <tr class="cart_item">
                                <td class="product-remove">
                                    <a class="fa fa-trash btn btn-danger" href="{{ route('cart.destroy',$produit->rowId) }}"></a>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="{{ route('detail',$produit->id) }}"><img src="/storage/{{ $produit->model->image}}"  height="100" width="150" alt="" class=""></a>
                                </td>
                                <td class="product-name">
                                    <p>{{ $produit->model->designation }}</p>
                                </td>
                                <td class="product-price">
                                    <span class="amount">{{ $produit->model->getprix() }}</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="quantity buttons_added">
                                        <input type="number" class="input-text qty text" title="Qty" value="1" min="1" >
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <tfoot>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                                <td>Total</td>
                                <td>{{ Cart::subtotal() }} GNF</td>
                            </tr>
                        </tfoot>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="row">
            <div class="checkout-right-basket col-md-6">
                <a href="{{ route('payement') }}">Faire Un Paiement
                    <span class="far fa-hand-point-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- //checkout page -->
@endsection
