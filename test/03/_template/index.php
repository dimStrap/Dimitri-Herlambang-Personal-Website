<?php 
	header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
	header("Pragma: no-cache"); // HTTP 1.0.
	header("Expires: 0"); // Proxies.	
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Template Langgam</title>
    <link rel="icon" href="img/favicon.png">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="kompas klasika langgam">
    <meta name="keywords" content="kompas,klasika,langgam">
    <meta name="author" content="Kompas klasika">
    <link href="cmn/base.css" rel="stylesheet">
</head>

<body>
   	<div id="loading"><div id="loading-center"><div id="loading-center-absolute"><div class="object" id="object_four"></div><div class="object" id="object_three"></div><div class="object" id="object_two"></div><div class="object" id="object_one"></div></div></div></div>
    
    <div id="wrap">
    
    	<section class="module parallax" id="section_landing">
        	<div class="div-transparent-layer">
				<div class="div-caption">
					<h1>[ JUDUL LANGGAM ]</h1>
					<p>[TEKS LEAD]</p>
				</div>
				<p class="tC" style="bottom:0;position:absolute;width:100%;"><a class="animated bounce" style="display:inline-block;"><img src="img/arrow_down.png" alt="scroll kebawah" width="30" height="30"></a></p>
			</div> <!-- /.div-layer -->
		</section> <!-- /#section_landing -->
   		
   		<section class="clearfix">
            <div class="text-lead">
            	<p class="tI">TEKS LEAD TEKS LEAD TEKS LEAD TEKS LEAD TEKS LEAD TEKS LEAD TEKS LEAD TEKS LEAD TEKS LEAD</p>
            	<div class="text-lead_line"></div>
            </div>
   		</section>
   		
   		<section class="clearfix">
   			<div class="text-paragraph">
   				<p><span class="text-dropCap">T</span>EKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF</p>
   			</div>
   		</section>
   		
   		<div style="height:2px;background-color:#737373"></div>
   		
   		<section>
   			<div class="text-quote">
   				<p>"TEKS QUOTE TEKS QUOTE TEKS QUOTE TEKS QUOTE"</p>
   			</div>
   		</section>
   		
   		<div style="height:2px;background-color:#737373"></div>
   		
   		<section class="clearfix">
   			<div class="text-paragraph">
   				<p><span class="image-right"><img data-original="img/dummy.jpg" alt="dummy">caption caption caption caption caption caption.</span>EKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF</p>
   			</div>
   		</section>
   		
   		<div style="height:2px;background-color:#737373"></div>
   		
   		<section class="clearfix">
   			<div class="text-paragraph">
   				<p><span class="image-left"><img data-original="img/dummy.jpg" alt="dummy">caption caption caption caption caption caption.</span>EKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF TEKS PARAGRAF</p>
   			</div>
   		</section>
   		
   		<div style="height:2px;background-color:#737373"></div>
   		
   		<section class="clearfix">
   			<div class="image-gallery">
				<img data-original="img/dummy.jpg" alt="dummy">
            	<img class="image-info" src="img/info.png" alt="klik atau arahkan mouse pada gambar">
            	<p>CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION</p>
            </div><!--
            --><div class="image-gallery">
            	<img data-original="img/dummy.jpg" alt="dummy">
            	<img class="image-info" src="img/info.png" alt="klik atau arahkan mouse pada gambar">
            	<p>CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION</p>
            </div>
   		</section>
   		
   		<div style="height:2px;background-color:#737373"></div>
   		
   		<section class="module parallax" id="section_demo">
			<div class="text-image-parallax_caption">
           		<p>CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION CAPTION</p>
            </div>
		</section>
   		
    </div> <!-- /#wrap -->
    
    <script src="../_common/jquery-210.js" type="text/javascript"></script>
	<script src="../_common/jquery.viewportchecker.js" type="text/javascript"></script>
	<script src="../_common/lazy.js" type="text/javascript"></script>
	<script>
		function onReady(callback) {
			var intervalID = window.setInterval(checkReady, 1000);
			function checkReady() {
				if (document.getElementsByTagName('body')[0] !== undefined) {
					window.clearInterval(intervalID);
					callback.call(this);
				}
			}
		}
		function show(id, value) {document.getElementById(id).style.display = value ? 'block' : 'none';}
		onReady(function(){show('wrap', true);show('loading', false);});
	</script>
	<script>
		$(window).on('beforeunload',function(){$(window).scrollTop(0);});
		$(document).ready(function(){
			$(".text-paragraph p,.text-quote p").viewportChecker({
				classToAdd: 'show',
				offset: 100,
			});
			$(".image-gallery").hover(function(){
				$(this).find('p').toggleClass("show");
				$(this).find('img').toggleClass("zoom");
				$(this).find('.image-info').toggleClass("hidden");
			});
			new LazyLoad();
		});
	</script>
</body>
</html>