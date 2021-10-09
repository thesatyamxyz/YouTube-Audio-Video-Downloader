<?php 
$ytid = $_GET['url'];
$yurl = str_replace(array('https://www.youtube.com/watch?v=','https://m.youtube.com/watch?v='),array('',''),$ytid);
?>
<!doctype html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>YouTube to MP3 Downloader</title>
<meta name="description" content="YouTube to MP3 Downloader."/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
<script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>
<style type="text/css">@media (min-width: 768px){h1{font-size:29px}}@media (max-width: 768px){h2{font-size:21px}.hero > .hero-header:first-child{font-size:29px;margin-top:0;line-height:1.5!important;padding-top:20px}}.i-auto>div,#___ytsubscribe_0{height:auto!important}.i-auto>div>iframe,#___ytsubscribe_0>iframe{height:auto!important}
.bs-example{
	margin: 20px;
}
.modal-content iframe{
	margin: 0 auto;
	display: block;
}
.modal-backdrop {
	position: fixed;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	z-index: 0;
	background-color: #000;
}

#search-form #btn-submit {
	position: relative;
	margin: 5px;
} 

.loading {
  background:url(/images/loading.gif) center center no-repeat;
}
</style>
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" async="async"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js" async="async"></script>
    <![endif]-->
</head>
<body id="bootstrap-themes" class="swag-line">
<div class="container-overflow-wrap">
<?php include 'files/header.php';?>
<div style="clear: both">
<div>
<div class="container">
<div class="panel panel-default m-b-0">
<div class="panel-body">
<div class="div-form">
<div class="hero hero-homepage">
<h1 class="hero-header">YouTube to MP3 Downloader</h1>
<div class="ads_banner m-t m-b">
</div>
<div>
	<form class="form-inline form-search" action="/mp3#converted" id="search-form" method="GET">
		<input class="form-control input-lg" value="<?php echo stripslashes(!empty($ytid)) ? $ytid : null; ?>" id="txt-url" name="url" type="text" placeholder="Enter YouTube URL here..">
		<button type="submit" id="btn-submit" class="btn btn-lg" style="margin-top:15px;">
			<span class="fa fa-music"></span> <span class="hidden-xs">START</span>
		</button>
		<br>
		<h3>YouTube Supported URL Format</h3>
		<p class="small"><b>YouTube Link:</b> https://www.youtube.com/watch?v=KHPrDP0F5_o<br><b>YouTube Mobile Link:</b> https://m.youtube.com/watch?v=KHPrDP0F5_o</p>
	</form>
	
	<form id="ymp4" action="/#converted" method="GET" style="display:none;">
		<input name="url" value="<?php echo stripslashes(!empty($ytid)) ? $ytid : null; ?>" type="hidden">
	</form>
	
	<div id="converted"></div>
</div>
<?php if(empty($ytid)){}else{?>
	<div class="loading"><iframe src="https://yts1.cyou/audio/<?php echo $yurl;?>" style="width:100%;height:500px;border:none;"></iframe></div>
<?php } ?>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
<footer class="footer clearfix footer-borderless">
	<p>YouTube Downloader &copy; 2021</p>
</footer>
</div>
<div>
</div>
	
<?php include 'files/footer.php';?>
</body>
</html>