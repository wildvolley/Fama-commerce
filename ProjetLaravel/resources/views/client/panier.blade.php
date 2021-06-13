@extends('layouts.app1')

@section('title')
    Mon panier
@endsection

@section('contenu')


<div class="hero-wrap hero-bread" style="background-image: url('frontend/images/bg_1.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href={{URL::to('/')}}>Accueil</a></span> <span>Panier</span></p>
        <h1 class="mb-0 bread">Mon panier</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-cart">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ftco-animate">
        <div class="cart-list">
          <table class="table">
            <thead class="thead-primary">
              <tr class="text-center">
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>Nom du produit</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
                
                <td class="image-prod"><div class="img" style="background-image:url(frontend/images/souris.jpg);"></div></td>
                
                <td class="product-name">
                  <h3>Souris sans fil</h3>
                  <p>Far far away, behind the word mountains, far from the countries</p>
                </td>
                
                <td class="price">$4.90</td>
                
                <td class="quantity">
                  <div class="input-group mb-3">
                     <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                  </div>
                </td>
                
                <td class="total">$4.90</td>
              </tr><!-- END TR-->

              <tr class="text-center">
                <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
                
                <td class="image-prod"><div class="img" style="background-image:url(frontend/images/disc2.jpg);"></div></td>
                
                <td class="product-name">
                  <h3>Disque dur</h3>
                  <p>Far far away, behind the word mountains, far from the countries</p>
                </td>
                
                <td class="price">$15.70</td>
                
                <td class="quantity">
                  <div class="input-group mb-3">
                     <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                  </div>
                </td>
                
                <td class="total">$15.70</td>
              </tr><!-- END TR-->
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row justify-content-end">
      <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
        <div class="cart-total mb-3">
          <h3>Code promotion</h3>
          <p>Entrez votre code promotion</p>
          <form action="#" class="info">
            <div class="form-group">
              <label for="">Code promotion</label>
              <input type="text" class="form-control text-left px-3" placeholder="">
            </div>
          </form>
        </div>
        <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Appliquer la promotion</a></p>
      </div>
      <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
        <div class="cart-total mb-3">
          <h3>Estimation des taxes et de la livraison</h3>
          <p>Entrez votre addresse pour avoir une estimation des frais de livraison</p>
          <form action="#" class="info">
            <div class="form-group">
              <label for="">Pays</label>
              <input type="text" class="form-control text-left px-3" placeholder="">
            </div>
            <div class="form-group">
              <label for="country">Etat/Province</label>
              <input type="text" class="form-control text-left px-3" placeholder="">
            </div>
            <div class="form-group">
              <label for="country">Code postal</label>
              <input type="text" class="form-control text-left px-3" placeholder="">
            </div>
          </form>
        </div>
        <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p>
      </div>
      <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
        <div class="cart-total mb-3">
          <h3>Total du panier</h3>
          <p class="d-flex">
            <span>Sous-total</span>
            <span>$20.60</span>
          </p>
          <p class="d-flex">
            <span>Livraison</span>
            <span>$0.00</span>
          </p>
          <p class="d-flex">
            <span>Promotion</span>
            <span>$3.00</span>
          </p>
          <hr>
          <p class="d-flex total-price">
            <span>Total</span>
            <span>$17.60</span>
          </p>
        </div>
        <p><a href={{URL('/paiement')}} class="btn btn-primary py-3 px-4">Aller au paiement</a></p>
      </div>
    </div>
  </div>
</section>

                        
    <!-- Shopping Cart Section End -->
@endsection

@section('script')
<script>
  $(document).ready(function(){

  var quantitiy=0;
     $('.quantity-right-plus').click(function(e){
          
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          var quantity = parseInt($('#quantity').val());
          
          // If is not undefined
              
              $('#quantity').val(quantity + 1);

            
              // Increment
          
      });

       $('.quantity-left-minus').click(function(e){
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          var quantity = parseInt($('#quantity').val());
          
          // If is not undefined
        
              // Increment
              if(quantity>0){
              $('#quantity').val(quantity - 1);
              }
      });
      
  });
</script>
    
@endsection