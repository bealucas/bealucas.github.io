<?php include ('head.php');?>
<body>

<?php include ('header.php');?>
<div id="fullpage">
	<div class="section  fp-auto-height-responsive" id="section0">
		<div class="intro text-left row d-flex justify-content-around">
			<div class="col-md-7 bloque-delante">
                <h1 class="text-left">Discover my web projects</h1>
                <div class="row">
                <div class="col-md-6">
                <p class="text-left">PHP, HTML, CSS, Javascript, Wordpress, Prestashop webs...</p>
                </div>
                </div>                </br></br>
                <a href="web.php" class="btn_more"><span class="barra"></span> Come to see more! <span class="masque"></span></a>

            </div>
            <div class="col-md-4 imgen segunda wow fadeInRight  position-absolute" data-wow-delay="0.7s">
                <img src="assets/img/diseno/ordena.png" alt="" class="img-fluid ">
            </div>
            <div class="col-md-4 imgen primera wow fadeInRight  position-absolute" data-wow-delay="0.3s">
                <img src="assets/img/diseno/disp.png" alt="" class="img-fluid ">
            </div>
            
			<br>
			
			
			
		</div>
	</div>

    <div class="container-fluid desktop-none">
	    
        <div class="text-left row d-flex justify-content-around">
			<div class="col-md-7 bloque-delante">
            <h1 class="text-left">Go to my graphic illustrations</h1>
            <div class="row">
                <div class="col-md-6">
                <p class="text-left">Art projets made with Adobe Illustrator, Photoshop, Procreate..</p>
                </div>
            </div>
            </br></br>
            <a href="portfolio.php" class="btn_more"><span class="barra"></span> Come to see more! <span class="masque"></span></a>
            </div>
			
            <div class="col-md-4 imgen tercera wow fadeInLeft  position-absolute" data-wow-delay="0.1s">
                <img src="assets/img/ilustracion/rosa.jpg" alt="" class="img-fluid ">
            </div>
            <div class="col-md-4 imgen cuarta wow fadeInLeft  position-absolute" data-wow-delay="0.5s">
                <img src="assets/img/ilustracion/madrid.jpg" alt="" class="img-fluid ">
            </div>
            <div class="col-md-4 imgen sexta wow fadeInRight  position-absolute" data-wow-delay="0.9s">
                <img src="assets/img/ilustracion/lucs.jpg" alt="" class="img-fluid ">
            </div>
			<br>    
			
			
			
		</div>
		
	<div class="section movil-none" id="section1">
	    <div class="slide" id="slide1">
        <div class="intro  text-left row d-flex justify-content-around">
			<div class="col-md-7 bloque-delante">
            <h1 class="text-left">Go to my graphic illustrations</h1>
            <div class="row">
                <div class="col-md-6">
                <p class="text-left">Art projets made with Adobe Illustrator, Photoshop, Procreate..</p>
                </div>
            </div>
            </br></br>
            <a href="portfolio.php" class="btn_more"><span class="barra"></span> Come to see more! <span class="masque"></span></a>
            </div>
			
            <div class="col-md-4 imgen tercera  fadeInLeft  position-absolute" data-wow-delay="0.1s">
                <img src="assets/img/ilustracion/rosa.jpg" alt="" class="img-fluid ">
            </div>
            <div class="col-md-4 imgen cuarta  fadeInLeft  position-absolute" data-wow-delay="0.9s">
                <img src="assets/img/ilustracion/madrid.jpg" alt="" class="img-fluid ">
            </div>
            <div class="col-md-4 imgen sexta  fadeInLeft  position-absolute" data-wow-delay="0.9s">
                <img src="assets/img/ilustracion/lucs.jpg" alt="" class="img-fluid ">
            </div>
			<br>    
			
			
			
		</div>
		</div>

	    <!--<div class="slide" id="slide2">
			<h1>This example uses responsiveWidth: 900</h1>
		</div>-->

	</div>
	<div class="section movil-none" id="section2">
    <div class="intro  text-left row d-flex justify-content-around">
			
            <div class="col-md-7 bloque-delante">
            <h1 class="text-left">Get in touch</h1>
            <div class="row">
                <div class="col-md-7">
                <p class="text-left">Discover my social networks and know more about me!</p>
                </div>
            </div></br>
            <a href="#" onclick="JavaScript:window.location='mailto:'+'blucashernandez'+'@'+'gmail'+'.com'" class='btn-contact-home'>
                    <img src="assets/img/mail_white.svg" alt="" class="img-fluid">
            </a>
            </br></br>

            <a href="contact.php" class="btn_more"><span class="barra"></span> Come to see more! <span class="masque"></span></a>
            </div>
			
            <div class="col-md-4 imgen quinta  fadeInLeft  position-absolute" data-wow-delay="0.9s">
                <img src="assets/img/retrato.png" alt="" class="img-fluid ">
            </div>
			<br>  	
		</div>
	</div>
</div>
<div class="desktop-none container-fluid">
    <div class="position-relative text-left row d-flex justify-content-around">
			
            <div class="col-md-7 bloque-delante">
            <h1 class="text-left">Get in touch</h1>
            <div class="row">
                <div class="col-md-7">
                <p class="text-left">Discover my social networks and know more about me!</p>
                </div>
            </div></br>
            <a href="#" onclick="JavaScript:window.location='mailto:'+'blucashernandez'+'@'+'gmail'+'.com'" class='btn-contact-home'>
                    <img src="assets/img/mail_white.svg" alt="" class="img-fluid">
            </a>
            </br></br>

            <a href="contact.php" class="btn_more"><span class="barra"></span> Come to see more! <span class="masque"></span></a>
            </div>
			
            <div class="col-md-4 imgen quinta  fadeInRight  position-absolute" data-wow-delay="0.9s">
                <img src="assets/img/retrato.png" alt="" class="img-fluid ">
            </div>
			<br>  	
		</div>
	</div>
</div>


<?php include ('footer.php');?>
<?php include ('script_comun.php');?>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        anchors: ['firstPage', 'secondPage', '3rdPage'],
        sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['Web Projects', 'Graphic Projects', 'Get in touch'],
        responsiveWidth: 900,
        afterResponsive: function(isResponsive){

        }

    });
</script>

</body>
</html>