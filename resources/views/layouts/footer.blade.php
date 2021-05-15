<footer>
    <div class="container"> 
      @dump($informations)
      @foreach ($informations as $information)
        <div class="col-md-3">
          <h6>{{$information->title}}</h6>
          <ul class="link">
            <li><a href="#.">{{$information->menu}}</a></li>
            <li><a href="#.">{{$information->menu}}</a></li>
            <li><a href="#.">{{$information->menu}}</a></li>
            <li><a href="#.">{{$information->menu}}</a></li>
          </ul>
        </div>
      @endforeach
    </div>
  </footer>

  <section class="shop-page padding-top-100 padding-bottom-100">
    <div class="container">

        <!-- Popular Item Slide -->
        <div class="papular-block row">

               <!-- Item -->
               <div class="col-md-4">
                <div class="item">
                    <!-- Item img -->
                    <div class="item-img"> <img class="img-1" src="images/new-ar-img-1.jpg" alt=""> <img
                            class="img-2" src="images/new-ar-img-1.jpg" alt="">
                        <!-- Overlay -->
                        <div class="overlay">
                            <div class="position-center-center">
                                <div class="inn"><a href="images/new-ar-img-1.jpg" data-lighter><i
                                            class="icon-magnifier"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <a href="#.">chiar</a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>


              <!-- Item -->
              <div class="col-md-4">
                <div class="item">
                    <!-- Item img -->
                    <div class="item-img"> <img class="img-1" src="images/new-ar-img-1.jpg" alt=""> <img
                            class="img-2" src="images/new-ar-img-1.jpg" alt="">
                        <!-- Overlay -->
                        <div class="overlay">
                            <div class="position-center-center">
                                <div class="inn"><a href="images/new-ar-img-1.jpg" data-lighter><i
                                            class="icon-magnifier"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <a href="#.">chiar</a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>


            <!-- Item -->
            <div class="col-md-4">
                <div class="item">
                    <!-- Item img -->
                    <div class="item-img"> <img class="img-1" src="images/new-ar-img-1.jpg" alt=""> <img
                            class="img-2" src="images/new-ar-img-1.jpg" alt="">
                        <!-- Overlay -->
                        <div class="overlay">
                            <div class="position-center-center">
                                <div class="inn"><a href="images/new-ar-img-1.jpg" data-lighter><i
                                            class="icon-magnifier"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <a href="#.">chiar</a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
  <section class="news-letter padding-top-15 padding-bottom-15">
    <div class="container">
        <div class="heading light-head text-center">
            <h4>NEWSLETTER</h4>
            <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus,
                eu posuere odi </span>
        </div>
        <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
          <ul class="row">
            <li class="col-sm-6">
              <input type="text" class="form-control" name="name" id="fullname" placeholder="Fullname">
            </li>
            <li class="col-sm-6">
              <input type="text" class="form-control" name="email" id="email" placeholder="Email">
            </li>
            <li class="col-sm-12">
              <button type="button" class="btn btn-primary" onclick="subscribe()">Sign Up</button>
            </li>
          </ul>
        </form>

      </div>
    </section>
    <section class="small-about">
      <div class="container"> 
        <!-- Social Icons -->
        <ul class="social_icons">
          <li><a href="#."><i class="icon-social-facebook"></i></a></li>
          <li><a href="#."><i class="icon-social-twitter"></i></a></li>
          <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
          <li><a href="#."><i class="icon-social-youtube"></i></a></li>
        </ul>
      </div>
    </section>
  <!-- About -->
  <section style="background-color:#FAEBD7">
      <div class="container">
        <div class="text-center">
          <p>©  2017 PAVSHOP All right reserved. </p>
        </div>
         
      </div>
  </section>
  <section class="small-about">
    <div class="container"> 
      <!-- Social Icons -->
      <ul class="social_icons">
     
        <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
      </ul>
    </div>
  </section>