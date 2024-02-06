<?php include ('head.php');?>
<?php include ('header.php');?>

  

<div class="container-fluid bloque-sec ">
  <div class="row d-flex justify-content-center align-content-center align-items-center">
        
        <div class="col-md-10 text-center mt-md-4 pt-md-4">
          <h1>GRAPHIC PROJECTS</h1>
          <p>Creation of web content and illustrations with editing programs such as Adobe Illustrator, Photoshop, Procreate, After Effects, Premiere Pro...</p>
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
      <a href="#animation" class="tercera sec">
        <h3>Animation</h3>
        <span class="flechar"></span>
      </a>
    </div>
  </div>
</div>

<span id="branding"></span>
<div class="container-fluid pt-md-5" >
    <div class="row d-flex justify-content-center text-center">
       <div class="col-md-8 bloque-sec-2 pt-md-5">
       <h2>Branding and commercial projects</h2>
        <p>Graphic design projects.
Making illustrations for advertising.</br></br>
Used programs: Adobe Illustrator, InDesign, Photoshop, Procreate, Premiere and After effects.</p>
    
       </div> 
    </div>
</div>
<div id="fotografia" class="container-fluid bg-blanco">
    <section class="variable slider">
        <div>
        <img src="assets/img/slides/1 (7).jpg">
        </div>    
        <div>
        <img src="assets/img/slides/1 (15).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (3).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (4).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (12).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (10).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (11).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (16).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (2).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (13).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (14).jpg">
        </div>

        <div>
        <img src="assets/img/slides/1 (19).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (17).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (1).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (20).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (6).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (21).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (8).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (9).jpg">
        </div>
        <div>
        <img src="assets/img/slides/1 (18).jpg">
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