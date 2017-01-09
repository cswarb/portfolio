<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chris Swarbrick</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div id="container" class="">

		<div id="hero" class="">
				
			<?php include("templates/nav.php"); ?>

			<?php include("templates/projects.php"); ?>

			</div>
		</div>

	</div>

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

<script>
	$(".project-card").hover(function(){
		$(this).find(".project-card-background").addClass("hover");
		$(this).find(".card-row-title").addClass("hover");
		$(this).find(".card-row-description").addClass("hover");
	}, function(){
		$(this).find(".project-card-background").removeClass("hover");
		$(this).find(".card-row-title").removeClass("hover");
		$(this).find(".card-row-description").removeClass("hover");
	});
</script>
<script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=10336(font-family=Avenir+35+Light)&sid=10338(font-family=Avenir+55+Roman)&sid=10340(font-family=Avenir+85+Heavy)&sid=10344(font-family=Avenir+65+Medium)&key=oRGnEXqYyN',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
</script>
<script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=253748(font-family=Campton+Bold+DEMO)&sid=253753(font-family=Campton+Book)&sid=253759(font-family=Campton+Light+DEMO)&sid=253762(font-family=Campton+Medium)&key=liPVzmWfJl',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
</script>
<script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=99266(font-family=Futura+PT+Light)&sid=99268(font-family=Futura+PT+Book)&sid=99270(font-family=Futura+PT+Medium)&sid=172341(font-family=Futura+PT+Bold)&key=0iQDPgWZVZ',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
</script>
<script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=292121(font-family=Viva+Beautiful)&key=0Mv42Ilxyk',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
</script>
<script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=210689(font-family=Sofia+Pro+UltraLight)&sid=210694(font-family=Sofia+Pro+Medium)&sid=210696(font-family=Sofia+Pro+SemiBold)&sid=210699(font-family=Sofia+Pro)&key=XS6I7JzOKQ',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
</script>
<script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=202164(font-family=Recta)&sid=202185(font-family=Recta+Medium)&sid=202186(font-family=Recta+Bold)&sid=202192(font-family=Recta+Light)&key=BLDabrSneq',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
</script>
<script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=260918(font-family=Sailec+Bold)&sid=260923(font-family=Sailec+Light)&sid=260924(font-family=Sailec+Medium)&sid=260929(font-family=Sailec+Regular+Italic)&key=AjjW7vOpUs',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
</script>



<script src="jquery.js"></script>
<script src="verge.js"></script>
<script>
$(document).ready(function(){

	var heroOverlay = $("#intro .overlay img");
	$(".story-wrapper .btn").hover(function(){
		heroOverlay.toggleClass("show");
	});

	//Make jquery extend the verge plugin
	$.extend(verge);

	//Create a list of dom objects and their unique animation name
	var domObjs = [
		{"dom": $('#intro h2'), "animationName": "fadeInDown"},
		{"dom": $('#slide-1 h3'), "animationName": "fadeInDown"}
	];

	$(window).scroll(function(){
		//On scroll, go through each value in the array and add/remove the class based off the return value of $.inViewport()
		$.each(domObjs, function(index, val){
			if($.inViewport(val.dom)){
				$(val.dom).addClass('in-viewport ' + val.animationName);
			} else {
				$(val.dom).removeClass('in-viewport ' + val.animationName);
			};
		});	
	});
});
</script>
<script src="js/showads.js"></script>
<script>
	//Determine if the user has an adblocker by adding a window variable in a script with the word 'ad', and test for it after load.
	if(!window.canSeeAds) {
		$("body").append("<div class='alert-msg-bar adblocker'><p>Please allow ads on this website and refresh to view my social profiles.</p></div>");
	};

	//Display a message based off the query var
	<?php if(isset($_GET["ref"])) :
		if($_GET["ref"] === "developer") { ?>
			$("body").append("<div class='alert-msg-bar queryvars queryvars-developer'><p>Because you were reffered with a special link, you can view my code samples page!</p></div>")
		<?php } elseif($_GET["ref"] === "designer") { ?>

		<?php } else { ?>

		<?php }; ?>
		$(".alert-msg-bar.queryvars").delay(10000).fadeOut(function(){
			$(this).remove();
		});
	<?php endif; ?>
</script>
</body>
</html>