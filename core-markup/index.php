<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="#" />
<meta name="description" content="#" />

<title>My Portfolio</title>
	<link href="#" rel="icon" type="image/png" />

<!-- foundation script -->
<!-- <script type="text/javascript" src="/js/foundation.magellan.js"></script>
<script type="text/javascript" src="/js/foundation.min.js"></script> -->


<link rel="stylesheet" type="text/css" href="style.css" />
<!--
<link rel="stylesheet" type="text/css" href="/css/foundation.min.css" />-->
<link rel="stylesheet" type="text/css" href="/media.css" />
<link rel="stylesheet" type="text/css" href="hover.css" />
<link rel="stylesheet" type="text/css" href="normalize.css" />

<link rel="stylesheet" href="font-awesome.min.css">
<link rel="stylesheet" href="font-awesome.css">


<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700|Open+Sans:400,300,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>

<script>
    $(document).foundation();
  </script>

<!-- instagram feed -->
<script type="text/javascript" src="js/instafeed.min.js"></script>

<script type="text/javascript">
    var userFeed = new Instafeed({
        get: 'user',
        userId: 34417750,
        resolution: 'low_resolution',
        limit: 1, 
        accessToken: '34417750.467ede5.a31eef24a05947b98d166e4a3a09e37a'

    });
    userFeed.run();
</script>


<script>
var vid = document.getElementsByTagName("video");
[].forEach.call(vid, function (item) {
    item.addEventListener('mouseover', hoverVideo, false);
    item.addEventListener('mouseout', hideVideo, false);
});

function hoverVideo(e)
{   
    this.play();
}
function hideVideo(e)
{
    this.pause();
}

 </script>




</head>
<body>
<div class="stage">
	<div class="menu">
		<a href="#"><i class="fa fa-bars"></i></a>
	</div>
	<div class="wrap">

		<div class="about-me fr">
			<div class="gravatar"></div>
			<p>I am a designer and web developer.<br />
			and this is my portfolio site.<br />
			I'm currently working at <a href="#">@sphrcl</a><br />
			<br />
			<a href="#">@sambakessalmon</a><br />
			<a href="#">/sambakessalmon</a><br />
			</p>
			<ul class="socialize">
				<li><i class="fa fa-github float"></i></li>
				<li><i class="fa fa-linkedin-square float"></i></li>
				<li><i class="fa fa-twitter float"></i></li>
				<li><i class="fa fa-envelope-o float"></i></li>
				<li><i class="fa fa-twitter float"></i></li>				
			</ul>
		</div>
		<div class="intro fl">
			<p class="hello">
				Hi<br />
				Hello<br />
				Hey!<br />
				Hey Hey<br />
				My name is sam baker-salmon but some people <br />call me sammy (<a href="#">baker</a>) (<a href="#">SBS</a>) (<a href="#">4dolla</a>) (<a href="#">Nelson</a>) (<a href="#">Salmon</a>).
			</p>
		</div>

		<!-- next section -->

		<div class="gram-feed fl">
			<div class="hover-effect"><p>Gettin' fourthly 🇺🇸 <a href="#">#murica</a></p></div>			
				<a href="#"><i class="fa fa-instagram"></i></a>	
				<div id="instafeed"></div>		
			<!-- <div class="gram-feed-image"/></div> -->
		</div>
		<div class="my-project fr">
			<div class="hover-effect"><p>Lily Featherstons portfolio site</p></div>
				<div class="project-image"></div>
		</div>

		<!-- next section -->

		<div class="the-tumblr fl">
			<div class="hover-effect"><p>my <a href="#">tumblr</a></p></div>
					<div class="tumblr-image"></div>
		</div>
		<div class="twit-feed fr">
			<p>What is your American resolution this year? (Eg. I will listen to more Aerosmith this year or buy a lawn chair) <a href="#">#murica</a> <a href="#">#usa</a></p>
				<a href="#"><i class="fa fa-twitter"></i></a>
		</div>
		<div class="vid-feed fr">
   			<video id="video" width="530" height="400" autoplay loop muted>
  				<source preload="none" src="http://workbysam.com/video/keys.ogg" type="video/ogg">
			</video>
		</div>	

		<!-- footer -->

		<div class="footer fr">
			<div class="halfy fl">
				<p>2014</p>
			</div>
			<div class="halfy fr">
				<a href="#"><p>Made in Brooklyn</p></a>
			</div>
		</div>

	</div>
</div>

</body>	
</html>