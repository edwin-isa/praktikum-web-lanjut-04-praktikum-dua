@extends('layouts.main')

@section('container')
<div class="tm-main-section light-gray-bg">
  <div class="container" id="main">
    <section class="tm-section row">
      <div class="col-lg-9 col-md-9 col-sm-8">
        <h2 class="tm-section-header gold-text tm-handwriting-font">Variety of Menus</h2>
        <h2>Cafe House</h2>
        <p class="tm-welcome-description">This is free HTML5 website template from <span class="blue-text">template</span><span class="green-text">mo</span>. Fndimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Ettiam sit amet orci eget eros faucibus tincidunt.</p>
        <a href="#" class="tm-more-button margin-top-30">Read More</a> 
      </div>
      <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
        <div class="inline-block shadow-img">
          <img src="img/1.jpg" alt="Image" class="img-circle img-thumbnail">  
        </div>              
      </div>            
    </section>          
    <section class="tm-section row">
      <div class="col-lg-12 tm-section-header-container margin-bottom-30">
        <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo" class="tm-site-logo"> Our Menus</h2>
        <div class="tm-hr-container"><hr class="tm-hr"></div>
      </div>
      <div>
        <div class="col-lg-3 col-md-3">
          <div class="tm-position-relative margin-bottom-30">              
            <nav class="tm-side-menu">
              <ul>
                <li><a href="#" class="active">Affogato</a></li>
                <li><a href="#">Caffè Americano</a></li>
                <li><a href="#">Caffè latte</a></li>
                <li><a href="#">Coffee milk</a></li>
                <li><a href="#">Café mocha</a></li>
                <li><a href="#">Cappuccino</a></li>
                <li><a href="#">Espresso</a></li>
                <li><a href="#">Iced coffee</a></li>
                <li><a href="#">Instant coffee</a></li>
                <li><a href="#">Mocha</a></li>
                <li><a href="#">black coffee</a></li>
              </ul>              
            </nav>    
            <img src="img/vertical-menu-bg.png" alt="Menu bg" class="tm-side-menu-bg">
          </div>  
        </div>            
        <div class="tm-menu-product-content col-lg-9 col-md-9"> <!-- menu content -->
        @foreach ($coffees as $Coffee)
        <div class="tm-product">
          <img src="img/menu-1.jpg" alt="Product">
          <div class="tm-product-text">
            <h3 class="tm-product-title">{{ $Coffee->name }}</h3>
            <p class="tm-product-description">{{ $Coffee->description }}</p>
          </div>
          <div class="tm-product-price">
            <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>{{ $Coffee->price }}</a>
          </div>
        </div>
        @endforeach
        </div>
      </div>          
    </section>
  </div>
</div> 
@endsection