<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>COLDPLAY</title>
	<?php include "session.php";?>
	<?php require_once "bootstrap.php";?>
	<?php require_once "bootstrap1.php";?>
    

<link rel="stylesheet" href="magnific-popup/dist/magnific-popup.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="magnific-popup/dist/jquery.magnific-popup.js"></script>
<style type="text/css">

.nav-bar {
    background-color: transparent;
}
.w-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 90%;
}
#nav{
	background-color: transparent;
}
.logo{
	padding-top: 8px;
}
.w-nav {
    position: relative;
    background: #dddddd;
    z-index: 1000;
}
.w-nav-brand {
    position: relative;
    float: none;
    text-decoration: none;
    color: #333333;
}
.w-nav-overlay {
    position: absolute;
    overflow: hidden;
    display: none;
    top: 100%;
    left: 0;
    right: 0;
    width: 100%;
}
body {

	background-image: url(img/music.png);
    background-size: cover;
    overflow: scroll;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
.content-wrapper {
    margin-top: 78px;
}
.w-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 90%;
}
.page-title {
    margin-top: 0px;
    margin-bottom: 86px;
    font-size: 45px;
    line-height: 51px;
    font-weight: 300;
    text-align: center;
    text-transform: uppercase;
}
.footer {
    padding-top: 43px;
    padding-bottom: 43px;
    background-color: transparent;
    color: #222;
    text-align: center;
}
@media screen and (max-width: 991px){

	.w-container {
    max-width: 95%;
	}	
	.w-nav[data-collapse="medium"] .w-nav-menu {
	    display: none;
	}
	.nav-menu {
    padding-top: 18px !important;
    padding-bottom: 18px !important;
    border-top: 1px solid #000 !important;
    background-color: rgba(0, 0, 0, .85) !important;
	}
	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

@media (max-width: 767px){
	

	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

@media screen and (max-width: 479px){
	.w-container {
	    max-width: none !important;
	}	
	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}
.row{
	text-align: center;
}
.thumb{
	width: 100%;
    margin-bottom: 60px;
    float: left;
}	
.elastic{
	max-width: 80%;
}
.title{
	margin: 18px 0 10px;
    font-family: sans-serif;
    font-size: 18px;
    line-height: 21px;
    text-align: center;
    color: white;
}
.timestamp{
	height: 11px;
    font-size: 11px;
    letter-spacing: 1px;
    line-height: 11px;
    font-style: italic;
    color: #636363;
    text-align: center;
    text-transform: uppercase;
}
.timestamp img {
    display: inline;
    margin-right: 3px;
    margin-bottom: 1px;
}
.nav-link.w--current {
    color: #fff;
    text-decoration: none;
}
</style>
</head>
<body>
	<?php require_once "navbar.php";?>
	<div class="content-wrapper w-container">
    <h1 class="page-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit; background: linear-gradient(to right,#E20D13, #F0E300, #A4C615, #4363AB,#BE4A94,#E30922);-webkit-background-clip: text;-webkit-text-fill-color: transparent; font-family: sans-serif;">Live Performances</font></font></h1>
    </div>
	<div class="w-container">
		<div class="row">
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=mDUloiEIVUk" target="_blank">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="img\sagor\cold1.webp" alt="Coldplay Live">
							</div>	    							    
								<div class="title">Coldplay | Live in California</div>
								<div>May 23, 2020</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=lcZwW0Ii4rY" target="_blank">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
						 		<div class="playIcon"></div>
								<img class="elastic" src="img\sagor\cold2.webp" alt="Global citizen India">
							</div>
							<div class="title">'Starfish' Live in Mumbai</div>
							<div>Nov 19, 2016</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://www.youtube.com/watch?v=-ZvsGmYKhcU" target="_blank">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
						 		<div class="playIcon"></div>
								<img class="elastic" src="img\sagor\cold3.webp" alt="SaoPaolo">
							</div>
							<div class="title">Coldplay | Live in Sao Paolo</div>
							<div>Sep 8, 2017</div>
						</div>
					</a>
			</div>
		</div>
	</div>
					
</div>	

	<?php require_once "footer.php";?>

</body>