<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Interaktif Klasika</title>
    <link rel="icon" href="/_common/_img/tab_logo.png">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link href="_common/css/base.css" rel="stylesheet">
</head>

<body>
    <div id="wrap">
    <!-- include header -->
	 <?php  /* 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/test/02/common/header.php";
		include_once($path); */
	?>
        <!-- <div id="headerArea" class="clearfix">
            <div class="wrap01">
                <ul class="dispInline" id="hNav">
                    <li><a href="http://karier.kompas.id" target="_blank">Kompas Karier</a></li>
                    <li><a href="http://klasika.kompas.id" target="_blank">Klasika</a></li>
                    <li><a href="http://klasika.kompas.id" target="_blank">Advertorial</a></li>
                </ul>
            </div>
        </div> -->
        
        <div id="mainArea" class="clearfix">
            <div class="topHeading">
                <h1>InterAsik</h1>
                <h2>Halaman Web Multimedia Interaktif Klasika</h2>
                <!-- <h2>Ragam Advertorial Kegiatan di Sekitar Anda</h2> -->
            </div> <!-- /.topHeading -->
            
            <div class="wrap01">
                <div class="multiple">
                    <div class="block01" onclick="window.open('ride/');">
                        <div><img src="_img/interaktif_01.png"></div>
                        <h3>Ride Jakarta</h3>
                        <div class="flipLeft"><p class="type01">Langgam &#9654;</p></div>
                        <div class="flipTop">
                            <p>Bukan cuma waktu, kesehatan pun jadi aset berharga bagi masyarakat urban. Bisa dimaklumi kemudian jika pusat kebugaran kian menjamur di berbagai penjuru kota. Salah satu yang naik daun adalah <span class="tI">boutique fitness studio</span>. &#9654;</p>
                        </div>
                    </div> <!-- /.block01 -->
                    <div class="block01" onclick="window.open('eksplor/');">
                        <div><img src="_img/interaktif_02.png"></div>
                        <h3>Eksplor Jawa</h3>
                        <div class="flipLeft"><p class="type01">Eksplor &#9654;</p></div>
                        <div class="flipTop">
                            <p>Pulau Jawa merupakan salah satu pusat kerajaan-kerajaan Islam terbesar di nusantara, simak ulasan tim Kompas Eksplor ke 10 kota tempat peninggalan kerajaan Islam berikut ini &#9654;</p>
                        </div>
                    </div>
                    <div class="block01" onclick="window.open('pasarbaru/');">
                        <div><img src="_img/interaktif_03.jpg"></div>
                        <h3>Pasar Baroe</h3>
                        <div class="flipLeft"><p class="type01">Langgam Wisata &#9654;</p></div>
                        <div class="flipTop">
                            <p>Pusat perbelanjaan tertua di Jakarta yang didirikan tahun 1820 ini bertahan selama 2 abad, bagaimana geliatnya saat ini ? &#9654;</p>
                        </div>
                    </div>
                </div> <!-- /.container -->
            </div> <!-- /.wrap01 -->
		</div> <!-- /#mainArea -->
		
	<!-- include footer -->
	<?php 
        /*
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/test/02/common/footer.php";
		include_once($path);
        */
	?>
    </div> <!-- /#wrap -->
    
    <script src="_common/js/jQuery.js" type="text/javascript"></script>
  
    <script> /* animation when hovering a particular article*/
        $( document ).ready(function(){
            $('.block01').hover(
                function(){
                    $('.flipLeft',this).addClass('showFlipLeft')
                    $('.flipTop',this).addClass('showFlipTop') 
                    $(this).addClass('block01Colored') 
                },
                function(){ 
                    $('.flipLeft',this).removeClass('showFlipLeft')
                    $('.flipTop',this).removeClass('showFlipTop')
                    $(this).removeClass('block01Colored') 
                }
            )
        });
    </script>
    <script> /* mobile device hover effect */
        if ($(window).width() < 769) {
            $('.flipLeft').addClass('showFlipLeft');
            $('.flipTop').addClass('showFlipTop');
            $('.block01').addClass('block01Colored');
        } else {
            $('.flipLeft').removeClass('showFlipLeft');
            $('.flipTop').removeClass('showFlipTop');
            $('.block01').removeClass('block01Colored');
        }
    </script>
	<script>
		
	</script>
    <script>/* navigate using arrow keys */</script>
</body>
</html>