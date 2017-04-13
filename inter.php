<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dimitri Herlambang - Intermezzo</title>
    <link rel="icon" href="/_common/img/tab_logo.png">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
    <meta name="description" content="My original articles and reviews">
    <meta name="keywords" content="Intermezzo, Tabayyun, Usus Buntu, Games">
    <meta name="author" content="Dimitri">
    <link href="/_common/css/base.css" rel="stylesheet">
    <style>
		h1 {margin-bottom: 50px;}	
		h2 {margin-bottom: 10px;}
        a {transition: .3s;}
        a:hover {color: #448aff;transition: .3s;}
		html {
			-webkit-animation: fadein .5s;
			-moz-animation: fadein .5s;  
			-ms-animation: fadein .5s; 
			-o-animation: fadein .5s; 
			animation: fadein .5s;
		}
		.link01 p a{
			padding-left: 15px;
		}
	</style>
</head>

<body>
    <div id="wrap">
		<?php 
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= "/_common/header.html";
			include_once($path);
		?>
        <div id="mainArea" class="clearfix">
			<div class="container960">
				<section id="1_" style="padding:50px 0 200px 0;">
					<h1>Recent Articles</h1>
					<div class="clearfix t18">
						<h2>Artikel</h2>
						<p><a href="/articles/memaknai-tabayyun-dalam-kehidupan-modern.php">Memaknai Tabayyun dalam Kehidupan Modern - Part 1</a></p>
						<p><a href="/articles/memaknai-tabayyun-dalam-kehidupan-modern-part-2.php">Memaknai Tabayyun dalam Kehidupan Modern - Part 2</a></p>
						<p><a href="/articles/jangan-takut-sakit.php">Jangan (takut) sakit !</a></p>
						<h2>Diary</h2>
						<p><a href="/articles/pengalaman-bekerja-di-transcosmos.php">Pengalaman Bekerja di Transcosmos - Part 1</a></p>
                        <p><a href="/articles/pengalaman-bekerja-di-transcosmos-part-2.php">Pengalaman Bekerja di Transcosmos - Part 2</a></p>
                        <p><a href="/articles/pengalaman-bekerja-di-transcosmos-part-3.php">Pengalaman Bekerja di Transcosmos - Part 3</a></p>
						<p><a href="/articles/pengalaman-operasi-usus-buntu.php">Pengalaman Operasi Usus Buntu</a></p>
					</div>
					<!-- <div class="clearfix">
						<div class="container960 link01">
							<h2>Games</h2>
							<p class="t18"><a href="articles/dragonnest-pyromancer-guide-90-indonesia.html">Dragon Nest Pyromancer Guide Indonesia 90</a></p>
						</div>
					</div> -->
				</section>
			</div>
		</div> <!-- /#mainArea -->
		<?php 
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= "/_common/footer.html";
			include_once($path);
		?>
	</div><!-- /#wrap -->
</body>
</html>