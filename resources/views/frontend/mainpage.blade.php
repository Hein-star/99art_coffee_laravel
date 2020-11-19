@extends('frontendtemplate')
 <style type="text/css">
   .pointer {
      cursor: pointer;
    }
    .img-zoom {
      display: block;
    }
    .img-zoom img {
      -webkit-transform: scale(1);
      transform: scale(1);
      -webkit-transition: .3s ease-in-out;
      transition: .3s ease-in-out;
    }
    .img-zoom:hover img {
      -webkit-transform: scale(1.3);
      transform: scale(1.1);
    }
 </style>
@section('content')
<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url({{asset('frontend_asset/assets/img/cover-bg.jpg')}});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>99Art</span> Coffee</h2>
                <p class="animate__animated animate__fadeInUp">We work hard to make “art from the cup” accessible to all those who appreciate our process. You are our friends and family around the world.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  {{-- <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a> --}}
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url({{asset('frontend_asset/assets/img/slide/slide-2.jpg')}});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>HAND-SELECTED</span> COFFEES</h2>
                <p class="animate__animated animate__fadeInUp">We humbly strive to source the highest quality specialty coffees from coffee growers all around the world.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  {{-- <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a> --}}
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url({{asset('frontend_asset/assets/img/slide/slide-3.jpg')}});">
            <div class="carousel-background"><img src="assets/img/slide/slide-3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>PERFECTED ROAST</span> PROFILES</h2>
                <p class="animate__animated animate__fadeInUp">We dedicate ourselves to perfecting roast profiles that maximize the natural flavor and essence in every bean.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  {{-- <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
<!-- End Hero -->

{{-- Main Start --}}
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>FEATURED <span>PRODUCTS</span></h2> 
        </div>
          <div class="row pointer">
          @foreach($items as $item)
            <div class="col-md-4 img-zoom" tabindex="-1" style="width: 18rem;">
              <a href="{{route('itemdetail', $item->id)}}">
                <img src="{{asset($item->photo)}}" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title text-center">{{$item->name}}</h5>
                <p class="card-text text-center">{{$item->price}} MMK</p>
                <button class="btn btn-outline-warning form-control addtocartBtn" 
                    data-id="{{$item->id}}"
                    data-name="{{$item->name}}"
                    data-codeno="{{$item->codeno}}"
                    data-photo="{{asset($item->photo)}}"
                    data-price="{{$item->price}}"
                    data-discount="{{$item->discount}}">Add To Cart</button>
              </div>
            </div>
          @endforeach  
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="section-title">
          <h2>Coffee Shop <span>Our Gallery</span></h2>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4 img-zoom" tabindex="-1">
            <div class="box" style="width: 300px;height: 200px;">
              <img src="{{asset('frontend_asset/assets/img/gallery/gallery-1.jpg')}}" width="350" height="250">
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0 img-zoom" tabindex="-1">
            <div class="box" style="width: 300px;height: 200px;">
              <img src="{{asset('frontend_asset/assets/img/gallery/gallery-2.jpg')}}" width="350" height="250">
            </div>
          </div>
          <div class="col-lg-4 img-zoom" tabindex="-1">
            <div class="box" style="width: 300px;height: 200px;">
              <img src="{{asset('frontend_asset/assets/img/gallery/gallery-3.jpg')}}" width="350" height="250">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">
        <div class="section-title">
          <h2>Our Coffee <span>Menu</span></h2>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-starters">Coffee</li>
              <li data-filter=".filter-salads">Cake</li>
              <li data-filter=".filter-specialty">Bread</li>
              <li data-filter=".filter-pasta">Pasta</li>
            </ul>
          </div>
        </div>
        <div class="row menu-container">
          <div class="col-lg-3 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Americano</a><span>5000 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Espresso</a><span>4000 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Flat White</a><span>6500 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Glace</a><span>6500 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Latte</a><span>5500 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Mocha</a><span>5000 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Cappucino</a><span>4000 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Choco Mix</a><span>4500 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Cold Stone</a><span>5200 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Espresso</a><span>4500 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Ice Banana</a><span>5000 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Chocolate</a><span>5500 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Delight</a><span>4500 MMk</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Chocolate</a><span>3000 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">ChocoLava</a><span>3500 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Cookie</a><span>4000 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Chiffon</a><span>3200 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Mocha</a><span>3500 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Sizzling</a><span>3300 MMk</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Strawberry</a><span>4000 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Pudding</a><span>4000 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Garlic</a><span>4500 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Instanpot</a><span>4300 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Italian</a><span>3000 MMk</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Easter</a><span>3500 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Rustic</a><span>4000 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Sliced</a><span>4200 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-pasta">
            <div class="menu-content">
              <a href="#">Pepper</a><span>6000 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-pasta">
            <div class="menu-content">
              <a href="#">Shrimp</a><span>7000 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-pasta">
            <div class="menu-content">
              <a href="#">Tomato</a><span>6500 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-pasta">
            <div class="menu-content">
              <a href="#">Italian</a><span>7500 MMk</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-pasta">
            <div class="menu-content">
              <a href="#">Lemon</a><span>5000 MMK</span>
            </div>
          </div>
          <div class="col-lg-3 menu-item filter-pasta">
            <div class="menu-content">
              <a href="#">Calorie</a><span>5500 MMK</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Menu Section -->

    <!-- ======= Book A Table Section ======= -->
    {{-- <section id="book-a-table" class="book-a-table">
      <div class="container">
        <div class="section-title">
          <h2>Book a <span>Table</span></h2>
        </div>
        <form action="{{route('booking.store')}}" method="post">
          @csrf
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-msg="Please enter at least 4 chars">
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <select class="custom-select form-control" name="table">
                <option selected>Table No</option>
                <option value="1">Table One</option>
                <option value="2">Table Two</option>
                <option value="3">Table Three</option>
                <option value="4">Table Four</option>
                <option value="5">Table Five</option>
                <option value="6">Table Six</option>
                <option value="7">Table Seven</option>
                <option value="8">Table Eight</option>
                <option value="9">Table Nine</option>
                <option value="10">Table Ten</option>
              </select>
              <input type="text" class="form-control" name="table" id="table" placeholder="Your Table No" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" class="form-control" name="time" id="time" placeholder="Time" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="error-message"></div>
          </div>
          <div class="text-center"><button type="submit" class="btn btn-outline-warning">Send Message</button></div>
        </form>
      </div>
    </section> --}}
    <!-- End Book A Table Section -->

    <!-- ======= About Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">
        <div class="section-title">
          <h2>About <span>Our Restaurant</span></h2>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs my-5">
      <div class="container">
        <div class="section-title">
          <h2>Our Restaurant <span>Owner</span></h2>
        </div>
        <div class="row my-5">
          <div class="col-lg-6 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/testimonials-bg.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hein Htet Zaw</h4>
                <span>Owner</span>
                <div class="social">
                  <a href="https://web.facebook.com/kawe.lay.127/"><i class="icofont-facebook" style="font-size: 25px;"></i></a>
                  <a href="https://www.instagram.com/kawe.lay.127/"><i class="icofont-instagram" style="font-size: 25px;"></i></a>
                  <a href="https://github.com/Hein-star"><i class="icofont-github" style="font-size: 25px;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Aung Khant Kyaw</h4>
                <span>Owner</span>
                <div class="social">
                  <a href="https://web.facebook.com/profile.php?id=100015694519187"><i class="icofont-facebook" style="font-size: 25px;"></i></a>
                  <a href="https://www.instagram.com/kaungmyat_shein/?fbclid=IwAR1vP2Ao4_RrvJt5yhGLVwc9rJJFQt_lspLktq8KJ3OTqH7JBxqTySlzRp0"><i class="icofont-instagram" style="font-size: 25px;"></i></a>
                  <a href="https://github.com/KaungMyatShein2000"><i class="icofont-github" style="font-size: 25px;"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container my-3">
        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
        </div>
      </div>
      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3212.1190101639345!2d96.18109224483673!3d16.78290436724591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1edfc8bd7f043%3A0x140d855601916fc6!2sConstruction!5e0!3m2!1sen!2smm!4v1605441228466!5m2!1sen!2smm" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="container mt-5">
        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>A108 Burmese Street<br>Yangon, NY 535022</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-clock-time icofont-rotate-90"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>9:00 AM - 9:00 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>99ArtCoffee@gmail.com<br>2amCoders@gmail.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>09-698006087<br>09-976505982</p>
            </div>
          </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section>
    <!-- End Contact Section -->
  </main>
{{-- Main End --}}
@endsection
@section('script')
  <script type="text/javascript" src="{{asset('my_asset/custom.js')}}"></script>
@endsection