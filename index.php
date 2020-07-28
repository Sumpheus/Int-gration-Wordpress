<?php get_header() ?>

<header class="position-relative vh-100" id="head">
  <!--background:bheader + fade img-->

  <!-- nav bootstrap 4élement avec menu hamburger nav centrer + un hover-->
  <nav id="navbar" class="navbar navbar-expand-lg  d-flex lg-justify-content-center navbar-dark ">
    <button class=" navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarNav" class="collapse navbar-collapse justify-content-center">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link h2 px-4 px-lg-5 text-white" href="#graffbutton">ADVENTURE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h2 px-4 px-lg-5 text-white" href="#about">CREW</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h2 px-4 px-lg-5 text-white" href="#rowimg">GALLERY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h2 px-4 px-lg-5 text-white" href="#joincrewdiv">CONTACT</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- div avec un h1 et h2 (ecrit si bonne police sinon image) + bouton; centrer-->
  <div id="graffbutton" class=" container-fluid p-0 ">
    <div id="graff" class="container-fluid"></div>
    <div id="button1" class="container-fluid p-1 ">
      <a class="text-decoration-none h2" id="buttonhead" href="#">WATCH MORE</a>
    </div>
    <div id="fade" class="container-fluid p-0 "></div>
  </div>

</header>
<!--div avec 2 div l'une a coté de l'autre;centrer, la 1ere avec img, la 2nd avec h1,h2,p;texte aligner a gauche (bgaboutimg)  -->
<div id="about" class="d-flex row col-xl container-fluid  min-vh-100">

  <div id="dbleimg" class="container-fluid col-xl m-auto p-auto">
    <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/img6.webp" alt="img">
  </div>

  <div id="abouttxt" class="container-fluid col-xl m-auto p-auto text-light ">
    <h2 class="col py-1 text-info">ABOUT</h2>
    <h1 class="col py-2">LOREM IPSUM</h1>
    <p class="col-xl-8 pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris, </p>
  </div>
</div>

<!--div avec 1div avec h1;centrer,p et 1 div 4img avec hover ;centrer (bgarticle) -->
<div id="artrowimg" class=" ">
  <div id="articlenope" class="d-flex container-fluid  vh-100">
    <div class=" container text-center m-auto p-auto text-light ">
      <h1>LOREM IPSUM NOPE</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
    </div>
  </div>
  <div id="rowimg" class="row container-fluid justify-content-center p-0 m-0">
    <div class="divcolimg col-xl-4 row p-0 m-0 justify-content-xl-end justify-content-center">
      <div class="divimg col-xl-6 p-0 m-0 ">
        <a class=" p-0 m-0" href="#"><img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/img1.webp" alt="img"></a></div>
      <div class="divimg col-xl-6 p-0 m-0">
        <a class=" p-0 m-0" href="#"><img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/img2.webp" alt="img"></a>
      </div>
    </div>
    <div class="divcolimg col-xl-4 row p-0 m-0 justify-content-xl-start justify-content-center">
      <div class="divimg col-xl-6 p-0 m-0 ">
        <a class="p-0 m-0" href="#"><img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/img3.webp" alt="img"></a></div>
      <div class="divimg col-xl-6 p-0 m-0 ">
        <a class="p-0 m-0" href="#"><img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/img4.webp" alt="img"></a>
      </div>
    </div>
  </div>
</div>


<?php get_footer() ?>
