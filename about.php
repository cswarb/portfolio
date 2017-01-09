<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chris Swarbrick</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div id="container">

		<div id="hero">
				
			<?php include("templates/nav.php"); ?>

			<div id="about" class="centered-row constrained-row">
				<div class="row flex-row staggered-row content-block">
					<div class="col-4 no-margin-top introduction-info">
						<h3 class="title">Chris Swarbrick <span class="monospace block small-margin-top">Web Designer &amp; Developer.</span></h3>
						<a href="https://uk.linkedin.com/in/christopherswarbrick" role="button" target="_BLANK" class="btn btn-text text-grey inline-block linkedin">LinkedIn</a>
						<a href="https://dribbble.com/chris-swarbrick" role="button" target="_BLANK" class="btn btn-text text-grey inline-block dribbble">Dribbble</a>
					</div>
					<div class="col-8 no-margin-top">
						<div class="col-12 no-margin-top">
							<p class="grey"><span class="color-light">Senior Front-end Developer at <em>Localstars Ltd</em>.</span> Over 4 years experience in Web Design &amp; Development solutions working with Clients and Product Designers, for large and small businesses.</p>
						</div>
						<div class="col-6 no-margin">
							<h3 class="title light">Skills, Tools &amp; Framework Knowledge</h3>
						</div>
						<div class="row flex-row flex-column-small">
							<div class="col-6 small-margin-top">
								<ul class="info-list">
									<li class="info-list-item">— HTML</li>
									<li class="info-list-item">— SASS, CSS &amp; methodologies</li>
									<li class="info-list-item">— JavaScript + TypeScript</li>
									<li class="info-list-item">— jQuery</li>
									<li class="info-list-item">— AngularJS 1.x</li>
									<li class="info-list-item">— Wordpress</li>
									<li class="info-list-item">— Photoshop/Illustrator CS + CC &amp; Lightroom 4+</li>
									<li class="info-list-item">— Cross Browser Compatibility &amp; testing</li>
								</ul>
							</div>
							<div class="col-6 small-margin-top">
								<ul class="info-list">
									<li class="info-list-item">— Grunt + Gulp</li>
									<li class="info-list-item">— Git</li>
									<li class="info-list-item">— Sourcetree</li>
									<li class="info-list-item">— Agile Methodology</li>
									<li class="info-list-item">— Karma &amp; Jasmine testing</li>
									<li class="info-list-item">— UX Design (User testing, prototyping, analytics and analysis)</li>
									<li class="info-list-item">— UI Design (Typography, visual design, colour, layout, component based design)</li>
									<li class="info-list-item">— Style guides</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row flex-row staggered-row content-block">
					<div class="col-4 no-margin-top">
						<h3 class="title light">Certifications &amp; Mentions</h3>
					</div>
					<div class="col-8 no-margin-top">
						<div class="row flex-row">
							<div class="col-6 no-margin-top">
								<ul class="info-list">
									<li class="info-list-item">— Adobe Photoshop with Visual Communication</li>
								</ul>
							</div>
							<div class="col-6">
							</div>
						</div>
					</div>
				</div>
				<div class="row flex-row staggered-row content-block">
					<div class="col-4 no-margin-top">
						<h3 class="title light">Contact</h3>
					</div>
					<div class="col-8 no-margin-top">
						<div class="row flex-column align-start">
							<!-- <form action="">							
								<div class="col-6 no-margin-top">
									<label for="name">Your Name</label>
									<input type="text" placeholder="e.g. Jeff S">

									<label for="Enquiry">Enquiry</label>
									<input type="text" placeholder="e.g. Web Design">
								</div>
								<div class="col-6">
									<label for="">Message</label>
									<div class="textarea">
										<textarea name="" id="" placeholder="e.g. How do I rotate 360 in CSS..."></textarea>
										<span class="resize-node"></span>
									</div>
								</div>
							</form> -->
							<div class="col-12 full-width">
								<div class="email-component">
									<input class="email-text-input inline-block" value="chris@chrismakesweb.co.uk">
									<button type="button" id="copy-btn" class="btn btn-inline-block btn-text text-white inline-block">Copy Email</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

<script>
	var copyButton = $("#copy-btn"),
		emailField = $(".email-text-input"),
		emailCopyContainer = $(".email-component");

	copyButton.click(function(){
		copyButton.attr("disabled", "disabled");
		var emailText = emailField.select();
		try {
			var successful = document.execCommand('copy'),
				msg = successful ? 'Copied successfully' : 'Could not copy';
			emailCopyContainer.parent().append("<p>" + msg + "</p>");
			setTimeout(function(){
				copyButton.attr("disabled", false);
				emailCopyContainer.parent().find("p").remove();
			}, 1250);
		} catch (err) {
			emailCopyContainer.parent().append("<p>" + "Unable to Copy - Your browser does not support this action" + "</p>");
			setTimeout(function(){
				emailCopyContainer.parent().find("p").remove();
			}, 1250);
		};
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
<script>
$(document).ready(function(){

	var heroOverlay = $("#intro .overlay img");
	$(".story-wrapper .btn").hover(function(){
		heroOverlay.toggleClass("show");
	});

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