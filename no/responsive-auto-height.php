<?php include ('head.php');?>
<body>

<?php include ('header.php');?>
<div id="fullpage">
	<div class="section fp-auto-height-responsive" id="section0">
		<div class="intro text-left row d-flex justify-content-around">
			<div class="col-md-7">
                <h1 class="text-left">Discover my web projects</h1>
                <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed beatae iusto qui laborum eaque maiores magnam ipsam ullam nihil fugiat, quas corporis possimus eius. Expedita labore dolorum fugiat ex itaque?</p>
                </br></br>
                <a href="#" class="btn_more"><span class="barra"></span> Come to see more! <span class="masque"></span></a>

            </div>
            <!--<div class="col-md-4">
                <img src="assets/img/20200909190357_01.jpg" alt="" class="img-fluid w-50 position-absolute">
            </div>-->
			<br>
			
			
			
		</div>
	</div>
	<div class="section" id="section1">
	    <div class="slide" id="slide1">
        <div class="intro text-left row d-flex justify-content-around">
			<div class="col-md-7">
            <h1 class="text-left">Go to my graphic illustrations</h1>
            <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed beatae iusto qui laborum eaque maiores magnam ipsam ullam nihil fugiat, quas corporis possimus eius. Expedita labore dolorum fugiat ex itaque?</p>
            </br></br>
            <a href="#" class="btn_more"><span class="barra"></span> Come to see more! <span class="masque"></span></a>
            </div>
			<br>
			
			
			
		</div>
		</div>

	    <!--<div class="slide" id="slide2">
			<h1>This example uses responsiveWidth: 900</h1>
		</div>-->

	</div>
	<div class="section" id="section2">
    <div class="intro text-left row d-flex justify-content-center">
			<div class="col-md-10">
            <h1 class="text-left">Get in touch</h1>
            <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed beatae iusto qui laborum eaque maiores magnam ipsam ullam nihil fugiat, quas corporis possimus eius. Expedita labore dolorum fugiat ex itaque?</p>

            </div>
			<br>	
		</div>
	</div>
</div>


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