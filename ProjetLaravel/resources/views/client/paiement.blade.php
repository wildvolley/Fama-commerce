@extends('layouts.app1')

@section('title')
    Paiement
@endsection

@section('contenu')
<!-- Breadcrumb Section Begin -->

                   

                    <div class="hero-wrap hero-bread" style="background-image: url('frontend/images/bg_1.jpg');">
                        <div class="container">
                          <div class="row no-gutters slider-text align-items-center justify-content-center">
                            <div class="col-md-9 ftco-animate text-center">
                                <p class="breadcrumbs"><span class="mr-2"><a href={{URL::to('/')}}>Accueil</a></span> <span>Paiement</span></p>
                              <h1 class="mb-0 bread">Paiement</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                  
                      <section class="ftco-section">
                        <div class="container">
                          <div class="row justify-content-center">
                            <div class="col-xl-7 ftco-animate">
                                          <form action="#" class="billing-form">
                                              <h3 class="mb-4 billing-heading">Billing Details</h3>
                                    <div class="row align-items-end">
                                        <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="firstname">Firt Name</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                  </div>
                                  <div class="w-100"></div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="country">State / Country</label>
                                              <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">France</option>
                                              <option value="">Italy</option>
                                              <option value="">Philippines</option>
                                              <option value="">South Korea</option>
                                              <option value="">Hongkong</option>
                                              <option value="">Japan</option>
                                            </select>
                                          </div>
                                          </div>
                                      </div>
                                      <div class="w-100"></div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                          <label for="streetaddress">Adresse (rue)</label>
                                        <input type="text" class="form-control" placeholder="Numero de maison et nom de rue">
                                      </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Appartment, suite, unite etc: (optionel)">
                                      </div>
                                      </div>
                                      <div class="w-100"></div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                          <label for="towncity">Ville/Village</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="postcodezip">Code Postal / ZIP *</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                      </div>
                                      <div class="w-100"></div>
                                      <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="phone">Téléphone</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="emailaddress">Courriel</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                  </div>
                                  <div class="w-100"></div>
                                  <div class="col-md-12">
                                      <div class="form-group mt-4">
                                                          <div class="radio">
                                                            <label class="mr-3"><input type="radio" name="optradio"> Créer un compte? </label>
                                                            <label><input type="radio" name="optradio"> Livraison à une adresse différente?</label>
                                                          </div>
                                                      </div>
                                  </div>
                                  </div>
                                </form><!-- END -->
                                      </div>
                                      <div class="col-xl-5">
                                <div class="row mt-5 pt-3">
                                    <div class="col-md-12 d-flex mb-5">
                                        <div class="cart-detail cart-total p-3 p-md-4">
                                            <h3 class="billing-heading mb-4">Total du panier</h3>
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
                                    </div>
                                    <div class="col-md-12">
                                        <div class="cart-detail p-3 p-md-4">
                                            <h3 class="billing-heading mb-4">Méthode de paiement</h3>
                                                      <div class="form-group">
                                                          <div class="col-md-12">
                                                              <div class="radio">
                                                                 <label><input type="radio" name="optradio" class="mr-2"> Transfert bancaire</label>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <div class="col-md-12">
                                                              <div class="radio">
                                                                 <label><input type="radio" name="optradio" class="mr-2"> Vérification du paiement</label>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <div class="col-md-12">
                                                              <div class="radio">
                                                                 <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <div class="col-md-12">
                                                              <div class="checkbox">
                                                                 <label><input type="checkbox" value="" class="mr-2">J</label>J'ai lu et accepté les termes et conditions
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <p><a href="#"class="btn btn-primary py-3 px-4">Placer votre commande</a></p>
                                                  </div>
                                    </div>
                                </div>
                            </div> <!-- .col-md-8 -->
                          </div>
                        </div>
                      </section> <!-- .section -->
                

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