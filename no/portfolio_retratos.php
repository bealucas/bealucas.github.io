<?php include ('head.php');?>
<?php include ('header.php');?>

<div class="container-fluid bg-azul ">
  <div class="row d-flex justify-content-around h-100 p-md-3 align-items-center">
        <div class="col-md-3  wow fadeInLeft " data-wow-delay="0.3s">
                  <img src="assets/img/diseno/disp.png" alt="" class="img-fluid w-50">
              </div>
              <div class="col-md-4 wow fadeInLeft " data-wow-delay="0.7s">
                  <img src="assets/img/diseno/ordena.png" alt="" class="img-fluid ">
        </div>
        <div class="col-md-5">
          <h1>Lorem ipsum dolor sit ame</h1>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima error culpa
             laboriosam assumenda quaerat quia similique atque ab nostrum architecto maiores, sed ut, 
             delectus voluptates. Animi unde pariatur fugiat architecto.</p>
        </div>
  </div>

</div>


<div class="container-fluid">
  <div class="row  d-flex position-relative align-items-center">
    <div class="col-md-4">
      <a href="#branding" class="primera sec">
        <h3>Branding</h3>
        <span class="flechar"></span>
      </a>
    </div>
    <div class="col-md-4">
      <a href="#portrait" class="segunda sec">
        <h3>Portrait illustration</h3>
        <span class="flechar"></span>
      </a>
    </div>
    <div class="col-md-4">
      <a href="" class="tercera sec">
        <h3>Animation</h3>
        <span class="flechar"></span>
      </a>
    </div>
  </div>
</div>

<span id="branding"></span>
<div class="container-fluid pt-md-5" >
    <div class="row d-flex justify-content-center text-center">
       <div class="col-md-8 pt-md-5">
       <h2>Branding and commercial projects</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias sequi placeat facere maiores laudantium perspiciatis, quo pariatur est et! Deleniti excepturi odit officiis quod, ab temporibus laborum? Voluptas, laudantium sequi.</p>
    
       </div> 
    </div>
</div>
<div id="fotografia" class="container-fluid bg-blanco">
    <section class="variable slider">
        <div>
        <img src="assets/img/branding/pucho.jpg">
        </div>    
        <div>
        <img src="assets/img/branding/puchito-09.png">
        </div>
        <div>
        <img src="assets/img/branding/pucho(1).png">
        </div>
        <div>
        <img src="assets/img/branding/pucho(2).png">
        </div>
        <div>
        <img src="assets/img/branding/iyamah(2).jpg">
        </div>
        <div>
        <img src="assets/img/branding/iyamah(3).jpg">
        </div>
        <div>
        <img src="assets/img/branding/iyamah-05.png">
        </div>
        <div>
        <img src="assets/img/branding/2pac.jpg">
        </div>
        <div>
        <img src="assets/img/branding/2pac-03.jpg">
        </div>
        <div>
        <img src="assets/img/branding/2pac-02.jpg">
        </div>
        <div>
        <img src="assets/img/branding/2pac-003.jpg">
        </div>
    </section>
</div>
    
<?php include ('portfolio_gallery.php');?>
<?php include ('portfolio_animation.php');?>
<?php include ('footer.php');?>
<?php include ('script_comun.php');?>
<script type="text/javascript">
    $(document).on('ready', function() {
      
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
      
    });
</script>