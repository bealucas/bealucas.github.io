<?php include ('head.php');?>

<!--Hey! This is the original version
of Simple CSS Waves-->
<div class="container-fluid">
    <div class="row d-flex flex-column h-100">
        

        <div class="header-waves col-md-3">

            
            <!--Waves Container-->
            
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M41.6,0.6c0,0,54,163.5,61.5,253.5c17.3,207.8-63,295.5-63,418.5s3,97.5,3,97.5l-42-1.5V0.6L41.6,0.6z"/>
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="0" y="20" fill="rgba(255,255,255,0.8)" />
                    <use xlink:href="#gentle-wave" x="4" y="20" fill="rgba(255,255,255,0.6)" />
                    <use xlink:href="#gentle-wave" x="3" y="20" fill="rgba(255,255,255,0.4)" />
                    <use xlink:href="#gentle-wave" x="4" y="20" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="6" y="20" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="8" y="20" fill="#fff" />
                </g>
            </svg>
            <div class="row texto-waves-menu">
                <div class="col-md-12">
                    <ol class="d-flex h-100 flex-column justify-content-center align-items-center position-absolute">
                        <li>
                          <a href="#">apartado 1</a></li>
                        <li>
                          <a href="#">apartado 2</a></li>
                        <li>
                          <a href="#">apartado 3</a></li>
                          <a href="#" class="cerrar">
                             <span></span>
                             <span></span>
                          </a>
                    </ol>
                    
                </div>
            </div>
            <!--Waves end-->

        </div>

        <div class="bg-azul h-100 container-fluid">

        </div>
        <!--Header ends-->
    </div>

</div>


